<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Clase TblPortafolio
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

      /**
     * Nombre de la tabla asociada al modelo.
     */
  protected $table = 'tbl-portafolios';

      /**
     * Reglas de validación para los atributos del modelo.
     */
    static $rules = [
		'titulo' => 'required|string',
		'subtitulo' => 'required|string',
		'imagen' => 'required|string',
		'descripcion' => 'required|string',
		'cliente' => 'required|string',
		'categoria' => 'required|string',
		'url' => 'required|string',
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
    protected $fillable = ['titulo','subtitulo','imagen','descripcion','cliente','categoria','url'];



}
