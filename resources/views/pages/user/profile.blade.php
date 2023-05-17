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
                                <img src="media/profile/profile.png" alt="">
                            </div>
                        </div>
                        <div class="profile-seting col-lg-8 col-sm-6 col-12">
                            <h5>XYX USER</h5>
                            <p>@username</p>
                            <p class="pb-3">youremail@example.com</p>
                            <a href="{{ route('edit-profile') }}" class="anime-btn btn-dark border-change">
                                EDIT PROFILE
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-0 col-sm-8 offset-sm-2 col-12">
                    <div class="profile-link bg-color-black">
                        <h5>Watch History</h5>
                        <a href="{{ route('watch-history') }}" class="pb-3">Watch History</a>
                        <h5>Following Anime</h5>
                        <a href="{{ route('following') }}" class="pb-3">Following</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
