<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temas extends Model
{
    use HasFactory;

    public function kids(){
        return $this->belongsToMany('App\Models\Kid'); 
    }
}
