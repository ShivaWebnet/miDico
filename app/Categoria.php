<?php

namespace miDico;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
  /**
  * Tabla asociada al Modelo
  */
  protected $table = 'categorias';

  public function expresiones(){
    return $this->hasMany('miDico\Expresion');
  }
}
