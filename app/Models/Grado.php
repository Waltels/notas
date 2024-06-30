<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'nivel_id','curso','paralelo'
    ];

    //relacion uno a muchos

    public function nivel(){

        return $this->belongsTo(Nivel::class);
    }

    public function estudiante(){
        return $this->hasMany(Estudiante::class);
    }
    public function asignacion(){
        return $this->hasMany(Asignacion::class);
    }
}
