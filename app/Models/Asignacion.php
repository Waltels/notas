<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'docente_id', 'nivel_id', 'grado_id','area_id'
     ];

     public function nivel(){
        return $this->belongsTo(Nivel::class);
    }
    public function grado(){
        return $this->belongsTo(Grado::class);
    }
    public function area(){
        return $this->belongsTo(Area::class);
    }
    public function docente(){
        return $this->belongsTo(Docente::class);
    }
}
