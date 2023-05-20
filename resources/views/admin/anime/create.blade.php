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
                                   placeholder="Title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <div>
                            <input type="text" class="form-control" id="description" name="description"
                                   placeholder="Description">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="thumbnail">Pick a thumbnail here </label>
                        <div>
                            <input type="file" class="form-control" id="thumbnail" name="thumbnail" placeholder="Thumbnail">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="studio">Studio</label>
                        <div>
                            <input type="text" class="form-control" id="studio" name="studio"
                                   placeholder="Studio">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="release_date">Release Date</label>
                        <div>
                            <input type="number" min="1900" max="2099" step="1" value="{{ date("Y") }}" class="form-control" id="release_date" name="release_date"
                                   placeholder="Release Date">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Duration</label>
                        <div>
                            <input type="password" class="form-control" id="password" name="password"
                                   placeholder="Duration">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">IMDB Rating</label>
                        <div>
                            <input type="password" class="form-control" id="password" name="password"
                                   placeholder="IMDB Rating">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Category</label>
                        <div>
                            <input type="password" class="form-control" id="password" name="password"
                                   placeholder="Category">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Status</label>
                        <div>
                            <input type="password" class="form-control" id="password" name="password"
                                   placeholder="Status">
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
