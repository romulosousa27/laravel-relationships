<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Location;

class Country extends Model{
    
    //Procura a localização do pais atraves da longitude e latitude
    public function location(){
        return $this->hasOne(Location::class);
    }
}
