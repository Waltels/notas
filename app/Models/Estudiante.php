<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'name', 'persona_id', 'nivel_id', 'grado_id','rude', 'estado'
     ];
     public function persona(){
         return $this->belongsTo(Persona::class);
     }
     public function nivel(){
         return $this->belongsTo(Nivel::class);
     }
     public function grado(){
         return $this->belongsTo(Grado::class);
     }
 
     public function ppff(){
         return $this->belongsTo(Ppff::class);
     }
 
 
 
     public function nota(){
         return $this->hasMany(Notas::class);
     }
}
