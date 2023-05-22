@php use App\Models\Episode; @endphp
@extends('pages.navigation')

@section('title', 'Home')

@section('content')
    <!--=====================================-->
    <!--=        Banner Area Start          =-->
    <!--=====================================-->
    <section class="banner style-1 banner-slider">
        @foreach($animes as $anime)
            <div class="banner-block overflow-hidden style-1">
                <div class="container">
                    <div class="banner-content">
                        <div class="row">
                            <div class="col-lg-5 col-12">
                                <h2 class="title">{{ $anime->title }}</h2>
                                <p class="light-text">{{ $anime->release_date }}</p>
                                <p>
                                    {{ Illuminate\Support\Str::limit($anime ->description, $limit = 80, $end = '...') }}
                                </p>
                                <a class="banner-btn"
                                   href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}"
                                >PLAY NOW</a
                                >
                            </div>
                            <div class="col-lg-7 col-12">
                                <img src="{{ asset("media/thumbnail/$anime->thumbnail") }}" class="img-fluid" style="width: 360px;height: 405px; border-radius: 6px" alt=""/>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
    <!--=====================================-->
    <!--=        Recent Area Start          =-->
    <!--=====================================-->
    <section class="recent sec-mar">
        <div class="container">
            <div class="heading style-1">
                <h2>Recently Updated <span>Sunday 01 Jan 2023</span></h2>
            </div>
            <div class="row">
                @foreach($recentAnimes as $recentAnime)
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="anime-blog">
                            <a href="@if (Episode::where('anime_id', $recentAnime->id)->value('id') == null)
                            {{ route('coming-soon') }}
                            @else
                            {{ route('watching', [$recentAnime, Episode::where('anime_id', $recentAnime->id)->value('id')]) }}
                            @endif" class="img-block">
                                <img src="{{ asset("media/thumbnail/$recentAnime->thumbnail") }}" class="img-fluid" style="width: 360px;height: 405px; border-radius: 6px" alt=""/>
                            </a>
                            <a href="@if (Episode::where('anime_id', $recentAnime->id)->value('id') == null)
                            {{ route('coming-soon') }}
                            @else
                            {{ route('watching', [$recentAnime, Episode::where('anime_id', $recentAnime->id)->value('id')]) }}
                            @endif" class="action-overlay"
                            ><i class="fal fa-play-circle"></i> Play Now</a
                            >
                            <a href="@if (Episode::where('anime_id', $recentAnime->id)->value('id') == null)
                            {{ route('coming-soon') }}
                            @else
                            {{ route('watching', [$recentAnime, Episode::where('anime_id', $recentAnime->id)->value('id')]) }}
                            @endif" class="action-overlay"
                            ><i class="fal fa-play-circle"></i> Play Now</a
                            >
                            <p class="light-text">{{ $recentAnime->imdb_rating }}</p>
                            <p class="text">
                                @if($recentAnime->category == "0")
                                    {{ 'Series' }}
                                @else
                                    {{ 'Single' }}
                                @endif
                            </p>
                            <a href="@if (Episode::where('anime_id', $recentAnime->id)->value('id') == null)
                            {{ route('coming-soon') }}
                            @else
                            {{ route('watching', [$recentAnime, Episode::where('anime_id', $recentAnime->id)->value('id')]) }}
                            @endif">
                                <p>{{ $recentAnime->title }}</p>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    </section>
    <!--=====================================-->
    <!--=        Best Rating Anime Area Start =-->
    <!--=====================================-->
    <section class="popular sec-mar">
        <div class="container">
            <div class="heading style-1">
                <h2>Popular Anime</h2>
            </div>
            <div class="row">
                @foreach($bestAnimes as $bestAnime)
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="anime-blog">
                            <a href="@if (Episode::where('anime_id', $bestAnime->id)->value('id') == null)
                            {{ route('coming-soon') }}
                            @else
                            {{ route('watching', [$bestAnime, Episode::where('anime_id', $bestAnime->id)->value('id')]) }}
                            @endif" class="img-block">
                                <img src="{{ asset("media/thumbnail/$bestAnime->thumbnail") }}" class="img-fluid" style="width: 360px;height: 405px; border-radius: 6px" alt=""/>
                            </a>
                            <a href="@if (Episode::where('anime_id', $bestAnime->id)->value('id') == null)
                            {{ route('coming-soon') }}
                            @else
                            {{ route('watching', [$bestAnime, Episode::where('anime_id', $bestAnime->id)->value('id')]) }}
                            @endif" class="action-overlay"
                            ><i class="fal fa-play-circle"></i> Play Now</a
                            >
                            <p class="light-text">{{ $bestAnime->imdb_rating }}</p>
                            <p class="text">
                                @if($bestAnime->category == "0")
                                    {{ 'Series' }}
                                @else
                                    {{ 'Single' }}
                                @endif
                            </p>
                            <a href="@if (Episode::where('anime_id', $bestAnime->id)->value('id') == null)
                            {{ route('coming-soon') }}
                            @else
                            {{ route('watching', [$bestAnime, Episode::where('anime_id', $bestAnime->id)->value('id')]) }}
                            @endif">
                                <p>{{ $bestAnime->title }}</p>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=        Schedule Area Start        =-->
    <!--=====================================-->
    <section class="schedule style-1 sec-mar">
        <div class="container">
            <div class="heading style-1">
                <h2>weekly schedule</h2>
            </div>
            <div class="schedule-box">
                <div class="card">
                    <div class="card-header">
                        <ul
                            class="date-slider nav nav-tabs card-header-tabs"
                            data-bs-tabs="tabs"
                        >
                            <li class="nav-item">
                                <a
                                    class="nav-link text-center active"
                                    aria-current="true"
                                    data-bs-toggle="tab"
                                    href="#sunday"
                                >
                                    <p>jan 1</p>
                                    <h2>Sun</h2>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link text-center"
                                    aria-current="true"
                                    data-bs-toggle="tab"
                                    href="#monday"
                                >
                                    <p>jan 2</p>
                                    <h2>Mon</h2>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link text-center"
                                    aria-current="true"
                                    data-bs-toggle="tab"
                                    href="#tuesday"
                                >
                                    <p>jan 3</p>
                                    <h2>Tue</h2>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link text-center"
                                    aria-current="true"
                                    data-bs-toggle="tab"
                                    href="#wednesday"
                                >
                                    <p>jan 4</p>
                                    <h2>Wed</h2>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link text-center"
                                    aria-current="true"
                                    data-bs-toggle="tab"
                                    href="#thursday"
                                >
                                    <p>jan 5</p>
                                    <h2>thu</h2>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link text-center"
                                    aria-current="true"
                                    data-bs-toggle="tab"
                                    href="#friday"
                                >
                                    <p>jan 6</p>
                                    <h2>fri</h2>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link text-center"
                                    aria-current="true"
                                    data-bs-toggle="tab"
                                    href="#saturday"
                                >
                                    <p>jan 7</p>
                                    <h2>sat</h2>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link text-center"
                                    aria-current="true"
                                    data-bs-toggle="tab"
                                    href="#sunday"
                                >
                                    <p>jan 8</p>
                                    <h2>sun</h2>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body style-1 tab-content">
                        <div class="row justify-content-between mb-3">
                            <div class="col-lg-2 col-md-3 col-sm-3 col-0">
                                <h4>Anime Details</h4>
                            </div>
                            <div class="col-lg-8 col-md-6 col-sm-9 col-12">
                                <ul class="timer countdown text-center">
                                    <li>29<small>d</small></li>
                                    <li>23<small>h</small></li>
                                    <li>50<small>m</small></li>
                                    <li>34<small>s</small></li>
                                </ul>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-0 col-0 text-end">
                                <h4>Episode</h4>
                            </div>
                        </div>
                        <div class="tab-pane active" id="sunday">
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">12:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-1.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">Darling in the Franxx!</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 04</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">14:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-2.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">Plastic Memories</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 06</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">23:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-3.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">
                                                        That Time I Reincarnated
                                                    </p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 12</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">22:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-4.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">Assassination Classroom</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 09</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">19:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-5.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">Chainsaw Man</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 20</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">07:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-6.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">No Game No Life Zero</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Movie</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 22</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="tab-pane" id="monday">
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">12:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-2.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">Darling in the Franxx!</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 04</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">14:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-3.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">Plastic Memories</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 06</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">23:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-4.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">
                                                        That Time I Reincarnated As a Slime Season 2
                                                    </p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 12</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">22:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-5.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">Assassination Classroom</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 09</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">19:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-6.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">Chainsaw Man</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 20</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">07:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-1.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">No Game No Life Zero</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Movie</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 22</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="tab-pane" id="tuesday">
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">12:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-1.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">Darling in the Franxx!</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 04</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">14:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-2.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">Plastic Memories</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 06</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">23:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-3.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">
                                                        That Time I Reincarnated As a Slime Season 2
                                                    </p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 12</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">22:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-4.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">Assassination Classroom</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 09</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">19:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-5.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">Chainsaw Man</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 20</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">07:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-6.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">No Game No Life Zero</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Movie</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 22</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="tab-pane" id="wednesday">
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">12:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-2.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">Darling in the Franxx!</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 04</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">14:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-3.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">Plastic Memories</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 06</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">23:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-4.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">
                                                        That Time I Reincarnated As a Slime Season 2
                                                    </p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 12</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">22:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-5.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">Assassination Classroom</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 09</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">19:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-6.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">Chainsaw Man</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 20</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">07:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-1.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">No Game No Life Zero</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Movie</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 22</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="tab-pane" id="thursday">
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">12:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-1.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">Darling in the Franxx!</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 04</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">14:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-2.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">Plastic Memories</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 06</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">23:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-3.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">
                                                        That Time I Reincarnated As a Slime Season 2
                                                    </p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 12</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">22:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-4.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">Assassination Classroom</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 09</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">19:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-5.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">Chainsaw Man</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 20</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">07:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-6.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">No Game No Life Zero</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Movie</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 22</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="tab-pane" id="friday">
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">12:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-2.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">Darling in the Franxx!</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 04</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">14:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-3.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">Plastic Memories</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 06</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">23:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-4.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">
                                                        That Time I Reincarnated As a Slime Season 2
                                                    </p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 12</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">22:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-5.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">Assassination Classroom</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 09</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">19:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-6.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">Chainsaw Man</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 20</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">07:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-1.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">No Game No Life Zero</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Movie</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 22</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="tab-pane" id="saturday">
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">12:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-1.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">Darling in the Franxx!</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 04</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">14:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-2.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">Plastic Memories</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 06</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">23:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-3.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">
                                                        That Time I Reincarnated As a Slime Season 2
                                                    </p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 12</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">22:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-4.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">Assassination Classroom</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 09</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">19:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-5.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">Chainsaw Man</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0"
                                            >
                                                <p class="text text-end">Tv</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 20</p>
                                    </div>
                                </div>
                            </a>
                            <hr/>
                            <a href="{{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}">
                                <div class="row align-items-center">
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                        <p class="text">07:00</p>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end"
                                            >
                                                <img
                                                    src="media/anime-sm-img/anime-img-6.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9"
                                            >
                                                <div class="schedule-content align-middle">
                                                    <p class="small-title">No Game No Life Zero</p>
                                                    <p class="text-box">dub 8</p>
                                                    <p class="text-box">sub 12</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <p class="align col-2-middle">Movie</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0 text-end"
                                    >
                                        <p class="text">Episode 22</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
