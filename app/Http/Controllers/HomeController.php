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
    protected $data = [];

    public function detectarTipoDispositivo()
    {
        $useragent = $_SERVER['HTTP_USER_AGENT'];
		if (preg_match('/(ipad|tablet|(android(?!.*mobile)))/i', $useragent)) {
			$dispositivo = 'tablet';
		} elseif (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i', $useragent)) {
			$dispositivo = 'mobile';
		} else {
			$dispositivo = 'desktop';
		}

        $this->data['tipo_dispositivo'] = $dispositivo;

        $orientacion = isset($_COOKIE['orientacion']) ? $_COOKIE['orientacion'] : 'horizontal';

        if($dispositivo === 'tablet'){
            if($orientacion === 'vertical'){
                $this->data['tipo_dispositivo'] = 'tablet';
            }else{
                $this->data['tipo_dispositivo'] = 'desktop';
            }
        }


        $users = EMPLTABLE::count();

        $widget = [
            'users' => $users,
        ];

        //dd($this->data['tipo_dispositivo']);

        return view('home', array_merge(
            compact('widget'),
            $this->data
        ));
    }

    public function index()
    {
        //dd(session()->all());

        $this->detectarTipoDispositivo();
        $users = EMPLTABLE::count();

        $widget = [
            'users' => $users,
        ];

        //dd($this->data['tipo_dispositivo']);

        return view('home', array_merge(
            compact('widget'),
            $this->data
        ));
    }

    public function datatableBuscadorCliente(Request $request)
    {     
        if ($request->ajax()) {
            // Obtener los valores enviados desde AJAX
            $empresa = $request->input('empresa');
            $perfil = $request->input('perfil');
            $user = $request->input('usuario');
            
            $data = CUSTTABLE::getClientes($empresa, $perfil, $user);
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    return '<a href="#" class="btn btn-sm btn-primary">Editar</a>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $this->detectarTipoDispositivo();
    }
}
