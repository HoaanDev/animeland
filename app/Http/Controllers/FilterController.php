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
        $animes = Anime::paginate(6);

        return view('pages.anime.anime_filter', [
            'animes' => $animes,
            'genres' => $genres,
        ]);
    }

    public function filterResults(Request $request)
    {
        if ($request->only('q')) {
            $request = $request->only('q');
            $filter = $request;
            if ($request['q']['genre'] == null || empty($request['q']['genre'])) {
                $filter['genre'] = "";
            } else {
                $filter['genre'] = $request['q']['genre'];
            }
            if ($request['q']['release_date'] == null || empty($request['q']['release_date'])) {
                $filter['release_date'] = "";
            } else {
                $filter['release_date'] = $request['q']['release_date'];
            }
            if ($request['q']['studio'] == null || empty($request['q']['studio'])) {
                $filter['studio'] = "";
            } else {
                $filter['studio'] = $request['q']['studio'];
            }
            if ($request['q']['category'] == null || empty($request['q']['category'])) {
                $filter['category'] = "";
            } else {
                $filter['category'] = $request['q']['category'];
            }
            if ($request['q']['status'] == null || empty($request['q']['status'])) {
                $filter['status'] = "";
            } else {
                $filter['status'] = $request['q']['status'];
            }
            unset($filter['q']);
        } else {
            $filter = $request->except('_token');
            if ($filter['genre'] == null || empty($filter['genre'])) {
                $filter['genre'] = "";
            }
            if ($filter['release_date'] == null || empty($filter['release_date'])) {
                $filter['release_date'] = "";
            }
            if ($filter['studio'] == null || empty($filter['studio'])) {
                $filter['studio'] = "";
            }
            if ($filter['category'] == null || empty($filter['category'])) {
                $filter['category'] = "";
            }
            if ($filter['status'] == null || empty($filter['status'])) {
                $filter['status'] = "";
            }
        }
        if ($filter['genre'] != "") {
            $genreInfo = Genre::where('name', $filter['genre'])->get();
            $animes = DB::table('animes')
                ->join('anime_genre', 'animes.id', '=', 'anime_genre.anime_id')
                ->where('anime_genre.genre_id', '=', $genreInfo[0]->id)
                ->paginate(6);
        }
        if ($filter['release_date'] != "") {
            $animes = Anime::where('release_date', '=', $filter['release_date'])->paginate(6);
        }
        if ($filter['studio'] != "") {
            $animes = Anime::where('studio', '=', $filter['studio'])->paginate(6);
        }
        if ($filter['category'] != "") {
            $animes = Anime::where('category', '=', $filter['category'])->paginate(6);
        }
        if ($filter['status'] != "") {
            $animes = Anime::where('status', '=', $filter['status'])->paginate(6);
        }
        if ($filter['studio'] != "" && $filter['release_date'] != "" && $filter['category'] != "" && $filter['status'] != "") {
            $animes = Anime::where('studio', '=', $filter['studio'])
                ->where('release_date', '=', $filter['release_date'])
                ->where('category', '=', $filter['category'])
                ->where('status', '=', $filter['status'])
                ->paginate(6);
        }
        if ($filter['studio'] != "" && $filter['release_date'] != "" && $filter['category'] != "" && $filter['genre'] != "") {
            $animes = Anime::where('studio', '=', $filter['studio'])
                ->where('release_date', '=', $filter['release_date'])
                ->where('category', '=', $filter['category'])
                ->where('genre', '=', $filter['genre'])
                ->paginate(6);
        }
        if ($filter['studio'] != "" && $filter['release_date'] != "" && $filter['status'] != "" && $filter['genre'] != "") {
            $animes = Anime::where('studio', '=', $filter['studio'])
                ->where('release_date', '=', $filter['release_date'])
                ->where('status', '=', $filter['status'])
                ->where('genre', '=', $filter['genre'])
                ->paginate(6);
        }
        if ($filter['studio'] != "" && $filter['category'] != "" && $filter['status'] != "" && $filter['genre'] != "") {
            $animes = Anime::where('studio', '=', $filter['studio'])
                ->where('category', '=', $filter['category'])
                ->where('status', '=', $filter['status'])
                ->where('genre', '=', $filter['genre'])
                ->paginate(6);
        }
        if ($filter['release_date'] != "" && $filter['category'] != "" && $filter['status'] != "" && $filter['genre'] != "") {
            $animes = Anime::where('release_date', '=', $filter['release_date'])
                ->where('category', '=', $filter['category'])
                ->where('status', '=', $filter['status'])
                ->where('genre', '=', $filter['genre'])
                ->paginate(6);
        }
        if ($filter['studio'] != "" && $filter['release_date'] != "" && $filter['category'] != "" && $filter['status'] != "" && $filter['genre'] != "") {
            $animes = Anime::where('studio', '=', $filter['studio'])
                ->where('release_date', '=', $filter['release_date'])
                ->where('category', '=', $filter['category'])
                ->where('status', '=', $filter['status'])
                ->where('genre', '=', $filter['genre'])
                ->paginate(6);
        }
        $animes->appends(['q' => $filter]);
        return view('pages.anime.anime_filter_result', compact('animes'));
    }
}
