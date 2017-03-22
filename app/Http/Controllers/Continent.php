<?php
/**
 * Created by PhpStorm.
 * User: marcin
 * Date: 2/21/17
 * Time: 4:54 PM
 */

namespace App\Http\Controllers;


use App\Airports;
use App\Countrys;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{

    public function countrys()
    {
        return $this->hasMany(Countrys::class, 'id_continents', 'id');
    }

}