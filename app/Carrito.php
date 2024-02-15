<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Carrito
 *
 * @property $id
 * @property $cantidad
 * @property $id_producto
 * @property $id_tienda
 * @property $id_user
 * @property $created_at
 *
 * @property Producto $producto
 * @property Tienda $tienda
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Carrito extends Model
{
    
    static $rules = [
		'cantidad' => 'required',
		'id_producto' => 'required',
		'id_tienda' => 'required',
		'id_user' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cantidad','id_producto','id_tienda','id_user'];


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
    public function tienda()
    {
        return $this->hasOne('App\Tienda', 'id', 'id_tienda');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'id_user');
    }
    

}
