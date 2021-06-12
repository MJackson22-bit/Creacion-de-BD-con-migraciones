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

Route::get('/', function () {
    return view('index');
});
//Aula
Route::get('/Aula/list', 'App\Http\Controllers\AulaController@index');


//Clase
Route::get('/Clase/list', 'App\Http\Controllers\ClaseController@index');

//Profesor
Route::get('/Profesor/list', 'App\Http\Controllers\ProfesorController@index');