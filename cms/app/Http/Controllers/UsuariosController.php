<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }
    
    public function index()
    {

        if (auth()->user()->rol != 'Administrador') 
        {
            return redirect('inicio');
        }

        $usuarios = DB::select('select * from users');

        return view('modulos.usuarios')->with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modulos.crear-usuarios');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = request()->validate([

            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:5'],
            'rol' => ['required']

        ]);

        DB::table('users')->insert(['name' => $datos["name"], 'email' => $datos["email"], 'password' => Hash::make($datos['password']), 'rol' => $datos["rol"]]);

        return redirect('usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request)
    {

        if (auth()->user()->email != request('email')){

            $datos = request()->validate([

            'name' => ['required', 'string', 'max:255'],

            'email' => ['required', 'string', 'email', 'unique:users'],

            'password' => ['required', 'string', 'min:5'],
            
            ]);

            }else{

                $datos = request()->validate([

                'name' => ['required', 'string', 'max:255'],

                'email' => ['required', 'string', 'email'],

                'password' => ['required', 'string', 'min:5'],
            
            ]);

            }


            DB::table('users')->where('id', auth()->user()->id)->update(['name' => $datos['name'], 'email' => $datos['email'], 'password' => Hash::make($datos['password'])]);

            return redirect('datos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from users where id = '.$id);

        return redirect('usuarios');
    }
}
