<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EMPLTABLE;
use App\Models\CUSTTABLE;
use App\Models\PROCEDURES;
use App\Models\NAT_BUDGETCLOSED;
use App\Models\SIR_WEBLOGIN;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use Carbon\Carbon;

class AboutController extends Controller
{
    protected $data = [];

    public function index(Request $request)
    {
        $mesesName = [
            1 => 'Enero',
            2 => 'Febrero',
            3 => 'Marzo',
            4 => 'Abril',
            5 => 'Mayo',
            6 => 'Junio',
            7 => 'Julio',
            8 => 'Agosto',
            9 => 'Septiembre',
            10 => 'Octubre',
            11 => 'Noviembre',
            12 => 'Diciembre'
        ];
        $nombre = $request->query('nombre');
        $empresa = $request->query('empresa');
        $axapta = $request->query('axapta');
        $weblogin = $request->query('weblogin');
        $year = Carbon::now()->year;
        //dd($nombre, $empresa, $axapta, $weblogin);

        $this->data['clienteInfo'] = CUSTTABLE::getInfoCliente($empresa, $axapta);
        $this->data['menuCliente'] = CUSTTABLE::infoAdicionalCliente($empresa, $axapta);
        $this->data['devolucion'] = CUSTTABLE::getCheckDevoluciones($weblogin, $empresa, $year);
        $this->data['potencialAnual'] = NAT_BUDGETCLOSED::getPotencialAnual($weblogin);
        $mescalculo = NAT_BUDGETCLOSED::getMesCalculo($empresa);
        $this->data['mes_cierre'] = $mesesName[$mescalculo];
        $this->data['capacidades'] = PROCEDURES::getInfoClient($weblogin);
        $this->data['gestores'] = SIR_WEBLOGIN::getInfoEmplWeblogin($empresa, $weblogin);
       /*  $potencial_mes_cierre = PROCEDURES::getPotencialMesCierre($empresa, $year, $weblogin, $mescalculo);
        $realizado = PROCEDURES::getRealizadoAFecha($weblogin);
        $this->data['fidelidad'] = ( $realizado / $potencial_mes_cierre ) * 100; */

        //dd($this->data);

        return view('about', $this->data);
    }
}
