<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specmodel extends Model
{
    public function specbrands()
    {
        return $this->belongsTo('App\Specbrand', 'specbrand_id','id');
    }
    public function scopeIdDescending($query)
    {
        return $query->orderBy('id','DESC');
    }
}
