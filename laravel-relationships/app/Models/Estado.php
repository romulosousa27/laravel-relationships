<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $fillable = ['name', 'sigla'] ;

    public function Pais(){
        return $this->belongsTo(Pais::class);
    }

    public function Cidades(){
        return $this->hasMany(Cidade::class);
    }

    public function comentarios(){
        return $this->morphMany(Comentario::class, 'comentable');
    }
}
