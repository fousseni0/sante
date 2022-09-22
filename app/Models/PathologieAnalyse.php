<?php

namespace App\Models;

use App\Models\Analyse;
use App\Models\Pathologie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PathologieAnalyse extends Model
{
    public function analyse()
    {
        return $this->belongsTo(Analyse::class);
    }
    public function pathologie()
    {
        return $this->belongsTo(Pathologie::class);
    }
}
