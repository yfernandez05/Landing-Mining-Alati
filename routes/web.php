<?php

use Illuminate\Support\Facades\Route;

$baseRoute = 'layouts.course';

/* Route::get('/', function () {
    return view('welcome');
}); */

//home
Route::resource('/', 'ClienteController')->only(['index', 'store'])->name('index','welcome');

### CURSOS ###
//GESTION
Route::view('/gestion-de-operaciones-mineras', $baseRoute.'.gestion.gestionoperacionesmineras')->name('gestionoperacionesmineras_gestion');

//MEDIO AMBIENTE
Route::view('/gestion-ambiental-aplicado-a-mineria', $baseRoute.'.medioambiente.gestionambientalaplicado')->name('gestionambientalaplicado_medioambiente');

//MINERIA
Route::view('/costos-y-presupuestos-en-mineria-superficial', $baseRoute.'.mineria.costosypresupuesto')->name('costosypresupuesto_mineria');
Route::view('/perforacion-y-voladura-en-minera-superficial', $baseRoute.'.mineria.perforacionvoladurasuperficial')->name('perforacionvoladurasuperficial_mineria');
Route::view('/planeamiento-de-minado-y-calculo-de-reservas', $baseRoute.'.mineria.planeamientominadocalculo')->name('planeamientominadocalculo_mineria');
Route::view('/cursos-online', $baseRoute.'.online')->name('cursosonline');

//GEOLOGIA
Route::view('/hidrogeologia-minera-avanzada-itr', $baseRoute.'.geologia.hidrogeologiaavanzadaitr')->name('hidrogeologiaavanzadaitr_geologia');
Route::view('/estabilidad-de-taludes-&-mecanica-de-rocas', $baseRoute.'.geologia.estabilidadtaludes')->name('estabilidadtaludes_geologia');
Route::view('/ingenieria-geotecnica-aplicada-a-mineria', $baseRoute.'.geologia.ingenieriageotecnica')->name('ingenieriageotecnica_geologia');
Route::view('/geoestadistica-aplicada-a-la-estimacion-de-yacimientos-mineros', $baseRoute.'.geologia.geoestadisticaestimacionyacimientos')->name('geoestadisticaestimacionyacimientos_geologia');

//METALURGIA
Route::view('/plantas-de-procesamiento-de-minerales', $baseRoute.'.metalurgia.plantasprocesamientominerales')->name('plantasprocesamientominerales_metalurgia');


//thanks register
Route::view('/thanks', 'thanks')->name('thanks');