@extends('admin.navigation');

@section('title', 'Create User');

@section('content');
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="lnr-picture text-danger"></i>
                    </div>
                    <div> Create User
                        {{-- <div class="page-title-subheading">Inline validation is very easy to implement using the
                            Architect Framework.</div>--}}
                    </div>
                </div>
                <div class="page-title-actions">

                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Information Form</h5>
                <form id="signupForm" class="col-md-10 mx-auto" method="post" action="{{ route('user.store') }}" novalidate="novalidate">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <div>
                            <input type="text" class="form-control" id="name" name="name"
                                   placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <div>
                            <input type="text" class="form-control" id="email" name="email" value="@gmail.com"
                                   placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <div>
                            <input type="text" class="form-control" id="username" name="username"
                                   placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
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
