<?php

namespace App\Http\Controllers;

use App\Mail\MyMail;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store(Request $request){

        $user = [
            "name" => $request->input("Prenom")." ".$request->input("Nom"),
            "msg" => $request->input("Message"),
            "tel" => $request->input("NumTel"),
            "email"=> $request->input("Email"),
        ];;

        Mail::to("dup@contact.ma")->send(new MyMail($user));

        $mess= new Message();
        $mess->Nom = $request->input("Nom");
        $mess->Prenom = $request->input("Prenom");
        $mess->Email = $request->input("Email");
        $mess->Tel = $request->input("NumTel");
        $mess->Message = $request->input("Message");

        $mess->save();

        return response()->json([
            'status' => 201,
            'msg' => 'succes',
        ]);
    }
}
