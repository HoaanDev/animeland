@extends('admin.navigation')

@section('title', 'Create Episode')

@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="lnr-picture text-danger"></i>
                    </div>
                    <div>
                        <p class="fa-2x">CREATE NEW EPISODE</p>
                    </div>
                </div>
                <div class="page-title-actions">
                    <button type="submit" class="mb-2 mr-2 btn btn-light"
                            onclick="window.location.href='{{ route('episodes.episodes') }}'">BACK
                    </button>
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title text-center">Information Form</h5>
                <form id="signupForm" class="col-md-10 mx-auto" method="post" action="{{ route('episodes.store') }}"
                      novalidate="novalidate" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name"><b>Episode Name</b></label>
                        <div>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                                   placeholder="Episode name" required autofocus>
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="video_url"><b>Video</b></label>
                        <div>
                            <input type="file" class="form-control" id="video_url" name="video_url"
                                   placeholder="Video">
                            @if ($errors->has('video_url'))
                                <span class="text-danger">{{ $errors->first('video_url') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="anime_id"><b>Anime Title</b></label>
                        <div>
                            <select class="multiselect-dropdown form-control" id="anime_id" name="anime_id" required>
                                @foreach($animes as $anime)

                                    <option value="{{ $anime->id }}"
                                    @if($loop->first)
                                        selected
                                        @endif>{{ $anime->title }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('anime_id'))
                                <span class="text-danger">{{ $errors->first('anime_id') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="mb-2 mr-2 btn btn-success">CREATE</button>
                    </div>
                    <div class="panel panel-default">
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
