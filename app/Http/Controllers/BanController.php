<?php

namespace App\Http\Controllers;

use App\Ban;
use App\Game;
use App\Player;
use App\Reason;
use Illuminate\Http\Request;
use Validator;

class BanController extends Controller
{

    public function delete($id)
    {
        Ban::destroy($id);
        $response['success'] = true;
        return $response;
    }

    public function show($id)
    {
        return Ban::find($id);
    }

    public function getAll()
    {
        return Ban::all();
    }

    public function store(Request $request)
    {
        $response = array('response' => '', 'success' => false);
        $validator = Validator::make($request->all(), [
            'bannedUntil' => 'required|after:today',
            'bannedBy' => 'required|exists:users,id',
            'player' => 'required|regex:/^[0-9]{17}$/m',
            'reason' => 'required|exists:reasons,reasonShort',
            'game' => 'required|exists:games,code',
            'proof' => 'required|string',
        ]);
        if ($validator->fails()) {
            $response['response'] = $validator->messages();
        } else {

            $player = Player::firstOrCreate(['steamId' => $request->get('player')]);

            $reason = Reason::where('reasonShort', $request->get('reason'))->first();
            $game = Game::where('code', $request->get('game'))->first();

            $createdBan = Ban::create([
                'bannedUntil' => $request->get('bannedUntil'),
                'bannedBy' => $request->get('bannedBy'),
                'verified' => false,
                'proof' => $request->get('proof'),
                'player' => $player['id'],
                'game' => $game['id'],
                'reason' => $reason['id'],
            ]);

            $response['success'] = true;
        }
        return $response;

    }
}
