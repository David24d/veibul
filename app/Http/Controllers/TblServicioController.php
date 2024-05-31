<?php

namespace App\Http\Controllers;

use App\Models\TblServicio;
use Illuminate\Http\Request;

/**
 * Clase TblServicioController
 * @package App\Http\Controllers
 */
class TblServicioController extends Controller
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
     *
     */
    public function index()
    {
        $tblServicios = TblServicio::paginate();

        return view('tbl-servicio.index', compact('tblServicios'))
            ->with('i', (request()->input('page', 1) - 1) * $tblServicios->perPage());
    }

    /**
     * Muestra el formulario para crear un nuevo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tblServicio = new TblServicio();
        return view('tbl-servicio.create', compact('tblServicio'));
    }

    /**
     * Almacena un recurso recién creado en el almacenamiento.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TblServicio::$rules);

        $tblServicio = TblServicio::create($request->all());

        return redirect()->route('tbl-servicios.index')
            ->with('success', 'Nuevo Servicio Creado.');
    }

    /**
     * Muestra el recurso especificado.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tblServicio = TblServicio::find($id);

        return view('tbl-servicio.show', compact('tblServicio'));
    }

    /**
     * Muestra el formulario para editar el recurso especificado.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tblServicio = TblServicio::find($id);

        return view('tbl-servicio.edit', compact('tblServicio'));
    }

    /**
     * Actualiza el recurso especificado en el almacenamiento.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TblServicio $tblServicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TblServicio $tblServicio)
    {
        request()->validate(TblServicio::$rules);

        $tblServicio->update($request->all());

        return redirect()->route('tbl-servicios.index')
            ->with('success', 'Servicio Actalizado');
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
        $tblServicio = TblServicio::find($id)->delete();

        return redirect()->route('tbl-servicios.index')
            ->with('success', 'Servicio Eliminado');
    }
}
