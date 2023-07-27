<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketeroController extends Controller
{
    public function ticketero()
    {
        return view('pages.ticketero');
    }
}
