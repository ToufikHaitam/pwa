<?php

namespace App;

use App\Models\Models\FicheHebergement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TypePiece extends Model
{
     public $table="typepieces";
     public function user(){

            return $this->hasOne(FicheHebergement::class, 'type_piece_id', 'id');
        
     }
}
