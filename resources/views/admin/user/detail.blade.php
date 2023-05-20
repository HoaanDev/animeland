@extends('admin.navigation');

@section('title', 'Detail User');

@section('content');
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="lnr-picture text-danger"></i>
                    </div>
                    <div> Detail User
                        {{-- <div class="page-title-subheading">Inline validation is very easy to implement using the
                            Architect Framework.</div>--}}
                    </div>
                </div>
                <div class="page-title-actions">
                    <button type="submit" class="mb-2 mr-2 btn btn-light" onclick="window.location.href='{{ route('users.users') }}'">Back</button>
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Information Form</h5>
                <form id="signupForm" class="col-md-10 mx-auto" method="post" action="{{ route('users.update', $user) }}" novalidate="novalidate" enctype="multipart/form-data">
                    @csrf
{{--                    <input type="hidden" class="" name="user_id" value="{{ $user->id }}">--}}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <div>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}"
                                   placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <div>
                            <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}"
                                   placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <div>
                            <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}"
                                   placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="avatar">Avatar</label>
                        <img src="{{ asset("media/avatar/$user->avatar") }}" class="w-25 d-block" alt="avatar" >
                        <div>
                            <label for="avatar">Pick a new avatar here</label>
                            <input type="file" class="" id="avatar" name="avatar" placeholder="Avatar">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="mb-2 mr-2 btn btn-warning">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
