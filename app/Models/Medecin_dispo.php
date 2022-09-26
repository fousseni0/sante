<?php

namespace App\Models;

use App\Models\User;
use App\Models\Jour;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medecin_dispo extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function jour()
    {
        return $this->belongsTo(Jour::class);
    }
}
