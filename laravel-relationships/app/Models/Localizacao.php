<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Localizacao extends Model
{
    public function Pais(){
        return $this->belongsTo(Pais::class);
    }
}
