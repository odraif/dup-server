<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemandeController extends Controller
{
    public function store(Request $request)
    {


        $jsonData = $request->all();

        $userid = "";
        if ($request->is('entreprise/*')) {
            $userid = DB::table('Entreprise')->where('Email', $jsonData['Email'])->value('id');
        } else {
            $userid = DB::table('Personnel')->where('Email', $jsonData['Email'])->value('id');
        }


        $demande = new Demande;
        $demande->id_client = $userid;
        $demande->prixTotal = $jsonData['Cout'];
        $demande->Platform = collect($request['Platform'])->pluck('value');
        $demande->Needed = $jsonData['Needed']['value'];
        $demande->Npage = $jsonData['Npage']['value'];
        $demande->DegUI = $jsonData['DegUI']['value'];
        $demande->Features = collect($jsonData['Features'])->pluck('value');
        $demande->Services = collect($jsonData['Services'])->pluck('value');
        $demande->save();
    }
}
