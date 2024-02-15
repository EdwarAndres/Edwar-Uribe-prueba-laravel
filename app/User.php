<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 *
 * @property $id
 * @property $estado
 * @property $tipo
 * @property $login
 * @property $telefono
 * @property $codigo_temporal
 * @property $correo
 * @property $password
 *
 * @property Carrito[] $carritos
 * @property Pedido[] $pedidos
 * @property UsersCliente[] $usersClientes
 * @property UsersDireccione[] $usersDirecciones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class User extends Model
{
    
    static $rules = [
		'estado' => 'required',
		'tipo' => 'required',
		'login' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['estado','tipo','login','telefono','codigo_temporal','correo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carritos()
    {
        return $this->hasMany('App\Carrito', 'id_user', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pedidos()
    {
        return $this->hasMany('App\Pedido', 'id_user', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usersClientes()
    {
        return $this->hasMany('App\UsersCliente', 'id_user', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usersDirecciones()
    {
        return $this->hasMany('App\UsersDireccione', 'id_user', 'id');
    }
    

}
