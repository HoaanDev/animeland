@extends('pages.navigation')

@section('title', 'Watch History')

@section('content')

    <!--=====================================-->
    <!--=      schedule Area Start        =-->
    <!--=====================================-->
    <section class="schedule style-3 sec-mar ">
        <div class="container">
            <div class="heading style-1">
                <h2>Watch History</h2>
            </div>
            <div class="row">
                <div class="col-xl-9 col-sm-12 col-12 mb-3">
                    <div class="schedule-box">
                        <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs" data-bs-tabs="tabs">
                                    <li class="nav-item">
                                        <a class="nav-link text-center active" aria-current="true" data-bs-toggle="tab"
                                           href="#today">
                                            <h2>TODAY</h2>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-center" aria-current="true" data-bs-toggle="tab"
                                           href="#week">
                                            <h2>THIS WEEK</h2>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-center" aria-current="true" data-bs-toggle="tab"
                                           href="#month">
                                            <h2>THIS MONTH</h2>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-center" aria-current="true" data-bs-toggle="tab"
                                           href="#year">
                                            <h2>THIS YEAR</h2>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body style-1 tab-content">
                                <div class="row justify-content-between ps-3 pe-3 pb-4">
                                    <div class="col-lg-6 col-sm-6 col-12">
                                        <h4 class="d-inline">Anime Details</h4>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-0 text-end">
                                        <h4 class="space-right d-inline">Season 04</h4>
                                        <h4 class="d-inline">Episode</h4>
                                    </div>
                                </div>
                                <div class="tab-pane active" id="today">
                                    <a href="./streaming-season.html">
                                        <div class="row ps-3 pe-3">
                                            <div class="col-xl-7 col-lg-8 col-12 col-md-7 col-sm-8">
                                                <div class="row">
                                                    <div class="col-lg-2 col-sm-3 col-3 ps-0 space-left pe-0 text-end">
                                                        <img src="assets/media/anime-sm-img/anime-img-1.png" alt="">
                                                    </div>
                                                    <div class="col-lg-10 col-sm-9 col-9">
                                                        <div class="schedule-content align-middle align-middle">
                                                            <p class="small-title">Darling in the Franxx!</p>
                                                            <p class="text-box">dub 8</p>
                                                            <p class="text-box">sub 12</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-xl-5 col-lg-4 col-md-5 col-sm-4 col-0 space-top text-end">
                                                <p class="space-right d-inline">Season 04</p>
                                                <p class="d-inline">Episode 04</p>
                                            </div>
                                        </div>
                                    </a>
                                    <hr>
                                    <a href="./streaming-season.html">
                                        <div class="row ps-3 pe-3">
                                            <div class="col-xl-7 col-lg-8 col-12 col-md-7 col-sm-8">
                                                <div class="row">
                                                    <div class="col-lg-2 col-sm-3 col-3 ps-0 space-left pe-0 text-end">
                                                        <img src="assets/media/anime-sm-img/anime-img-2.png" alt="">
                                                    </div>
                                                    <div class="col-lg-10 col-sm-9 col-9">
                                                        <div class="schedule-content align-middle">
                                                            <p class="small-title">Plastic Memories</p>
                                                            <p class="text-box">dub 8</p>
                                                            <p class="text-box">sub 12</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-xl-5 col-lg-4 col-md-5 col-sm-4 col-0 space-top text-end">
                                                <p class="space-right d-inline">Season 06</p>
                                                <p class="d-inline">Episode 06</p>
                                            </div>
                                        </div>
                                    </a>
                                    <hr>
                                    <a href="./streaming-season.html">
                                        <div class="row ps-3 pe-3">
                                            <div class="col-xl-7 col-lg-8 col-12 col-md-7 col-sm-8">
                                                <div class="row">
                                                    <div class="col-lg-2 col-sm-3 col-3 ps-0 space-left pe-0 text-end">
                                                        <img src="assets/media/anime-sm-img/anime-img-3.png" alt="">
                                                    </div>
                                                    <div class="col-lg-10 col-sm-9 col-9">
                                                        <div class="schedule-content align-middle">
                                                            <p class="small-title">That Time I Reincarnated As a Slime
                                                                Season 2</p>
                                                            <p class="text-box">dub 8</p>
                                                            <p class="text-box">sub 12</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-lg-4 col-md-5 col-sm-4 col-0 space-top text-end">
                                                <p class="space-right d-inline">Season 12</p>
                                                <p class="d-inline">Episode 12</p>
                                            </div>
                                        </div>
                                    </a>
                                    <hr>
                                    <a href="./streaming-season.html">
                                        <div class="row ps-3 pe-3">
                                            <div class="col-xl-7 col-lg-8 col-12 col-md-7 col-sm-8">
                                                <div class="row">
                                                    <div class="col-lg-2 col-sm-3 col-3 ps-0 space-left pe-0 text-end">
                                                        <img src="assets/media/anime-sm-img/anime-img-4.png" alt="">
                                                    </div>
                                                    <div class="col-lg-10 col-sm-9 col-9">
                                                        <div class="schedule-content align-middle">
                                                            <p class="small-title">Assassination Classroom</p>
                                                            <p class="text-box">dub 8</p>
                                                            <p class="text-box">sub 12</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-xl-5 col-lg-4 col-md-5 col-sm-4 col-0 space-top text-end">
                                                <p class="space-right d-inline">Season 09</p>
                                                <p class="d-inline">Episode 09</p>
                                            </div>
                                        </div>
                                    </a>
                                    <hr>
                                    <a href="./streaming-season.html">
                                        <div class="row ps-3 pe-3">
                                            <div class="col-xl-7 col-lg-8 col-12 col-md-7 col-sm-8">
                                                <div class="row">
                                                    <div class="col-lg-2 col-sm-3 col-3 ps-0 space-left pe-0 text-end">
                                                        <img src="assets/media/anime-sm-img/anime-img-5.png" alt="">
                                                    </div>
                                                    <div class="col-lg-10 col-sm-9 col-9">
                                                        <div class="schedule-content align-middle">
                                                            <p class="small-title">Chainsaw Man</p>
                                                            <p class="text-box">dub 8</p>
                                                            <p class="text-box">sub 12</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-xl-5 col-lg-4 col-md-5 col-sm-4 col-0 space-top text-end">
                                                <p class="space-right d-inline">Season 20</p>
                                                <p class="d-inline">Episode 20</p>
                                            </div>
                                        </div>
                                    </a>
                                    <hr>
                                    <a href="./streaming-season.html">
                                        <div class="row ps-3 pe-3">
                                            <div class="col-xl-7 col-lg-8 col-12 col-md-7 col-sm-8">
                                                <div class="row">
                                                    <div class="col-lg-2 col-sm-3 col-3 ps-0 space-left pe-0 text-end">
                                                        <img src="assets/media/anime-sm-img/anime-img-6.png" alt="">
                                                    </div>
                                                    <div class="col-lg-10 col-sm-9 col-9">
                                                        <div class="schedule-content align-middle">
                                                            <p class="small-title">No Game No Life Zero</p>
                                                            <p class="text-box">dub 8</p>
                                                            <p class="text-box">sub 12</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-xl-5 col-lg-4 col-md-5 col-sm-4 col-0 space-top text-end">
                                                <p class="space-right d-inline">Season 22</p>
                                                <p class="d-inline">Episode 22</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="tab-pane" id="week">
                                    <a href="./streaming-season.html">
                                        <div class="row ps-3 pe-3">
                                            <div class="col-xl-7 col-lg-8 col-12 col-md-7 col-sm-8">
                                                <div class="row">
                                                    <div class="col-lg-2 col-sm-3 col-3 ps-0 space-left pe-0 text-end">
                                                        <img src="assets/media/anime-sm-img/anime-img-2.png" alt="">
                                                    </div>
                                                    <div class="col-lg-10 col-sm-9 col-9">
                                                        <div class="schedule-content align-middle">
                                                            <p class="small-title">Darling in the Franxx!</p>
                                                            <p class="text-box">dub 8</p>
                                                            <p class="text-box">sub 12</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-xl-5 col-lg-4 col-md-5 col-sm-4 col-0 space-top text-end">
                                                <p class="space-right d-inline">Season 04</p>
                                                <p class="d-inline">Episode 04</p>
                                            </div>
                                        </div>
                                    </a>
                                    <hr>
                                    <a href="./streaming-season.html">
                                        <div class="row ps-3 pe-3">
                                            <div class="col-xl-7 col-lg-8 col-12 col-md-7 col-sm-8">
                                                <div class="row">
                                                    <div class="col-lg-2 col-sm-3 col-3 ps-0 space-left pe-0 text-end">
                                                        <img src="assets/media/anime-sm-img/anime-img-3.png" alt="">
                                                    </div>
                                                    <div class="col-lg-10 col-sm-9 col-9">
                                                        <div class="schedule-content align-middle">
                                                            <p class="small-title">Plastic Memories</p>
                                                            <p class="text-box">dub 8</p>
                                                            <p class="text-box">sub 12</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-xl-5 col-lg-4 col-md-5 col-sm-4 col-0 space-top text-end">
                                                <p class="space-right d-inline">Season 06</p>
                                                <p class="d-inline">Episode 06</p>
                                            </div>
                                        </div>
                                    </a>
                                    <hr>
                                    <a href="./streaming-season.html">
                                        <div class="row ps-3 pe-3">
                                            <div class="col-xl-7 col-lg-8 col-12 col-md-7 col-sm-8">
                                                <div class="row">
                                                    <div class="col-lg-2 col-sm-3 col-3 ps-0 space-left pe-0 text-end">
                                                        <img src="assets/media/anime-sm-img/anime-img-4.png" alt="">
                                                    </div>
                                                    <div class="col-lg-10 col-sm-9 col-9">
                                                        <div class="schedule-content align-middle">
                                                            <p class="small-title">That Time I Reincarnated As a Slime
                                                                Season 2</p>
                                                            <p class="text-box">dub 8</p>
                                                            <p class="text-box">sub 12</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-lg-4 col-md-5 col-sm-4 col-0 space-top text-end">
                                                <p class="space-right d-inline">Season 12</p>
                                                <p class="d-inline">Episode 12</p>
                                            </div>
                                        </div>
                                    </a>
                                    <hr>
                                    <a href="./streaming-season.html">
                                        <div class="row ps-3 pe-3">
                                            <div class="col-xl-7 col-lg-8 col-12 col-md-7 col-sm-8">
                                                <div class="row">
                                                    <div class="col-lg-2 col-sm-3 col-3 ps-0 space-left pe-0 text-end">
                                                        <img src="assets/media/anime-sm-img/anime-img-5.png" alt="">
                                                    </div>
                                                    <div class="col-lg-10 col-sm-9 col-9">
                                                        <div class="schedule-content align-middle">
                                                            <p class="small-title">Assassination Classroom</p>
                                                            <p class="text-box">dub 8</p>
                                                            <p class="text-box">sub 12</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-xl-5 col-lg-4 col-md-5 col-sm-4 col-0 space-top text-end">
                                                <p class="space-right d-inline">Season 09</p>
                                                <p class="d-inline">Episode 09</p>
                                            </div>
                                        </div>
                                    </a>
                                    <hr>
                                    <a href="./streaming-season.html">
                                        <div class="row ps-3 pe-3">
                                            <div class="col-xl-7 col-lg-8 col-12 col-md-7 col-sm-8">
                                                <div class="row">
                                                    <div class="col-lg-2 col-sm-3 col-3 ps-0 space-left pe-0 text-end">
                                                        <img src="assets/media/anime-sm-img/anime-img-6.png" alt="">
                                                    </div>
                                                    <div class="col-lg-10 col-sm-9 col-9">
                                                        <div class="schedule-content align-middle">
                                                            <p class="small-title">Chainsaw Man</p>
                                                            <p class="text-box">dub 8</p>
                                                            <p class="text-box">sub 12</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-xl-5 col-lg-4 col-md-5 col-sm-4 col-0 space-top text-end">
                                                <p class="space-right d-inline">Season 20</p>
                                                <p class="d-inline">Episode 20</p>
                                            </div>
                                        </div>
                                    </a>
                                    <hr>
                                    <a href="./streaming-season.html">
                                        <div class="row ps-3 pe-3">
                                            <div class="col-xl-7 col-lg-8 col-12 col-md-7 col-sm-8">
                                                <div class="row">
                                                    <div class="col-lg-2 col-sm-3 col-3 ps-0 space-left pe-0 text-end">
                                                        <img src="assets/media/anime-sm-img/anime-img-1.png" alt="">
                                                    </div>
                                                    <div class="col-lg-10 col-sm-9 col-9">
                                                        <div class="schedule-content align-middle">
                                                            <p class="small-title">No Game No Life Zero</p>
                                                            <p class="text-box">dub 8</p>
                                                            <p class="text-box">sub 12</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-xl-5 col-lg-4 col-md-5 col-sm-4 col-0 space-top text-end">
                                                <p class="space-right d-inline">Season 22</p>
                                                <p class="d-inline">Episode 22</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="tab-pane" id="month">
                                    <a href="./streaming-season.html">
                                        <div class="row ps-3 pe-3">
                                            <div class="col-xl-7 col-lg-8 col-12 col-md-7 col-sm-8">
                                                <div class="row">
                                                    <div class="col-lg-2 col-sm-3 col-3 ps-0 space-left pe-0 text-end">
                                                        <img src="assets/media/anime-sm-img/anime-img-1.png" alt="">
                                                    </div>
                                                    <div class="col-lg-10 col-sm-9 col-9">
                                                        <div class="schedule-content align-middle">
                                                            <p class="small-title">Darling in the Franxx!</p>
                                                            <p class="text-box">dub 8</p>
                                                            <p class="text-box">sub 12</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-xl-5 col-lg-4 col-md-5 col-sm-4 col-0 space-top text-end">
                                                <p class="space-right d-inline">Season 04</p>
                                                <p class="d-inline">Episode 04</p>
                                            </div>
                                        </div>
                                    </a>
                                    <hr>
                                    <a href="./streaming-season.html">
                                        <div class="row ps-3 pe-3">
                                            <div class="col-xl-7 col-lg-8 col-12 col-md-7 col-sm-8">
                                                <div class="row">
                                                    <div class="col-lg-2 col-sm-3 col-3 ps-0 space-left pe-0 text-end">
                                                        <img src="assets/media/anime-sm-img/anime-img-2.png" alt="">
                                                    </div>
                                                    <div class="col-lg-10 col-sm-9 col-9">
                                                        <div class="schedule-content align-middle">
                                                            <p class="small-title">Plastic Memories</p>
                                                            <p class="text-box">dub 8</p>
                                                            <p class="text-box">sub 12</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-xl-5 col-lg-4 col-md-5 col-sm-4 col-0 space-top text-end">
                                                <p class="space-right d-inline">Season 06</p>
                                                <p class="d-inline">Episode 06</p>
                                            </div>
                                        </div>
                                    </a>
                                    <hr>
                                    <a href="./streaming-season.html">
                                        <div class="row ps-3 pe-3">
                                            <div class="col-xl-7 col-lg-8 col-12 col-md-7 col-sm-8">
                                                <div class="row">
                                                    <div class="col-lg-2 col-sm-3 col-3 ps-0 space-left pe-0 text-end">
                                                        <img src="assets/media/anime-sm-img/anime-img-3.png" alt="">
                                                    </div>
                                                    <div class="col-lg-10 col-sm-9 col-9">
                                                        <div class="schedule-content align-middle">
                                                            <p class="small-title">That Time I Reincarnated As a Slime
                                                                Season 2</p>
                                                            <p class="text-box">dub 8</p>
                                                            <p class="text-box">sub 12</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-lg-4 col-md-5 col-sm-4 col-0 space-top text-end">
                                                <p class="space-right d-inline">Season 12</p>
                                                <p class="d-inline">Episode 12</p>
                                            </div>
                                        </div>
                                    </a>
                                    <hr>
                                    <a href="./streaming-season.html">
                                        <div class="row ps-3 pe-3">
                                            <div class="col-xl-7 col-lg-8 col-12 col-md-7 col-sm-8">
                                                <div class="row">
                                                    <div class="col-lg-2 col-sm-3 col-3 ps-0 space-left pe-0 text-end">
                                                        <img src="assets/media/anime-sm-img/anime-img-4.png" alt="">
                                                    </div>
                                                    <div class="col-lg-10 col-sm-9 col-9">
                                                        <div class="schedule-content align-middle">
                                                            <p class="small-title">Assassination Classroom</p>
                                                            <p class="text-box">dub 8</p>
                                                            <p class="text-box">sub 12</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-xl-5 col-lg-4 col-md-5 col-sm-4 col-0 space-top text-end">
                                                <p class="space-right d-inline">Season 09</p>
                                                <p class="d-inline">Episode 09</p>
                                            </div>
                                        </div>
                                    </a>
                                    <hr>
                                    <a href="./streaming-season.html">
                                        <div class="row ps-3 pe-3">
                                            <div class="col-xl-7 col-lg-8 col-12 col-md-7 col-sm-8">
                                                <div class="row">
                                                    <div class="col-lg-2 col-sm-3 col-3 ps-0 space-left pe-0 text-end">
                                                        <img src="assets/media/anime-sm-img/anime-img-5.png" alt="">
                                                    </div>
                                                    <div class="col-lg-10 col-sm-9 col-9">
                                                        <div class="schedule-content align-middle">
                                                            <p class="small-title">Chainsaw Man</p>
                                                            <p class="text-box">dub 8</p>
                                                            <p class="text-box">sub 12</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-xl-5 col-lg-4 col-md-5 col-sm-4 col-0 space-top text-end">
                                                <p class="space-right d-inline">Season 20</p>
                                                <p class="d-inline">Episode 20</p>
                                            </div>
                                        </div>
                                    </a>
                                    <hr>
                                    <a href="./streaming-season.html">
                                        <div class="row ps-3 pe-3">
                                            <div class="col-xl-7 col-lg-8 col-12 col-md-7 col-sm-8">
                                                <div class="row">
                                                    <div class="col-lg-2 col-sm-3 col-3 ps-0 space-left pe-0 text-end">
                                                        <img src="assets/media/anime-sm-img/anime-img-6.png" alt="">
                                                    </div>
                                                    <div class="col-lg-10 col-sm-9 col-9">
                                                        <div class="schedule-content align-middle">
                                                            <p class="small-title">No Game No Life Zero</p>
                                                            <p class="text-box">dub 8</p>
                                                            <p class="text-box">sub 12</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-xl-5 col-lg-4 col-md-5 col-sm-4 col-0 space-top text-end">
                                                <p class="space-right d-inline">Season 22</p>
                                                <p class="d-inline">Episode 22</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="tab-pane" id="year">
                                    <a href="./streaming-season.html">
                                        <div class="row ps-3 pe-3">
                                            <div class="col-xl-7 col-lg-8 col-12 col-md-7 col-sm-8">
                                                <div class="row">
                                                    <div class="col-lg-2 col-sm-3 col-3 ps-0 space-left pe-0 text-end">
                                                        <img src="assets/media/anime-sm-img/anime-img-2.png" alt="">
                                                    </div>
                                                    <div class="col-lg-10 col-sm-9 col-9">
                                                        <div class="schedule-content align-middle">
                                                            <p class="small-title">Darling in the Franxx!</p>
                                                            <p class="text-box">dub 8</p>
                                                            <p class="text-box">sub 12</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-xl-5 col-lg-4 col-md-5 col-sm-4 col-0 space-top text-end">
                                                <p class="space-right d-inline">Season 04</p>
                                                <p class="d-inline">Episode 04</p>
                                            </div>
                                        </div>
                                    </a>
                                    <hr>
                                    <a href="./streaming-season.html">
                                        <div class="row ps-3 pe-3">
                                            <div class="col-xl-7 col-lg-8 col-12 col-md-7 col-sm-8">
                                                <div class="row">
                                                    <div class="col-lg-2 col-sm-3 col-3 ps-0 space-left pe-0 text-end">
                                                        <img src="assets/media/anime-sm-img/anime-img-3.png" alt="">
                                                    </div>
                                                    <div class="col-lg-10 col-sm-9 col-9">
                                                        <div class="schedule-content align-middle">
                                                            <p class="small-title">Plastic Memories</p>
                                                            <p class="text-box">dub 8</p>
                                                            <p class="text-box">sub 12</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-xl-5 col-lg-4 col-md-5 col-sm-4 col-0 space-top text-end">
                                                <p class="space-right d-inline">Season 06</p>
                                                <p class="d-inline">Episode 06</p>
                                            </div>
                                        </div>
                                    </a>
                                    <hr>
                                    <a href="./streaming-season.html">
                                        <div class="row ps-3 pe-3">
                                            <div class="col-xl-7 col-lg-8 col-12 col-md-7 col-sm-8">
                                                <div class="row">
                                                    <div class="col-lg-2 col-sm-3 col-3 ps-0 space-left pe-0 text-end">
                                                        <img src="assets/media/anime-sm-img/anime-img-4.png" alt="">
                                                    </div>
                                                    <div class="col-lg-10 col-sm-9 col-9">
                                                        <div class="schedule-content align-middle">
                                                            <p class="small-title">That Time I Reincarnated As a Slime
                                                                Season 2</p>
                                                            <p class="text-box">dub 8</p>
                                                            <p class="text-box">sub 12</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-lg-4 col-md-5 col-sm-4 col-0 space-top text-end">
                                                <p class="space-right d-inline">Season 12</p>
                                                <p class="d-inline">Episode 12</p>
                                            </div>
                                        </div>
                                    </a>
                                    <hr>
                                    <a href="./streaming-season.html">
                                        <div class="row ps-3 pe-3">
                                            <div class="col-xl-7 col-lg-8 col-12 col-md-7 col-sm-8">
                                                <div class="row">
                                                    <div class="col-lg-2 col-sm-3 col-3 ps-0 space-left pe-0 text-end">
                                                        <img src="assets/media/anime-sm-img/anime-img-5.png" alt="">
                                                    </div>
                                                    <div class="col-lg-10 col-sm-9 col-9">
                                                        <div class="schedule-content align-middle">
                                                            <p class="small-title">Assassination Classroom</p>
                                                            <p class="text-box">dub 8</p>
                                                            <p class="text-box">sub 12</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-xl-5 col-lg-4 col-md-5 col-sm-4 col-0 space-top text-end">
                                                <p class="space-right d-inline">Season 09</p>
                                                <p class="d-inline">Episode 09</p>
                                            </div>
                                        </div>
                                    </a>
                                    <hr>
                                    <a href="./streaming-season.html">
                                        <div class="row ps-3 pe-3">
                                            <div class="col-xl-7 col-lg-8 col-12 col-md-7 col-sm-8">
                                                <div class="row">
                                                    <div class="col-lg-2 col-sm-3 col-3 ps-0 space-left pe-0 text-end">
                                                        <img src="assets/media/anime-sm-img/anime-img-6.png" alt="">
                                                    </div>
                                                    <div class="col-lg-10 col-sm-9 col-9">
                                                        <div class="schedule-content align-middle">
                                                            <p class="small-title">Chainsaw Man</p>
                                                            <p class="text-box">dub 8</p>
                                                            <p class="text-box">sub 12</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-xl-5 col-lg-4 col-md-5 col-sm-4 col-0 space-top text-end">
                                                <p class="space-right d-inline">Season 20</p>
                                                <p class="d-inline">Episode 20</p>
                                            </div>
                                        </div>
                                    </a>
                                    <hr>
                                    <a href="./streaming-season.html">
                                        <div class="row ps-3 pe-3">
                                            <div class="col-xl-7 col-lg-8 col-12 col-md-7 col-sm-8">
                                                <div class="row">
                                                    <div class="col-lg-2 col-sm-3 col-3 ps-0 space-left pe-0 text-end">
                                                        <img src="assets/media/anime-sm-img/anime-img-1.png" alt="">
                                                    </div>
                                                    <div class="col-lg-10 col-sm-9 col-9">
                                                        <div class="schedule-content align-middle">
                                                            <p class="small-title">No Game No Life Zero</p>
                                                            <p class="text-box">dub 8</p>
                                                            <p class="text-box">sub 12</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-xl-5 col-lg-4 col-md-5 col-sm-4 col-0 space-top text-end">
                                                <p class="space-right d-inline">Season 22</p>
                                                <p class="d-inline">Episode 22</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-12 order mb-3">
                    <div class="row align-items-end">
                        <div class="col-lg-12 col-sm-8 col-6">
                            <div class="img-box">
                                <img src="./assets/media/profile/profile.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-6 col-6">
                            <p class="small-text">@username</p>
                            <a href="./profile.html" class="d-inline"><h3>Aki Hibikawa</h3></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination-wrape">
                <ul class="pagination">
                    <li class="page-item">
                        <a href="#" class="page-link arrow" aria-label="Previous">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link current">1</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">2</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">3</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">4</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link arrow" aria-label="next">
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
