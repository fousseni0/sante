<?php

namespace App\Models;

use App\Models\Medecin_dispo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jour extends Model
{
    public function medecin_dispos()
    {
        return $this->hasMany(Medecin_dispo::class);
    }
}
