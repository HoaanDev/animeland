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
                <div class="anime-blog">
                    <a href="{{ route('search-results') }}" class="img-block">                        
                        <img src="{{ asset("media/thumbnail/$anime->thumbnail")}}" alt="">
                    </a>
                    <a href="{{ route('search-results') }}" class="action-overlay"><i class="fal fa-play-circle"></i> Play
                        Now</a>
                    <p class="text">Tv</p>
                    <div class="dropdown">
                        <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.145264" y="0.00012207" width="21.4395" height="2.68125" rx="1.34062" fill="#999999" />
                                <rect x="0.145264" y="7.41272" width="21.4395" height="2.68125" rx="1.34062" fill="#999999" />
                                <rect x="0.145264" y="14.8258" width="16.4914" height="2.68125" rx="1.34062" fill="#999999" />
                                <path d="M19.8784 16.0712C19.8784 15.4163 20.4093 14.8854 21.0642 14.8854H30.2463C30.9011 14.8854 31.432 15.4163 31.432 16.0712C31.432 16.7261 30.9011 17.257 30.2463 17.257H21.0642C20.4093 17.257 19.8784 16.7261 19.8784 16.0712Z" fill="#999999" />
                                <path d="M25.6552 22.0001C25.0171 22.0001 24.4999 21.4828 24.4999 20.8447V11.2977C24.4999 10.6596 25.0171 10.1423 25.6552 10.1423C26.2933 10.1423 26.8106 10.6596 26.8106 11.2977V20.8447C26.8106 21.4828 26.2933 22.0001 25.6552 22.0001Z" fill="#999999" />
                            </svg>
                        </button>
                        <ul class="dropdown-menu bg-color-black pt-3 pb-3 ps-3 pe-3">
                            <li>
                                <a href="" class="none"><i class="fa fa-check"></i> Watch Later </a>
                            </li>
                            <li>
                                <a href=""><i class="fas fa-plus"></i> Add to Playlist </a>
                            </li>
                        </ul>
                    </div>
                    
                        
                    
                    <a href="{{ route('search-results') }}">
                        <p>{{$anime -> title}}</p>
                    </a>
                    
                </div>

            </div>
            @endforeach
        </div>
        <div class="pagination-wrape">
            {{$animes ->links()}}
        </div>
    </div>
</section>
@endsection