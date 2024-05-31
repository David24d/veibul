<?php

namespace App\Http\Controllers;

use App\Models\TblPortafolio;
use Illuminate\Http\Request;

/**
 * Clase TblPortafolioController
 * @package App\Http\Controllers
 */
class TblPortafolioController extends Controller
{
    /**
     * Crea una nueva instancia del controlador.
     *
     * @return \Illuminate\Http\Response
     */

       /**
     * Sistema de autenticacion
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
        $tblPortafolios = TblPortafolio::paginate();

        return view('tbl-portafolio.index', compact('tblPortafolios'))
            ->with('i', (request()->input('page', 1) - 1) * $tblPortafolios->perPage());
    }

    /**
     * Muestra el formulario para crear un nuevo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tblPortafolio = new TblPortafolio();
        return view('tbl-portafolio.create', compact('tblPortafolio'));
    }

    /**
     * Almacena un recurso recién creado en el almacenamiento.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TblPortafolio::$rules);

        $tblPortafolio = TblPortafolio::create($request->all());

        return redirect()->route('tbl-portafolios.index')
            ->with('success', 'Pagina Web Creada.');
    }

    /**
     * Muestra el recurso especificado.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tblPortafolio = TblPortafolio::find($id);

        return view('tbl-portafolio.show', compact('tblPortafolio'));
    }

    /**
     * Muestra el formulario para editar el recurso especificado.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tblPortafolio = TblPortafolio::find($id);

        return view('tbl-portafolio.edit', compact('tblPortafolio'));
    }

    /**
     * Actualiza el recurso especificado en el almacenamiento.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TblPortafolio $tblPortafolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TblPortafolio $tblPortafolio)
    {
        request()->validate(TblPortafolio::$rules);

        $tblPortafolio->update($request->all());

        return redirect()->route('tbl-portafolios.index')
            ->with('success', 'Pagina Web Actualizada');
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
        $tblPortafolio = TblPortafolio::find($id)->delete();

        return redirect()->route('tbl-portafolios.index')
            ->with('success', 'Pagina Web Eliminada');
    }
}
