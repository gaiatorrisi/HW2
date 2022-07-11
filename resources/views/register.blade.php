@extends('layout')

@section('head')
    <link rel='stylesheet' href="{{ url('css/stile.css')}}">
    <link rel='stylesheet' href="{{url('css/account.css')}}">
@parent
@endsection

@section('nav')        
    <a href="{{url('home')}}">HOME</a>
    <a href="{{url('gift-card')}}">GIFT CARD</a>
    <a href="{{url('about')}}">ABOUT US</a>
    <a href="{{url('contact-us')}}">CONTACT US</a>
@endsection

@section('header')
      <h1> Area personale </h1>
@endsection

@section('content')

  <section>
    @if($error=='empty_fields')
    <section class='error'> ⚠ Compilare tutti i campi ⚠</section>
    @elseif($error=='bad_passwords')
    <section class='error'> ⚠ Password non corrispondono ⚠</section>
    @elseif($error=='existing')
    <section class='error'> ⚠ Nome utente già esistente ⚠</section> 
    @elseif($error=='logged')
    <section class='error'> ⚠ Email già registrata nel DB ⚠</section> 
    @endif

    <main>
        <form method='post'>
            @csrf
            <label>Nome</label><br>
            <input type="text" name="nome">
            <br>

            <label>Cognome</label><br>
            <input type="text" name="cognome">
            <br>

            <label> Email</label><br>
            <input type="text" name="email">
            <br>
            <label> Username </label><br>
            <input name='username' id='username' value='{{old("username")}}'>  
            <br>
            <label> Password </label> <br>
            <input type='password'name='password' id='password' value='{{old("password")}}' pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{5,15}$" title="La password deve contenere minimo 5, massimo 15 caratteri e comprendere almeno una lettera maiuscola, una minuscola, un numero e un carattere speciale"> 
            <br>
            <label> Conferma Password </label><br><input type='password'name='conferma' id='conferma' value='{{old("conferma")}}' > 
            <br>
            <label> &nbsp; <input type='submit' name="iscrizione" id="iscrizione" value='Iscriviti'> </label>
        </form>
    </main>
    
    <div id='redirect'>
        <p>Sei già iscritto?</p>
        <a href="{{url('login')}}">Login </a>
    </div>
@endsection
