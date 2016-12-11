<?php


namespace App;

use Illuminate\Database\Eloquent\Model;


class Panstwa extends Model
{
    public function panstwa(){
        return $this->belongsTo(Panstwa::class);
    }
}