<?php

namespace App\Models;

use App\Models\PathologieAnalyse;
use App\Models\PatientPathologie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pathologie extends Model
{
    public function pathologieAnalyses()
    {
        return $this->hasMany(PathologieAnalyse::class);
    }
    public function patientPathologies()
    {
        return $this->hasMany(PatientPathologie::class);
    }
   

}
