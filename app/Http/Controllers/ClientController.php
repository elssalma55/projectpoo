<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compte;
use App\Models\Client2;
class ClientController extends Controller
{
    public function form_registrer (){
return view ('registrer');
}
public function form_login (){
    return view ('login');
    }
    public function traitement_registrer (Request $request){
        $request->validate(['login' => 'required|login|unique:comptes,login',
        'mot_de_passe	'=>'required|min:8',
        'nom'=>'required',
        'prenom'=>'required',
    ]);
    $client=new Client2();
    //$compte=new Compte();
    $client->nom=$request->input('nom') ;
    $client->prenom=$request->input('prenom') ;
    $client->email=$request->input('login') ;
    $client->password=bcrypt($request->input('mot_de_passe	')) ;
    $client->save();
    //$compte->save();
    return redirect('/registrer')->with('status','Votre compte a bien été crée');
        }
        
}
