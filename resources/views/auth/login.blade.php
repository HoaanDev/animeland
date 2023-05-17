@extends('pages.navigation')

@section('title', 'Login')

@section('content')

    <!--=====================================-->
    <!--=        login Area Start          =-->
    <!--=====================================-->
    <section class="login text-center">
        <div class="container">
            <div class="login-block">
                <div class="login-content">
                    <h3>Log in</h3>
                    {{--                    <button class="hide-link"><img src="media/login/google.png" alt=""> Continue with Google</button>--}}
                    {{--                    <button class="hide-link"><img src="media/login/facebook-icon.png" alt=""> Continue with Facebook</button>--}}
                    {{--                    <button id="continue-email" class="hide-link"><img src="media/login/email-icon.png" alt=""> Continue with email</button>--}}
                    <div class="login-sec">

                        <form method="POST" action="{{ route('login.custom') }}">
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email"
                                       required
                                       autofocus>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
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
                        <p><a href="./reset-password.html">Forget Password</a></p>
                    </div>
                    <p><a href="{{ route('register-user') }}">Sign Up <i class="fal fa-arrow-alt-right"></i></a></p>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=           Footer Area Start       =-->
    <!--=====================================-->
@endsection
