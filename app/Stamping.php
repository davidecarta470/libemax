<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stamping extends Model
{
    public function employe(){

        return $this->belongTo('App\Employe');
    }
}
