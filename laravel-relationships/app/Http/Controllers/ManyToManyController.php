<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cidade;

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
}
