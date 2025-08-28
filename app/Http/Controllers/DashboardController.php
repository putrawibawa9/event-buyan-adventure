<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $total_event = \App\Models\Event::count();
        $total_penyewa = 10;
        $events = \App\Models\Event::all();
        return view('dashboard', compact('total_event', 'total_penyewa', 'events'));
    }
}
