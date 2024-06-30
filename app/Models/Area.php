<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'area','estado'
    ];

    public function asignacion(){
        return $this->hasMany(Asignacion::class);
    }

    public function nota(){
        return $this->hasMany(Notas::class);
    }
}
