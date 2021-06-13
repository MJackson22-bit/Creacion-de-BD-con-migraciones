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
Route::get('/Aula/create', 'App\Http\Controllers\AulaController@create');
Route::post('/Aula/notificationAl', 'App\Http\Controllers\AulaController@store');
Route::get('/Aula/edit/{id}', 'App\Http\Controllers\AulaController@show');
Route::post('/Aula/notificationAlUpdate/{id}', 'App\Http\Controllers\AulaController@update');
Route::get('/Aula/delete/{id}', 'App\Http\Controllers\AulaController@destroy');

//Clase
Route::get('/Clase/list', 'App\Http\Controllers\ClaseController@index');
Route::get('/Clase/create', 'App\Http\Controllers\ClaseController@create');
Route::post('/Clase/notificationCla', 'App\Http\Controllers\ClaseController@store');
Route::get('/Clase/edit/{id}', 'App\Http\Controllers\ClaseController@show');
Route::post('/Clase/notificationClaUpdate/{id}', 'App\Http\Controllers\ClaseController@update');
Route::get('/Clase/delete/{id}', 'App\Http\Controllers\ClaseController@destroy');

//Profesor
Route::get('/Profesor/list', 'App\Http\Controllers\ProfesorController@index');
Route::get('/Profesor/create', 'App\Http\Controllers\ProfesorController@create');
Route::post('/Profesor/notificationPro', 'App\Http\Controllers\ProfesorController@store');
Route::get('/Profesor/edit/{id}', 'App\Http\Controllers\ProfesorController@show');
Route::post('/Profesor/notificationProUpdate/{id}', 'App\Http\Controllers\ProfesorController@update');
Route::get('/Profesor/delete/{id}', 'App\Http\Controllers\ProfesorController@destroy');