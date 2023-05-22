@extends('pages.navigation')

@section('title', 'Coming Soon')

@section('content')
    <!--=====================================-->
    <!--=      coming soon Area Start        =-->
    <!--=====================================-->
    <section class="coming-soon sec-pad sec-mar text-center">
        <div class="container">

            <div class="coming-soon-block">
                <div class="coming-soon-content">
                    <a href="{{ route('homepage') }}" class="mb-5"><img src="/media/animeland_logo.png" alt=""></a>
                    <h2>COMMING <br> SOON</h2>
                </div>
            </div>
        </div>
    </section>
@endsection
