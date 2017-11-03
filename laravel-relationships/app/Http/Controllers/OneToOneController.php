<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Location;


class OneToOneController extends Controller{
	//De acordo com pais, ele mostra duas coordenadas    
    public function OneToOne(){
        $pais = Country::find(1);
        echo $pais->name . "<br>";
        
        $location = $pais->location;
        echo "Latitude: {$location->latitude}<br>";
        echo "Longitude: {$location->longitude}<br>";
    }

	//Usando pesquisa da forma reversa - pela suas coordenadas, encontra o pais
    public function OneToOneInverse(){
    	$latitude = 798578;
    	$longitude = 321687;
    	

    	$location = Location::where('latitude', $latitude)->where('longitude', $longitude)->get()->first();
    	//echo $location->id;
    	
    	$country = $location->country;
    	/*  
    		Usando em forma de metodo
    		$country = $location->country()->get()->first();
    	 */
    	echo $country->name;
    }
}
