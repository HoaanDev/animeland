@extends('pages.navigation')

@section('title', 'Following')

@section('content')

    <!--=====================================-->
    <!--=      Following Area Start        =-->
    <!--=====================================-->
    <section class="schedule style-3  sec-mar">
        <div class="container">
            <div class="heading style-1">
                <h2>FOLLOWINGS</h2>
            </div>
            <div class="row">
                <div class="col-xl-9 col-sm-12 col-12">
                    <div class="schedule-box">
                        <div class="card">
                            <div class="card-body style-1 tab-content">
                                @if(empty($followingAnimes))
                                    <div class="row justify-content-between ps-3 pe-3 pb-4">
                                        <div class="col-lg-12 col-sm-12 col-12">
                                            <p class="small-title text-center">You didn't following any anime.</p>
                                        </div>
                                    </div>
                                @else
                                    <div class="row justify-content-between ps-3 pe-3 pb-4">
                                        <div class="col-lg-12 col-sm-12 col-12">
                                            <h4 class="d-inline">Anime Details</h4>
                                        </div>
                                    </div>
                                    <div class="tab-pane active" id="later">
                                        @foreach($followingAnimes as $followingAnime)
                                            <a href="./streaming-season.html">
                                                <div class="row ps-3 pe-3">
                                                    <div class="col-xl-7 col-lg-8 col-12 col-md-7 col-sm-8">
                                                        <div class="row">
                                                            <div
                                                                class="col-lg-2 col-sm-3 col-3 ps-0 space-left pe-0 text-end">
                                                                <img
                                                                    src="{{ asset("media/thumbnail/$followingAnime->thumbnail") }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="col-lg-10 col-sm-9 col-9">
                                                                <div class="schedule-content align-middle align-middle">
                                                                    <p class="small-title">{{ $followingAnime->title }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-12 order">
                    <div class="row align-items-end">
                        <div class="col-lg-12 col-sm-8 col-6">
                            <div class="img-box">
                                <img src="{{ asset("media/avatar/". auth()->user()->avatar) }}"
                                     style="width: 300px;height: 300px" alt="">
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-6 col-6">
                            <p class="small-text">{{ auth()->user()->username }}</p>
                            <a href="{{  route('profiles.profiles') }}" class="d-inline"><h3>{{ auth()->user()->name }}</h3></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @if(empty($followingAnimes))
                @else
                    <div class="col-xl-9 col-sm-12 col-12">
                        <div class="pagination-wrape">
                            {{ $followingAnimes->links() }}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
