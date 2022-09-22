<?php

namespace App\Models;

use App\Models\Prix;
use App\Models\Medecin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    public function prix()
    {
        return $this->belongsTo(Prix::class);
    }
    public function medecins()
    {
        return $this->hasMany(Medecin::class);
    }
}
