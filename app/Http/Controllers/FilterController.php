<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Anime;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FilterController extends Controller
{
    public function index()
    {
        $genres = Genre::get();
        $animes = Anime::paginate(4);

        return view('pages.anime.anime_filter', [
            'animes' => $animes,
            'genres' => $genres,
        ]);
    }
    public function filterResults(Request $request)
    {
        $genres = Genre::get();
        $search =  $request->only('q');
        if ($request->studio) {
            $animes = Anime::where('studio', 'LIKE', "%" .  $request->studio . "%")->paginate(2);
        }
        if ($request->release_date) {
            $animes = Anime::where('release_date', 'LIKE', "%" .  $request->release_date . "%")->paginate(2);
        }
        if ($request->category) {
            $animes = Anime::where('category', '=',  $request->category )->paginate(2);
        }
        if ($request->status) {
            $animes = Anime::where('status', '=',  $request->status )->paginate(2);
        }
        if ($request->genre) {
            $genreInfo = Genre::where('name', $request->genre)->get();
            $animes = DB::table('animes')
            ->join('anime_genre', 'animes.id', '=', 'anime_genre.anime_id')
            ->where('anime_genre.genre_id', '=', $genreInfo[0]->id)
            ->paginate(2);
            
        }
        if ($request->studio && $request->release_date && $request->category && $request->status) {
            $animes = Anime::where('studio', 'Like', "%" . $request->studio . "%")
                ->where('release_date', 'Like', "%" .  $request->release_date . "%")
                ->where('category', 'Like', "%" .  $request->category . "%")
                ->where('status', 'Like', "%" .  $request->status . "%")
                ->get();
        }
        if ($request->studio && $request->release_date && $request->category  && $request->genre) {
            $animes = Anime::where('studio', 'Like', "%" .  $request->studio . "%")
                ->where('release_date', 'Like', "%" .  $request->release_date . "%")
                ->where('category', 'Like', "%" .  $request->category . "%")
                ->where('genre', 'Like', "%" .  $request->genre . "%")
                ->get();
        }
        if ($request->studio && $request->release_date  && $request->status && $request->genre) {
            $animes = Anime::where('studio', 'Like', "%" .  $request->studio . "%")
                ->where('release_date', 'Like', "%" .  $request->release_date . "%")
                ->where('status', 'Like', "%" .  $request->status . "%")
                ->where('genre', 'Like', "%" .  $request->genre . "%")
                ->get();
        }
        if ($request->studio  && $request->category && $request->status && $request->genre) {
            $animes = Anime::where('studio', 'Like', "%" .  $request->studio . "%")
                ->where('category', 'Like', "%" .  $request->category . "%")
                ->where('status', 'Like', "%" .  $request->status . "%")
                ->where('genre', 'Like', "%" .  $request->genre . "%")
                ->get();
        }
        if ($request->release_date && $request->category && $request->status && $request->genre) {
            $animes = Anime::where('release_date', 'Like', "%" .  $request->release_date . "%")
                ->where('category', 'Like', "%" .  $request->category . "%")
                ->where('status', 'Like', "%" .  $request->status . "%")
                ->where('genre', 'Like', "%" .  $request->genre . "%")
                ->get();
        }
        if ($request->studio && $request->release_date && $request->category && $request->status && $request->genre) {
            $animes = Anime::where('studio', 'Like', "%" .  $request->studio . "%")
                ->where('release_date', 'Like', "%" .  $request->release_date . "%")
                ->where('category', 'Like', "%" .  $request->category . "%")
                ->where('status', 'Like', "%" .  $request->status . "%")
                ->where('genre', 'Like', "%" .  $request->genre . "%")
                ->get();
        }
        $animes->appends(['q' => $search]);
        return view('pages.anime.anime_filter_result', compact('animes'));


    }
}
