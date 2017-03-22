<?php


namespace App;

use App\Airports;
use Illuminate\Database\Eloquent\Model;



class Countrys extends Model
{

    public function airports()
    {
        return $this->hasMany(Airports::class, 'id', 'id_countrys');
    }
}