<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function watchingPage() {
        return view('anime.anime_watching');
    }

    public function filterPage() {
        return view('anime.anime_filter');
    }

    public function watchHistoryPage() {
        return view('anime.anime_watch_history');
    }
}
