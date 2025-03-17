<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class ResultadoDeAnalisis extends Model
{
    // Nombre de la tabla
    protected $table = 'resultados_de_analisis';

    // Nombre de la llave primaria
    protected $primaryKey = 'resultado_de_analisis_id';

    /**
     * Método que devuelve los valores de los resultados quitando los ceros a la derecha del número decimal
     * Utilizando accessors y mutators
     * @return Atribute $value
     */
    public function resultadoValor() : Attribute
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


    // RELACIONES

    // Relación de uno a muchos inversa entre la tabla resultados_de_analisis y la tabla certificados
    public function certificado()
    {
        return $this->belongsTo(Certificado::class, 'certificado_id', 'certificado_id');
    }

    // Relación de uno a muchos inversa entre la tabla resultados_de_analisis y la tabla parametros
    public function parametro()
    {
        return $this->belongsTo(Parametro::class, 'parametro_id', 'parametro_id');
    }

    // Relación de uno a muchos inversa entre la tabla resultados_de_analisis y la tabla metodos_de_analisis
    public function metodoDeAnalisis()
    {
        return $this->belongsTo(MetodoDeAnalisis::class, 'metodo_de_analisis_id', 'metodo_de_analisis_id');
    }


}
