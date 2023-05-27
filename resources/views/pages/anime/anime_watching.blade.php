@php use App\Models\Episode; @endphp
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
                        <video controls autoplay>
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
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <p>You're watching <b>{{ $episode->name }}</b></p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="align-middle actions">
                            @if (!empty(session('user_id')))
                                @if(empty($ratings) || $userRatingValue == 0)
                                    <form action="{{ route('rating-anime', $anime->id) }}" method="post">
                                        @csrf
                                        <div class="input-group form-group footer-email-box">
                                            <input type="hidden" name="anime_id" value="{{ $anime->id }}">
                                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                            <label class="text" for="rating_value"
                                                   style="margin-bottom: -20px; line-height: 40px">YOUR RATING </label>
                                            <select class="multiselect-dropdown form-control" id="rating_value"
                                                    name="rating_value">
                                                @for($i = 1; $i <= 10; $i++)
                                                    <option class="text" value="{{ $i }}"
                                                            @if($i == 1)
                                                                selected
                                                        @endif>{{ $i }}</option>
                                                @endfor
                                            </select>
                                            <button class="input-group-text post-btn" type="submit">Rating</button>
                                        </div>
                                    </form>
                                @else
                                    <label class="text" for="rating_value"
                                           style="margin-bottom: -20px; line-height: 40px">YOUR
                                        RATING: {{ $userRatingValue }} </label>
                                @endif
                            @else
                                <p><a href="{{ route('login') }}">
                                        <mark>Login</mark>
                                    </a> to rating this anime!
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-4 col-sm-6 col-12">
                            <div class="trailer-box">
                                <img src="{{ asset("media/thumbnail/$anime->thumbnail") }}"
                                     style="width: 420px;height: 560px" class="image">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-8 col-sm-6 col-12">
                            <div class="trailer-content">
                                <h2>{{ $anime->title }}
                                </h2>
                                @if(empty(session('user_id')))

                                @else
                                    @if(empty($isFollowing))
                                        <form method="post" action="{{ route('following-anime', $anime->id) }}">
                                            @csrf
                                            <button type="submit"><i class="fa fa-plus"></i> Follow</button>
                                        </form>
                                    @else
                                        <form method="post" action="{{ route('unfollowing-anime', $anime->id) }}">
                                            @csrf
                                            <button type="submit"><i class="fa fa-check"></i> Following</button>
                                        </form>
                                    @endif
                                @endif
                                <p>{{ $anime->description }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="rating-content">
                                <h4>USER RATING</h4>
                                <p>RATING: <span>{{ number_format((float)$avgRating, 1, '.', '') }}</span><b>/10</b></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="rating-content">
                                <h4>IMDB RATING</h4>
                                <p>RATING: <span>{{ $anime->imdb_rating }}</span><b>/10</b></p>
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
                        <p><span>Category:</span> @if($anime->category == "0")
                                {{ 'Series' }}
                            @else
                                {{ 'Single' }}
                            @endif</p>
                        <p><span>Studio:</span>  {{ $anime->studio }}</b></p>
                        <p><span>Release Date:</span> {{ $anime->release_date }}</p>
                        <p><span>Status:</span> @if($anime->status == "0")
                                {{ 'On Going' }}
                            @else
                                {{ 'Completed' }}
                            @endif</p>
                        <p><span>Genre:</span>
                            @foreach($genres as $genre)
                                @if($loop->last)
                                    {{ $genre->name }}
                                @else
                                    {{ $genre->name . ","}}
                                @endif
                            @endforeach
                        </p>
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
                            Please read our <a href="{{ route('policy') }}">Comment Policy</a> before commenting.
                        </p>
                    </div>
                    <div class="row">
                        @if(!empty(session('user_id')))
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
                        @else
                            <p><a href="{{ route('login') }}">
                                    <mark>Login</mark>
                                </a> to comment this anime!
                            </p>
                        @endif
                    </div>
                    <div class="site-comment">
                        <hr>
                        @foreach($comments as $comment)
                            <div class="row">
                                <div class="col-lg-1 col-2">
                                    <img src="{{ asset("media/avatar/$comment->avatar")}}"
                                         alt="">
                                </div>
                                <div class="col-lg-9 col-8">
                                    <h5>{{ $comment->name }}</h5>
                                    <p> {{ $comment->content }}
                                    </p>
                                </div>
                                @if (session('user_id') == $comment->user_id)
                                    <div class="col-lg-2 col-2">
                                        <form action="{{ route('comment.destroy', $comment->comment_id) }}"
                                              method="post"
                                              class="d-inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-transition btn btn-outline-danger">Delete
                                            </button>
                                        </form>
                                    </div>
                                @endif
                            </div>
                            <hr>
                        @endforeach
                        <div class="pagination-wrape">
                            {{ $comments->links() }}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 offset-lg-0 offset-md-3 offset-sm-2 mt-lg-0 mt-3">
                    <h3 class="small-title">SIMILAR ANIME</h3>
                    @foreach($similarAnimes as $similarAnime)
                        <div class="anime-box bg-color-black">
                            <a href="{{ route('watching', [$similarAnime->anime_id, Episode::where('anime_id', $similarAnime->anime_id)->value('id')]) }}">
                                <div class="row m-0">
                                    <div class="p-0 col-2">
                                        <img src="{{ asset("media/thumbnail/$similarAnime->thumbnail") }}" alt="">
                                    </div>
                                    <div class="p-0 col-10">
                                        <div class="anime-blog">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p>{{ $similarAnime->title }}</p>
                                                    <p class="text-secondary">
                                                        @if($similarAnime->category == "0")
                                                            {{ 'Series' }}
                                                        @else
                                                            {{ 'Single' }}
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
