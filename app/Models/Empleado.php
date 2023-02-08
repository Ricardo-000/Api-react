<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nombre', 'apellidos', 'edad', 'sexo', 'salario', 'id_area', 'foto'];
}
