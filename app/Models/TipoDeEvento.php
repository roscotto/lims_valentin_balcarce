<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoDeEvento extends Model
{
    // Nombre de la tabla
    protected $table = 'tipos_de_eventos';

    // Nombre de la llave primaria
    protected $primaryKey = 'tipo_de_evento_id';
}
