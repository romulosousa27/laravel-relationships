<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    public function cidades(){
        return $this->belongsToMany(Cidade::class, 'empresa_cidade');
    }
}
