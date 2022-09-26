<?php

namespace App\Models;

use App\Models\Prix;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    public function prix()
    {
        return $this->belongsTo(Prix::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
