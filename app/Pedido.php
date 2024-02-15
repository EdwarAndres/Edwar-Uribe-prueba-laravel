<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pedido
 *
 * @property $id
 * @property $instrucciones
 * @property $entrega_fecha
 * @property $valor_productos
 * @property $valor_envio
 * @property $valor_descuento
 * @property $valor_cupon
 * @property $impuestos
 * @property $valor_impuestos
 * @property $valor_final
 * @property $calificacion
 * @property $id_tienda
 * @property $direccion
 * @property $valor_comision
 * @property $id_user
 * @property $created_at
 *
 * @property PedidosEstado[] $pedidosEstados
 * @property PedidosProducto[] $pedidosProductos
 * @property Tienda $tienda
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pedido extends Model
{
    
    static $rules = [
		'entrega_fecha' => 'required',
		'valor_productos' => 'required',
		'valor_envio' => 'required',
		'valor_descuento' => 'required',
		'valor_cupon' => 'required',
		'impuestos' => 'required',
		'valor_impuestos' => 'required',
		'valor_final' => 'required',
		'id_tienda' => 'required',
		'valor_comision' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['instrucciones','entrega_fecha','valor_productos','valor_envio','valor_descuento','valor_cupon','impuestos','valor_impuestos','valor_final','calificacion','id_tienda','direccion','valor_comision','id_user'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pedidosEstados()
    {
        return $this->hasMany('App\PedidosEstado', 'id_pedido', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pedidosProductos()
    {
        return $this->hasMany('App\PedidosProducto', 'id_pedido', 'id');
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
