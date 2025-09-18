<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SirWeblogin extends Model
{
    protected $table = 'CUSTTABLE';

    // Clave primaria
    // las primarys keys son ACCOUNTNUM y DATAAREAID

    // Si no usas timestamps (created_at / updated_at)
    public $timestamps = false;

    // Si necesitas una conexión específica
    protected $connection = 'sqlsrv_AXDB30';

    public static function getTop($empresa, $weblogin)
    {
        $row = DB::connection('sqlsrv_AXDB30')
            ->table('sir_weblogin as W')
            ->join('NATCUSTCLASIFICATION as C', function ($join) {
                $join->on('W.dataareaid', '=', 'C.DATAAREAID')
                    ->on('W.NATCUSTCLASSIFICATIONID', '=', 'C.NATCUSTCLASSIFICATIONID');
            })
            ->select('W.NATCUSTCLASSIFICATIONID', 'C.DESCRIPTION', 'W.weblogin')
            ->where('W.DATAAREAID', $empresa)
            ->where('W.weblogin', $weblogin)
            ->first();

        return $row ? $row->NATCUSTCLASSIFICATIONID : null;
    }
}
