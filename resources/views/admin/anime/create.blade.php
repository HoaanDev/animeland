@extends('admin.navigation')

@section('title', 'Create Anime')

@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="lnr-picture text-danger"></i>
                    </div>
                    <div>
                        <p class="fa-2x">CREATE NEW ANIME</p>
                    </div>
                </div>
                <div class="page-title-actions">
                    <button type="submit" class="mb-2 mr-2 btn btn-light"
                            onclick="window.location.href='{{ route('animes.animes') }}'">BACK
                    </button>
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title text-center">Information Form</h5>
                <form id="signupForm" class="col-md-10 mx-auto" method="post" action="{{ route('animes.store') }}"
                      novalidate="novalidate" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title"><b>Title</b></label>
                        <div>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}"
                                   placeholder="Title" required>
                            @if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description"><b>Description</b></label>
                        <div>
                            <textarea type="text" rows="1" class="form-control autosize-input" id="description"
                                      name="description" style="height: 117px;"
                                      placeholder="Description" required>{{ old('description') }}</textarea>
                            @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="thumbnail"><b>Thumbnail</b></label>
                        <div>
                            <input type="file" class="form-control" id="thumbnail" name="thumbnail"
                                   placeholder="Thumbnail">
                            @if ($errors->has('thumbnail'))
                                <span class="text-danger">{{ $errors->first('thumbnail') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="studio"><b>Studio</b></label>
                        <div>
                            <input type="text" class="form-control" id="studio" name="studio" value="{{ old('studio') }}"
                                   placeholder="Studio" required>
                            @if ($errors->has('studio'))
                                <span class="text-danger">{{ $errors->first('studio') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="release_date"><b>Release Date</b></label>
                        <div>
                            <input type="number" min="1900" max="2099" step="1" value="{{ old('release_date', date("Y")) }}"
                                   class="form-control" id="release_date" name="release_date"
                                   placeholder="Release Date" required>
                            @if ($errors->has('release_date'))
                                <span class="text-danger">{{ $errors->first('release_date') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="duration"><b>Duration (minutes)</b></label>
                        <div>
                            <input type="number" min="0" max="180" step="1" class="form-control" id="duration"
                                   name="duration" value="{{ old('duration') }}"
                                   placeholder="Duration" required>
                            @if ($errors->has('duration'))
                                <span class="text-danger">{{ $errors->first('duration') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="imdb_rating"><b>IMDB Rating</b></label>
                        <div>
                            <input type="number" min="0" max="10" step="0.01" class="form-control" id="imdb_rating"
                                   name="imdb_rating" value="{{ old('imdb_rating') }}"
                                   placeholder="IMDB Rating" required>
                            @if ($errors->has('imdb_rating'))
                                <span class="text-danger">{{ $errors->first('imdb_rating') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="category"><b>Category</b></label>
                        <div>
                            <input type="radio" class="" id="category_series" name="category" value="0"
                                   placeholder="Category" {{ old('category') == 0 ? 'checked' : '' }}>
                            <label for="category_series">Series</label>
                            <br>
                            <input type="radio" class="" id="category_single" name="category" value="1"
                                   placeholder="Category" {{ old('category') == 1 ? 'checked' : '' }}>
                            <label for="category_single">Single</label>
                            @if ($errors->has('category'))
                                <span class="text-danger">{{ $errors->first('category') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status"><b>Status</b></label>
                        <div>
                            <input type="radio" class="" id="status_ongoing" name="status" value="0"
                                   placeholder="Status" {{ old('status') == 0 ? 'checked' : '' }}>
                            <label for="status_ongoing">On going</label>
                            <br>
                            <input type="radio" class="" id="status_completed" name="status" value="1"
                                   placeholder="Status" {{ old('status') == 1 ? 'checked' : '' }}>
                            <label for="status_completed" >Completed</label>
                            @if ($errors->has('status'))
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="genres"><b>Genres</b></label>
                        <select class="multiselect-dropdown form-control" id="genres" name="genres[]" multiple>
                            @foreach ($genres as $genre)
                                <option value="{{ $genre->id }}"
                                        @if($loop->first)
                                            selected
                                    @endif> {{ $genre->name }} </option>
                            @endforeach
                        </select>
                        @if ($errors->has('genres'))
                            <span class="text-danger">{{ $errors->first('genres') }}</span>
                        @endif
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
