<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spectyretype extends Model
{
    public function spectypes()
    {
        return $this->hasMany('App\Spectypes');
    }
    public function scopeIdDescending($query)
    {
        return $query->orderBy('id','DESC');
    }
}