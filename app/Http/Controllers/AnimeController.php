<?php

namespace App\Http\Controllers;

use App\Models\Anime;
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
        return view('admin.anime.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreAnimeRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $anime = new Anime();
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
        $anime->fill($animeInfo);

        $anime->save();
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
        return view('admin.anime.detail', [
            'anime' => $anime,
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
        return redirect()->route('animes.animes');
    }
}
