<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cidade;
use App\Models\Empresa;

class ManyToManyController extends Controller
{
    public function ManyToMany(){
        $cidade = Cidade::where('name', 'Fortaleza')->get()->first();
        echo "<b>{$cidade->name}</b>: ";

        $empresas = $cidade->empresas;
        foreach ($empresas as $e){
            echo "{$e->name}";
        }
    }

    public function ManyToManyInverso(){
        $empresa = Empresa::where('name', 'Caju Flex')->get()->first();
        echo "<b>{$empresa->name}</b>: ";

        $cidades = $empresa->cidades;
        foreach ($cidades as $c){
            echo " {$c->name} ";
        }
    }

    public function ManyToManyInserir(){
        $dataForm = [2,3,4];

        $empresa = Empresa::find(1);
        echo "<b>{$empresa->name}</b>: ";

        /*
            attach() - sempre incrementa dados, repetidos ou não.
            sync() - sincroniza os dados, adcionando ou removendo.
            detach() - exclui dados, passando paramento vazios deleta todos, especificando deleta apenas esse.
        */
        //$empresa->cidades()->attach($dataForm);
        $empresa->cidades()->sync($dataForm);
        //$empresa->cidades()->detach();

        $cidades = $empresa->cidades;
        foreach ($cidades as $c){
            echo " {$c->name} ";
        }

    }
}
