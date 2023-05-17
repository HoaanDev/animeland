<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowingController extends Controller
{
    public function followingPage() {
        return view('user.following');
    }
}
