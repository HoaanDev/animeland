<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Genre;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAnimeRequest;
use App\Http\Requests\UpdateAnimeRequest;

class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animes = Anime::get();
        return view('admin.anime.index', [
            'animes' => $animes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::get();
        return view('admin.anime.create', [
            'genres' => $genres,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreAnimeRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $genres = $request->only('genres'); // id của các genres cần lưu
        $anime = new Anime();
        $animeInfo = $request->except('_token', 'genres');
        if ($request->file('thumbnail') != '') {
            $destinationPath = 'media/thumbnail/';
            $animeInfo['thumbnail'] = $request->file('thumbnail')->getClientOriginalName();
            $file_old = $destinationPath . $animeInfo['thumbnail'];
            //code for remove old file
            if ($file_old != '' && $file_old != null) {

            } else {
                unlink($file_old);
            }

            //upload new file
            $file = $request->file('thumbnail');
            $fileName = $file->getClientOriginalName();
            $file->move($destinationPath, $fileName);

            //for update in table
        }
        $anime->fill($animeInfo);
        $anime->save();

//        dd($anime->genres()->attach($genres));
        foreach ($genres as $genre) {
            $anime->genres()->sync($genre);
        }


        return redirect()->route('animes.create');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Anime $anime
     * @return \Illuminate\Http\Response
     */
    public function show(Anime $anime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Anime $anime
     * @return \Illuminate\Http\Response
     */
    public function edit(Anime $anime)
    {

        $genres = Genre::get();
        $anime_genre = $anime->genres;
        return view('admin.anime.detail', [
            'anime' => $anime,
            'genres' => $genres,
            'anime_genre' => $anime_genre,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateAnimeRequest $request
     * @param \App\Models\Anime $anime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anime $anime)
    {
        $animeInfo = $request->except('_token');
        if ($request->file('thumbnail') != '') {
            $destinationPath = 'media/thumbnail/';
            $animeInfo['thumbnail'] = $request->file('thumbnail')->getClientOriginalName();
            $file_old = $destinationPath . $animeInfo['thumbnail'];
            //code for remove old file
            if ($file_old != '' && $file_old != null) {

            } else {
                unlink($file_old);
            }

            //upload new file
            $file = $request->file('thumbnail');
            $fileName = $file->getClientOriginalName();
            $file->move($destinationPath, $fileName);

            //for update in table
        }
        $anime->update($animeInfo);
        $genres = $request->only('genres');
        $anime_genres = $anime->genres;
        $anime->genres()->detach($anime_genres);
        foreach ($genres as $genre) {
            $anime->genres()->sync($genre);
        }
        return redirect()->route('animes.animes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Anime $anime
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anime $anime)
    {
        $anime->delete();
        $anime_genres = $anime->genres;
        $anime->genres()->detach($anime_genres);
        return redirect()->route('animes.animes');
    }
}
