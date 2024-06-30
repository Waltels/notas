<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'persona_id', 'especialidad', 'rda','item','antiguedad' 
    ];

        //relacion uno a muchos
    
        public function user(){
            return $this->belongsTo(User::class);
        }
        public function persona(){
            return $this->belongsTo(Persona::class);
        }
        

        

        public function asignacion(){
            return $this->hasMany(Asignacion::class);
        }

        public function nota(){
            return $this->hasMany(Notas::class);
        }
}
