@extends('admin.navigation');

@section('title', 'Table Animes');

@section('content')
    ;
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                    </div>
                    <div>Data Tables Animes
                        {{-- <div class="page-title-subheading">Choose between regular React Bootstrap tables or--}}
                        {{-- advanced dynamic ones.</div>--}}
                    </div>
                </div>
                <div class="page-title-actions">
                    <button class="mb-2 mr-2 btn btn-success"
                            onclick="window.location.href='{{ route('animes.create') }}'">Create new anime
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
                        <th>Description</th>
                        <th>Thumbnail</th>
                        <th>Studio</th>
                        <th>Release Date</th>
                        <th>Duration</th>
                        <th>IMDB Rating</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($animes as $anime)
                        <tr>
                            <td>{{ $anime->title }}</td>
                            <td>{{ Illuminate\Support\Str::limit($anime ->description, $limit = 40, $end = '...') }}</td>
                            <td><img src="media/thumbnail/{{ $anime->thumbnail }}" class="img-fluid w-25"></td>
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
                                        onclick="window.location.href='{{ route('animes.detail', $anime) }}'">Detail
                                </button>
                                <form action="{{ route('animes.destroy', $anime) }}" method="post"
                                      class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-transition btn btn-outline-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    {{-- <tfoot>--}}
                    {{-- <tr>--}}
                    {{-- <th>Avatar</th>--}}
                    {{-- <th>Name</th>--}}
                    {{-- <th>Email</th>--}}
                    {{-- <th>Username</th>--}}
                    {{-- <th>Action</th>--}}
                    {{-- </tr>--}}
                    {{-- </tfoot>--}}
                </table>
            </div>
        </div>
    </div>
@endsection
