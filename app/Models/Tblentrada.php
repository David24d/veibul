<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblentrada
 *
 * @property $id
 * @property $fecha
 * @property $titulo
 * @property $descripcion
 * @property $imagen
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tblentrada extends Model
{
    
    static $rules = [
		'fecha' => 'required|string',
		'titulo' => 'required|string',
		'descripcion' => 'required|string',
		'imagen' => 'required|string',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha','titulo','descripcion','imagen'];



}
