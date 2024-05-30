<?php
namespace App\Http\Controllers;

use App\Models\TblServicio;
use App\Models\TblPortafolio;
use App\Models\Tblequipo;
use App\Models\Tblentrada;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index()
    {
        $tblServicios = TblServicio::paginate();
        $tblPortafolios = TblPortafolio::paginate();
        $tblequipos = Tblequipo::paginate();
        $tblentradas = Tblentrada::paginate();

        return view('welcome', compact('tblServicios', 'tblPortafolios', 'tblequipos', 'tblentradas'));
    }
}
