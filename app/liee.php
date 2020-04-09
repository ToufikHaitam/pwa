<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class liee extends Model
{
    protected $fillable = ['email', 'url', 'taxe_id'];
    public function taxe()
    {
        return $this->belongsTo(Taxe::class);
    }
}
