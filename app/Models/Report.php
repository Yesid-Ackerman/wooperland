<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    public function sugerencia(){
 return $this->hasOne('App\Models\Sugerencias');
    }
}
