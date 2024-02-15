<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Promocione
 *
 * @property $id
 * @property $estado
 * @property $nombre
 * @property $imagen
 * @property $porcentaje
 * @property $dias_semana
 *
 * @property PedidosProducto[] $pedidosProductos
 * @property TiendasProducto[] $tiendasProductos
 * @property TiendasPromocione[] $tiendasPromociones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Promocione extends Model
{
    
    static $rules = [
		'estado' => 'required',
		'nombre' => 'required',
		'dias_semana' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['estado','nombre','imagen','porcentaje','dias_semana'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pedidosProductos()
    {
        return $this->hasMany('App\PedidosProducto', 'id_promocion', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tiendasProductos()
    {
        return $this->hasMany('App\TiendasProducto', 'id_promocion', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tiendasPromociones()
    {
        return $this->hasMany('App\TiendasPromocione', 'id_promocion', 'id');
    }
    

}
