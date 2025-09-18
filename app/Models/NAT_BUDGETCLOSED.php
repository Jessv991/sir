<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class NAT_BUDGETCLOSED extends Model
{
    protected $table = 'NAT_BUDGETCLOSED';

    // Clave primaria
    // las primarys keys son ACCOUNTNUM y DATAAREAID

    // Si no usas timestamps (created_at / updated_at)
    public $timestamps = false;

    // Si necesitas una conexión específica
    protected $connection = 'sqlsrv_AXDB30';

    public static function getPotencialAnual($weblogin)
    {
        $subquery = DB::connection('sqlsrv_AXDB30')
            ->table('Nat_BudgetClosed as C')
            ->selectRaw('TOP 1 YEAR(MAX(FECHA))')
            ->whereRaw("LTRIM(C.VendAccount) = 'CIERRE'")
            ->whereColumn('C.DATAAREAID', 'P.DATAAREAID'); // Usado en subquery

        $potencial = DB::connection('sqlsrv_AXDB30')
            ->table('NAT_BUDGET as P')
            ->selectRaw('SUM(LINEAMOUNT) AS Potencial_Anual')
            ->where('WEBLOGIN', $weblogin)
            ->where('BUDGETDATA', 4)
            ->whereRaw("YEAR(P.INVOICEDATE) = ({$subquery->toSql()})", $subquery->getBindings())
            ->groupBy('P.DATAAREAID', 'WEBLOGIN')
            ->havingRaw('SUM(LINEAMOUNT) > 0')
            ->value('Potencial_Anual'); // Devuelve directamente el valor

        return (float) $potencial;
    }

    public static function getMesCalculo($empresa)
    {
        $mescalculo = DB::connection('sqlsrv_AXDB30')
            ->table('nat_budgetclosed as p')
            ->where('p.DATAAREAID', $empresa)
            ->whereRaw("LTRIM(p.vendaccount) = 'CIERRE'")
            ->min(DB::raw('MONTH(p.fecha)'));

        // Si no hay resultado, se usa el mes anterior al actual
        if (!$mescalculo) {
            $mescalculo = now()->subMonth()->month;
        }

        return (int) $mescalculo;
    }

    
}
