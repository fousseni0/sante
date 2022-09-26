<?php

namespace App\Models;

use App\Models\Medecin_dispo;
use App\Models\Rendezvous;
use App\Models\Specialite;
use App\Models\Departement;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function medecin_dispos()
    {
        return $this->hasMany(Medecin_dispo::class);
    }
    public function rendezvouses()
    {
        return $this->hasMany(Rendezvous::class);
    }
    public function specialite()
    {
        return $this->belongsTo(Specialite::class);
    }
    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }
}
