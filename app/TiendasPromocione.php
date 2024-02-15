<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TiendasPromocione
 *
 * @property $id
 * @property $estado
 * @property $inicio
 * @property $fin
 * @property $id_tienda
 * @property $id_promocion
 *
 * @property Promocione $promocione
 * @property Tienda $tienda
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TiendasPromocione extends Model
{
    
    static $rules = [
		'estado' => 'required',
		'inicio' => 'required',
		'fin' => 'required',
		'id_tienda' => 'required',
		'id_promocion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['estado','inicio','fin','id_tienda','id_promocion'];


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
