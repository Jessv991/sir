<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\EMPLTABLE;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function login(Request $request)
    {
        // Validar datos del formulario
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Buscar al usuario manualmente con condiciones adicionales
        $user = EMPLTABLE::where('EMAIL', $request->email)
            ->where('SIR_ACTIVE', 1)
            ->whereIn('PBAUSERPROFILE', ['Comerfarma', 'SuperComer'])
            ->first();

        // Intentar iniciar sesión
        if (Auth::attempt([
            'EMAIL' => $request->email,
            'SIR_PASSWORD' => $request->password,
            'SIR_ACTIVE' => function ($query) {
                $query->where('SIR_ACTIVE', '=', '1');
            },
            'PBAUSERPROFILE' => function ($query) {
                $query->whereIn('PBAUSERPROFILE', array('Comerfarma', 'SuperComer'));
            }
        ], $request->filled('remember'))) {
            // Regenerar sesión para evitar fijación de sesión
            $request->session()->regenerate();

            // Agregar mensaje flash
            session()->flash('success', '¡Has accedido correctamente!');

            // Redirigir al destino deseado
            return $this->redirectTo;
        }

        // Si las credenciales fallan
        throw ValidationException::withMessages([
            'email' => ['Estas credenciales no coinciden con nuestros registros.'],
        ]);
    }
}
