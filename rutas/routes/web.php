<?php

use App\Http\Controllers\usercontroller;
use App\Http\Controllers;
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
    return view('rutas');
});

Route::get('/calendario', function () {
    return view('calendario');
})->name('calendario');
Route::get('/calendarios', function () {
    return view('calendarios');
})->name('calendarios');

Route::get('/carreras', function () {
    return view('carreras');
})->name('carreras');
route::resource ('user',usercontroller::class);

route::get('saludar/{usuario}',[usercontroller::class,'saludar'])->name('saludar');