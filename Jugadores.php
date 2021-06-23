<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jugadores extends Model
{
    use HasFactory;

    protected $table='jugadores_populares';

    protected $primaryKey = 'idJugadores_populares';

    protected $fillable =  array('Nombre','Posicion_de_juego', 'Nacionalidad', 'Edad','Seleccion_Futbol_idSeleccion_Futbol','Club');
}