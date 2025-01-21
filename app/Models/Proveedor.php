<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
  // Nombre de la tabla
  protected $table = 'proveedores';

  // Nombre de la llave primaria
  protected $primaryKey = 'proveedor_id';
}
