<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$controller_path = 'App\Http\Controllers';

// Main Page Route

// pages


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
$controller_path = 'App\Http\Controllers';

    Route::get('/', $controller_path . '\pages\HomePage@index')->name('pages-home');
    Route::get('/page-2', $controller_path . '\pages\Page2@index')->name('pages-page-2');

    Route::resource('monedas', App\Http\Controllers\MonedaController::class);
    Route::get('/monedas/xdestroy/{moneda_id}', $controller_path . '\monedacontroller@xdestroy')->name('moneda.xdestroy');

    Route::resource('ccostos', App\Http\Controllers\CcostoController::class);
    Route::get('/ccostos/xdestroy/{ccosto_id}', $controller_path . '\ccostocontroller@xdestroy')->name('ccostos.xdestroy');

    Route::resource('clientes', App\Http\Controllers\ClienteController::class);
    Route::get('/clientes/xdestroy/{cliente_id}', $controller_path . '\clientecontroller@xdestroy')->name('clientes.xdestroy');

    Route::resource('bodegas', App\Http\Controllers\BodegaController::class);
    Route::get('/bodegas/xdestroy/{bodega_id}', $controller_path . '\bodegacontroller@xdestroy')->name('bodegas.xdestroy');

    Route::resource('contratos', App\Http\Controllers\ContratoController::class);
    Route::get('/contratos/xdestroy/{contrato_id}', $controller_path . '\contratocontroller@xdestroy')->name('contrato.xdestroy');

    Route::resource('gcomuns', App\Http\Controllers\GcomunController::class);
    Route::get('/gcomuns/xdestroy/{gcomun_id}', $controller_path . '\gcomuncontroller@xdestroy')->name('gcomun.xdestroy');

    Route::resource('pseguros', App\Http\Controllers\PseguroController::class);
    Route::get('/pseguros/xdestroy/{pseguro_id}', $controller_path . '\psegurocontroller@xdestroy')->name('pseguro.xdestroy');

    Route::resource('ciudades', App\Http\Controllers\CiudadeController::class);
}


);


