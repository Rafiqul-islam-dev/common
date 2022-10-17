<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class gallary extends Model
{
    public function albumName()
    {
        return $this->belongsTo(album::class, 'album_id','id');
    }
}
