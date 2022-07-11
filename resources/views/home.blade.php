@extends('layout')

@section('head')
    <title>Beauty Salon</title>
    <script src='{{url("js/newsletter.js")}}' defer></script>
    <script src='{{url("js/load_dinamico.js")}}' defer></script>
    <link rel='stylesheet' href="{{ url('css/stile.css')}}">
    <link rel='stylesheet' href="{{ url('css/api.css')}}">
@parent
@endsection

@section('nav')
    <a href="{{url('gift-card')}}"> GIFT CARD </a>
    <a href="{{url('about')}}"> ABOUT US </a>
    @if($username!=null)
    <a href="{{url('myaccount')}}"> {{$username}}'s account </a>
    @else
    <a href="{{url('myaccount')}}"> MY ACCOUNT </a>
    @endif
    <a href="{{url('contact-us')}}"> CONTACT US </a>
@endsection

@section('header')
    <h1> Beauty Team </h1>
    <div id="logo">
        <img src="logo.png">
    </div>
@endsection

@section('content')
<body>
 
<section>
            <div id="descrizione">
                <h1>Vieni a scoprire tutti i nostri trattamenti!</h1>
                <p>
                    Attraverso una consulenza gratutia individueremo il trattamento più idoneo alla cura dell’inestetismo.
                </p>
            </div>
            <div class="flex-container">
            
            </div>
        </section>


        <section id="NEWSLETTER">
            <form id="form_newsletter" >
                <h4>Beauty newsletter</h4>
                <p>Iscriviti alla nostra newsletter per rimanere aggiornato su tutte le nostre promo</p>  
                <input type='text'placeholder="La tua mail migliore.."id='email_input' >
                <input type='submit' id='submit' value='Ottieni i vantaggi'>              
            </form>
            <section id="box_email">
            </section>
        </section>



        <footer>
            <div class="flex-container wrap">
                <div class="flex-item">
                        <h1>Orario</h1>
                        <p> Lunedi - Sabato </br>
                        09:30 - 20:00</p>
                        <img src='11.png'>
                </div>
                <div class="flex-item">
                        <h1>Telefono</h1>
                        <p> ☏: 095123321 </br>
                            +39 3280876234
                        </p>
                        <img src='12.png'>
                </div>
                <div class="flex-item">
                        <h1>Sede</h1>
                        <p>☞Corso Bellini 78</br> Fiumefreddo di Sicilia  </p>
                        <img src='13.png'>
                </div>
            </div>
        </footer>
    </body>
@endsection