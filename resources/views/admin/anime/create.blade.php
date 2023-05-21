@extends('admin.navigation');

@section('title', 'Create Anime');

@section('content')
    ;
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="lnr-picture text-danger"></i>
                    </div>
                    <div> Create Anime
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
                <form id="signupForm" class="col-md-10 mx-auto" method="post" action="{{ route('animes.store') }}"
                      novalidate="novalidate" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <div>
                            <input type="text" class="form-control" id="title" name="title"
                                   placeholder="Title" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <div>
                            <input type="text" class="form-control" id="description" name="description"
                                   placeholder="Description" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="thumbnail">Thumbnail </label>
                        <div>
                            <input type="file" class="form-control" id="thumbnail" name="thumbnail"
                                   placeholder="Thumbnail">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="studio">Studio</label>
                        <div>
                            <input type="text" class="form-control" id="studio" name="studio"
                                   placeholder="Studio" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="release_date">Release Date</label>
                        <div>
                            <input type="number" min="1900" max="2099" step="1" value="{{ date("Y") }}"
                                   class="form-control" id="release_date" name="release_date"
                                   placeholder="Release Date" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="duration">Duration (minutes)</label>
                        <div>
                            <input type="number" min="0" max="180" step="1" class="form-control" id="duration"
                                   name="duration"
                                   placeholder="Duration" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="imdb_rating">IMDB Rating</label>
                        <div>
                            <input type="number" min="0" max="10" step="0.01" class="form-control" id="imdb_rating"
                                   name="imdb_rating"
                                   placeholder="IMDB Rating" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <div>
                            <input type="radio" class="" id="category_series" name="category" value="0"
                                   placeholder="Category" checked>
                            <label for="category_series">Series</label>
                            <br>
                            <input type="radio" class="" id="category_single" name="category" value="1"
                                   placeholder="Category">
                            <label for="category_single">Single</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <div>
                            <input type="radio" class="" id="status_ongoing" name="status" value="0"
                                   placeholder="Status" checked>
                            <label for="status_ongoing">On going</label>
                            <br>
                            <input type="radio" class="" id="status_completed" name="status" value="1"
                                   placeholder="Status">
                            <label for="status_completed">Completed</label>
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
