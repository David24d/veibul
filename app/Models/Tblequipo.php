<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Clase Tblequipo
 *
 * @property $id
 * @property $imagen
 * @property $nombrecompleto
 * @property $puesto
 * @property $twiter
 * @property $facebook
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tblequipo extends Model
{
      /**
     * Nombre de la tabla asociada al modelo.
     */ 

  protected $table = 'tblequipo';
    
      /**
     * Reglas de validación para los atributos del modelo.
     */
    static $rules = [
		'imagen' => 'required|string',
		'nombrecompleto' => 'required|string',
		'puesto' => 'required|string',
		'twiter' => 'required|string',
		'facebook' => 'required|string',
    ];

        /**
     * Número de elementos por página al paginar.
     */
    protected $perPage = 20;

    /**
     * Atributos que se pueden asignar en masa.
     *
     * @var array
     */
    protected $fillable = ['imagen','nombrecompleto','puesto','twiter','facebook'];



}
