@extends('admin.navigation')

@section('title', 'Table Users')

@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-users icon-gradient bg-tempting-azure"></i>
                    </div>
                    <div>
                        <p class="fa-2x">DATA TABLE USERS</p>
                    </div>
                </div>
                <div class="page-title-actions">
                    <button class="mb-2 mr-2 btn btn-success"
                            onclick="window.location.href='{{ route('users.create') }}'">CREATE
                    </button>
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 220px">Avatar</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th style="width: 50px">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td><img src="media/avatar/{{ $user->avatar }}" class="img-fluid"></td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->username }}</td>
                            <td>
                                <button class="btn-transition btn btn-outline-info"
                                        onclick="window.location.href='{{ route('users.detail', $user) }}'">DETAIL
                                </button>
                                <hr>
                                <form action="{{ route('users.destroy', $user) }}" method="post" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-transition btn btn-outline-danger">DELETE</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
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
