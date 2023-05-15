<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;
    protected $table = 'Personnel';
    protected $filltables =[
        'Nom',
        "Prenom",
        "Email",
        "CIN",
        "Adresse",
        "NumTel"

    ];
}
