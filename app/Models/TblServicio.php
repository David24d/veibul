<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblServicio
 *
 * @property $id
 * @property $icono
 * @property $titulo
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TblServicio extends Model
{
    
    static $rules = [
		'icono' => 'required|string',
		'titulo' => 'required|string',
		'descripcion' => 'required|string',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['icono','titulo','descripcion'];



}
