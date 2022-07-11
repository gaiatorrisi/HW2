<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\User;
use App\Models\regali;
use App\Models\recensioni;
use App\Models\appuntamenti;

//CONTROLLER per gestione: RICERCA REGALI,SPAZIO RECENSIONI e SPAZIO APPUNTAMENTI
class ServiziController extends BaseController
{
    //-->RICERCA REGALI
    public function find_gift($gift){
        $gift = regali::where('tipologia',$gift)->get();
        return $gift;
    }

    public function gift_card()   
    { 
        if(!Session::get('user_id'))
        {
            return view('gift-card')->with('username',null);

        }
        $user = User::find(Session::get('user_id'));
        return view('gift-card')->with('username', $user->username);
    }

    public function review(){
        if(!Session::get('user_id'))
        {
            return view('about_us')->with('username',null);

        }
        $user = User::find(Session::get('user_id'));
        return view('about_us')->with('username', $user->username);
    }
    //-->MOSTRA RECENSIONI
    public function show_review(){
        return recensioni:: all();  
    }

    //-->AGGIUNGI RECENSIONI
    public function add_review($recensione){

        $user = User::find(Session::get('user_id'));

        $new_review= new recensioni();
        $new_review->commento =$recensione;
        $new_review->utente = $user->username;
        $new_review ->save();

        return redirect('myaccount')->with('username', $user->username);

    }

    //-->RICHIESTA APPUNTAMENTO
    public function book_appointment(){

        $new_appointment= new appuntamenti;
        $new_appointment->nome = request('identificativo');
        $new_appointment->mail= request('mail');
        $new_appointment->richiesta=request('richiesta');
        $new_appointment->tel=request('recapito');

        $new_appointment -> save();

        return redirect('home');

    }

    public function appointment(){
        if(!Session::get('user_id'))
        {
            return view('contact-us')->with('username',null);

        }
        $user = User::find(Session::get('user_id'));
        return view('contact-us')->with('username', $user->username);
    }

}

