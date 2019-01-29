@extends('layout')

@section('title')
    Pagrindinis
@endsection

@section('content')
@foreach ($games as $game)
<a class="gameLink" href="game_id={{$game->id}}">
    <div class="item">
    <img class="itemImg" src="{{$game->imgURL}}" alt="">
    <div class="itemPlatform">{{$game->platform}}</div>
    <div class="itemName">{{$game->name}}</div>
        <div class="itemPrice">{{$game->price}} €/para</div>
    </div>
</a>    
@endforeach
@endsection
@section('jsFooter')
    <script src="css/js/js.js"></script>
    <script src = "css/js/jquery-3.3.1.js"></script>
    <script src="css/js/getDate.js"></script>
@endsection