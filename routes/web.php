<?php

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

$servicios=[
    ['titulo'=>'Servicio 01'],
    ['titulo'=>'Servicio 02'],
    ['titulo'=>'Servicio 03'],
    ['titulo'=>'Servicio 04'],
    ['titulo'=>'Servicio 05']
];

Route::view('/','home')->name('home');
Route::view('nosotros','nosotros')->name('nosotros');
Route::view('servicios','servicios',compact('servicios'))->name('servicios');
Route::view('contacto','contacto')->name('contacto');

