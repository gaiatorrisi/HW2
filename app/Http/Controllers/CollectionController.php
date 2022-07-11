<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\User;
use App\Models\trattamenti;


class  CollectionController extends BaseController
{
    public function home()   
    { 
        if(!Session::get('user_id'))
        {
            return view('home')->with('username',null);

        }
        $user = User::find(Session::get('user_id'));
        return view('home')->with('username', $user->username);
    }

    public function area(){
        if(!Session::get('user_id'))
        {
            return redirect('login');
        }
        $user = User::find(Session::get('user_id'));
        return view('myaccount')->with('username', $user->username);
    }

    public function list(){
        return trattamenti::all();

    }


}