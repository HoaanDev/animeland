<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Episode;
use Illuminate\Http\Request;

class WatchingController extends Controller
{
    public function index(Anime $anime, Episode $episode)
    {
        $episodes = $anime->episodes;
        return view('pages.anime.anime_watching', [
            'anime' => $anime,
            'episodes' => $episodes,
            'episode' => $episode,
        ]);
    }
}
