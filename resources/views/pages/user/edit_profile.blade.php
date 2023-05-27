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
                                <img src="{{ asset("media/avatar/". auth()->user()->avatar) }}"
                                     style="width: 300px;height: 300px" alt="">
                                <a href="#avatar"> <i class="far fa-edit action-overlay"></i><label for="avatar">Change
                                        Profile Image</label> </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-12 col-12">
                            <form action="{{ route('profiles.update-profile', auth()->user()->id) }}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input class="form-control" type="text" name="name"
                                           value="{{ auth()->user()->name }}" required autofocus
                                           placeholder="Your Name">
                                </div>
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                                <div class="form-group">
                                    <label>Your Email</label>
                                    <input class="form-control" type="email" name="email"
                                           value="{{ auth()->user()->email }}" required
                                           placeholder="email@example.com">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <input type="file" id="avatar" name="avatar" hidden>
                                @if ($errors->has('avatar'))
                                    <span class="text-danger">{{ $errors->first('avatar') }}</span>
                                @endif
                                <button type="submit" class="anime-btn btn-dark border-change">
                                    Save Changes
                                </button>
                                <div class="panel panel-default">
                                    @if (session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif
                                </div>
                            </form>
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
