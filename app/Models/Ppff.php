<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppff extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'estudiante_id', 'nombre_apellido' ,'cipf','parentesco','telefonopf','direccionpf' 
     ];
     
     public function estudiante(){
        return $this->hasMany(Estudiante::class);
    }
}
