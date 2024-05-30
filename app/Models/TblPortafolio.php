<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblPortafolio
 *
 * @property $id
 * @property $titulo
 * @property $subtitulo
 * @property $imagen
 * @property $descripcion
 * @property $cliente
 * @property $categoria
 * @property $url
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TblPortafolio extends Model
{
  protected $table = 'tbl-portafolios';

    static $rules = [
		'titulo' => 'required|string',
		'subtitulo' => 'required|string',
		'imagen' => 'required|string',
		'descripcion' => 'required|string',
		'cliente' => 'required|string',
		'categoria' => 'required|string',
		'url' => 'required|string',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo','subtitulo','imagen','descripcion','cliente','categoria','url'];



}
