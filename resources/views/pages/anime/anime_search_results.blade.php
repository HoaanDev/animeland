@php use App\Models\Episode; @endphp
@extends('pages.navigation')

@section('title', 'Filter')

@section('content')
    <!--=====================================-->
    <!--=        anime Area Start          =-->
    <!--=====================================-->
    <section class="anime sec-mar">
        <div class="container">
            <div class="row">
                @foreach($animes as $anime)
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="anime-blog px-2" style="height: 560px;">
                            <a href="@if (Episode::where('anime_id', $anime->id)->value('id') == null)
                            {{ route('coming-soon') }}
                            @else
                            {{ route('watching', [$anime->id, Episode::where('anime_id', $anime->id)->value('id')]) }}
                            @endif" class="img-block">
                                <img src="{{ asset("media/thumbnail/$anime->thumbnail")}}" class="img-fluid"
                                     style="width: 360px;height: 405px; border-radius: 6px" alt="">
                            </a>
                            <a href="@if (Episode::where('anime_id', $anime->id)->value('id') == null)
                            {{ route('coming-soon') }}
                            @else
                            {{ route('watching', [$anime->id, Episode::where('anime_id', $anime->id)->value('id')]) }}
                            @endif" class="action-overlay"><i class="fal fa-play-circle"></i> Play Now</a>
                            <p class="text-warning m-0"><small>{{">> " . $anime->imdb_rating . " <<"}}</small></p>
                            <p class="text">{{ $anime->studio }}</p>
                            <a href="@if (Episode::where('anime_id', $anime->id)->value('id') == null)
                            {{ route('coming-soon') }}
                            @else
                            {{ route('watching', [$anime->id, Episode::where('anime_id', $anime->id)->value('id')]) }}
                            @endif">
                                <p>{{$anime->title}}</p>
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
