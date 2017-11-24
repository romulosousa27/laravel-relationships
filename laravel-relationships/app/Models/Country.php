<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Location;
use App\Models\State;

class Country extends Model{

    protected $fillable = ['name'];
    
    //Procura a localização do pais atraves da longitude e latitude
    public function location(){
        return $this->hasOne(Location::class);
    }
    
    public function states() {
        return $this->hasMany(State::class);
    }
}
