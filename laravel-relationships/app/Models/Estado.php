<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    public function Pais(){
        return $this->belongsTo(Pais::class);
    }

    public function Cidades(){
        return $this->hasMany(Cidade::class);
    }
}
