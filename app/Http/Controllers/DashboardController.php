<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Analisis;

class DashboardController extends Controller
{
    public function index()
    {
        $totalAnalisis = Analisis::count();

        return view('dashboard', compact('totalAnalisis'));
    }
}
