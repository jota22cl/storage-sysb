<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bodega
 *
 * @property $id
 * @property $codigo
 * @property $descripcion
 * @property $ccosto_id
 * @property $largo
 * @property $ancho
 * @property $mt2
 * @property $bodegacompartida
 * @property $ocupada
 * @property $vigente
 * @property $created_at
 * @property $updated_at
 *
 * @property Ccosto $ccosto
 * @property Contrato[] $contratos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Bodega extends Model
{
    
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','descripcion','ccosto_id','largo','ancho','mt2','bodegacompartida','bodegaocupada','vigente'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ccosto()
    {
        return $this->hasOne('App\Models\Ccosto', 'id', 'ccosto_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contratos()
    {
        return $this->hasMany('App\Models\Contrato', 'bodega_id', 'id');
    }
    

}
