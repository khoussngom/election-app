<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;
    protected $garded = [];   

    public function electeur(){
        return $this->hasMany(Electeur::class);
    }
}
