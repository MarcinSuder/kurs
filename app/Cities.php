<?php


namespace App;

use Illuminate\Database\Eloquent\Model;


class Cities extends Model
{
    public function city(){
        return $this->belongsTo(Cities::class);
    }
}