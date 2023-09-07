<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class citoyen extends Model
{
    use HasFactory;
    protected $fillable =[
        'nom',
        'prenom',
        'extrait_num',
        'DateNaissance',

        ];

}
