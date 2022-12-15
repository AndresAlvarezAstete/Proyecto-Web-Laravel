<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use Illuminate\Support\Facades\DB;
use App\Excursiones;
use App\Categorias;
use App\Mensaje;
use App\Inicio;

class FrontEndController extends Controller
{
    public function inicio(){

        $slide = Slide::all();

        $categorias = DB::select('select * from categorias');

        $excursiones = Excursiones::all()->sortByDesc('id')->take(4);

        $inicio = Inicio::find(1);

        return view('welcome')->with('slide', $slide)->with('categorias', $categorias)->with('excursiones', $excursiones)->with('inicio', $inicio);
    }

    public function Excursiones()
    {

        $excursiones = Excursiones::all();

        $inicio = Inicio::find(1);

        return view('frontend.Excursiones-Todas')->with('excursiones', $excursiones)->with('inicio', $inicio);
    }

    public function Excursion($id)
    {
        $excursion = Excursiones::find($id);

        $galerias = DB::select('select * from galeria where excursion_id = '.$id);

        $inicio = Inicio::find(1);

        return view('frontend.Excursion')->with('excursion', $excursion)->with('galerias', $galerias)->with('inicio', $inicio);

    }

    public function ExcursionesPorCategoria($id)
    {
        $categoria = Categorias::find($id);

        $excursiones = DB::select('select * from excursiones where id_categoria = '.$id.' order by id desc');

        $inicio = Inicio::find(1);

        return view('frontend.Excursiones')->with('categoria', $categoria)->with('excursiones', $excursiones)->with('inicio', $inicio); 
    }

    public function Mensajes(Request $request)
    {
        $datos = request()->validate([

            'nombre' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'mensaje' => ['required', 'string'],

        ]);

        Mensaje::create([

            'nombre' => $datos["nombre"],
            'email' => $datos["email"],
            'mensaje' => $datos["mensaje"],
            'leido' => 'No',

        ]);

        return redirect('/');
    }
}
