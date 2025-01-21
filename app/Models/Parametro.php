<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Parametro extends Model
{
  // Nombre de la tabla
  protected $table = 'parametros';

  // Nombre de la llave primaria
  protected $primaryKey = 'parametro_id';

  /**
   * Método que devuelve los valores MÍNIMOS quitando los ceros a la derecha del número decimal
   * Utilizando accessors y mutators
   * @return Atribute $value
   */
  public function valorMin() : Attribute
{
    return Attribute::make(
        // Obtener el valor procesado
        function ($value) {
            // Si $value es null, devuelve null directamente, de lo contrario, procesa el valor
            return $value !== null ? rtrim(rtrim((string) $value, '0'), '.') : null;
        },
        // Establecer el valor (sin cambios)
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
       // Obtener el valor procesado
       function ($value) {
          // Si $value es null, devuelve null directamente, de lo contrario, procesa el valor
          return $value !== null ? rtrim(rtrim((string) $value, '0'), '.') : null;
      },
      // Establecer el valor (sin cambios)
      function ($value) {
          return $value;
      }
    );
  }


   // RELACIONES

    // Relación de uno a muchos inversa entre la tabla parametros y la tabla categorias_de_parametros
    public function categoria()
    {
        return $this->belongsTo(CategoriaDeParametro::class, 'categoria_de_parametro_id', 'categoria_de_parametro_id');
    }

}
