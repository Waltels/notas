<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    
    protected $fillable = [
        
        'persona_id'
    ];
    //relacion uno a muchos
    
    public function user(){
        return $this->belongsTo(User::class, 'id', 'user_id');

    }
    public function personas(){

        return $this->hasMany(Persona::class, 'id' ,'persona_id');
    }
}
