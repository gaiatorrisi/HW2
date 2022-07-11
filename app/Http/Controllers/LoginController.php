<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\User;

class LoginController extends BaseController
{
    public function login_form()   
    {
        if(Session::get('user_id'))
        {
            return redirect('home');
        }
        $error = Session::get('error');
        Session::forget('error');
        return view('login')->with('error', $error);
    }
    public function do_login()
    {
        if(Session::get('user_id')) 
        {
            return redirect('home');
        }
        // validare dati
        if(strlen(request('username')) == 0 || strlen(request('password'))==0)
        {
            Session::put('error', 'empty_fields');
            return redirect('login');
        }
        $user= User::where('username', request('username'))->first();
        if(!$user || !password_verify(request('password'), $user->password))
        {
            Session::put('error', 'wrong');
            return redirect('login');
        }
        
        // login
        Session::put('user_id', $user->id);
        // home
        return redirect('home');
    }

    public function register_form()   
    {
        if(Session::get('user_id'))
        {
            return redirect('home');
        }
        $error = Session::get('error');
        Session::forget('error');
        return view('register')->with('error', $error);
    }
    public function do_register()
    {
        if(Session::get('user_id'))
        {
            return redirect('home');
        }
        // validare dati
        if(strlen(request('username')) == 0 || strlen(request('password'))==0)
        {
            Session::put('error', 'empty_fields');
            return redirect('register')->withInput();
        }
        else if(request('password')!= request('conferma')){
        Session::put('error', 'bad_passwords');
        return redirect('register')->withInput();
        }
        else if(User::where('username', request('usermane'))->first())
        {
            Session::put('error', 'existing');
            return redirect('register')->withInput();
        }
        else if(User::where('mail', request('email'))->first())
        {
            Session::put('error', 'logged');
            return redirect('register')->withInput();
        }
        // creare utente
        $user = new User;
        $user->username=request('username');
        $user->nome=request('nome');
        $user->cognome=request('cognome');
        $user->mail=request('email');
        $user->password= password_hash(request('password'), PASSWORD_BCRYPT);
        $user->save();
        // login
        Session::put('user_id', $user->id);
        // home
        return redirect('home');
    }

    public function logout()
    {
        //elimina sessione
        Session::flush();
        return redirect('home');
    }


}


