<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gestion extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'gestion','estado'
    ];
    
    //relacion uno a muchos inversa

    public function nivel(){
        return $this->HasMany(Nivel::class);
    }
}
