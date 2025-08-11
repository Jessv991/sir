<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class NAT_SIC_LOGS extends Model
{
    protected $connection = 'sqlsrv_AXDB30';
    protected $table = 'NAT_SIC_LOGS';
    protected $primaryKey = 'RECID';
    public $incrementing = false;
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = [
        'USER_',
        'LAT',
        'LONG',
        'DATEACCES',
        'TIMEACCES',
        'IDMENU',
        'IP',
        'DATETIME',
        'DATAAREAID',
        'RECID',
    ];

    protected $hidden = [];


    protected $casts = [
        'USER_' => 'string',
        'LAT' => 'string',
        'LONG' => 'string',
        'DATEACCES' => 'string',
        'TIMEACCES' => 'string',
        'IDMENU' => 'string',
        'IP' => 'string',
        'DATETIME' => 'datetime',
        'DATAAREAID' => 'string',
        'RECID' => 'integer',
    ];


    public static function getCodigoEmpleado($email)
    {
        $emplid = DB::table('EMPLTABLE')
            ->select('EMPLID')
            ->where('EMAIL', $email)
            ->where(function ($query) {
                $query->whereIn('DATAAREAID', ['far', 'vir'])
                    ->orWhere('WORKINGCOMPANY', 'NSL');
            })
            ->limit(1)
            ->first();

        return $emplid?->EMPLID ?? null; // Devuelve null si no encuentra nada
    }
}
