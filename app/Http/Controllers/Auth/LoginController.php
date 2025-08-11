<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Auth\LogController;
use App\Models\EMPLTABLE;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'EMAIL';
    }
    //675
    protected function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $credentials = $request->only('email', 'password');
        $user = \App\Models\EMPLTABLE::where('EMAIL', $credentials['email'])
            ->where('SIR_PASSWORD', $credentials['password'])
            ->where('SIR_ACTIVE', 1)
            ->whereIn('PBAUSERPROFILE', ['Comerfarma', 'SuperComer'])
            ->first();

        // Si existe, iniciar sesión
        if ($user) {
            Auth::login($user); // <-- inicia sesión manual
            LogController::setRegistroEntrada($credentials['email'], '0.1', '0.2', 1);
            $request->session()->regenerate();
            session()->flash('success', '¡Has accedido correctamente!');
            return redirect()->intended($this->redirectTo);
        }

        // Si no existe, error
        throw ValidationException::withMessages([
            'email' => ['Estas credenciales no coinciden con nuestros registros.'],
        ]);
    }
}
