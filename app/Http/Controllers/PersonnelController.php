<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    public function store(Request $request){
        $person = new Personnel;
        $person->Nom = $request->input("Nom");
        $person->Prenom = $request->input("Prenom");
        $person->Email = $request->input("Email");
        $person->NumTel = $request->input("NumTel");
        $person->ville = $request->input("Ville");
        $person->save();

        return response()->json([
            'status' => 201,
            'msg' => 'succes',
        ]);
    }
}
