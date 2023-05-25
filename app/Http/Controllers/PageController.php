<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //Home Page
    public function homePage() {
        return view('pages.home.homepage');
    }

    //Search Page
    public function searchPage() {
        return view('pages.anime.anime_search_results');
    }

    //Policy Page
    public function policyPage() {
        return view('pages.policy.policy');
    }

    //Anime Pages
    public function watchingPage() {
        return view('pages.anime.anime_watching');
    }

    //Filter Page
    public function filterPage() {
        return view('pages.anime.anime_filter');
    }

    //My Profile Pages
    public function profilePage() {
        return view('pages.user.profile');
    }

    public function editProfilePage() {
        return view('pages.user.edit_profile');
    }

    //Admin Dashboard
    public function dashboard() {
        return view('admin.dashboard');
    }

    public function comingSoon() {
        return view('pages.coming_soon');
    }
}
