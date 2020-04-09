<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxe extends Model
{
    public function liees()
    {
        return $this->hasMany(Taxe::class);
    }
}
