<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Countrys;


class Airports extends Model
{
//    public function airports(){
//        return $this->belongsTo(Airports::class);
//    }

    public function foreign($string)
    {

    }

    public function kraj()
    {
        return $this->belongsTo(Countrys::class, 'id_countrys', 'id');
    }


}
