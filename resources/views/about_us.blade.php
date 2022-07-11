@extends('layout')

@section('head')
    <title>About us</title>
    <script src='{{url("js/vedi_recensioni.js")}}' defer></script>
    <link rel='stylesheet' href="{{url('css/aboutus.css')}}">
@parent
@endsection

@section('nav')
  <a href="{{url('home')}}"> HOME </a>
  <a href="{{url('gift-card')}}"> GIFT CARD </a>
  @if($username!=null)
  <a href="{{url('myaccount')}}"> {{$username}}'s account </a>
  @else
  <a href="{{url('myaccount')}}"> MY ACCOUNT </a>
  @endif      
  <a href="{{url('contact-us')}}"> CONTACT US </a>
@endsection

@section('header')
  <h1>Beauty comunity</h1>
@endsection

@section('content')

  <p>Entra anche tu a farne parte e raccontaci la tua esperienza per farci sapere cosa migliorare.</p>

  <section id="RECENSIONI">
    <h1> Cosa hanno detto su di noi </h1>
    <button id="recensioni">Clicca per vedere</button>
    <section id="box_recensione">
    </section>
  </section>
@endsection