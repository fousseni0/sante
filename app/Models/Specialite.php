<?php

namespace App\Models;

use App\Models\Personne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class specialite extends Model
{
    public function personnes()
    {
        return $this->hasMany(Personne::class);
    }
}
