<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partidos;
use DB;
use App\Http\Requests;

class HomeController extends Controller
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
        $partidos=partidos::orderBy('idPartidos_Futbol')->paginate(10);
        return view('admin.index',compact('partidos'));
        /**$partido = DB::table('partidos_futbol')
            ->join('seleccion_futbol','partidos_futbol.Pais_local','=','seleccion_futbo.bandera')
            ->join('seleccion_futbol','seleccion_futbol.bandera','=','partidos_futbol.Pais_visitante')
            ->select('partidos_futbol.Fecha_enfrentamiento','Pais_local.bandera','partidos_futbol.golesl','partidos_futbol.golesv','Pais_visitante.bandera')
            ->get();
        return view ('admin.index',compact('partido'));**/
    }

    public function edit($idPartidos_Futbol)
    {
    //
    $partidos=partidos::find($idPartidos_Futbol);
    return view('admin.edit',compact('partidos'));
    }
    /**
    * Update the specified resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    * @param int $idzapato
    * @return \Illuminate\Http\Response
    */

    public function update(Request $request, $idPartidos_Futbol) {
        //
        $this->validate($request,[ 'Fecha_enfrentamiento'=>'required', 'Hora_enfrentamiento'=>'required',
        'Pais_local'=>'required', 'Pais_visitante'=>'required','golesl'=>'required','golesv'=>'required',
        'Estadio'=>'required','Arbitro'=>'required']);
        partidos::find($idPartidos_Futbol)->update($request->all());
        return redirect()->route('home')->with('success','Registro actualizado
        satisfactoriamente');
        }
        /**
        * Remove the specified resource from storage.
        *
        * @param int $idzapato
        * @return \Illuminate\Http\Response
        */
    public function getPartidos()
    {
        $partidos=partidos::all();
        return response()->json($partidos);
    }
    public function show($idPartidos_Futbol)
    {
        {
            $partido = partidos::find($idPartidos_Futbol);
            return view('admin.show')->with('partidos', $partido);
    
        }

    }
    public function create()
    {
        //
        return view('admin.create');
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
        $this->validate($request,[ 'Fecha_enfrentamiento'=>'required', 'Hora_enfrentamiento'=>'required',
        'Pais_local'=>'required', 'Pais_visitante'=>'required', 'golesl'=>'required', 'golesv'=>'required',
        'Estadio'=>'required', 'Arbitro'=>'required', 'imgl'=>'required','imgv'=>'required']);
        partidos::create($request->all());
        return redirect()->route('home')->with('success','Registro creado satisfactoriamente');
    }
}
