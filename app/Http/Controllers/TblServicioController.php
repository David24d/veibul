<?php

namespace App\Http\Controllers;

use App\Models\TblServicio;
use Illuminate\Http\Request;

/**
 * Class TblServicioController
 * @package App\Http\Controllers
 */
class TblServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');
     }
 
    public function index()
    {
        $tblServicios = TblServicio::paginate();

        return view('tbl-servicio.index', compact('tblServicios'))
            ->with('i', (request()->input('page', 1) - 1) * $tblServicios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tblServicio = new TblServicio();
        return view('tbl-servicio.create', compact('tblServicio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TblServicio::$rules);

        $tblServicio = TblServicio::create($request->all());

        return redirect()->route('tbl-servicios.index')
            ->with('success', 'TblServicio created successfully.');
    }

    /**
     * Display the specified resource.
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
     * Show the form for editing the specified resource.
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
     * Update the specified resource in storage.
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
            ->with('success', 'TblServicio updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tblServicio = TblServicio::find($id)->delete();

        return redirect()->route('tbl-servicios.index')
            ->with('success', 'TblServicio deleted successfully');
    }
}
