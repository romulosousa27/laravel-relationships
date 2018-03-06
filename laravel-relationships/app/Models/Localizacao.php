<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Localizacao extends Model
{
    protected $fillable = ['latitude', 'longitude'];

    public function Pais(){
        return $this->belongsTo(Pais::class);
    }
}
