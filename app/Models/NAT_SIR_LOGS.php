<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Hamcrest\Core\HasToString;

class NAT_SIR_LOGS extends Model
{
    protected $connection = 'sqlsrv_log'; //AQUÍ USAMOS ESTE ACCESO, PARA QUE REGISTRE EL INICIO DE SESIÓN, PORQUE TIENE EL PERMISO
    protected $table = 'NAT_SIR_LOGS';
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
        'RECID',
        'DATETIME',
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
        'RECID' => 'integer',
        'DATETIME' => 'datetime',
    ];

    public static function accessionNumber($userid)
    {
        return DB::connection('sqlsrv_log')
            ->table('NAT_SIR_LOGS')
            ->where('USER_', $userid)
            ->count();
    }

    public static function insert($userid, $latitude, $longitude, $idmenu, $ipAddress)
    {
        // Obtener el siguiente RECID
        $RECID = DB::connection('sqlsrv_log')
            ->table('NAT_SIR_LOGS')
            ->max('RECID') + 1;

        // Insertar registro
        return DB::connection('sqlsrv_log')
            ->table('NAT_SIR_LOGS')
            ->insert([
                'USER_'      => $userid,
                'LAT'        => $latitude,
                'LONG'       => $longitude,
                'DATEACCES'  => date("Y-m-d"),
                'TIMEACCES'  => date("H:i:s"),
                'IDMENU'     => $idmenu,
                'IP'         => $ipAddress,
                'RECID'      => $RECID,
                'DATETIME'   => DB::raw('GETDATE()'), // fecha del servidor SQL
            ]);
    }

    public static function updateAcces($userid, $latitude, $longitude, $idmenu, $ipAddress)
    {
        $recid = DB::connection('sqlsrv_log')
            ->table('NAT_SIR_LOGS')
            ->where('USER_', $userid)
            ->orderBy('DATETIME', 'asc')
            ->orderBy('RECID', 'asc')
            ->value('RECID');

        return DB::connection('sqlsrv_log')
            ->table('NAT_SIR_LOGS')
            ->where('RECID', $recid)
            ->where('USER_', $userid)
            ->update([
                'DATETIME'   => DB::raw('GETDATE()'),
                'LAT'        => $latitude,
                'LONG'       => $longitude,
                'DATEACCES'  => date("Y-m-d"),
                'TIMEACCES'  => date("H:i:s"),
                'IDMENU'     => $idmenu,
                'IP'         => $ipAddress
            ]);
    }
}
