<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //Admin Dashboard
    public function dashboard() {
        return view('admin.dashboard');
    }

    public function comingSoon() {
        return view('pages.coming_soon');
    }
}
