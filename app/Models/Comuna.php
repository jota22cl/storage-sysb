<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comuna
 *
 * @property $id
 * @property $codigo
 * @property $nombre
 * @property $ciudades_id
 * @property $vigente
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Comuna extends Model
{

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','nombre','ciudades_id','vigente'];



}
