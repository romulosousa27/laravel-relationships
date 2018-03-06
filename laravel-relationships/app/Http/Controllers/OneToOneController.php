<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;
use App\Models\Localizacao;

class OneToOneController extends Controller
{
    //relacionamento 1 para 1
    public function OneToOne(){
        $pais = Pais::find(2);
        $local = $pais->local()->first();

        echo $pais->name . "<br>";
        echo "Latitude: {$local->latitude} <br>";
        echo "Longitude: {$local->longitude} <br>";
    }

    //relacionamento 1 para 1 Inverso
    public function OneToOneInverso(){
        $latitude = 12345;
        $longitude = 54321;

        $local = Localizacao::where('latitude', $latitude)
                ->where('longitude', $longitude)
                ->get()
                ->first();

        $pais =  $local->pais()->get()->first();
        echo $pais->name;
    }
}
