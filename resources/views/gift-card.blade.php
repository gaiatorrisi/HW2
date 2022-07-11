@extends('layout')

@section('head')
  <title>Gift Card</title>
  <script src='{{url("js/regali.js")}}' defer></script>
  <link rel='stylesheet' href="{{url('css/regalo.css')}}">
@parent
@endsection

@section('nav')
  <a href="{{url('home')}}"> HOME </a>
  <a href="{{url('about')}}"> ABOUT US </a>
  @if($username!=null)
  <a href="{{url('myaccount')}}"> {{$username}}'s account </a>
  @else
  <a href="{{url('myaccount')}}"> MY ACCOUNT </a>
  @endif
  <a href="{{url('contact-us')}}"> CONTACT US</a>
@endsection

@section('header')
  <h1>Regala benessere</h1>
@endsection

@section('content')
  <p>Le Gift Card sono l’ideale per chi desidera regalare momenti indimenticabili di relax e di benessere.</p>

  <section>
    <div class="flex-container">
        <div class="base">
                <div>
                    <img src="one.png" />
                </div>
        </div>
        <div class="base">
                <div>
                    <img src="2.png" />
                </div>
        </div>
        <div class="base">
                <div>
                    <img src="3.png" />
                </div>
        </div>
    </div>

    <p>Cerca qui la card per conoscere tutte le info</p>
    <form id="barra-ricerca" method="get">

        <input type="text" id="ricerca_regalo"></input>
        
        <input type='submit' id="submit"></input>
    </form>
    
    <section id="box_ricerca">
    </section>
  </section>
@endsection