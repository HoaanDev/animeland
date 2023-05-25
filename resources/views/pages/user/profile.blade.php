@extends('pages.navigation')

@section('title', 'Profile')

@section('content')
    <!--=====================================-->
    <!--=      Profile Area Start        =-->
    <!--=====================================-->
    <section class="profile sec-mar">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-sm-12 col-12">
                    <div class="row pb-5">
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="img-box">
                                <img src="{{ asset("media/avatar/" . auth()->user()->avatar) }}" style="width: 300px;height: 300px" alt="">
                            </div>
                        </div>
                        <div class="profile-seting col-lg-8 col-sm-6 col-12">
                            <h5>{{ auth()->user()->name }}</h5>
                            <p>{{ auth()->user()->username }}</p>
                            <p class="pb-3">{{ auth()->user()->email }}</p>
                            <a href="{{ route('profiles.edit-profile') }}" class="anime-btn btn-dark border-change">
                                EDIT YOUR PROFILE
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-0 col-sm-8 offset-sm-2 col-12">
                    <div class="profile-link bg-color-black">
                        <h5>Watch History</h5>
                        <a href="{{ route('profiles.watch-history') }}" class="pb-3">Watch History</a>
                        <h5>Following Anime</h5>
                        <a href="{{ route('profiles.following') }}" class="pb-3">Following</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
