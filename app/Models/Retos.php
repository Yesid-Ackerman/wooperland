<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retos extends Model
{
    use HasFactory;
    public function kid(){
        return $this->hasOne('App\Models\Retos');
    }
}
