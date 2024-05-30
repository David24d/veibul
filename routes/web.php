<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/',[App\Http\Controllers\ServicioController::class, 'index']);



Auth::routes();

Route::resource('/tblentradas', App\Http\Controllers\TblentradaController::class);
Route::resource('/tblequipo', App\Http\Controllers\TblequipoController::class);
Route::resource('/tbl-portafolios', App\Http\Controllers\TblPortafolioController::class);
Route::resource('/tbl-servicios', App\Http\Controllers\TblServicioController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
