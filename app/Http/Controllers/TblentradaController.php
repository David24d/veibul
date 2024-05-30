<?php

namespace App\Http\Controllers;

use App\Models\Tblentrada;
use Illuminate\Http\Request;

/**
 * Class TblentradaController
 * @package App\Http\Controllers
 */
class TblentradaController extends Controller
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
        $tblentradas = Tblentrada::paginate();

        return view('tblentrada.index', compact('tblentradas'))
            ->with('i', (request()->input('page', 1) - 1) * $tblentradas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tblentrada = new Tblentrada();
        return view('tblentrada.create', compact('tblentrada'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tblentrada::$rules);

        $tblentrada = Tblentrada::create($request->all());

        return redirect()->route('tblentradas.index')
            ->with('success', 'Tblentrada created successfully.');
    }

    /**
     * Display the specified resource.
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
     * Show the form for editing the specified resource.
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
     * Update the specified resource in storage.
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
            ->with('success', 'Tblentrada updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tblentrada = Tblentrada::find($id)->delete();

        return redirect()->route('tblentradas.index')
            ->with('success', 'Tblentrada deleted successfully');
    }
}
