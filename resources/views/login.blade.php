@extends('layout')

@section('head')
    <title> Login </title>
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
      <main>
  <!--Verifica la presenza di errori-->
   @if($error == 'empty_fields')
     <section class='error'> ⚠ Compilare tutti i campi ⚠ </section>
     @elseif($error == 'wrong')
     <section class='error'> ⚠ Credenziali non valide ⚠</section> 
    @endif
        <main>
            <form method='post'>
                @csrf
                <label> Username </label> <br> 
                <input type="text" name='username' id='username' value='{{old("username")}}'>
                <br>
                <label> Password </label><br> 
                <input type='password'name='password' id='password'>
                <br>
            
                <label> &nbsp; <input type="submit" name="submit" id="submit" value="Login" > </label>
            </form>

            <div id='redirect'>
                <p> Non sei ancora iscritto? </p> 
                <a href="{{url('register')}}">Iscriviti</a>
            </div>
        </main>
    </section>
@endsection
