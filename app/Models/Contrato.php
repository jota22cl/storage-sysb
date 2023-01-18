<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contrato
 *
 * @property $id
 * @property $folio
 * @property $cliente_id
 * @property $ccosto_id
 * @property $bodega_id
 * @property $fechaini
 * @property $fechafin
 * @property $gastocomun
 * @property $administracion
 * @property $primaseguro
 * @property $montoseguro
 * @property $moneda_id
 * @property $inventariable
 * @property $vigente
 * @property $created_at
 * @property $updated_at
 *
 * @property Bodega $bodega
 * @property Ccosto $ccosto
 * @property Cliente $cliente
 * @property Moneda $moneda
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contrato extends Model
{
    
    static $rules = [
		'folio' => 'required',
		'cliente_id' => 'required',
		'ccosto_id' => 'required',
		'bodega_id' => 'required',
		'fechaini' => 'required',
		'fechafin' => 'required',
		'gastocomun' => 'required',
		'administracion' => 'required',
		'primaseguro' => 'required',
		'montoseguro' => 'required',
		'moneda_id' => 'required',
		'inventariable' => 'required',
		'vigente' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['folio','cliente_id','ccosto_id','bodega_id','fechaini','fechafin','gastocomun','administracion','primaseguro','montoseguro','moneda_id','inventariable','vigente'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function bodega()
    {
        return $this->hasOne('App\Models\Bodega', 'id', 'bodega_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ccosto()
    {
        return $this->hasOne('App\Models\Ccosto', 'id', 'ccosto_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'cliente_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function moneda()
    {
        return $this->hasOne('App\Models\Moneda', 'id', 'moneda_id');
    }
    

}
