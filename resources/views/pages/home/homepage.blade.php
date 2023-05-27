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
                            <div class="col-lg-6 col-12">
                                <h2 class="title">{{ $anime->title }}</h2>
                                <p class="light-text">{{ $anime->release_date }}</p>
                                <p class="text">{{ $anime->studio }}</p>
                                <p class="mx-auto d-block">
                                    {{ Illuminate\Support\Str::limit($anime ->description, $limit = 80, $end = '...') }}
                                </p>
                                <a class="banner-btn mx-lg-5 mx-sm-5 d-block"
                                   href="@if (Episode::where('anime_id', $anime->id)->value('id') == null)
                            {{ route('coming-soon') }}
                            @else
                            {{ route('watching', [$anime, Episode::where('anime_id', $anime->id)->value('id')]) }}
                            @endif"
                                >PLAY NOW</a>
                            </div>
                            <div class="col-lg-6 col-12">
                                <img src="{{ asset("media/thumbnail/$anime->thumbnail") }}"
                                     class="img-fluid mx-auto d-block" alt=""/>
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
                <h2>Recently Updated <span>{{ date("F j, Y") }}</span></h2>
            </div>
            <div class="row">
                @foreach($recentAnimes as $recentAnime)
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="anime-blog px-2" style="height: 560px;">
                            <a href="@if (Episode::where('anime_id', $recentAnime->id)->value('id') == null)
                            {{ route('coming-soon') }}
                            @else
                            {{ route('watching', [$recentAnime, Episode::where('anime_id', $recentAnime->id)->value('id')]) }}
                            @endif" class="img-block">
                                <img src="{{ asset("media/thumbnail/$recentAnime->thumbnail") }}" class="img-fluid"
                                     style="width: 360px;height: 405px; border-radius: 6px" alt=""/>
                            </a>
                            <a href="@if (Episode::where('anime_id', $recentAnime->id)->value('id') == null)
                            {{ route('coming-soon') }}
                            @else
                            {{ route('watching', [$recentAnime, Episode::where('anime_id', $recentAnime->id)->value('id')]) }}
                            @endif" class="action-overlay"
                            ><i class="fal fa-play-circle"></i> Play Now</a>
                            <a href="@if (Episode::where('anime_id', $recentAnime->id)->value('id') == null)
                            {{ route('coming-soon') }}
                            @else
                            {{ route('watching', [$recentAnime, Episode::where('anime_id', $recentAnime->id)->value('id')]) }}
                            @endif" class="action-overlay"
                            ><i class="fal fa-play-circle"></i> Play Now</a>
                            <p class="text-warning m-0"><small>{{">> " . $recentAnime->imdb_rating . " <<"}}</small></p>
                            <p class="text">{{ $recentAnime->studio }}</p>
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
                        <div class="anime-blog px-2" style="height: 560px;">
                            <a href="@if (Episode::where('anime_id', $bestAnime->id)->value('id') == null)
                            {{ route('coming-soon') }}
                            @else
                            {{ route('watching', [$bestAnime, Episode::where('anime_id', $bestAnime->id)->value('id')]) }}
                            @endif" class="img-block">
                                <img src="{{ asset("media/thumbnail/$bestAnime->thumbnail") }}" class="img-fluid"
                                     style="width: 360px;height: 405px; border-radius: 6px" alt=""/>
                            </a>
                            <a href="@if (Episode::where('anime_id', $bestAnime->id)->value('id') == null)
                            {{ route('coming-soon') }}
                            @else
                            {{ route('watching', [$bestAnime, Episode::where('anime_id', $bestAnime->id)->value('id')]) }}
                            @endif" class="action-overlay"
                            ><i class="fal fa-play-circle"></i> Play Now</a>
                            <p class="text-warning m-0"><small>{{">> " . $bestAnime->imdb_rating . " <<"}}</small></p>
                            <p class="text">{{ $bestAnime->studio }}</p>
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
@endsection
