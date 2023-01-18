<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Moneda
 *
 * @property $id
 * @property $moneda
 * @property $simbolo
 * @property $vigente
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Moneda extends Model
{
    

    protected $perPage = 5; //20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['moneda','simbolo','vigente'];



}
