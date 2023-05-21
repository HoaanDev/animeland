@extends('admin.navigation');

@section('title', 'Create Episode');

@section('content')
    ;
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="lnr-picture text-danger"></i>
                    </div>
                    <div> Create Episode
                        {{-- <div class="page-title-subheading">Inline validation is very easy to implement using the
                            Architect Framework.</div>--}}
                    </div>
                </div>
                <div class="page-title-actions">
                    <button type="submit" class="mb-2 mr-2 btn btn-light"
                            onclick="window.location.href='{{ route('episodes.episodes') }}'">Back
                    </button>
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Information Form</h5>
                <form id="signupForm" class="col-md-10 mx-auto" method="post" action="{{ route('episodes.store') }}"
                      novalidate="novalidate" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Episode name</label>
                        <div>
                            <input type="text" class="form-control" id="name" name="name"
                                   placeholder="Episode name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="video_url">Video</label>
                        <div>
                            <input type="file" class="form-control" id="video_url" name="video_url"
                                   placeholder="Video">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="anime_id">Anime Title</label>
                        <div>
                            <select class="multiselect-dropdown form-control" id="anime_id" name="anime_id">
                                @foreach($animes as $anime)

                                    <option value="{{ $anime->id }}"
                                    @if($loop->first)
                                        selected
                                        @endif>{{ $anime->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="mb-2 mr-2 btn btn-success">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
