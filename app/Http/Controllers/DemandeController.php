<?php

namespace App\Http\Controllers;

use App\Mail\demande as MailDemande;
use App\Models\Demande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class DemandeController extends Controller
{
    public function store(Request $request)
    {


        $jsonData = $request->all();
        $userid = "";


        $userid = (DB::table('Entreprise')->where('Email', $jsonData['Email'])->value('id')) ? DB::table('Entreprise')->where('Email', $jsonData['Email'])->value('id') : DB::table('Personnel')->where('Email', $jsonData['Email'])->value('id');

        $dem = [
            "client_id" => $userid,
            "client_email" => $jsonData['Email'],
        ];;

        Mail::to("dup@demande.ma")->send(new MailDemande($dem));

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
