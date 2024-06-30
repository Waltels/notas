<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notas extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'docente_id', 'estudiante_id', 'area_id','nota1' ,'nota2','nota3'
     ];

    public function docente(){
        return $this->belongsTo(Docente::class);
    }
    public function estudiante(){
        return $this->belongsTo(Estudiante::class);
    }
    public function area(){
        return $this->belongsTo(Area::class);
    }
}
