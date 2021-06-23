@extends('layouts.app')
@section('content')



<h1 class="text-dark text-center">Partidos Clasificatoria</h1>
                        <div class="btn-group">
                            <a href="{{ action('App\Http\Controllers\HomeController@create') }}" class="btn btn-info" >Añadir Partido </a>
                        </div>
 <table id="mytable" class="table  table-bordred table-striped">
   <thead class="thead-dark">
     <tr>
         <th scope="col" class="text-center">Fecha</th>
         <th scope="col" class="text-center">Hora</th>
         <th scope="col" class="text-center">Bandera</th>
         <th scope="col" class="text-center">Pais</th>
         <th scope="col" class="text-center">Resultado</th>
         <th scope="col" class="text-center">Pais</th>
         <th scope="col" class="text-center">Bandera</th>
         <th scope="col" class="text-center">Acciones</th>
     </tr>
   </thead>
   <tbody>
    @foreach($partidos as $partido)
         <tr>
             <td class="text-center">{{$partido->Fecha_enfrentamiento}}</td>
             <td class="text-center">{{$partido->Hora_enfrentamiento}}</td>
             <td class="text-center"><img src="{{$partido->imgl}}" width="50" height="40"></td>
             <td class="text-center">{{$partido->Pais_local}}</td>
             <td class="text-center">{{$partido->golesl }} : {{ $partido->golesv}}</td>
             <td class="text-center">{{$partido->Pais_visitante}}</td>
             <td class="text-center"><img src="{{$partido->imgv}}" width="50" height="40"></td>
             <td style="text-align: center;">
                <a href="{{ action('App\Http\Controllers\HomeController@show', $partido->idPartidos_Futbol) }}" class="btn btn-info">Info</a>
                <a href="{{ action('App\Http\Controllers\HomeController@edit', $partido->idPartidos_Futbol) }}" class="btn btn-info">Edit</a>
            </td>

         </tr>
     @endforeach
   </tbody>
 </table>    
@endsection