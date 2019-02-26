<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specbrand extends Model
{
    public function spectypes()
    {
        return $this->belongsTo('App\Spectype', 'spectype_id','id');
    }
    public function specmodels()
    {
        return $this->hasMany('App\Spec\Specmodel');
    }
    public function scopeIdDescending($query)
    {
        return $query->orderBy('id','DESC');
    }
}
