@extends('admin.navigation')

@section('title', 'Table Genres')

@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-ticket icon-gradient bg-tempting-azure"></i>
                    </div>
                    <div>
                        <p class="fa-2x">DATA TABLE GENRES</p>
                    </div>
                </div>
                <div class="page-title-actions">
                    <button class="mb-2 mr-2 btn btn-success"
                            onclick="window.location.href='{{ route('genres.create') }}'">CREATE
                    </button>
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th style="width: 50px">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($genres as $genre)
                        <tr>
                            <td>{{ $genre->name }}</td>
                            <td>
                                <button class="btn-transition btn btn-outline-info"
                                        onclick="window.location.href='{{ route('genres.detail', $genre) }}'">DETAIL
                                </button>
                                <hr>
                                <form action="{{ route('genres.destroy', $genre) }}" method="post"
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
