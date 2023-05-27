<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

use App\Models\Anime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'q' => [
                'required',
                'max:255',
                ],
        ]);
        $data = $request->q;
        $searchKeywords = $data;
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
