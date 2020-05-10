<?php

namespace App\Models\Models;

use App\Nationalite;
use Illuminate\Database\Eloquent\Model;

  class  FicheHebergement  extends Model
{
    /**
     * Primary key type.
     *
     * @var string
     */
    protected $keyType = 'bigInteger';
    protected $guarded = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',

        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'etablissement_id' => 'integer',
        'sexe_id' => 'integer'
    ];

    public function etablissement()
    {
        return $this->belongsTo('\App\Models\Etablissement', 'etablissement_id', 'id');
    }

    public function sexe()
    {
        return $this->belongsTo('\App\Models\Sexe', 'sexe_id', 'id');
    }

    public function ficheNuiteeRestaurations()
    {
        return $this->hasMany(FicheNuiteeRestauration::class, 'fiche_hebergement_id', 'id');
    }

    public function nationalite(){
        $this->belongsTo(Nationalite::class);
    }

    public function fichenuittes(){

        return $this->hasMany(FicheNuitee::class);
    }

    public function ficheRestaurations()
    {
        return $this->hasMany('\App\Models\Fiche_restauration', 'fiche_hebergement_id', 'id');
    }
}
