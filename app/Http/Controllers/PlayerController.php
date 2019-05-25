<?php

namespace App\Http\Controllers;

use App\Player;

class PlayerController extends Controller
{
    public function find($id)
    {
        return Player::with('bans', 'bans.game', 'bans.reason')->find($id);
    }

    public function findBySteam($steamId)
    {
        return Player::where('steamId', $steamId)->first();
    }
}
