<?php

namespace App\Http\Controllers;

use App\Models\EMPLTABLE;
use App\Models\CUSTTABLE;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = EMPLTABLE::count();

        $widget = [
            'users' => $users,
        ];

        return view('home', compact('widget'));
    }

    public function datatableBuscadorCliente(Request $request){
        if ($request->ajax()) {
            $data = CUSTTABLE::getClientes($empresa = Auth::user()->WORKINGCOMPANY, $perfil = Auth::user()->PBAUSERPROFILE, $user = Auth::user()->EMPLID);
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    return '<a href="#" class="btn btn-sm btn-primary">Editar</a>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
