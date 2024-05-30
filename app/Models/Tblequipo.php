<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblequipo
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
  protected $table = 'tblequipo';
    
    static $rules = [
		'imagen' => 'required|string',
		'nombrecompleto' => 'required|string',
		'puesto' => 'required|string',
		'twiter' => 'required|string',
		'facebook' => 'required|string',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['imagen','nombrecompleto','puesto','twiter','facebook'];



}
