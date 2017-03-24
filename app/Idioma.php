<?php

namespace miDico;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
  /**
  * Tabla asociada al Modelo
  */
  protected $table = 'idiomas';

  public function expresiones(){
    return $this->hasMany('miDico\Expresion');
  }
}
