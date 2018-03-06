<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $fillable = ['name'];

    public function local(){
        return $this->hasOne(Localizacao::class);
    }
    public function estados(){
        return $this->hasMany(Estado::class);
    }
}
