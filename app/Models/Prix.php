<?php

namespace App\Models;

use App\Models\Departement;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prix extends Model
{
    public function departements()
    {
        return $this->hasMany(Departement::class);
    }
}
