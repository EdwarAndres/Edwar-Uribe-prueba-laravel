<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TiendasProducto
 *
 * @property $id
 * @property $compra_maxima
 * @property $valor
 * @property $id_promocion
 * @property $id_tienda
 * @property $id_producto
 *
 * @property Producto $producto
 * @property Promocione $promocione
 * @property Tienda $tienda
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TiendasProducto extends Model
{
    
    static $rules = [
		'compra_maxima' => 'required',
		'valor' => 'required',
		'id_tienda' => 'required',
		'id_producto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['compra_maxima','valor','id_promocion','id_tienda','id_producto'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Producto', 'id', 'id_producto');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function promocione()
    {
        return $this->hasOne('App\Promocione', 'id', 'id_promocion');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tienda()
    {
        return $this->hasOne('App\Tienda', 'id', 'id_tienda');
    }
    

}
