<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TiendasDistancia
 *
 * @property $id
 * @property $id_tienda
 * @property $valor
 * @property $desde
 * @property $hasta
 *
 * @property Tienda $tienda
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TiendasDistancia extends Model
{
    
    static $rules = [
		'id_tienda' => 'required',
		'valor' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_tienda','valor','desde','hasta'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tienda()
    {
        return $this->hasOne('App\Tienda', 'id', 'id_tienda');
    }
    

}
