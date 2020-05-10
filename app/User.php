<?php

namespace App;

use App\Models\Models\Etablissement;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function roles()
    {
        return $this->belongsToMany('\App\Models\Role', 'user_role', 'user_id', 'role_id')
            ->withPivot('id', 'created_at', 'updated_at');
    }

    public function etablissements()
    {
        return $this->belongsTo(Etablissement::class,'etablissement_id');
    }

    public function typepiece(){
          return $this->belongsTo('\App\Models\TypePiece', 'type_piece_id', 'id');


    }

}
