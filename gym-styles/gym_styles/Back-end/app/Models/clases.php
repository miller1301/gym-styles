<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Modelo que interactua con la tabla _clases de nuestra base de datos
class clases extends Model
{
    use HasFactory;
    protected $table='_clases';
    protected $fillable = ['nombre', 'ID_Clase'];

}   
