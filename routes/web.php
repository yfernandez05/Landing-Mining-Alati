<?php

use Illuminate\Support\Facades\Route;

$baseRoute = 'layouts.pem';

/* Route::get('/', function () {
    return view('welcome');
}); */

//home
Route::resource('/', 'ClienteController')->only(['index', 'store'])->name('index','welcome');

### CURSOS PEM ###
//MINERIA
Route::view('/planeamiento-de-minado-superficial-y-subterranea', $baseRoute.'.mineria')->name('planeamientominado');

Route::view('/costos-y-presupuestos', 'costosypresupuestos')->name('costosypresupuestos');
Route::view('/planeamiento-minado', 'planeamientodeminado')->name('planeamientodeminado');
Route::view('/geoestadistica-aplicada', 'geoestadisticaaplicada')->name('geoestadisticaaplicada');
Route::view('/plantas-procesamiento', 'plantasdeprocesamiento')->name('plantasdeprocesamiento');
Route::view('/hidrogeologia-minera', 'hidrogeologiaminera')->name('hidrogeologiaminera');
Route::view('/perforacion-voladura', 'perforacionyvoladura')->name('perforacionyvoladura');
Route::view('/ingenieria-geotecnica', 'ingenieriageotecnica')->name('ingenieriageotecnica');
Route::view('/geomecanica-mineria', 'geomecanicaenmineria')->name('geomecanicaenmineria');
//thanks register
Route::view('/thanks', 'thanks')->name('thanks');