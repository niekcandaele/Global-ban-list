<?php

namespace App\Http\Controllers;

use App\Game;

class GameController extends Controller
{
    public function getAll()
    {
        return Game::all();
    }
}
