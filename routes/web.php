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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::resource('/', 'ClienteController')->only(['index', 'store'])->name('index','welcome');
Route::view('/costos-y-presupuestos', 'costosypresupuestos')->name('costosypresupuestos');
Route::view('/thanks', 'thanks')->name('thanks');