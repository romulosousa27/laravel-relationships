<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Location;

class OneToOneController extends Controller{
    
    public function OneToOne(){
        $pais = Country::find(1);
        echo $pais->name . "<br>";
        
        $location = $pais->location;
        echo "Latitude: {$location->latitude}<br>";
        echo "Longitude: {$location->longitude}<br>";
    }
}
