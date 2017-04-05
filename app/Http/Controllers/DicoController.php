<?php

namespace miDico\Http\Controllers;

use Illuminate\Http\Request;
use miDico\Expresion;
use miDico\Categoria;
use miDico\Idioma;

class DicoController extends Controller{

  public function __construct(){
    $this->middleware('auth');
  }

  /**
  * Función que devuelve a la vista los datos
  * de todo el diccionario
  */
  public function index(){
    /*
    SELECT materna, idiomas.idioma, expresion, categorias.categoria FROM expresiones
    RIGHT JOIN idiomas
    ON expresiones.idioma_id=idiomas.id
    RIGHT JOIN categorias
    ON expresiones.categoria_id=categorias.id
    */

    $expresiones = Expresion::
      join('idiomas', 'expresiones.idioma_id', '=', 'idiomas.id')
      ->join('categorias', 'expresiones.categoria_id', '=', 'categorias.id')
      ->select('expresiones.*', 'idiomas.idioma', 'categorias.categoria')
      ->get();

    return view('diccionario', ['expresiones'=>$expresiones]);
  }

  public function insertaExpresion(){
    $categorias = Categoria::all();
    $idiomas = Idioma::all();

    return view('add_expresion', ['categorias'=>$categorias, 'idiomas'=>$idiomas]);
  }
  public function guardaExpresion(Request $request){
    $expresionNew = new Expresion;

    $expresionNew->materna = $request->materna;
    $expresionNew->expresion = $request->expresion;
    $expresionNew->idioma_id = $request->idioma;
    $expresionNew->categoria_id = $request->categoria;

    $expresionNew->save();

    return redirect('diccionario');
  }

  public function preEdit($id){
    $categorias = Categoria::all();
    $idiomas = Idioma::all();
    // necesarios para volver a listar los nombres
    $expresion = Expresion::where('id', $id)->first();
    return view('edit_exp',
      ['expresion'=>$expresion,
      'idiomas'=>$idiomas,
      'categorias'=>$categorias]);
  }

  public function edit(Request $request, $id){
    $materna = $request->newMaterna;
    $expresion = $request->newExpresion;
    $categoria_id = $request->newCategoria;
    $idioma_id = $request->newIdioma;

    $expresionObjetivo = Expresion::find($id);

    $expresionObjetivo->materna = $materna;
    $expresionObjetivo->expresion = $expresion;
    $expresionObjetivo->categoria_id = $categoria_id;
    $expresionObjetivo->idioma_id = $idioma_id;

    $expresionObjetivo->save();

    return redirect('diccionario');
  }

  public function borra($id){
    Expresion::destroy($id);
    return redirect('diccionario');
  }
}
