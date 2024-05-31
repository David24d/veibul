<?php

namespace App\Http\Controllers;

use App\Models\Tblentrada;
use Illuminate\Http\Request;

/**
 * Clase TblentradaController
 * @package App\Http\Controllers
 */
class TblentradaController extends Controller
{
    /**
     * Crea una nueva instancia del controlador.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');
     }

    /**
     * Muestra una lista de los recursos.
     */ 
     
    public function index()
    {
        $tblentradas = Tblentrada::paginate();

        return view('tblentrada.index', compact('tblentradas'))
            ->with('i', (request()->input('page', 1) - 1) * $tblentradas->perPage());
    }

    /**
     * Muestra el formulario para crear un nuevo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tblentrada = new Tblentrada();
        return view('tblentrada.create', compact('tblentrada'));
    }

    /**
     * Almacena un recurso recién creado en el almacenamiento.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tblentrada::$rules);

        $tblentrada = Tblentrada::create($request->all());

        return redirect()->route('tblentradas.index')
            ->with('success', 'Historia Creada.');
    }

    /**
     * Muestra el recurso especificado.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tblentrada = Tblentrada::find($id);

        return view('tblentrada.show', compact('tblentrada'));
    }

    /**
     * Muestra el formulario para editar el recurso especificado.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tblentrada = Tblentrada::find($id);

        return view('tblentrada.edit', compact('tblentrada'));
    }

    /**
     * Actualiza el recurso especificado en el almacenamiento.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tblentrada $tblentrada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tblentrada $tblentrada)
    {
        request()->validate(Tblentrada::$rules);

        $tblentrada->update($request->all());

        return redirect()->route('tblentradas.index')
            ->with('success', 'Historia Actualizada');
    }

    /**
     * Elimina el recurso especificado del almacenamiento.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tblentrada = Tblentrada::find($id)->delete();

        return redirect()->route('tblentradas.index')
            ->with('success', 'Historia Eliminada');
    }
}
