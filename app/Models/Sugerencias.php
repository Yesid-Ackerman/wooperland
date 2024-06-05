<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sugerencias extends Model
{
    use HasFactory;

    public function report(){
        return $this->belongsTo('App\Models/Report');
    }
}
