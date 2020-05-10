<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class soutype extends Model
{


    public $table="sous_types";

    public function typeEtablissement ()
    {
        return $this->belongsTo('\App\Models\Type_etablissement ', 'type_etablissement__id', 'id');
    }
    
    public function etablissements()
    {
        return $this->hasOne('\App\Models\Etablissement', 'sous_type_id', 'id');
    }
}
