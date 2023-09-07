<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mariage extends Model
{
    use HasFactory;


    protected $fillable =[
        'bureau_etat_civile',
        'type',
       ' date_registre',
       'num_registr',
       'article_registre',


        ];
}
