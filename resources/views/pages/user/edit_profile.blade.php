@extends('pages.navigation')

@section('title', 'Edit Profile')

@section('content')

    <!--=====================================-->
    <!--=      Profile Area Start        =-->
    <!--=====================================-->
    <section class="profile sec-mar">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-sm-12 col-12">
                    <div class="row pb-5">
                        <div class="col-lg-4 col-sm-12 col-12">
                            <div class="img-box">
                                <img src="media/profile/edit-profile.png" alt="">
                                <a href="#"> <i class="far fa-edit"></i> Change Profile Image</a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-12 col-12">
                            <form action="./profile.html">
                                <div class="form-group">
                                    <label>Old Name</label>
                                    <input class="form-control" type="text" name="name" required placeholder="Old Name">
                                </div>
                                <div class="form-group">
                                    <label>Old Email</label>
                                    <input class="form-control" type="email" name="email" required
                                           placeholder="email@example.com">
                                </div>
                                <button type="submit" class="anime-btn btn-dark border-change">
                                    Save Changes
                                </button>
                            </form>
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
