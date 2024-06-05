<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kid extends Model
{
    use HasFactory;

    public function challenge(){
        return $this->belongsTo('App\Models/kid');
    }
}
