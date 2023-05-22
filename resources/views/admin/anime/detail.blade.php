@extends('admin.navigation');

@section('title', 'Detail Anime');

@section('content')
    ;
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="lnr-picture text-danger"></i>
                    </div>
                    <div> Detail Anime
                        {{-- <div class="page-title-subheading">Inline validation is very easy to implement using the
                            Architect Framework.</div>--}}
                    </div>
                </div>
                <div class="page-title-actions">
                    <button type="submit" class="mb-2 mr-2 btn btn-light"
                            onclick="window.location.href='{{ route('animes.animes') }}'">Back
                    </button>
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Information Form</h5>
                <form id="signupForm" class="col-md-10 mx-auto" method="post"
                      action="{{ route('animes.update', $anime) }}"
                      novalidate="novalidate" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <div>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $anime->title }}"
                                   placeholder="Title" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <div>
                            <textarea type="text" rows="1" class="form-control autosize-input" id="description"
                                      name="description" style="height: 117px;"
                                      placeholder="Description" required>{{ $anime->description }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="thumbnail">Thumbnail </label>
                        <img src="{{ asset("media/thumbnail/$anime->thumbnail") }}" class="w-25 d-block"
                             alt="thumbnail">
                        <div>
                            <label for="thumbnail">Pick a new avatar here</label>
                            <input type="file" class="form-control" id="thumbnail" name="thumbnail"
                                   placeholder="Thumbnail">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="studio">Studio</label>
                        <div>
                            <input type="text" class="form-control" id="studio" name="studio"
                                   value="{{ $anime->studio }}"
                                   placeholder="Studio" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="release_date">Release Date</label>
                        <div>
                            <input type="number" min="1900" max="2099" step="1" value="{{ $anime->release_date }}"
                                   class="form-control" id="release_date" name="release_date"
                                   placeholder="Release Date" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="duration">Duration (minutes)</label>
                        <div>
                            <input type="number" min="0" max="180" step="1" class="form-control" id="duration"
                                   name="duration" value="{{ $anime->duration }}"
                                   placeholder="Duration" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="imdb_rating">IMDB Rating</label>
                        <div>
                            <input type="number" min="0" max="10" step="0.01" class="form-control" id="imdb_rating"
                                   name="imdb_rating" value="{{ $anime->imdb_rating }}"
                                   placeholder="IMDB Rating" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <div>
                            @if($anime->category == 0)
                                <input type="radio" class="" id="category_series" name="category" value="0"
                                       placeholder="Category" checked>
                                <label for="category_series">Series</label>
                                <br>
                                <input type="radio" class="" id="category_single" name="category" value="1"
                                       placeholder="Category">
                                <label for="category_single">Single</label>
                            @else
                                <input type="radio" class="" id="category_series" name="category" value="0"
                                       placeholder="Category">
                                <label for="category_series">Series</label>
                                <br>
                                <input type="radio" class="" id="category_single" name="category" value="1"
                                       placeholder="Category" checked>
                                <label for="category_single">Single</label>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <div>
                            @if($anime->status == 0)
                                <input type="radio" class="" id="status_ongoing" name="status" value="0"
                                       placeholder="Status" checked>
                                <label for="status_ongoing">On going</label>
                                <br>
                                <input type="radio" class="" id="status_completed" name="status" value="1"
                                       placeholder="Status">
                                <label for="status_completed">Completed</label>
                            @else
                                <input type="radio" class="" id="status_ongoing" name="status" value="0"
                                       placeholder="Status">
                                <label for="status_ongoing">On going</label>
                                <br>
                                <input type="radio" class="" id="status_completed" name="status" value="1"
                                       placeholder="Status" checked>
                                <label for="status_completed">Completed</label>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="genres">Genres</label>
                        <select class="multiselect-dropdown form-control" id="genres" name="genres[]" multiple>
                            @foreach ($genres as $genre)

                                <option value="{{ $genre->id}}"
                                        @foreach($anime_genre as $agenre)
                                            @if($genre->id == $agenre->id)
                                                selected
                                    @endif
                                    @endforeach
                                > {{ $genre->name }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="mb-2 mr-2 btn btn-warning">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
