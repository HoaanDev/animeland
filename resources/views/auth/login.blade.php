@extends('pages.navigation')

@section('title', 'Login')

@section('content')
    <!--=====================================-->
    <!--=        Login Area Start          =-->
    <!--=====================================-->
    <section class="login text-center">
        <div class="container">
            <div class="login-block">
                <div class="login-content">
                    <h3>Log in</h3>
                    <div class="login-sec">
                        <form method="POST" action="{{ route('login.custom') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Username" id="username" class="form-control" name="username" value="{{ old('username') }}"
                                       required
                                       autofocus>
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
                                <button type="submit" class="btn btn-dark btn-block">Login</button>
                            </div>
                        </form>
                    </div>
                    <p>Don't have an account? <a href="{{ route('register-user') }}">Sign Up <i class="fal fa-arrow-alt-right"></i></a></p>
                </div>
            </div>
        </div>
    </section>
@endsection
