<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UsersCliente
 *
 * @property $id
 * @property $telefono
 * @property $nombre
 * @property $genero
 * @property $nacimiento
 * @property $identificacion
 * @property $id_direccion
 * @property $id_user
 *
 * @property User $user
 * @property UsersDireccione $usersDireccione
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class UsersCliente extends Model
{
    
    static $rules = [
		'genero' => 'required',
		'id_user' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['telefono','nombre','genero','nacimiento','identificacion','id_direccion','id_user'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'id_user');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usersDireccione()
    {
        return $this->hasOne('App\UsersDireccione', 'id', 'id_direccion');
    }
    

}
