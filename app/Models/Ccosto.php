<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ccosto
 *
 * @property $id
 * @property $codigo
 * @property $descripcion
 * @property $vigente
 * @property $folio
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ccosto extends Model
{
        protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','descripcion','vigente','folio'];

    

}
