<?php

namespace App\Models;

use App\Models\Personne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendezvous extends Model
{
    
    public function personne()
    {
        return $this->belongsTo(Personne::class);
    }
    
   
}
