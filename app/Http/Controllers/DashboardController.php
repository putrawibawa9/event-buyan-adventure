<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Contoh data dashboard sederhana
        $data = [
            'total_event' => 10,
            'total_penyewa' => 5,
        ];
        return view('dashboard', $data);
    }
}
