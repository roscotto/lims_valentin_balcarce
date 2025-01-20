<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Parametro extends Model
{
  // Nombre de la tabla
  protected $table = 'parametros';


  /**
   * Método que devuelve los valores MÍNIMOS quitando los ceros a la derecha del número decimal
   * Utilizando accessors y mutators
   * @return Atribute $value
   */
  public function valorMin() : Attribute
  {
    return Attribute::make (
      function ($value) {
        return rtrim(rtrim($value, '0'), '.');
      },
      function ($value) {
        return $value;
      }
    );
  }

  /**
   * Método que devuelve los valores MÁXIMOS quitando los ceros a la derecha del número decimal
   * Utilizando accessors y mutators
   * @return Atribute $value
   */
  public function valorMax() : Attribute
  {
    return Attribute::make (
      function ($value) {
        return rtrim(rtrim($value, '0'), '.');
      },
      function ($value) {
        return $value;
      }
    );
  }
}
