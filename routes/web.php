<?php

use App\Http\Controllers\CajasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrosController;
use App\Http\Controllers\TicketeroController;
use App\Http\Controllers\TvController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('cajas', function (){return "caja1.php";});

Route::get('/login', [HomeController::class, 'index']); 
Route::get('/pages/tv', [TvController::class, 'tv']); 
Route::get('/pages/ticketero', [TicketeroController::class, 'ticketero']); 

Route::get('/pages/cajas/caja1', [CajasController::class, 'caja1']);
Route::get('/pages/cajas/caja2', [CajasController::class, 'caja2']);
Route::get('/pages/cajas/caja3', [CajasController::class, 'caja3']);
Route::get('/pages/cajas/caja4', [CajasController::class, 'caja4']);
Route::get('/pages/cajas/caja5', [CajasController::class, 'caja5']);
Route::get('/pages/cajas/caja6', [CajasController::class, 'caja6']);

Route::get('/pages/registros/registro1', [RegistrosController::class, 'registro1']);
Route::get('/pages/registros/registro2', [RegistrosController::class, 'registro2']);
Route::get('/pages/registros/registro3', [RegistrosController::class, 'registro3']);
Route::get('/pages/registros/registro4', [RegistrosController::class, 'registro4']);
Route::get('/pages/registros/registro5', [RegistrosController::class, 'registro5']);
