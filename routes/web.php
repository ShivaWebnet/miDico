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
Route::get('idiomas/edit/{id}','IdiomasController@preEdit'); // Recogemos en un form la nueva info
Route::post('idiomas/mod/{id}', 'IdiomasController@edit'); // Grabamos la modificación
Route::get('idiomas/borra/{id}', 'IdiomasController@borraIdioma'); // Bórrame el idioma con X id


/**
* Rutas para las categorias
*
*/
Route::get('categorias', 'CategoriasController@index'); // Muestra todas las categorias
Route::get('categorias/add', 'CategoriasController@insertaCategoria'); // Inserta la categoria nueva
Route::post('categorias/create', 'CategoriasController@guardaCategoria'); // Postprocesado para guardarla
Route::get('categorias/edit/{id}', 'CategoriasController@preEdit'); // Recogida del form para editar
Route::post('categorias/mod/{id}', 'CategoriasController@edit'); // Grabamos la modificación
Route::get('categorias/borra/{id}', 'CategoriasController@borra'); // Bórrame la categoria


/**
* Rutas para las expresiones / diccionario
*
*/
Route::get('diccionario', 'DicoController@index'); // listado de todas las expresiones
Route::get('diccionario/add', 'DicoController@insertaExpresion'); // formulario para insertar
Route::post('diccionario/create', 'DicoController@guardaExpresion'); // posguardado nueva expr.
Route::get('diccionario/edit/{id}', 'DicoController@preEdit'); // formulario para editar la expre.
Route::post('diccionario/mod/{id}', 'DicoController@edit'); // guarda la exp modificada
Route::get('diccionario/borra/{id}', 'DicoController@borra'); // borra la exp seleccionada.
