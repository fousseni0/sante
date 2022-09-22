<?php

namespace App\Models;

use App\Models\PathologieAnalyse;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analyse extends Model
{
    public function pathologieAnalyses()
    {
        return $this->hasMany(PathologieAnalyse::class);
    }
    
}
