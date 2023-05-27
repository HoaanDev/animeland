@php use App\Models\Episode; @endphp
@extends('pages.navigation')

@section('title', 'Filter Results')

@section('content')

    <!--=====================================-->
    <!--=        anime Area Start          =-->
    <!--=====================================-->
    <section class="anime sec-mar">
        <div class="container">
            <div class="row">
                @foreach($animes as $anime)
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="anime-blog">
                            <a href="@if (Episode::where('anime_id', $anime->anime_id)->value('id') == null)
                            {{ route('coming-soon') }}
                            @else
                            {{ route('watching', [$anime->anime_id, Episode::where('anime_id', $anime->anime_id)->value('id')]) }}
                            @endif" class="img-block">
                                <img src="{{ asset("media/thumbnail/$anime->thumbnail")}}" alt="">
                            </a>
                            <a href="@if (Episode::where('anime_id', $anime->anime_id)->value('id') == null)
                            {{ route('coming-soon') }}
                            @else
                            {{ route('watching', [$anime->anime_id, Episode::where('anime_id', $anime->anime_id)->value('id')]) }}
                            @endif" class="action-overlay"><i class="fal fa-play-circle"></i> Play
                                Now</a>
                            <p class="text">{{ $anime->studio }}</p>
                            <a href="@if (Episode::where('anime_id', $anime->anime_id)->value('id') == null)
                            {{ route('coming-soon') }}
                            @else
                            {{ route('watching', [$anime->anime_id, Episode::where('anime_id', $anime->anime_id)->value('id')]) }}
                            @endif">
                                <p>{{$anime -> title}}</p>
                            </a>
                        </div>

                    </div>
                @endforeach
            </div>
            <div class="pagination-wrape">
                {{$animes->links()}}
            </div>
        </div>
    </section>
@endsection
