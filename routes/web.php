<?php

use App\Http\Controllers\petugasController;
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
*/


Route::get('/', function () {
    return view('/');
});
Route::get('login',[petugasController::class,'login']);
Route::post('login',[petugasController::class,'ceklogin']);

Route::get('dass',[petugasController::class,'dass']);
Route::post('dass',[petugasController::class,'data']);


Route::get('kelas',[petugasController::class,'kelas']);
Route::get('tambahkelas',[petugasController::class,'tambah']);
Route::post('tambahkelas',[petugasController::class,'tambahkelas']);
Route::get('editkelas/{id}',[petugasController::class,'edit']);
Route::post('editkelas/{id}',[petugasController::class,'editkelas']);
Route::get('hapuskelas/{id}',[petugasController::class,'hapuskelas']);
