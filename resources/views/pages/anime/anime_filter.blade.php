@php use App\Models\Episode; @endphp
@extends('pages.navigation')

@section('title', 'Filter')

@section('content')
    <!--=====================================-->
    <!--=        filter Area Start          =-->
    <!--=====================================-->
    <section class="filter sec-mar">
        <div class="container">
            <form action="{{ route('filter-results') }}" method="get">
                @csrf
                <div class="d-inline-block ms-3">
                    <label class="text-white" for="genre" style="font-size: 24px;"><b>Genre:</b></label>
                    <select class="select floating" id="genre" name="genre">
                        <option></option>
                        @foreach ($genres as $genre)
                            <option value="{{ $genre->name }}">{{ $genre -> name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="d-inline-block ms-3">
                    <label class="text-white" style="font-size: 24px;" for="release_date"><b>Release Date:</b></label>
                    <select class="select floating" id="release_date" name="release_date">
                        <option></option>
                        @for ($i= 2010 ; $i <= date("Y"); $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                </div>
                <div class="d-inline-block ms-3">
                    <label class="text-white" style="font-size: 24px;" for="studio"><b>Studio:</b></label>
                    <select class="select floating" id="studio" name="studio">
                        <option></option>
                        @foreach ($animes as $anime)
                            <option value="{{$anime->studio}}">{{$anime -> studio}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="d-inline-block ms-3">
                    <label class="text-white" style="font-size: 24px;" for="category"><b>Category:</b></label>
                    <select class="select floating" id="category" name="category">
                        <option></option>
                        <option value="0">Series</option>
                        <option value="1">Single</option>
                    </select>
                </div>
                <div class="d-inline-block ms-3">
                    <label class="text-white" style="font-size: 24px;" for="status"><b>Status</b></label>
                    <select class="select floating" id="status" name="status">
                        <option></option>
                        <option value="0">On Going</option>
                        <option value="1">Completed</option>
                    </select>
                </div>
                <div class="d-inline-block ms-3">
                    <div class="header-search-box">
                        <button class="form-control" type="submit">FILTER</button>
                    </div>
                </div>
                @if ($errors->has('genre'))
                    <span class="text-danger">{{ "Please select minimum a field!" }}</span>
                @endif
            </form>
        </div>

    </section>
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
                            @endif" class="action-overlay"
                        ><i class="fal fa-play-circle"></i> Play Now</a>
                        <p class="text-warning m-0"><small>{{">> " . $anime->imdb_rating . " <<"}}</small></p>
                        <p class="text">{{ $anime->studio }}</p>
                        <a href="@if (Episode::where('anime_id', $anime->id)->value('id') == null)
                            {{ route('coming-soon') }}
                            @else
                            {{ route('watching', [$anime->id, Episode::where('anime_id', $anime->id)->value('id')]) }}
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
