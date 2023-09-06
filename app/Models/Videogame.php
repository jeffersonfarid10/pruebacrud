<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videogame extends Model
{
    use HasFactory;

    //HACER QUE LOS CAMPOS DE LA TABLA SEAN ACCESIBLES
    protected $fillable = ['name', 'description', 'price', 'user_id'];


    //RELACION MUCHOS A UNO CON LA TABLA USER
    public function user(){
        return $this->belongsTo(User::class);
    }


    
}
