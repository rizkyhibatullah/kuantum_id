<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    function index() : View
    {
        // Sementara Menggunakan View Template
        // Buka Komen jika ingin menggunakan dashboard real
        return view('frontend.dashboard.main.index');
        // View Template
        // return view('dashboard');
    }
}