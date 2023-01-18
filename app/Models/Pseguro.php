<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pseguro
 *
 * @property $id
 * @property $codigo
 * @property $descripcion
 * @property $valor
 * @property $vigente
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pseguro extends Model
{
    
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','descripcion','valor','vigente'];



}
