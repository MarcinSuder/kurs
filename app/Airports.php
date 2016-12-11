<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airports extends Model
{
    public function airports(){
        return $this->belongsTo(Airports::class);
    }
}
