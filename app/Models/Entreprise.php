<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;
    protected $table = 'Entreprise';
    protected $fillable =[
        'NomEntreprise',
        "RC",
        "Patente",
        "IF",
        "email",
        "ICE",
        "Adresse",
        "SiteWeb",
        "NomPersonnel",
        "ResponsableDuService",
    ];
}
