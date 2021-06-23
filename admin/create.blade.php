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
        <h3 class="panel-title">Nuevo Partido</h3>
        </div>
        <div class="panel-body">
            <div class="table-container">
            <form method="POST" action="{{ route('home.store') }}" role="form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                        <div class="col-xs-6 col-sm-6 colmd-6">
                            <div class="form-group">
                                <input type="date" name="Fecha_enfrentamiento" id="Fecha_enfrentamiento" class="form-control input-sm" >
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 colmd-6">
                            <div class="form-group">
                            <input type="time" name="Hora_enfrentamiento" id="Hora_enfrentamiento" class="form-control input-sm" >
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="Pais_local" id="Pais_local" class="form-control input-sm" placeholder="Pais Local" >
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 colmd-6">
                            <div class="form-group">
                                <input type="text" name="Pais_visitante" id="Pais_visitante" class="form-control input-sm" placeholder="Pais Visitante" >
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 colmd-6">
                            <div class="form-group">
                                <input type="number" name="golesl" id="golesl" class="form-control input-sm" placeholder="Goles Locales" >
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 colmd-6">
                            <div class="form-group">
                                <input type="number" name="golesv" id="golev" class="form-control input-sm" placeholder="Goles Visitante" >
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 colmd-6">
                            <div class="form-group">
                            <input type="text" name="Estadio" id="Estadio" class="form-control input-sm" placeholder="Estadio" >
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="Arbitro" id="Arbitro" class="form-control input-sm" placeholder="arbitro" >
                    </div>
                    <div class="form-group">
                        <input accept="image/png,image/jpeg" type="file" name="imgl" id="imgl" class="form-control input-sm" >
                    </div>
                    <div class="form-group">
                        <input accept="image/png,image/jpeg" type="file" name="imgv" id="imgv" class="form-control input-sm" >
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 colmd-12">
                        <input type="submit" value="Guardar" class="btn btn-success btn-block">
                        <a href="{{ action('App\Http\Controllers\HomeController@index') }}" class="btn btn-info btn-block" >Atrás</a>
                        </div>
                    </div>
                </div>
            </form>
    </div>
    </div>
    </div>
    </div>
    </section>
@endsection