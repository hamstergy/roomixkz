<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sparepart extends Model
{
    public function scopeIdDescending($query)
    {
        return $query->orderBy('id','DESC');
    }
}
