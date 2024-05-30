<?php

namespace App\Http\Controllers;
use App\Models\Tblequipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function index()
    {
        $tblequipos = Tblequipo::paginate();
        return view('welcome', compact('tblequipos'));
           
    }

}
