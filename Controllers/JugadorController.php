<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jugadores;
use App\Http\Requests;

class JugadorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('soloadmin',['only'=> ['index']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        {
            $jugadores=jugadores::orderBy('idJugadores_populares')->paginate(3);
            return view('jugador.index',compact('jugadores'));
        }
    }
    public function create()
    {
        //
        return view('jugador.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[ 'Nombre'=>'required', 'Posicion_de_juego'=>'required',
        'Nacionalidad'=>'required', 'Edad'=>'required','Club'=>'required']);
        jugadores::create($request->all());
        return redirect()->route('jugador.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
    
    * @param $IdCurrency 
    * @return Response
    */

    public function show($idJugadores_populares)
    {
        {
            $jugadores = jugadores::find($idJugadores_populares);
            return view('jugador.show')->with('jugadores', $jugadores);
    
        }

    }
    /**
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($idJugadores_populares)
   {
       //
       $jugadores=jugadores::find($idJugadores_populares);
       return view('jugador.edit')->with('jugadors', $jugadores);
   }
   /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idJugadores_populares) {
        //
        $this->validate($request,[ 'Nombre'=>'required', 'Posicion_de_juego'=>'required',
        'Nacionalidad'=>'required', 'Edad'=>'required','Club'=>'required']);
        jugadores::find($ $idJugadores_populares)->update($request->all());
        return redirect()->route('/hom')->with('success','Registro actualizado
        satisfactoriamente');
        }
        /**
        * Remove the specified resource from storage.
        *
        * @param int $idzapato
        * @return \Illuminate\Http\Response
        */
    public function getJugadores()
    {
        $jugadores=jugadores::all();
        return response()->json($jugadores);
    }


}