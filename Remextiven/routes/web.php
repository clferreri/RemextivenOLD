<?php

Route::get('/', function(){
    return view('welcome');
});


Route::get('/prueba/{nombre}', function($nombre){
    return  view('HederAndFooter', ['nombre' => $nombre]);
})->where('nombre', '[A-Za-z]+');


Route::get('/nosotros/{nombre?}', 'PagesController@nosotros')->name('nosotros');



/*
|======================================================
|========           EJEMPLOS Y DATOS            =======
|======================================================
|
|Aqui se expondran datos y cosas que pueden ser de utilidad para las rutas

----------------------------------------------------------------------------
Retornar vistas directamente o enviar parametros a ellas
===========================================================================
Route::view('/welcome', 'welcome');

Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

PARAMETROS A VISTA:
Route::get('/prueba/{nombre}', function($nombre){
    return  view('HederAndFooter', ['nombre' => $nombre]);
})->where('nombre', '[A-Za-z]+');
----------------------------------------------------------------------------------------

PONERLE NOMBRE A LAS RUTAS PARA REDIRIGIR A ELLAS, es mejor, me facilita el mantenimiento de codigo a futuro

Route::get('/prueba/{nombre}', function($nombre){
    return  view('HederAndFooter', ['nombre' => $nombre]);
})->name('nobreDeRuta'); 



PASAR EL ARRAY ASOCIATIVO
Route::get('/nosotros', function(){
    $equipo = ['ignacio', 'Pepito', 'Pedrito'];
    return view('nosotros', ['equipo'=>$equipo]);
})->name('nosotros');




*/