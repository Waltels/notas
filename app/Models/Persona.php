<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'user_id','ci','fecha_nac','ocupacion','direccion','telefono'
    ];

    //Relacion de uno a muchos inversa
    public function admin(){
        return $this->belongsTo(Admin::class);
    }
    

    //relacion uno a muchos
    
    public function user(){

        return $this->belongsTo(User::class);
    }

    
    public function docente(){
        return $this->hasMany(Docente::class);
    }
    public function estudiante(){
        return $this->hasMany(Estudiante::class);
    }
}
