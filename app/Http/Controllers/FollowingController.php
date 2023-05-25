<?php

namespace App\Http\Controllers;

use App\Models\Following;
use App\Http\Requests\StoreFollowingRequest;
use App\Http\Requests\UpdateFollowingRequest;

class FollowingController extends Controller
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
     * @param  \App\Http\Requests\StoreFollowingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFollowingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Following  $following
     * @return \Illuminate\Http\Response
     */
    public function show(Following $following)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Following  $following
     * @return \Illuminate\Http\Response
     */
    public function edit(Following $following)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFollowingRequest  $request
     * @param  \App\Models\Following  $following
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFollowingRequest $request, Following $following)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Following  $following
     * @return \Illuminate\Http\Response
     */
    public function destroy(Following $following)
    {
        //
    }
}
