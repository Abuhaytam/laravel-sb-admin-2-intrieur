<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class deces extends Model
{
    use HasFactory;

    protected $fillable =[
        'bureau_inscription',
        'nature_insciption',
       ' année_inscription',
       'Num_inscription',
       'article',


        ];
}
