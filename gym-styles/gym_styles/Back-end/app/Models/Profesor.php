<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//Modelo que interactua con la tabla profesors de nuestra base de datos
class Profesor extends Model
{
    use HasFactory;
    protected $table='profesors';
    protected $fillable = ['Nombre', 'Asignacion', 'Horario'];
}

