<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cidade;
use App\Models\Pais;
use App\Models\Estado;
use App\Models\Comentario;

class PoliformicoController extends Controller
{
    public function poliformico(){

    }

    public function poliformicoInserir(){
        /* CIDADE
         $cidade = Cidade::where('name', 'Fortaleza')->get()->first();
        echo $cidade->name;

        $comentario = $cidade->comentarios()->create([
            'descricao' => "Novo comentario {$cidade->name}" . date('Ydm')
        ]);
        var_dump($comentario);
         */

        /* ESTADO
         $estado = Estado::where('name', 'Ceara')->get()->first();
        echo $estado->name;

        $comentario = $estado->comentarios()->create([
            'descricao' => "Novo comentario Estado {$estado->name}" . date('Ydm')
        ]);
        var_dump($comentario);
         * */


        $pais = Pais::where('name', 'Brasil')->get()->first();
        echo $pais->name;

        $comentario = $pais->comentarios()->create([
            'descricao' => "Novo comentario Estado {$pais->name}" . date('Ydm')
        ]);
        var_dump($comentario);
    }
}
