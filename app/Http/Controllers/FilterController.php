<?php

namespace App\Http\Controllers;
use App\Models\Anime;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function filterPage() {
        return view('pages.anime.anime_filter');
    }
     public function index()
    {
        $animes = Anime::limit(8)->get();
       
        return view('pages.anime.anime_filter', [
            'animes' => $animes,
        ]);
    }
}
