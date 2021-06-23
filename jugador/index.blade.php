@extends('layouts.app')
@section('content')




<h1 class="text-dark text-center">Jugadores Populares</h1>
                        <div class="btn-group">
                            <a href="#" class="btn btn-info" >Añadir Jugador</a>
                        </div>
 <table id="mytable" class="table  table-bordred table-striped">
   <thead class="thead-dark">
     <tr>
         <th scope="col" class="text-center">Nombre</th>
         <th scope="col" class="text-center">Posicion</th>
         <th scope="col" class="text-center">Nacionalidad</th>
         <th scope="col" class="text-center">Edad</th>
         <th scope="col" class="text-center">Club</th>
         <th scope="col" class="text-center">Acciones</th>

     </tr>
   </thead>
   <tbody>
    @foreach($jugadores as $jugador)
         <tr>
             <td class=" text-primary text-center">{{$jugador->Nombre}}</td>
             <td class="text-center">{{$jugador->Posicion_de_juego}}</td>
             <td class="text-center">{{$jugador->Nacionalidad}}</td>
             <td class="text-center">{{$jugador->Edad }}</td>
             <td class="text-center">{{$jugador->Club}}</td>
             <td style="text-align: center;">
                <a href="{{ action('App\Http\Controllers\JugadorController@show', $jugador->$idJugadores_populares) }}" class="btn btn-info">Info</a>
                <a href="#" class="btn btn-info">Edit</a>
            </td>

         </tr>
     @endforeach
   </tbody>
 </table>    
@endsection