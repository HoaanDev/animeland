@php use App\Models\Anime; @endphp
@extends('pages.navigation')

@section('title', 'Watch History')

@section('content')
    <!--=====================================-->
    <!--=      schedule Area Start        =-->
    <!--=====================================-->
    <section class="schedule style-3 sec-mar ">
        <div class="container">
            <div class="heading style-1">
                <h2>Watch History</h2>
            </div>
            <div class="row">
                <div class="col-xl-9 col-sm-12 col-12 mb-3">
                    <div class="schedule-box">
                        <div class="card">
                            <div class="card-body style-1 tab-content">
                                <div class="row justify-content-between ps-3 pe-3 pb-4">
                                    @if(session('watched') != null)
                                        <div class="col-lg-6 col-sm-6 col-12">
                                            <h4 class="d-inline">Anime Details</h4>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-0 text-end">
                                            <h4 class="d-inline">Episode</h4>
                                        </div>
                                </div>
                                <div class="tab-pane active" id="today">
                                    @foreach(session()->get('watched') as $episode)
                                            @php
//                                            dd(count(session()->get('watched')));
//                                            dd(session()->get('watched'));
//                                                dd($anime = Anime::where('id', $episode->get('anime_id'))->get());
                                                $anime = Anime::where('id', $episode->get('anime_id'))->get();
//                                            dd($anime[0]->title);
                                            @endphp
                                            <a href="./streaming-season.html">
                                                <div class="row ps-3 pe-3">
                                                    <div class="col-xl-7 col-lg-8 col-12 col-md-7 col-sm-8">
                                                        <div class="row">
                                                            <div
                                                                class="col-lg-2 col-sm-3 col-3 ps-0 space-left pe-0 text-end">
                                                                <img src="{{ asset("media/thumbnail/". $anime[0]->thumbnail) }}"
                                                                     alt="">
                                                            </div>
                                                            <div class="col-lg-10 col-sm-9 col-9">
                                                                <div class="schedule-content align-middle align-middle">
                                                                    <p class="small-title">{{ $anime[0]->title }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class=" col-xl-5 col-lg-4 col-md-5 col-sm-4 col-0 space-top text-end">
                                                        <p class="d-inline">
                                                            {{ $episode->get('name') }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                    @endforeach
                                    @else
                                        <p class="text-lg-center">You didn't watch any anime.</p>
                                    @endif
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-12 order mb-3">
                    <div class="row align-items-end">
                        <div class="col-lg-12 col-sm-8 col-6">
                            <div class="img-box">
                                <img src="{{ asset("media/avatar/". auth()->user()->avatar) }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-6 col-6">
                            <p class="small-text">{{ auth()->user()->username }}</p>
                            <a href="./profile.html" class="d-inline"><h3>{{ auth()->user()->name }}</h3></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
