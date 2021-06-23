@extends('layouts.app')

@section('content')


                        <div class="col-xs-6 col-sm-6 colmd-6">
                            <div class="form-group">
                                    <ul class=" list-group list-group-horizontal-lg text-center"style="text-align: center">
                                        <li class="list-group-item list-group-item-dark text-center" style="text-align: center">Nombre:</li>
                                        <li class="list-group-item text-center">{{$jugadors->Nombre}}</li>
                                    </ul>
                            </div>
                            <div class="form-group">
                                <ul class=" list-group list-group-horizontal-lg text-center" style="text-align: center">
                                    <li class="list-group-item list-group-item-dark text-center" style="text-align: center">Posicion:</li>
                                    <li class="list-group-item text-center">{{$jugadors->Posicion_de_juego}}</li>
                                </ul>
                            </div>
                            <div class="form-group">
                                <ul class=" list-group list-group-horizontal-lg">
                                    <li class="list-group-item list-group-item-dark">Nacionalidad:</li>
                                    <li class="list-group-item">{{$jugadors->Nacionalidad}}</li>
                                </ul>
                            </div>
                            <div class="form-group">
                                <ul class=" list-group list-group-horizontal-lg">
                                    <li class="list-group-item list-group-item-dark">Edad:</li>
                                    <li class="list-group-item">{{$jugadors->Edad}}</li>
  
                                </ul>
                            </div>
                            
                            <div class="form-group">
                                <ul class=" list-group list-group-horizontal-lg">
                                    <li class="list-group-item list-group-item-dark">Club:</li>
                                    <li class="list-group-item">{{$jugadors->Club}}</li>
                                </ul>
                            </div>

                            
                        </div>







<a href="{{ action('App\Http\Controllers\JugadorController@index') }}">Volver al índice</a>
<a href="{{ action('App\Http\Controllers\JugadorController@show')}}">Recargar</a>
@stop