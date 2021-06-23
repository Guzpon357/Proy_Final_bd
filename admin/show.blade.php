@extends('layouts.app')

@section('content')


                        <div class="col-xs-6 col-sm-6 colmd-6">
                            <div class="form-group">
                                    <ul class=" list-group list-group-horizontal-lg text-center"style="text-align: center">
                                        <li class="list-group-item list-group-item-dark text-center" style="text-align: center">Fecha:</li>
                                        <li class="list-group-item text-center">{{$partidos->Fecha_enfrentamiento}}</li>
                                    </ul>
                            </div>
                            <div class="form-group">
                                <ul class=" list-group list-group-horizontal-lg text-center" style="text-align: center">
                                    <li class="list-group-item list-group-item-dark text-center" style="text-align: center">Hora:</li>
                                    <li class="list-group-item text-center">{{$partidos->Hora_enfrentamiento}}</li>
                                </ul>
                            </div>
                            <div class="form-group">
                                <ul class=" list-group list-group-horizontal-lg">
                                    <li class="list-group-item list-group-item-dark">Pais Local:</li>
                                    <li class="list-group-item">{{$partidos->Pais_local}}</li>
                                </ul>
                            </div>
                            <div class="form-group">
                                <ul class=" list-group list-group-horizontal-lg">
                                    <li class="list-group-item list-group-item-dark">Pais Visitante:</li>
                                    <li class="list-group-item">{{$partidos->Pais_visitante}}</li>
  
                                </ul>
                            </div>
                            
                            <div class="form-group">
                                <ul class=" list-group list-group-horizontal-lg">
                                    <li class="list-group-item list-group-item-dark">Estadio:</li>
                                    <li class="list-group-item">{{$partidos->Estadio}}</li>
                                </ul>
                            </div>

                            <div class="form-group">
                                <ul class=" list-group list-group-horizontal-lg">
                                    <li class="list-group-item list-group-item-dark">Arbitro:</li>
                                    <li class="list-group-item">{{$partidos->Arbitro}}</li>
                                </ul>

                            </div>
                        </div>







<a href="{{ action('App\Http\Controllers\HomeController@index') }}">Volver al índice</a>
<a href="{{ action('App\Http\Controllers\HomeController@show', $partidos->idPartidos_Futbol) }}">Recargar</a>
@stop