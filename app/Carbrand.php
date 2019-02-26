<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carbrand extends Model
{
    public function carmodels()
    {
        return $this->hasMany('App\Carmodel');
    }
    public function scopeIdDescending($query)
    {
        return $query->orderBy('id','DESC');
    }
}
