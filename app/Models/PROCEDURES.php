<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PROCEDURES extends Model
{
    public static function getInfoClient($cliente)
    {
        $totalConsumido = 0;
        $totalFacturado = 0;
        $totalCapacidad = 0;

        // Ejecutar el primer stored procedure: sp_Budger_SIR_EstaBono
        $resultadoBono = DB::connection('sqlsrv_AXDB30')
            ->select("EXEC sp_Budger_SIR_EstaBono ?", [$cliente]);

        foreach ($resultadoBono as $row) {
            $totalConsumido += $row->RealizadoActual ?? 0;
            $totalCapacidad += $row->Potencial ?? 0;
        }

        // Ejecutar el segundo stored procedure: sp_Budger_SIR
        $resultadoSIR = DB::connection('sqlsrv_AXDB30')
            ->select("EXEC sp_Budger_SIR ?", [$cliente]);

        foreach ($resultadoSIR as $row) {
            $totalFacturado += $row->RealizadoActual ?? 0;
        }

        // Devolver los totales
        return [
            'totalCapacidad' => $totalCapacidad,
            'totalFacturado' => $totalFacturado,
            'totalConsumido' => $totalConsumido,
        ];
    }

    public static function getPotencialMesCierre($empresa, $year, $weblogin, $mes)
    {
        $results = DB::connection('sqlsrv_AXDB30')->select("
        SELECT 
            YEAR(fromdate) AS Amo,
            UPPER(Dataareaid) AS Empresa,
            LOWER(Weblogin) AS Weblogin,
            SUM(EurosPotencial2) AS Potencial2
        FROM func_budger(?) AS b
        WHERE 
            Dataareaid = ?
            AND Budget_SalesPurch = 0
            AND EurosPotencial2 <> 0
            AND BudgetLevel = 'POT-IN'
            AND Weblogin = ?
            AND YEAR(fromdate) = ?
            AND MONTH(fromdate) <= ?
        GROUP BY Weblogin, Dataareaid, YEAR(fromdate)
    ", [
            $year,        // parámetro para func_budger()
            $empresa,
            $weblogin,
            $year,
            $mes
        ]);

        // Retornar el resultado si existe
        return !empty($results) ? $results[0]->Potencial2 : 0;
    }

    public static function getRealizadoAFecha($weblogin)
    {
        $result = DB::connection('sqlsrv_AXDB30')->select(
            "EXEC dbo.sp_Budger_Total_SIR ?",
            [$weblogin]
        );

        if (empty($result)) {
            return 0;
        }

        $row = $result[0];

        if (isset($row->computed)) {
            return $row->computed;
        }

        $rowArray = (array) $row;  // primero lo guardamos en variable
        $firstValue = reset($rowArray);

        return $firstValue !== null ? $firstValue : 0;
    }
}
