<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    //Entry N-1 User
    //Eager loading => optimizar tiempos de carga 
    public function user(){

        return $this->belongsTo(User::class);

    }
}
