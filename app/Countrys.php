<?php


namespace App;

use Illuminate\Database\Eloquent\Model;


class Countrys extends Model
{
    public function countrys(){
        return $this->belongsTo(Countrys::class);
    }
}