<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;
use App\Models\Estado;

class OneToManyController extends Controller
{
    public function OneToMany(){
        //$pais = Pais::where('name', 'Brasil')->get()->first();
        $pesquisa = 'a';
        $paises = Pais::where('name', 'LIKE', "%{$pesquisa}%")->get();

        foreach ($paises as $p){
            //exibindo o nome do pais.
            echo "<b> {$p->name} </b>";

            //exibindo todos os estado do pais.
            $estados = $p->estados()->get();
            foreach ($estados as $e){
                echo "<br>{$e->name} ({$e->sigla})";
            }
            echo "<hr>";
        }

    }
}
