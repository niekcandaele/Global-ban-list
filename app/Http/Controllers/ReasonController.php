<?php

namespace App\Http\Controllers;

use App\Reason;

class ReasonController extends Controller
{
    public function getAll()
    {
        return Reason::all();
    }
}
