<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    public function commentable(){
        return $this->morphTo();
    }
}
