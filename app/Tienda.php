<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tienda
 *
 * @property $id
 * @property $estado
 * @property $nombre
 * @property $descripcion
 * @property $telefono
 * @property $direccion
 * @property $direccion_anexo
 * @property $direccion_barrio
 * @property $calificacion
 * @property $calificacion_cantidad
 * @property $impuestos
 * @property $dias_trabajados
 *
 * @property Carrito[] $carritos
 * @property Pedido[] $pedidos
 * @property TiendasDistancia[] $tiendasDistancias
 * @property TiendasProducto[] $tiendasProductos
 * @property TiendasPromocione[] $tiendasPromociones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tienda extends Model
{
    
    static $rules = [
		'estado' => 'required',
		'nombre' => 'required',
		'telefono' => 'required',
		'direccion' => 'required',
		'calificacion' => 'required',
		'calificacion_cantidad' => 'required',
		'impuestos' => 'required',
		'dias_trabajados' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['estado','nombre','descripcion','telefono','direccion','direccion_anexo','direccion_barrio','calificacion','calificacion_cantidad','impuestos','dias_trabajados'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carritos()
    {
        return $this->hasMany('App\Carrito', 'id_tienda', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pedidos()
    {
        return $this->hasMany('App\Pedido', 'id_tienda', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tiendasDistancias()
    {
        return $this->hasMany('App\TiendasDistancia', 'id_tienda', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tiendasProductos()
    {
        return $this->hasMany('App\TiendasProducto', 'id_tienda', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tiendasPromociones()
    {
        return $this->hasMany('App\TiendasPromocione', 'id_tienda', 'id');
    }
    

}
