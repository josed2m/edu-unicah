<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Alumno;

class Curso extends Model
{
    //
    use HasFactory;
    protected $fillable = ['nombre_curso','descripcion'];

    public function alumno(){
        return $this->belongsToMany(Alumno::class);
    }
}
