<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kid extends Model
{
    use HasFactory; 

    public function fathers()
    {
      return $this->belongsTo('App\Models\Father');//metodo de laravel  
    }

    public function temas(){
      return $this->belongsToMany('App\Models\Temas'); 
  }
}
