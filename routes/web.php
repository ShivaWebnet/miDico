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
Route::get('idiomas/borra/{id}', 'IdiomasController@borraIdioma'); // Bórrame el idioma con X id
Route::get('idiomas/edit/{id}', 'IdiomasController@preEdit'); // Recogida del form para editar
Route::post('idiomas/mod/{id}', 'IdiomasController@edit'); // Grabamos la modificación
