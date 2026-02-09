<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
Use App\Models\Alumno;

class Carrera extends Model
{
    //
    use HasFactory;
    protected $fillable = ['nombre_carrera','descripcion'];

    public function alumno(){
        return $this->hasMany(related: Alumno::class, foreignKey: 'carrera_id');
    }
}


