<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;
    protected $table = 'Entreprise';
    protected $filltables =[
        'NomEntreprise',
        "RC",
        "Patente",
        "IF",
        "ICE",
        "Adresse",
        "SiteWeb",
        "NomPersonnel",
        "ResponsableDuService",
    ];
}
