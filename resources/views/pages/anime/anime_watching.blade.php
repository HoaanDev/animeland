@extends('pages.navigation')

@section('title', "Watching")

@section('content')

    <!--=====================================-->
    <!--=         video Area Start          =-->
    <!--=====================================-->
    <section class="video sec-mar">
        <div class="container">
            <div class="row">
                <div class=" col-lg-9 col-sm-8 col-12">
                    <div class="video-box">
                        <video width="320" height="240" controls autoplay>
                            <source src="{{ asset("media/video/$episode->video_url") }}" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-12">
                    <ul class="video-sidebar overflow-auto">
                        @foreach($episodes as $episodeInfo)
                            <li>
                                <a href="{{ route('watching', [$anime, $episodeInfo]) }}"
                                   class="active">{{ $episodeInfo->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="video-content bg-color-black">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <p>You're watching <b>{{ $episode->name }}</b></p>
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-12">
                    </div>
                    <div class="col-lg-3 offset-lg-0">
                        <div class="align-middle actions">
                            {{--                            <a href="" class="anime-btn btn-dark border-change mb-2">DOWNLOAD NOW</a>--}}
                            {{--                            <p class="text">RATING: 7.8 <b>/10</b></p>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-4 col-sm-6 col-12">
                            <div class="trailer-box">
                                <img src="{{ asset("media/thumbnail/$anime->thumbnail") }}" alt="" class="image">
                                {{--                                <div class="overlay">--}}
                                {{--                                    <a href="#" class="icon" data-bs-toggle="modal" data-bs-target="#videoModal"><i--}}
                                {{--                                            class="fas fa-play"></i></a>--}}
                                {{--                                    <p>Watch Trailer</p>--}}
                                {{--                                </div>--}}
                            </div>
                            {{--                            <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-hidden="true">--}}
                            {{--                                <div class="modal-dialog" role="document">--}}
                            {{--                                    <div class="modal-content">--}}
                            {{--                                        <div class="modal-body">--}}
                            {{--                                            <iframe style="border: 0;width: 100%;height: 350px;"--}}
                            {{--                                                    src="https://www.youtube.com/embed/6R6q2fAp2n4"--}}
                            {{--                                                    title="Suzume no Tojimari - Official Trailer 2 | English Sub"--}}
                            {{--                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"--}}
                            {{--                                                    allowfullscreen></iframe>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                        </div>
                        <div class="col-lg-6 col-md-8 col-sm-6 col-12">
                            <div class="trailer-content">
                                <h2>{{ $anime->title }}</h2>
                                {{--                                <p class="light-text">Season 06</p>--}}
                                <div class="dropdown">
                                    <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown">
                                        <svg width="32" height="22" viewBox="0 0 32 22" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.145264" y="0.00012207" width="21.4395" height="2.68125"
                                                  rx="1.34062" fill="#999999"/>
                                            <rect x="0.145264" y="7.41272" width="21.4395" height="2.68125"
                                                  rx="1.34062" fill="#999999"/>
                                            <rect x="0.145264" y="14.8258" width="16.4914" height="2.68125"
                                                  rx="1.34062" fill="#999999"/>
                                            <path
                                                d="M19.8784 16.0712C19.8784 15.4163 20.4093 14.8854 21.0642 14.8854H30.2463C30.9011 14.8854 31.432 15.4163 31.432 16.0712C31.432 16.7261 30.9011 17.257 30.2463 17.257H21.0642C20.4093 17.257 19.8784 16.7261 19.8784 16.0712Z"
                                                fill="#999999"/>
                                            <path
                                                d="M25.6552 22.0001C25.0171 22.0001 24.4999 21.4828 24.4999 20.8447V11.2977C24.4999 10.6596 25.0171 10.1423 25.6552 10.1423C26.2933 10.1423 26.8106 10.6596 26.8106 11.2977V20.8447C26.8106 21.4828 26.2933 22.0001 25.6552 22.0001Z"
                                                fill="#999999"/>
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu bg-color-black pt-3 pb-3 ps-3 pe-3">
                                        <li>
                                            <a href="" class="none"><i class="fa fa-check"></i> Following </a>
                                        </li>
                                        {{--                                        <li>--}}
                                        {{--                                            <a href=""><i class="fas fa-plus"></i> Add to Playlist </a>--}}
                                        {{--                                        </li>--}}
                                    </ul>
                                </div>
                                {{--                                <h3>Plot Summary</h3>--}}
                                <p>{{ $anime->description }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="rating-content">
                                <h4>RATE THE SHOW</h4>
                                <p>YOUR RATING: <b>_/10</b></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="rating-content">
                                <h4>IMDB RATING</h4>
                                <p>RATING: <span>{{ $anime->imdb_rating }}</span> <b>/10</b></p>
                            </div>
                        </div>
                        {{--                        <div class="col-md-4 col-sm-6 col-12">--}}
                        {{--                            <div class="rating-content">--}}
                        {{--                                <h4>ROTTEN TOMATO RATING</h4>--}}
                        {{--                                <p>RATING: <span>8.8</span> <b>/10</b></p>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="trailer-content">
                        <h3>Anime Detail</h3>
                        <p><span>Category:</span> <b>@if($anime->category == "0")
                                    {{ 'Series' }}
                                @else
                                    {{ 'Single' }}
                                @endif</b></p>
                        <p><span>Studio:</span> <b> {{ $anime->studio }}</b></p>
                        <p><span>Release Date:</span> {{ $anime->release_date }}</p>
                        <p><span>Status:</span> <b>@if($anime->status == "0")
                                    {{ 'On Going' }}
                                @else
                                    {{ 'Completed' }}
                                @endif</b></p>
                        <p><span>Genre:</span></p>
                        <p><span>Duration:</span> {{ $anime->duration }} min</p>
                        {{--                        <p><span>Scores:</span> 2.53 by 4,405 reviews</p>--}}
                        {{--                        <p><span>Premiered:</span> Winter 2023</p>--}}
                        {{--                        <p><span>Duration:</span> 24 min</p>--}}
                        {{--                        <p><span>Views:</span> 18,284</p>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=         Comment Area Start        =-->
    <!--=====================================-->
    <section class="comment sec-mar">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="comment-block">
                        <div class="heading style-1 m-0">
                            <h2>COMMENTS</h2>
                        </div>
                        <p>We hope you have a good time browsing the comment section! <br>
                            Please read our <a href="./comments.html">Comment Policy</a> before commenting.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-2">
                            <img src="{{ asset("media/avatar/". auth()->user()->avatar)}}" alt="">
                        </div>
                        <div class="col-lg-11 col-10">
                            <form action="{{ route('comment.store') }}" method="post">
                                @csrf
                                <div class="input-group form-group footer-email-box">
                                    <input type="hidden" name="anime_id" value="{{ $anime->id }}">
                                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                    <input class="form-control" type="text" name="content"
                                           placeholder="Comment here">
                                    <input type="hidden" name="episode" value="{{ $episode->id }}">
                                    <button class="input-group-text post-btn" type="submit">Comment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="site-comment">
                        @foreach($comments as $comment)

                            <div class="row">
                                <div class="col-lg-1 col-2">
                                    <img src="{{ asset("media/avatar/$usersInfo->avatar")}}"
                                         alt="">
                                </div>

                                <div class="col-lg-10 col-8">
                                    <h5>{{ $usersInfo->name }}</h5>
                                    <p> {{ $comment->content }}
                                    </p>
                                    {{--                                    <a href="" class="comment-btn"><i class="fa fa-thumbs-up"></i></a>--}}
                                    {{--                                    <a href="" class="comment-btn"><i class="fa fa-thumbs-down"></i></a>--}}
                                    {{--                                    <button class=" accordion-button comment-btn" data-bs-toggle="collapse"--}}
                                    {{--                                            data-bs-target="#reply1" aria-expanded="true">Reply--}}
                                    {{--                                    </button>--}}
                                    {{--                                    <div id="reply1" class="accordion-collapse collapse "--}}
                                    {{--                                         data-bs-parent="#accordionExample">--}}
                                    {{--                                        <div class="card card-body">--}}
                                    {{--                                            <div class="d-flex pt-3">--}}
                                    {{--                                                <a href="./profile.html"><img--}}
                                    {{--                                                        src="media/comment/comment-img-sm-2.png" alt=""></a>--}}
                                    {{--                                                <input type="text" placeholder="Add a reply">--}}
                                    {{--                                            </div>--}}
                                    {{--                                            <div class="text-end">--}}
                                    {{--                                                <button class="comment-btn">Cencel</button>--}}
                                    {{--                                                <button class="comment-btn active">Reply</button>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                </div>
                                <div class="col-lg-1 col-2">
                                    <form action="{{ route('comment.destroy', $comment) }}" method="post"
                                          class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-transition btn btn-outline-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
{{--                        <div class="text-center">--}}
{{--                            <a href="#" class="comment-btn">Load More Comment</a>--}}
{{--                        </div>--}}
                        <hr>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 offset-lg-0 offset-md-3 offset-sm-2 mt-lg-0 mt-3">
                    <h3 class="small-title">SIMILAR ANIME</h3>
                    <div class="anime-box bg-color-black">
                        <a href="streaming-season.html">
                            <div class="row m-0">
                                <div class="p-0 col-2">
                                    <img src="media/anime-sm-img/anime-img-7.png" alt="">
                                </div>
                                <div class="p-0 col-9">
                                    <div class="anime-blog">
                                        <p>86</p>
                                        <p class="text-box">dub 8</p>
                                        <p class="text-box">sub 12</p>
                                    </div>
                                </div>
                                <div class="p-0 col-1 show-type">
                                    <span class="show-type">TV</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="anime-box bg-color-black">
                        <a href="streaming-season.html">
                            <div class="row m-0">
                                <div class="p-0 col-2">
                                    <img src="media/anime-sm-img/anime-img-8.png" alt="">
                                </div>
                                <div class="p-0 col-9">
                                    <div class="anime-blog">
                                        <p>Re-Zero</p>
                                        <p class="text-box">dub 8</p>
                                        <p class="text-box">sub 12</p>
                                        <p class="text-box active">18+</p>
                                    </div>
                                </div>
                                <div class="p-0 col-1 show-type">
                                    <span class="show-type">TV</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="anime-box bg-color-black">
                        <a href="streaming-season.html">
                            <div class="row m-0">
                                <div class="p-0 col-2">
                                    <img src="media/anime-sm-img/anime-img-9.png" alt="">
                                </div>
                                <div class="p-0 col-9">
                                    <div class="anime-blog">
                                        <p>Tokyo Ghoul</p>
                                        <p class="text-box">dub 8</p>
                                        <p class="text-box">sub 12</p>
                                    </div>
                                </div>
                                <div class="p-0 col-1 show-type">
                                    <span class="show-type">TV</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="anime-box bg-color-black">
                        <a href="streaming-season.html">
                            <div class="row m-0">
                                <div class="p-0 col-2">
                                    <img src="media/anime-sm-img/anime-img-10.png" alt="">
                                </div>
                                <div class="p-0 col-9">
                                    <div class="anime-blog">
                                        <p>Sword Art Online</p>
                                        <p class="text-box">dub 8</p>
                                        <p class="text-box">sub 12</p>
                                    </div>
                                </div>
                                <div class="p-0 col-1 show-type">
                                    <span class="show-type">TV</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="anime-box bg-color-black">
                        <a href="streaming-season.html">
                            <div class="row m-0">
                                <div class="p-0 col-2">
                                    <img src="media/anime-sm-img/anime-img-11.png" alt="">
                                </div>
                                <div class="p-0 col-9">
                                    <div class="anime-blog">
                                        <p>Sword Alicization</p>
                                        <p class="text-box">dub 8</p>
                                        <p class="text-box">sub 12</p>
                                    </div>
                                </div>
                                <div class="p-0 col-1 show-type">
                                    <span class="show-type">TV</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="anime-box bg-color-black">
                        <a href="streaming-season.html">
                            <div class="row m-0">
                                <div class="p-0 col-2">
                                    <img src="media/anime-sm-img/anime-img-12.png" alt="">
                                </div>
                                <div class="p-0 col-9">
                                    <div class="anime-blog">
                                        <p>One Piece</p>
                                        <p class="text-box">dub 8</p>
                                        <p class="text-box">sub 12</p>
                                    </div>
                                </div>
                                <div class="p-0 col-1 show-type">
                                    <span class="show-type">TV</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
