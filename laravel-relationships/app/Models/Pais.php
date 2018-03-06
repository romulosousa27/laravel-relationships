<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    public function local(){
        return $this->hasOne(Localizacao::class);
    }
}
