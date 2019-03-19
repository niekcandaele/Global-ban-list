<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Server;

class ServerController extends Controller
{
    /**
     * Display the specified server.
     *
     * @param  \App\Server  $server
     * @return \Illuminate\Http\Response
     */
    public function show($serverId)
    {
        return Server::find($serverId);
    }

    /**
     * Get all servers.
     *
     * @param  \App\Server  $server
     * @return \Illuminate\Http\Response
     */
    public function getall()
    {
        return Server::all();
    }
}
