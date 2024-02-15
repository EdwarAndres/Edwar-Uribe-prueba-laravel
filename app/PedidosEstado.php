<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PedidosEstado
 *
 * @property $id
 * @property $estado
 * @property $id_pedido
 * @property $created_at
 *
 * @property Pedido $pedido
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PedidosEstado extends Model
{
    
    static $rules = [
		'estado' => 'required',
		'id_pedido' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['estado','id_pedido'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pedido()
    {
        return $this->hasOne('App\Pedido', 'id', 'id_pedido');
    }
    

}
