<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Clase TblServicio
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
        /**
     * Reglas de validación para los atributos del modelo
     */

    static $rules = [
		'icono' => 'required|string',
		'titulo' => 'required|string',
		'descripcion' => 'required|string',
    ];
     
        /**
     * Número de elementos por página al paginar
     */

    protected $perPage = 20;

    /**
     * Atributos que se pueden asignar en masa
     *
     * @var array
     */
    protected $fillable = ['icono','titulo','descripcion'];



}
