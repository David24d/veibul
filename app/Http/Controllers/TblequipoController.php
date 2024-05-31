<?php

namespace App\Http\Controllers;

use App\Models\Tblequipo;
use Illuminate\Http\Request;

/**
 * Class TblequipoController
 * @package App\Http\Controllers
 */
class TblequipoController extends Controller
{
    /**
     * Crea una nueva instancia del controlador.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
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
        $tblequipos = Tblequipo::paginate();

        return view('tblequipo.index', compact('tblequipos'))
            ->with('i', (request()->input('page', 1) - 1) * $tblequipos->perPage());
    }

    /**
     * Muestra el formulario para crear un nuevo recurso
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tblequipo = new Tblequipo();
        return view('tblequipo.create', compact('tblequipo'));
    }

    /**
     * Almacena un recurso recién creado en el almacenamiento.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tblequipo::$rules);

        $tblequipo = Tblequipo::create($request->all());

        return redirect()->route('tblequipo.index')
            ->with('success', 'Diseñador Creado.');
    }

    /**
     * Muestra el recurso especificado.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tblequipo = Tblequipo::find($id);

        return view('tblequipo.show', compact('tblequipo'));
    }

    /**
     * Muestra el formulario para editar el recurso especificado.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tblequipo = Tblequipo::find($id);

        return view('tblequipo.edit', compact('tblequipo'));
    }

    /**
     * Actualiza el recurso especificado en el almacenamiento.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tblequipo $tblequipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tblequipo $tblequipo)
    {
        request()->validate(Tblequipo::$rules);

        $tblequipo->update($request->all());

        return redirect()->route('tblequipo.index')
            ->with('success', 'Diseñador Actualizado');
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
        $tblequipo = Tblequipo::find($id)->delete();

        return redirect()->route('tblequipo.index')
            ->with('success', 'Diseñador Eliminado');
    }
}
