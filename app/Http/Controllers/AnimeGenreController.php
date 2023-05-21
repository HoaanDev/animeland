<?php

namespace App\Http\Controllers;

use App\Models\AnimeGenre;
use App\Http\Requests\StoreAnimeGenreRequest;
use App\Http\Requests\UpdateAnimeGenreRequest;

class AnimeGenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAnimeGenreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnimeGenreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnimeGenre  $animeGenre
     * @return \Illuminate\Http\Response
     */
    public function show(AnimeGenre $animeGenre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnimeGenre  $animeGenre
     * @return \Illuminate\Http\Response
     */
    public function edit(AnimeGenre $animeGenre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnimeGenreRequest  $request
     * @param  \App\Models\AnimeGenre  $animeGenre
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnimeGenreRequest $request, AnimeGenre $animeGenre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnimeGenre  $animeGenre
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnimeGenre $animeGenre)
    {
        //
    }
}
