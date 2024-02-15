<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UsersDireccione
 *
 * @property $id
 * @property $nombre
 * @property $direccion
 * @property $distancia
 * @property $id_user
 *
 * @property User $user
 * @property UsersCliente[] $usersClientes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class UsersDireccione extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'direccion' => 'required',
		'distancia' => 'required',
		'id_user' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','direccion','distancia','id_user'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'id_user');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usersClientes()
    {
        return $this->hasMany('App\UsersCliente', 'id_direccion', 'id');
    }
    

}
