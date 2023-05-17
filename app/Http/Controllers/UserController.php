<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profilePage() {
        return view('user.profile');
    }

    public function editProfilePage() {
        return view('user.edit_profile');
    }
}
