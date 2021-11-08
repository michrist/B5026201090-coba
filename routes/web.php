<?php

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
    return view('welcome');
});
Route::get('praktikum1', function () {
    return view('prak1');
});
Route::get('tugaspweb4', function () {
    return view('tugas4');
});
Route::get('praktikum2', 'ViewController@showPraktikum2');
Route::get('ETS', 'ViewController@showETS');
Route::get('tugasphp', 'ViewController@showTugasPHP');
Route::post('factorialphp', 'ViewController@factorial');
