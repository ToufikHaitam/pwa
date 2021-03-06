<?php
/**
 * Model object generated by: Skipper (http://www.skipper18.com)
 * Do not modify this file manually.
 */

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Model;

 class  CategerieEtablissement extends Model
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
        'cat' => 'string'
    ];

    public function etablissements()
    {
        return $this->belongsTo('\App\Models\Etablissement');
    }
}
