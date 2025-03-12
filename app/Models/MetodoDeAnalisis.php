<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MetodoDeAnalisis extends Model
{
    // Nombre de la tabla
    protected $table = 'metodos_de_analisis';

    // Nombre de la llave primaria
    protected $primaryKey = 'metodo_de_analisis_id';

    // RELACIONES

    // Relación de uno a muchos entre la tabla metodos_de_analisis y la tabla resultados_de_analisis
    public function resultadosDeAnalisis()
    {
        return $this->hasMany(ResultadoDeAnalisis::class, 'metodo_de_analisis_id', 'metodo_de_analisis_id');
    }


}
