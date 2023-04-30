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
/*
Route::get('/hola', function () {
    return view('hola');
});
*/

Route::get('/test2/{nombre}', function ($nombre) {
    return view('test2',['nombre'=>$nombre]);
});

