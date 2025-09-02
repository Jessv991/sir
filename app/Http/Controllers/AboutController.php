<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EMPLTABLE;
use App\Models\CUSTTABLE;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class AboutController extends Controller
{
    public function index(Request $request)
    {
        $nombre = $request->query('nombre');
        $empresa = $request->query('empresa');
        $axapta = $request->query('axapta');
        $weblogin = $request->query('weblogin');
        //dd($nombre, $empresa, $axapta, $weblogin);

        return view('about');
    }
}
