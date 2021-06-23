@extends('layouts.app')
@section('content')
    <div class="row">
        <section class="content">
        <div class="col-md-8 col-md-offset-2">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
            <strong>Error!</strong> Revise los campos obligatorios.<br><br>
                <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif
        @if(Session::has('success'))
            <div class="alert alert-info">
            {{Session::get('success')}}
            </div>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Partido Clasificatorio</h3>
            </div>
            <div class="panel-body">
                <div class="table-container">
                    <form method="POST" action="{{ route('home.update', $partidos->idPartidos_Futbol) }}" role="form">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" value="PATCH">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 colmd-6">
                            <div class="form-group">
                                <input type="date" name="Fecha_enfrentamiento" id="Fecha_enfrentamiento" class="form-control input-sm" value="{{$partidos->Fecha_enfrentamiento}}">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 colmd-6">
                            <div class="form-group">
                            <input type="time" name="Hora_enfrentamiento" id="Hora_enfrentamiento" class="form-control input-sm" value="{{$partidos->Hora_enfrentamiento}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="Pais_local" id="Pais_local" class="form-control input-sm" placeholder="paisl" value="{{$partidos->Pais_local}}">
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 colmd-6">
                            <div class="form-group">
                                <input type="text" name="Pais_visitante" id="Pais_visitante" class="form-control input-sm" value="{{$partidos->Pais_visitante}}">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 colmd-6">
                            <div class="form-group">
                                <input type="number" name="golesl" id="golesl" class="form-control input-sm" value="{{$partidos->golesl}}">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 colmd-6">
                            <div class="form-group">
                                <input type="number" name="golesv" id="golev" class="form-control input-sm" value="{{$partidos->golesv}}">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 colmd-6">
                            <div class="form-group">
                            <input type="text" name="Estadio" id="Estadio" class="form-control input-sm" value="{{$partidos->Estadio}}">
                            </div>
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <input type="text" name="Arbitro" id="Arbitro"class="formcontrol input-sm" placeholder="arbitro" value="{{$partidos->Arbitro}}">
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 colmd-12">
                        <input type="submit" value="Actualizar" class="btn btn-success btn-block">
                        <a href="{{ action('App\Http\Controllers\HomeController@index') }}" class="btn btn-info btn-block" >Atrás</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection