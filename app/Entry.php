<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Entry extends Model
{
    //Entry N-1 User
    //Eager loading => optimizar tiempos de carga 
    public function user()
    {

        return $this->belongsTo(User::class);

    }
    //mutator to define slug name
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);

    }

    public function getUrl()
    {
        return url("entries/$this->slug-$this->id");
    }
}
