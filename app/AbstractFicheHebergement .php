<?php
/**
 * Model object generated by: Skipper (http://www.skipper18.com)
 * Do not modify this file manually.
 */

namespace App\Models\AbstractModels;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractFicheHebergement  extends Model
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
        'etablissement_id' => 'integer',
        'sexe_id' => 'integer'
    ];
    
    public function etablissement()
    {
        return $this->belongsTo('\App\Models\Etablissement', 'etablissement_id', 'id');
    }
    
    public function sexe()
    {
        return $this->belongsTo('\App\Models\sexe', 'sexe_id', 'id');
    }
    
    public function ficheNuiteeRestaurations()
    {
        return $this->hasOne('\App\Models\fiche_nuitee', 'fiche_hebergement__id', 'id');
    }
    
    public function ficheRestaurations()
    {
        return $this->hasMany('\App\Models\Fiche_restauration', 'fiche_hebergement__id', 'id');
    }
}