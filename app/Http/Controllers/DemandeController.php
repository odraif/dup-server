<?php

namespace App\Http\Controllers;
use App\Models\Demande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemandeController extends Controller
{
    public function store(Request $request){

        $userid = "";
        if ($request->is('entreprise/*')) {
            $userid =DB::table('Entreprise')->where('Patente',$request->input("Patente"))->value('id');
        }else{
            $userid =DB::table('Personnel')->where('CIN',$request->input("CIN"))->value('id');
        }

        $demande = new Demande;
        $demande->id_client = $userid;
        $demande->prixTotal = $request->input("Cout");
        $demande->Platform = $request->input("Platform");
        $demande->Needed = $request->input("Needed");
        $demande->Npage = $request->input("Npage");
        $demande->DegUI = $request->input("DegUI");
        $demande->Features = $request->input("Features");
        $demande->Services = $request->input("Services");
        $demande->save();
    }
}
