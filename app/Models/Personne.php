<?php

namespace App\Models;

use App\Models\Utilisateur;
use App\Models\Rendezvous;
use App\Models\Specialite;
use App\Models\Departement;
use App\Models\Medecin_dispo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personne extends Model
{
   
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
    public function medecin_dispos()
    {
        return $this->hasMany(Medecin_dispo::class);
    }
}
