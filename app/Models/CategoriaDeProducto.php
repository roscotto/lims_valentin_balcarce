<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriaDeProducto extends Model
{
    // Nombre de la tabla
    protected $table = 'categorias_de_productos';

    // RELACIONES

    // Relación uno a muchos con la tabla productos
    public function productos()
    {
        return $this->hasMany(Producto::class, 'categoria_de_producto_id');
    }
}
