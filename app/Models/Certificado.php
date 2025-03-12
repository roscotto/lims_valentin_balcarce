<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    // Nombre de la tabla
    protected $table = 'certificados';

    // Nombre de la llave primaria
    protected $primaryKey = 'certificado_id';

    // RELACIONES

    // Relación de uno a muchos inversa entre la tabla certificados y la tabla productos
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id', 'producto_id');
    }

    // Relación de uno a muchos inversa entre la tabla certificados y la tabla proveedores
    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'proveedor_id', 'proveedor_id');
    }

    // Relación de uno a muchos inversa entre la tabla certificados y la tabla tipos_de_eventos
    public function tipoDeEvento()
    {
        return $this->belongsTo(TipoDeEvento::class, 'tipo_de_evento_id', 'tipo_de_evento_id');
    }

    // Relación de uno a muchos entre la tabla certificados y la tabla resultados_de_analisis
    public function resultadosDeAnalisis()
    {
        return $this->hasMany(ResultadoDeAnalisis::class, 'certificado_id', 'certificado_id');
    }

}
