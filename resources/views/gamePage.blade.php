@extends('layout')

@section('title')
{{$game->name}}
@endsection
@section('meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
<div class="item">
<img class="itemImg" src="{{$game->imgURL}}" alt="">
    <div class="itemPlatform">Platforma: {{$game->platform}}</div>
    <div class="itemName">Pavadinimas: {{$game->name}}</div>
    <div class="itemPrice">Kaina: {{$game->price}} €/para</div>
    <div class="itemDescription">Aprasymas: <br> {{$game->description}}</div>
</div>
<div class="dateinput">
    Pradžia:
    <input type="date" id="startDate">
    Pabaiga:
    <input type="date" id="returnDate">
    <button class="button" onclick="getDate()">Patvirtinti</button>
</div>

@endsection
@section('jsFooter')
    <script src="css/js/js.js"></script>
    <script src = "css/js/jquery-3.3.1.js"></script>
    <script src="css/js/getDate.js"></script>
@endsection