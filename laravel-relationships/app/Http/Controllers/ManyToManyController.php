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
            echo "{$c->name}";
        }
    }
}
