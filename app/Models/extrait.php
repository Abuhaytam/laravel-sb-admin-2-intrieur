<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class extrait extends Model
{
    use HasFactory;
    protected $fillable =[
        'nom',
        'prenom',
        'neLe',
        'année',
        'dateNaissance',
        'villeNaissance',
        'sexe',
        'nationalite',
        'nomPere',
        'nomMere',
        'mgd',
        'certifie',
        'bureau',
        'lieu',
        'dateSignature',

        ];
}
