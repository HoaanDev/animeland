@extends('pages.navigation')

@section('title', 'Sign Up')

@section('content')
    <!--=====================================-->
    <!--=        login Area Start          =-->
    <!--=====================================-->
    <section class="login text-center">
        <div class="container">
            <div class="login-block">
                <div class="login-content">
                    <h3>Sign up</h3>
                    <p>Enter your username or email and password to sign up.</p>
                    <form action="{{ route('register.custom') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                   required autofocus>
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" placeholder="Email" id="email_address" class="form-control"
                                   name="email" required autofocus>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" placeholder="Username" id="username" class="form-control"
                                   name="username" required>
                            @if ($errors->has('username'))
                                <span class="text-danger">{{ $errors->first('username') }}</span>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" placeholder="Password" id="password" class="form-control"
                                   name="password" required>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="d-grid mx-auto">
                            <button type="submit" class="btn btn-dark btn-block">Sign up</button>
                        </div>
                    </form>

                    <p>By continuing, you agree to ANIMELAND Terms of Use and Privacy Policy.</p>
                    <p>Already a account? <a href="{{ route('login') }}">Login</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection
