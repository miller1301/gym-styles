<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//Modelo que interactua con la tabla horario de nuestra base de datos
class Horario extends Model
{
    use HasFactory;
    protected $table='horario';
    protected $fillable = ['nombre', 'dia', 'hora_inicio', 'hora_fin'];
}
