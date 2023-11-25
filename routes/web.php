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



Route::get('logout',[petugasController::class,'logout']);

Route::get('login',[petugasController::class,'login']);
Route::post('login',[petugasController::class,'ceklogin']);

Route::get('dass',[petugasController::class,'dass']);
Route::post('dass',[petugasController::class,'data']);

Route::get('entri',[petugasController::class,'entri']);
Route::post('entri',[petugasController::class,'dataentri']);


Route::get('kelas',[petugasController::class,'kelas']);
Route::get('tambahkelas',[petugasController::class,'tambahk']);
Route::post('tambahkelas',[petugasController::class,'tambahkelas']);
Route::get('editkelas/{id}',[petugasController::class,'editk']);
Route::post('editkelas/{id}',[petugasController::class,'editkelas']);
Route::get('hapuskelas/{id}',[petugasController::class,'hapuskelas']);


Route::get('siswa',[petugasController::class,'siswa']);
Route::get('tambahsiswa',[petugasController::class,'tambahs']);
Route::post('tambahsiswa',[petugasController::class,'tambahsiswa']);
Route::get('editsiswa/{id}',[petugasController::class,'edits']);
Route::post('editsiswa/{id}',[petugasController::class,'editsiswa']);
Route::get('hapussiswa/{id}',[petugasController::class,'hapussiswa']);


Route::get('spp',[petugasController::class,'spp']);
Route::get('tambahspp',[petugasController::class,'tambahp']);
Route::post('tambahspp',[petugasController::class,'tambahspp']);
Route::get('editspp/{id}',[petugasController::class,'editp']);
Route::post('editspp/{id}',[petugasController::class,'editspp']);
Route::get('hapusspp/{id}',[petugasController::class,'hapusp']);


Route::get('petugas',[petugasController::class,'petugas']);
Route::get('tambahpetugas',[petugasController::class,'tambahpg']);
Route::post('tambahpetugas',[petugasController::class,'tambahpetugas']);
Route::get('editpetugas/{id}',[petugasController::class,'editpg']);
Route::post('editpetugas/{id}',[petugasController::class,'editpetugas']);
Route::get('hapuspetugas/{id}',[petugasController::class,'hapuspg']);