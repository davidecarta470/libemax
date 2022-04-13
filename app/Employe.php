<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    public function stamping(){
        return $this->hasMany('App\Stamping');
    }
}
