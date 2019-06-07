<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bristol extends Model
{
    public function children(){
        return $this->hasMany(Bristol::class, 'parent_id');
    }


}
