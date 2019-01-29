<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class GamesController extends Controller
{
    public function index() {

        $games = Game::all();

        return view('index', compact('games'));
    }

    public function renderGame($id) {
        $game = Game::where('id','=',$id)->first();
        

        return view('gamePage', compact('game'));
    }
}
