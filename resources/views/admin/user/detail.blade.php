@extends('admin.navigation')

@section('title', 'Detail User')

@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="lnr-picture text-danger"></i>
                    </div>
                    <div>
                        <p class="fa-2x">DETAIL USER</p>
                    </div>
                </div>
                <div class="page-title-actions">
                    <button type="submit" class="mb-2 mr-2 btn btn-light"
                            onclick="window.location.href='{{ route('users.users') }}'">BACK
                    </button>
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title text-center">Information Form</h5>
                <form id="signupForm" class="col-md-10 mx-auto" method="post"
                      action="{{ route('users.update', $user) }}" novalidate="novalidate" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name"><b>Name</b></label>
                        <div>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}"
                                   placeholder="Name" required>
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email"><b>Email</b></label>
                        <div>
                            <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}"
                                   placeholder="Email">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username"><b>Username</b></label>
                        <div>
                            <input type="text" class="form-control" id="username" name="username"
                                   value="{{ $user->username }}"
                                   placeholder="Username">
                            @if ($errors->has('username'))
                                <span class="text-danger">{{ $errors->first('username') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="avatar"><b>Avatar</b></label>
                        <img src="{{ asset("media/avatar/$user->avatar") }}" class="w-25 d-block" alt="avatar">
                        <div>
                            <label for="avatar"><b>Pick a new avatar here</b></label>
                            <input type="file" class="form-control" id="avatar" name="avatar" placeholder="Avatar">
                            @if ($errors->has('avatar'))
                                <span class="text-danger">{{ $errors->first('avatar') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="mb-2 mr-2 btn btn-warning">UPDATE</button>
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
