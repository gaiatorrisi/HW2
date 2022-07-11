@extends('layout')

@section('head')
    <title>My account</title>
    <script src='{{url("js/random.js")}}' defer></script>
    <script src='{{url("js/spotify.js")}}' defer></script>
    <script src='{{url("js/aggiungi_recensione.js")}}' defer></script>
    <link rel='stylesheet' href="{{ url('css/myaccount.css')}}">
    <link rel='stylesheet' href="{{ url('css/api.css')}}">
@parent
@endsection

@section('nav')
    <a href="{{url('home')}}"> HOME </a>
    <a href="{{url('gift-card')}}"> GIFT CARD </a>
    <a href="{{url('about')}}"> ABOUT US </a>
    <a href="{{url('logout')}}"> LOGOUT </a>
    <a href="{{url('contact-us')}}"> CONTACT US</a>
@endsection

@section('content')

  <div class="typing-demo">
    <p> Welcome , {{$username}} ! ❥</p>
  </div>
  <section>

    <div id="profilo">
      <div>
        <img src="">
        <p>{{$username}}'s beauty </br> profile </p>
      </div>
    </div>
  
    <section id="RECENSIONI">
      <form id="spazio-recensioni" action="" name="spazio-rece" method="GET">
        <h1>Lascia la tua recensione</h1>
        <input type="text" place-holder="Lascia la tua recensione..." id="commento" title="">
        <input type="submit" id="submit">
      </form>
      <section id="box_recensione">
      </section>
    </section>


    <section id="SPOTIFY">
            <form id="form_musica">
                <h4>Servizio offerto da Spotify </h4>
                <p>Seleziona il tipo di trattamento che riceverai, poi inserisci un titolo.</br>
                Qui sotto visualizzerai le canzoni che potrai ascoltare in quell'intervallo di tempo:</p>
                    <select name = 'tipo' id='tipo'>
                        <option value='manicure'>Manicure (15-20 min)</option>
                        <option value='massaggio'>Massaggio(25-35 min)</option>
                        <option value='trucco'>Trucco(30-40 min)</option>
                    </select>
                <input type='text'  placeholder="Scrivi qui..." id='album'  >
                <input type='submit' id='submit'>            
            </form>
            <div class="flex-container">
                <section id="box_musica">
                </section>
            </div>
    </section>
  </section>
@endsection