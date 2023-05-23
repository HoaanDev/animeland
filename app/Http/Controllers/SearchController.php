<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

use App\Models\Anime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    //Search Page
    public function searchPage()
    {
        return view('pages.anime.anime_search_results');
    }

    public function index(Request $request)
    {
        $searchKeywords = explode(' ', $request->input('search'));
        $animes = DB::table('animes')
            ->where(function ($query) use ($searchKeywords) {
                foreach ($searchKeywords as $keyword) {
                    $query->orWhere('title', 'like', '%' . $keyword . '%')
                        ->orWhere('studio', 'like', '%' . $keyword . '%');
                }
            })
            ->get();
            return view('pages.anime.anime_filter', [
                'animes' => $animes,
            ]);
    }
    
}
