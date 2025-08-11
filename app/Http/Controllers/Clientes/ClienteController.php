<?php

namespace App\Http\Controllers\Clientes;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public static function getCodigoEmpleado($email)
    {
        $sql = "SELECT TOP 1 EMPLID FROM EMPLTABLE WHERE EMAIL = '" . $email . "' AND (DATAAREAID IN ('far','vir') OR WORKINGCOMPANY = 'NSL');";
        $emplid = DB::select($sql);
        return $emplid[0]->EMPLID;
    }
}
