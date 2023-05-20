@extends('admin.navigation');

@section('title', 'Table Users');

@section('content');
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                </div>
                <div>Data Tables Users
                    {{-- <div class="page-title-subheading">Choose between regular React Bootstrap tables or--}}
                    {{-- advanced dynamic ones.</div>--}}
                </div>
            </div>
            <div class="page-title-actions">
                <button class="mb-2 mr-2 btn btn-success" onclick="window.location.href='{{ route('user.create') }}'">Create new user</button>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>Avatar</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td><img src="media/avatar/{{ $user->avatar }}" class="img-fluid w-25"></td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->username }}</td>
                        <td>
                            <button class="btn-transition btn btn-outline-info" onclick="window.location.href='{{ route('user.detail', $user) }}'">Detail</button>
                            <form action="{{ route('user.destroy', $user) }}" method="post" class="d-inline-block">
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
