<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    public function store(Request $request){
        $entre= new Entreprise;
        $entre->NomEntreprise = $request->input("NomEntrepise");
        $entre->RC = $request->input("RC");
        $entre->Patente = $request->input("Patente");
        $entre->IF = $request->input("IF");
        $entre->ICE = $request->input("ICE");
        $entre->Email = $request->input("Email");
        $entre->Adresse = $request->input("Adresse");
        $entre->SiteWeb = $request->input("SiteWeb");
        $entre->NomPersonnel = $request->input("NomPersonnel");
        $entre->ResponsableDuService = $request->input("ResponsableServie");
        $entre->save();

        return response()->json([
            'status' => 201,
            'msg' => 'succes',
        ]);
    }
}
