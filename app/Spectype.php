<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spectype extends Model
{
    public function specspareparts()
    {
        return $this->hasMany('App\Specsparepart');
    }
    public function specbrands()
    {
        return $this->hasMany('App\Specbrand');
    }
    public function scopeIdDescending($query)
    {
        return $query->orderBy('id','DESC');
    }
}