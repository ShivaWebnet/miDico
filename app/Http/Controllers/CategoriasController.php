<?php

namespace miDico\Http\Controllers;

use Illuminate\Http\Request;
use miDico\Categoria;

class CategoriasController extends Controller{

  /**
  * Constructor protegido
  */
  public function __construct(){
    $this->middleware('auth');
  }

  /**
  * Muéstrame todas las categorias que tengo guardadas
  */
  public function index(){
    $categorias = Categoria::all();
    return view('categorias',['categorias'=>$categorias]);
  }

  /**
  * Muestra el formulario para inserción de categoria
  */
  public function insertaCategoria(){
    return view('add_categoria');
  }
  /**
  * Graba la categoria
  * @var request
  */
  public function guardaCategoria(Request $request){
    $categoriaNuevo = New Categoria;
    $categoriaNuevo->categoria = $request->categoria;
    $categoriaNuevo->save();

    return redirect('categorias');
  }

  /**
  * Búsqueda de categoria indicado por el ID
  * @var $id
  */
  public function preEdit($id){
    $categoria = Categoria::where('id', $id)->first();
    return view('edit_categoria', ['categoria'=>$categoria]);
  }
  /**
  * Recogida de datos del form previa comparacion de IDs
  * más grabación en BBDD
  * @var $request
  * @var $id
  */
  public function edit(Request $request, $id){
    $nuevaCategoria = $request->input('categoria');

    $categoria = Categoria::find($id);
    $categoria->categoria = $nuevaCategoria;
    $categoria->save();

    return redirect('categorias');
  }

  /**
  * Borra la categoria según su ID
  * @var id
  */
  public function borra($id){
    Categoria::destroy($id);
    return redirect('categorias');
  }
}
