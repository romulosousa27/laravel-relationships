<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Location;
use App\Models\State;

class Country extends Model{

    protected $fillable = ['name'];
    
    //Procura a localização do pais atraves da longitude e latitude
    public function location(){
//      retornando apenas 1 dado vinculado a apenas 1 outro dado.
        return $this->hasOne(Location::class);
    }
    
    public function states() {
//       retorna varios dados vinculado a apenas 1. 
        return $this->hasMany(State::class);
    }
}
