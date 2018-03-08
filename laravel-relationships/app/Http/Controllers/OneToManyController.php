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
        $paises = Pais::where('name', 'LIKE', "%{$pesquisa}%")->with('estados')->get();

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

    public function ManyToOne(){
        $EstadoNome = 'Ceara';
        $estado = Estado::where('name', $EstadoNome)->get()->first();
        $pais = $estado->pais;

        echo "<b>{$estado->name}</b>: {$pais->name}";
    }

    public function OneToManyCidade(){
        //$pais = Pais::where('name', 'Brasil')->get()->first();
        $pesquisa = 'a';
        $paises = Pais::where('name', 'LIKE', "%{$pesquisa}%")->with('estados')->get();

        foreach ($paises as $p){
            //exibindo o nome do pais.
            echo "<b> {$p->name} </b>";

            //exibindo todos os estado do pais.
            $estados = $p->estados()->get();
            foreach ($estados as $e){
                echo "<br>{$e->name} ({$e->sigla}): ";
                
                //recuperando a cidades do estado.
                foreach($e->cidades as $c){
                    echo "<b> {$c->name} </b>";
                }
            }
            echo "<hr>";
        }
    } 
    
    public function OneToManyInserir(){
        
        $pais = Pais::find(1);

        $data = [
            'name' => 'Santa Catarina',
            'sigla' =>  'SC'
        ];

        $pais->estados()->create($data);
    }
}
