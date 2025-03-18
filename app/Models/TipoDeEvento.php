<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoDeEvento extends Model
{
    // Nombre de la tabla
    protected $table = 'tipos_de_eventos';

    // Nombre de la llave primaria
    protected $primaryKey = 'tipo_de_evento_id';

    // RELACIONES

    // Relación de uno a muchos entre la tabla tipos_de_eventos y la tabla certificados
    public function certificados()
    {
        return $this->hasMany(Certificado::class, 'tipo_de_evento_id', 'tipo_de_evento_id');
    }
}
