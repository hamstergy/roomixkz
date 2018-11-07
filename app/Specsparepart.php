<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specsparepart extends Model
{
    public function spectypes()
    {
        return $this->belongsTo('App\Spec\Spectype', 'spectype_id','id');
    }
    public function scopeIdDescending($query)
    {
        return $query->orderBy('id','DESC');
    }
}
