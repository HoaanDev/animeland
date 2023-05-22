<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Episode;
use Illuminate\Http\Request;

class WatchingController extends Controller
{
    public function index(Anime $anime)
    {
        $animeInfo = Anime::find($anime);
        $episodes = Episode::get($anime);
        return view('pages.anime.anime_watching', [
            'animeInfo' => $animeInfo,
            'episodes' => $episodes,
        ]);
    }
}
