<?php

namespace App\Http\Controllers;
use App\Models\TblPortafolio;
use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    //
    public function index()
    {
        $tblPortafolios = TblPortafolio::paginate();
        return view('welcome', compact('tblPortafolios'));
    }
}
