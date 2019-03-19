<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ban;

class BanController extends Controller
{

    public function show($id)
    {
        return Ban::find($id);
    }


    public function getall()
    {
        return Ban::all();
    }

    public function store(Request $request)
    {
        return Ban::create([
            'bannedUntil' => $request->get('bannedUntil'),
            'status' => $request->get('status'),
            'verified' => false,
        ]);
    }
}
