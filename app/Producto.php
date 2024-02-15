<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $estado
 * @property $kit
 * @property $barcode
 * @property $nombre
 * @property $presentacion
 * @property $descripcion
 * @property $foto
 * @property $peso
 * @property $update_at
 * 
 * @property Carrito[] $carritos
 * @property PedidosProducto[] $pedidosProductos
 * @property TiendasProducto[] $tiendasProductos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'estado' => 'required',
		'kit' => 'required',
		'barcode' => 'required',
		'nombre' => 'required',
		'presentacion' => 'required',
		'peso' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['estado','kit','barcode','nombre','presentacion','descripcion','foto','peso'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carritos()
    {
        return $this->hasMany('App\Carrito', 'id_producto', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pedidosProductos()
    {
        return $this->hasMany('App\PedidosProducto', 'id_producto', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tiendasProductos()
    {
        return $this->hasMany('App\TiendasProducto', 'id_producto', 'id');
    }
    

}
