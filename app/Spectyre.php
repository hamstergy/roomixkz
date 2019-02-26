<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spectyre extends Model
{
    public function spectypes()
    {
        return $this->belongsTo('App\Spectyretype', 'spectype_id','id');
    }
    public function scopeIdDescending($query)
    {
        return $query->orderBy('id','DESC');
    }
}