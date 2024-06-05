<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    //Relacion Uno a Muchos con article
    public function article(){
        return $this->hasMany('App\Models\article');

    }

}
