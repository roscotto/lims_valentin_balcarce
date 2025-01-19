<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    // Nombre de la tabla
    protected $table = 'productos';

    // RELACIONES

    // Relación de uno a muchos inversa entre la tabla productos y la tabla categorias_de_productos
    public function categoria()
    {
        return $this->belongsTo(CategoriaDeProducto::class, 'categoria_de_producto_id', 'categoria_de_producto_id');
    }

    // Relación de muchos a muchos entre la tabla de productos con la tabla proveedores
    public function proveedores()
    {
        return $this->belongsToMany(
          Proveedor::class,
          'proveedores_x_producto', // Nombre de la tabla intermedia
          'producto_id', // foreignPivotKey (este Modelo en la pivot)
          'proveedor_id', //  "relatedPivotKey" Modelo con el que se relaciona
          'producto_id', // "parentKey" este Modelo
          'proveedor_id' //  "relatedKey" Modelo con el que se relaciona
        );
    }

    // Relación de muchos a muchos entre la tabla productos y la tabla parametros
    public function parametros()
    {
        return $this->belongsToMany(
          Parametro::class,
          'parametros_x_producto', // Nombre de la tabla intermedia
          'producto_id', // foreignPivotKey (este Modelo en la pivot)
          'parametro_id', //  "relatedPivotKey" Modelo con el que se relaciona
          'producto_id', // "parentKey" este Modelo
          'parametro_id' //  "relatedKey" Modelo con el que se relaciona
        );
    }

}
