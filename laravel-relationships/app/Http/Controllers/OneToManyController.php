<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;

class OneToManyController extends Controller{
    public function OneToMany(){
        //Recuperando um pais pelo nome
        $keySearch = 'a';
        $countries = Country::where('name', 'LIKE', "%{$keySearch}%")->get();
            
        /*
         * Recuperando o $state em forma de metodo ou atributo
         * A vantagem de recuperação atraves do metodo, posso ter uma busca mais precisa.
         * Metodo: $states = $country->states()->get();
         * Atributo: $states = $country->states;
         */
        foreach ($countries as $country){
            //Exibe o Nome do Pais
            echo "<b>{$country->name}</b>";
            
            //Recupera os Estados do Pais
            $states = $country->states()->get();
            
            //Exibe os estados do Pais
            foreach ($states as $state){
                echo "<br>{$state->initials} - {$state->name}";
            }
            echo "<hr>";
        }
    }
    

}
