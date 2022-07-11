<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\User;

class APIController extends BaseController
{
    public function check($email){
        $api_key='3086e7c9829545d48f981f22c27d8588';

       // $email=urlencode($email);
        $url ='https://emailvalidation.abstractapi.com/v1/?api_key='.$api_key.'&email='.$email.'';
        ///Richiesta token
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //Eseguo controllo
        $res= curl_exec($ch);
       // $json = json_decode($res, true);
        curl_close($ch);

        return $res;

    }

    public function search($canzone){
        $client_id='554bf23a4ecd4f60886d443ef0da857b';
        $client_secret = '0a7184b98d2f468e94c592b81f8d4e6e';

        //Richiesta token
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://accounts.spotify.com/api/token' );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //Eseguo post 
        curl_setopt($ch, CURLOPT_POST, 1);
        //Body
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'grant_type=client_credentials'); 
        //Header
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Basic '.base64_encode($client_id.':'.$client_secret))); 

        $token=json_decode(curl_exec($ch), true);
        curl_close($ch);    
        
        //Eseguo ricerca
        //$canzone=urlencode($canzone);
        $url = 'https://api.spotify.com/v1/search?type=track&q=' .$canzone;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //Header e token
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$token['access_token'])); 
        $res =(curl_exec($ch));

        curl_close($ch);
        return $res;


    }
}
