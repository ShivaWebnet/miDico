<?php

namespace miDico\Http\Controllers;

use Illuminate\Http\Request;
use miDico\Idioma;

class IdiomasController extends Controller{

  /**
  * Constructor protegido
  */
  public function __construct(){
    $this->middleware('auth');
  }

  /**
  * Muéstrame todos los idiomas que tengo guardados
  */
  public function index(){
    $idiomas = Idioma::all();
    return view('idiomas',['idiomas'=>$idiomas]);
  }

  /**
  * Muestra el formulario de Inserta un idioma
  */
  public function insertaIdioma(){
    return view('add_idioma');
  }
  /**
  * Graba el idioma
  */
  public function guardaIdioma(Request $request){
    $idiomaNuevo = New Idioma;
    $idiomaNuevo->idioma = $request->idioma;
    $idiomaNuevo->save();
    return redirect('idiomas');
  }

  /**
  * Búsqueda del idioma indicado por el ID
  * @var $id
  */
  public function preEdit($id){
    $idioma = Idioma::where('id', $id)->first();
    return view('edit_idioma', ['idioma'=>$idioma]);
  }
  /**
  * Recogida de datos del form previa comparacion de IDs
  * más grabación en BBDD
  * @var $request
  * @var $id
  */
  public function edit(Request $request, $id){
    $nuevoIdioma = $request->idioma;

    $idioma = Idioma::find($id);
    $idioma->idioma = $nuevoIdioma;
    $idioma->save();

    return redirect('idiomas');
  }

  /**
  * Borra el idioma
  * @var $id
  */
  public function borraIdioma($id){
    Idioma::destroy($id);
    return redirect('idiomas');
  }
}
