<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SIR_WEBLOGIN extends Model
{
    protected $table = 'SIR_WEBLOGIN';

    public static function getInfoEmplWeblogin($empresa, $weblogin)
    {
        $data = DB::connection('sqlsrv_AXDB30')
            ->table('sir_weblogin as w')
            ->leftJoin('empltable as e1', function ($join) {
                $join->on('e1.EMPLID', '=', 'w.EMPLIDPRODUC')
                    ->where('e1.DATAAREAID', '=', 'vir');
            })
            ->leftJoin('empltable as e2', function ($join) {
                $join->on('e2.EMPLID', '=', 'w.EmplCM')
                    ->where('e2.DATAAREAID', '=', 'vir');
            })
            ->leftJoin('empltable as e3', function ($join) {
                $join->on('e3.EMPLID', '=', 'w.EmplCM2')
                    ->where('e3.DATAAREAID', '=', 'vir');
            })
            ->leftJoin('empltable as e4', function ($join) {
                $join->on('e4.EMPLID', '=', 'w.EmplId')
                    ->where('e4.DATAAREAID', '=', 'vir');
            })
            ->where('w.WEBLOGIN', $weblogin)
            ->where('w.DATAAREAID', $empresa)
            ->select([
                'w.EmplCM as EmplGestor',
                'e2.NAME as EmplGestorName',
                'w.EmplCM2 as EmplGestor2',
                'e3.NAME as EmplGestor2Name',
                'w.EmplId as EmplComercial',
                'e4.NAME as EmplComercialName',
                'w.EMPL as Empleados',
                'w.shops as Tiendas',
                'e1.NAME as EmplProdName'
            ])
            ->first(); // TOP 1

        return (array) $data; // Devuelve un array como en tu versión original
    }
}
