<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class NAT_SIR_MENU extends Model
{
    protected $connection = 'sqlsrv_AXDB30';
    protected $table = 'NAT_SIR_MENU';
    protected $primaryKey = 'IDSIRMENU';
    public $incrementing = false;
    protected $keyType = 'int';
    public $timestamps = false;

    public function getMenuUno($empresa)
    {
        return DB::connection('sqlsrv_AXDB30')
            ->table('nat_sir_menu as A')
            ->join('NATSIRCOLORS as B', 'A.COLOR', '=', 'B.IDCOLOR')
            ->join('NATSIRLOGOS as C', 'C.IDLOGO', '=', 'A.ICON')
            ->where('A.activo', 1)
            ->where('A.dataareaid', $empresa)
            ->orderBy('A.ORDERINCAT', 'ASC')
            ->get();
    }


    public function getAccesoMenuUno($empresa, $empleado, $idmenu)
    {
        return $this->newQuery()
            ->from('NAT_SIR_MENU as A')
            ->join('NATSIRCOLORS as B', 'A.COLOR', '=', 'B.IDCOLOR')
            ->join('NATSIRLOGOS as C', 'C.IDLOGO', '=', 'A.ICON')
            ->join('vw_sir_permisos as P', function ($join) {
                $join->on('A.DATAAREAID', '=', 'P.DATAAREAID')
                    ->on('A.IDSIRMENU', '=', 'P.IDSIRMENU');
            })
            ->where('A.activo', 1)
            ->where('P.EMPLID', $empleado)
            ->where('A.IDAJAX', $idmenu)
            ->where('P.DATAAREAID', $empresa)
            ->exists();
    }


    public function getMenuDos($empresa, $categoria)
    {
        return $this->newQuery()
            ->from('NAT_SIR_MENU as A')
            ->select([
                'A.*',
                'B.VALUE',
                'C.FILE_',
            ])
            ->join('NATSIRCOLORS as B', 'A.COLOR', '=', 'B.IDCOLOR')
            ->join('NATSIRLOGOS as C', 'C.IDLOGO', '=', 'A.ICON')
            ->where('A.activo', 1)
            ->where('A.dataareaid', $empresa)
            ->where('A.PATH', 'like', '1/' . $categoria . '/%')
            ->orderBy('A.ORDERINCAT', 'ASC')
            ->get();
    }

    public function getAccesoMenuDos($empresa, $empleado, $categoria, $idmenu)
    {
        return $this->newQuery()
            ->from('NAT_SIR_MENU as A')
            ->join('NATSIRCOLORS as B', 'A.COLOR', '=', 'B.IDCOLOR')
            ->join('NATSIRLOGOS as C', 'C.IDLOGO', '=', 'A.ICON')
            ->join('vw_sir_permisos as P', function ($join) {
                $join->on('A.DATAAREAID', '=', 'P.DATAAREAID')
                    ->on('A.IDSIRMENU', '=', 'P.IDSIRMENU');
            })
            ->where('A.activo', 1)
            ->where('P.EMPLID', $empleado)
            ->where('P.IDSIRMENU', $idmenu)
            ->where('P.DATAAREAID', $empresa)
            ->exists();
    }

    public function getMenuTres($empresa, $categoria, $categoria_anterior)
    {
        return $this->newQuery()
            ->from('NAT_SIR_MENU as A')
            ->select([
                'A.*',
                'B.VALUE',
                'C.FILE_',
            ])
            ->join('NATSIRCOLORS as B', 'A.COLOR', '=', 'B.IDCOLOR')
            ->join('NATSIRLOGOS as C', 'C.IDLOGO', '=', 'A.ICON')
            ->where('A.activo', 1)
            ->where('A.dataareaid', $empresa)
            ->where('A.PATH', 'like', '1/' . $categoria_anterior . '/' . $categoria . '/%')
            ->orderBy('A.ORDERINCAT', 'ASC')
            ->get();
    }

    public function getAccesoMenuTres($empresa, $empleado, $idmenu, $categoria, $categoria_anterior)
    {
        return $this->newQuery()
            ->from('NAT_SIR_MENU as A')
            ->join('NATSIRCOLORS as B', 'A.COLOR', '=', 'B.IDCOLOR')
            ->join('NATSIRLOGOS as C', 'C.IDLOGO', '=', 'A.ICON')
            ->join('vw_sir_permisos as P', function ($join) {
                $join->on('A.DATAAREAID', '=', 'P.DATAAREAID')
                    ->on('A.IDSIRMENU', '=', 'P.IDSIRMENU');
            })
            ->where('A.activo', 1)
            ->where('P.EMPLID', $empleado)
            ->where('A.PATH', 'like', '1/' . $categoria_anterior . '/' . $categoria . '/%')
            ->where('P.DATAAREAID', $empresa)
            ->exists();
    }
}
