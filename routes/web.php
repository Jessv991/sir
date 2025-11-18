<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['ca', 'es', 'en'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('setLocale');


Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/datatableBuscadorCliente', [HomeController::class, 'datatableBuscadorCliente'])->name('datatableBuscadorCliente');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');
Route::get('/about', 'AboutController@index')->name('about');
// Llamada AJAX para cargar shops dinámicamente
Route::get('/about/shops', 'AboutController@getShops')->name('about.getShops');


