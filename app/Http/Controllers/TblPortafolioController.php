<?php

namespace App\Http\Controllers;

use App\Models\TblPortafolio;
use Illuminate\Http\Request;

/**
 * Class TblPortafolioController
 * @package App\Http\Controllers
 */
class TblPortafolioController extends Controller
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
        $tblPortafolios = TblPortafolio::paginate();

        return view('tbl-portafolio.index', compact('tblPortafolios'))
            ->with('i', (request()->input('page', 1) - 1) * $tblPortafolios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tblPortafolio = new TblPortafolio();
        return view('tbl-portafolio.create', compact('tblPortafolio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TblPortafolio::$rules);

        $tblPortafolio = TblPortafolio::create($request->all());

        return redirect()->route('tbl-portafolios.index')
            ->with('success', 'TblPortafolio created successfully.');
    }

    /**
     * Display the specified resource.
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
     * Show the form for editing the specified resource.
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
     * Update the specified resource in storage.
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
            ->with('success', 'TblPortafolio updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tblPortafolio = TblPortafolio::find($id)->delete();

        return redirect()->route('tbl-portafolios.index')
            ->with('success', 'TblPortafolio deleted successfully');
    }
}
