@extends('admin.navigation')

@section('title', 'Table Animes')

@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-film icon-gradient bg-tempting-azure"></i>
                    </div>
                    <div>
                        <p class="fa-2x">DATA TABLE ANIMES</p>
                    </div>
                </div>
                <div class="page-title-actions">
                    <button class="mb-2 mr-2 btn btn-success"
                            onclick="window.location.href='{{ route('animes.create') }}'">CREATE
                    </button>
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th style="width: 120px">Description</th>
                        <th style="width: 220px">Thumbnail</th>
                        <th>Studio</th>
                        <th>Release Date</th>
                        <th>Duration</th>
                        <th>IMDB Rating</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th style="width: 50px">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($animes as $anime)
                        <tr>
                            <td>{{ $anime->title }}</td>
                            <td>{{ Illuminate\Support\Str::limit($anime ->description, $limit = 120, $end = '...') }}</td>
                            <td><img src="media/thumbnail/{{ $anime->thumbnail }}" class="img-fluid"></td>
                            <td>{{ $anime->studio }}</td>
                            <td>{{ $anime->release_date }}</td>
                            <td>{{ $anime->duration }}</td>
                            <td>{{ $anime->imdb_rating }}</td>
                            <td>
                                @if($anime->category == 0)
                                    {{ 'Series' }}
                                @else
                                    {{ 'Single' }}
                                @endif
                            </td>
                            <td>
                                @if($anime->status == 0)
                                    {{ 'On Going' }}
                                @else
                                    {{ 'Completed' }}
                                @endif
                            </td>
                            <td>
                                <button class="btn-transition btn btn-outline-info"
                                        onclick="window.location.href='{{ route('animes.detail', $anime) }}'">DETAIL
                                </button>
                                <hr>
                                <form action="{{ route('animes.destroy', $anime) }}" method="post"
                                      class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-transition btn btn-outline-danger">DELETE</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                        <div class="panel panel-default">
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                        </div>
                </table>
            </div>
        </div>
    </div>
@endsection
