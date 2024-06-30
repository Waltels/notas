<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'nivel','turno','gestion_id'
    ];

    //relacion uno a muchos

    public function gestion(){

        return $this->belongsTo(Gestion::class);
    }



    //relacion uno a muchos inversa

    public function grado(){
        return $this->HasMany(Grado::class);
    }

    public function estudiante(){
        return $this->hasMany(Estudiante::class);
    }
    public function asignacion(){
        return $this->hasMany(Asignacion::class);
    }
}
