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
        $searchKeywords = ($request->input('q'));
        $animes = DB::table('animes')
            ->where('title', 'LIKE', '%' . $searchKeywords . '%')
            ->paginate(8);
        $animes->appends(['q' => $searchKeywords]);
        return view('pages.anime.anime_search_results', [
            'animes' => $animes,
            'searchKeywords' => $searchKeywords,
        ]);
    }
}
