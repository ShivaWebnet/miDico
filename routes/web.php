<?php
Auth::routes();

Route::get('/', 'HomeController@index');

/**
* Rutas para los idiomas
*
*/
Route::get('idiomas', 'IdiomasController@index'); // Mándame todos los idiomas que tengo guardados
Route::get('idiomas/add/', 'IdiomasController@insertaIdioma');// Muestra form para insertar idioma
Route::post('idiomas/create', 'IdiomasController@guardaIdioma'); // Lo guarda
