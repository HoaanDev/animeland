@extends('admin.navigation')

@section('title', 'Table Comments')

@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-comment icon-gradient bg-tempting-azure"></i>
                    </div>
                    <div>
                        <p class="fa-2x">DATA TABLE COMMENTS</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Anime Title</th>
                        <th>User Name</th>
                        <th>Content</th>
                        <th style="width: 50px">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($comments as $comment)
                        <tr>
                            <td>{{ $comment->anime->title }}</td>
                            <td>{{ $comment->user->name }}</td>
                            <td>{{ Illuminate\Support\Str::limit($comment ->content, $limit = 100, $end = '...') }}</td>
                            <td>
                                <form action="{{ route('comments.destroy', $comment) }}" method="post"
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
