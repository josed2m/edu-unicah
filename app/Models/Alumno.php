<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Carrera;
use App\Models\Curso;

class Alumno extends Model
{
    //
    use HasFactory;
    protected $fillable = ['nombre_completo','correo_electronico','telefono','direccion','numero_cuenta','forma_ingreso'];

    public function carrera(){
        return $this->belongsTo(Carrera::class, 'carrera_id');
    }

    public function curso(){
        return $this->belongsTo(Curso::class, 'curso_id');
    }
}
