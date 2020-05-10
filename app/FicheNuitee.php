<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Model;

 class  FicheNuitee extends Model
{
    /**  
     * Primary key type.
     * 
     * @var string
     */
    protected $keyType = 'bigInteger';
    
    /**  
     * The attributes that should be cast to native types.
     * 
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'fiche_hebergement__id' => 'integer'
    ];
    
    public function ficheHebergement ()
    {
        return $this->belongsTo(FicheHebergement::class, 'fiche_hebergement_id', 'id');
    }
}
