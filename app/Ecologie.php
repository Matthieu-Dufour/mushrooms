<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ecologie extends Model
{
    public function mushroom()
    {
        return $this->belongsToMany('App\Mushroom');
    }

}