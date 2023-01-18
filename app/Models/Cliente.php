<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $codigo
 * @property $nombre
 * @property $sigla
 * @property $direccion
 * @property $comuna
 * @property $cuidad
 * @property $vigente
 * @property $created_at
 * @property $updated_at
 *
 * @property Contrato[] $contratos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'codigo' => 'required',
		'nombre' => 'required',
		'sigla' => 'required',
		'direccion' => 'required',
		'comuna' => 'required',
		'cuidad' => 'required',
		'vigente' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','nombre','sigla','direccion','comuna','cuidad','vigente'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contratos()
    {
        return $this->hasMany('App\Models\Contrato', 'cliente_id', 'id');
    }
    

}
