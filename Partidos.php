<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partidos extends Model
{
    use HasFactory;

    protected $table='partidos_futbol';

    protected $primaryKey = 'idPartidos_Futbol';

    protected $fillable =  array('Fecha_enfrentamiento','Hora_enfrentamiento', 'Pais_local', 'Pais_visitante','golesv','golesl','Estadio','Arbitro','igml','igmv');
}
