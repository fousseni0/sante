<?php

namespace App\Models;

use App\Models\Personne;
use App\Models\Jour;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medecin_dispo extends Model
{
    public function medecin()
    {
        return $this->belongsTo(Personne::class);
    }
    public function jour()
    {
        return $this->belongsTo(Jour::class);
    }
}
