<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'username' => [
                'required',
                'exists:users,username',
            ],
            'password' => [
                'required',
            ],
        ]);


        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            $userId = Auth::user()->id;
            $username = Auth::user()->username;
            session()->put('user_id', $userId);
            session()->put('username', $username);
            if (session('username') == "administrator") {
                return redirect()->route('dashboard')
                    ->withSuccess('Signed in');
        } else {
                return redirect()->route('homepage')
                    ->withSuccess('Signed in');
            }
        }
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                'max:255',
            ],
            'email' => [
                'required',
                'email',
                'unique:users',
                'max:255',
            ],
            'username' => [
                'required',
                'unique:users',
                'min:6',
                'max:255',
            ],
            'password' => [
                'required',
                'min:6',
                'max:255',
            ],
        ]);

        $data = $request->all();
        $this->create($data);

        return redirect()->route('login')->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function homePage()
    {
        if(Auth::check()){
            return view('pages.home.homepage');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
