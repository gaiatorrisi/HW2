@extends('layout')

@section('head')
  <title>Contatti</title>
  <link rel='stylesheet' href="{{ url('css/contatti.css')}}">
  <link rel='stylesheet' href="{{ url('css/stile.css')}}">
@parent
@endsection

@section('nav')
      <a href="{{url('home')}}"> HOME </a>
      <a href="{{url('about')}}"> ABOUT US </a>
      <a href="{{url('gift-card')}}">GIFT CARD</a>
      @if($username!=null)
      <a href="{{url('myaccount')}}"> {{$username}}'s account </a>
      @else
      <a href="{{url('myaccount')}}"> MY ACCOUNT </a>
      @endif
      @endsection

@section('header')
  <h1>Rimaniamo in contatto</h1>
@endsection

@section('content')
    <section>
      <p>
      Lo staff del centro è professionale, gentile e disponibile, in grado di mettere a proprio agio </br>
      qualsiasi tipologia di cliente e di soddisfare qualsiasi richiesta, con risultati professionali </br>
      eccellenti. Il centro è aperto dalle 9:30 alle 20 ed è possibile prenotare una seduta </br>
      telefonicamente o recarsi presso la struttura in Corso Bellini 78, a Fiumefreddo per </br>
      chiedere una consulenza direttamente alla titolare e al suo staff </br>
      </p>

      <div class="container">  

        <form id='contact' action=''  method='post'>
        @csrf
        <label>
              <input placeholder="Nome e cognome" type="text" name="identificativo">
            </label>
            <label>
              <input placeholder="Email" type="email" name="mail" >
            </label>
            <label>
              <input placeholder="Numero di telefono " type="tel" name="recapito">
            </label>
            <label>
              <textarea placeholder="Il tuo messaggio.." name="richiesta"></textarea>
            </label>
            <label> &nbsp;
              <input name="submit" type='submit' value="Invia richiesta" id="sumbit">
            </label>
        </form>
      </div>
    </section>
@endsection