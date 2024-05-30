<?php

namespace App\Http\Controllers;
use App\Models\Tblentrada;
use Illuminate\Http\Request;

class EntradaController extends Controller
{

    //
    public function index()
    {
        $tblentradas = Tblentrada::paginate();

        return view('welcome', compact('tblentradas'));
            
    }

}
