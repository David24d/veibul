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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $tblequipos = Tblequipo::paginate();

        return view('tblequipo.index', compact('tblequipos'))
            ->with('i', (request()->input('page', 1) - 1) * $tblequipos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tblequipo = new Tblequipo();
        return view('tblequipo.create', compact('tblequipo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tblequipo::$rules);

        $tblequipo = Tblequipo::create($request->all());

        return redirect()->route('tblequipo.index')
            ->with('success', 'Tblequipo created successfully.');
    }

    /**
     * Display the specified resource.
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
     * Show the form for editing the specified resource.
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
     * Update the specified resource in storage.
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
            ->with('success', 'Tblequipo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tblequipo = Tblequipo::find($id)->delete();

        return redirect()->route('tblequipo.index')
            ->with('success', 'Tblequipo deleted successfully');
    }
}
