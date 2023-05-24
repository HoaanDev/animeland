@extends('pages.navigation')

@section('title', 'Filter')

@section('content')

<!--=====================================-->
<!--=        filter Area Start          =-->
<!--=====================================-->
<section class="filter sec-mar">
    <div class="container">
        <div class="heading style-1">
            <h2>Filter <span> Showing 1 – 09 of 5000
                    Anime</span></h2>
        </div>
        
        <ul class="filter-block style-2">
            <li>
                <a href="#" class="anime-btn btn-dark dropdown-toggle" id="genre" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    Genre <span><i class="fa fa-chevron-down"></i></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="genre">
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre1">
                            <label class="custom-control-label" for="genre1">Action</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre2">
                            <label class="custom-control-label" for="genre2">Adventure</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre3">
                            <label class="custom-control-label" for="genre3">Avant Grade</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre4">
                            <label class="custom-control-label" for="genre4">Boys Love</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre5">
                            <label class="custom-control-label" for="genre5">Comedy</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre6">
                            <label class="custom-control-label" for="genre6">Demons</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre7">
                            <label class="custom-control-label" for="genre7">Drama</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre8">
                            <label class="custom-control-label" for="genre8">Ecchi</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre9">
                            <label class="custom-control-label" for="genre9">Fantasy</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre10">
                            <label class="custom-control-label" for="genre10">Girls Love</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre11">
                            <label class="custom-control-label" for="genre11">Gourmet</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre12">
                            <label class="custom-control-label" for="genre12">Harem</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre13">
                            <label class="custom-control-label" for="genre13">Horror</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre14">
                            <label class="custom-control-label" for="genre14">Isekai</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre15">
                            <label class="custom-control-label" for="genre15">Iyashikei</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre16">
                            <label class="custom-control-label" for="genre16">Josei</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre17">
                            <label class="custom-control-label" for="genre17">Kids</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre18">
                            <label class="custom-control-label" for="genre18">Magic</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre19">
                            <label class="custom-control-label" for="genre19">Mahou Shoujo</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre20">
                            <label class="custom-control-label" for="genre20">Martial Arts</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre21">
                            <label class="custom-control-label" for="genre21">Mecha</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre22">
                            <label class="custom-control-label" for="genre22">Military</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre23">
                            <label class="custom-control-label" for="genre23">Music</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre24">
                            <label class="custom-control-label" for="genre24">Mystery</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre25">
                            <label class="custom-control-label" for="genre25">Parody</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre26">
                            <label class="custom-control-label" for="genre26">Psychological</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre27">
                            <label class="custom-control-label" for="genre27">Reverse Harem</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre28">
                            <label class="custom-control-label" for="genre28">Romance</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre29">
                            <label class="custom-control-label" for="genre29">School</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre30">
                            <label class="custom-control-label" for="genre30">Sci-Fi</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre31">
                            <label class="custom-control-label" for="genre31">Seinin</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre32">
                            <label class="custom-control-label" for="genre32">Shoujo</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre41">
                            <label class="custom-control-label" for="genre41">Shounen</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre33">
                            <label class="custom-control-label" for="genre33">Slice of Life</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre34">
                            <label class="custom-control-label" for="genre34">Space</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre35">
                            <label class="custom-control-label" for="genre35">Sports</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre36">
                            <label class="custom-control-label" for="genre36">Super Power</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre37">
                            <label class="custom-control-label" for="genre37">Supernatural</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre38">
                            <label class="custom-control-label" for="genre38">Suspense</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre39">
                            <label class="custom-control-label" for="genre39">Thriller</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="genre40">
                            <label class="custom-control-label" for="genre40">Vampire</label>
                        </div>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="anime-btn btn-dark dropdown-toggle" id="country" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    Country <span><i class="fa fa-chevron-down"></i></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="country">
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="country1">
                            <label class="custom-control-label" for="country1">China</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="country2">
                            <label class="custom-control-label" for="country2">Japan</label>
                        </div>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="anime-btn btn-dark dropdown-toggle" id="season" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    Season <span><i class="fa fa-chevron-down"></i></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="season">
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="season1">
                            <label class="custom-control-label" for="season1">Fall</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="season2">
                            <label class="custom-control-label" for="season2">Summer</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="season3">
                            <label class="custom-control-label" for="season3">Winter</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="season4">
                            <label class="custom-control-label" for="season4">Spring</label>
                        </div>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="anime-btn btn-dark dropdown-toggle" id="year" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    Year <span><i class="fa fa-chevron-down"></i></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="year">
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="yr1">
                            <label class="custom-control-label" for="yr1">2023</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="yr2">
                            <label class="custom-control-label" for="yr2">2023</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="yr3">
                            <label class="custom-control-label" for="yr3">2021</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="yr4">
                            <label class="custom-control-label" for="yr4">2020</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="yr5">
                            <label class="custom-control-label" for="yr5">2019</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="yr6">
                            <label class="custom-control-label" for="yr6">2018</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="yr7">
                            <label class="custom-control-label" for="yr7">2017</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="yr8">
                            <label class="custom-control-label" for="yr8">2016</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="yr9">
                            <label class="custom-control-label" for="yr9">2015</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="yr10">
                            <label class="custom-control-label" for="yr10">2014</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="yr11">
                            <label class="custom-control-label" for="yr11">2013</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="yr12">
                            <label class="custom-control-label" for="yr12">2012</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="yr13">
                            <label class="custom-control-label" for="yr13">2010</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="yr14">
                            <label class="custom-control-label" for="yr14">2009</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="yr15">
                            <label class="custom-control-label" for="yr15">2008</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="yr16">
                            <label class="custom-control-label" for="yr16">2007</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="yr17">
                            <label class="custom-control-label" for="yr17">2006</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="yr18">
                            <label class="custom-control-label" for="yr18">2005</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="yr19">
                            <label class="custom-control-label" for="yr19">2004</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="yr20">
                            <label class="custom-control-label" for="yr20">2003</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="yr22">
                            <label class="custom-control-label" for="yr22">2002</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="yr23">
                            <label class="custom-control-label" for="yr23">2001</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="yr24">
                            <label class="custom-control-label" for="yr24">2000</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="yr25">
                            <label class="custom-control-label" for="yr25">1999</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="yr26">
                            <label class="custom-control-label" for="yr26">1998</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="yr27">
                            <label class="custom-control-label" for="yr27">1997</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="yr28">
                            <label class="custom-control-label" for="yr28">1996</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="yr29">
                            <label class="custom-control-label" for="yr29">1995</label>
                        </div>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="anime-btn btn-dark dropdown-toggle" id="type" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    Type <span><i class="fa fa-chevron-down"></i></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="type">
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="type1">
                            <label class="custom-control-label" for="type1">Movie</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="type2">
                            <label class="custom-control-label" for="type2">TV</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="type3">
                            <label class="custom-control-label" for="type3">OVA</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="type4">
                            <label class="custom-control-label" for="type4">ONA</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="type5">
                            <label class="custom-control-label" for="type5">Special</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="type6">
                            <label class="custom-control-label" for="type6">Music</label>
                        </div>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="anime-btn btn-dark dropdown-toggle" id="status" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    Status <span><i class="fa fa-chevron-down"></i></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="status">
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="status1">
                            <label class="custom-control-label" for="status1">Not Yet Released</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="status2">
                            <label class="custom-control-label" for="status2">Releasing</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="status3">
                            <label class="custom-control-label" for="status3">Completed</label>
                        </div>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="anime-btn btn-dark dropdown-toggle" id="language" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    Language <span><i class="fa fa-chevron-down"></i></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="language">
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="language1">
                            <label class="custom-control-label" for="language1">Sub</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="language2">
                            <label class="custom-control-label" for="language2">Dub</label>
                        </div>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="anime-btn btn-dark dropdown-toggle" id="rating" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    Rating <span><i class="fa fa-chevron-down"></i></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="rating">
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="rating1">
                            <label class="custom-control-label" for="rating1">All Ages</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="rating2">
                            <label class="custom-control-label" for="rating2">Children</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="rating3">
                            <label class="custom-control-label" for="rating3">Teen 13 and Older</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="rating4">
                            <label class="custom-control-label" for="rating4">Teen 17 Violence &
                                Profanity</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="rating5">
                            <label class="custom-control-label" for="rating5">Teen 17 Violence & Mild
                                Nudity</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="rating6">
                            <label class="custom-control-label" for="rating6">18+</label>
                        </div>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="anime-btn btn-dark dropdown-toggle" id="sort-by" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    Sort by <span><i class="fa fa-chevron-down"></i></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="sort-by">
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="sort1">
                            <label class="custom-control-label" for="sort1">Recently updated</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="sort2">
                            <label class="custom-control-label" for="sort2">Release Date</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="sort3">
                            <label class="custom-control-label" for="sort3">Trending</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="sort4">
                            <label class="custom-control-label" for="sort4">Rating</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="sort5">
                            <label class="custom-control-label" for="sort5">Most Watched</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="sort6">
                            <label class="custom-control-label" for="sort6">Most Popular</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="sort7">
                            <label class="custom-control-label" for="sort7">Number of Episodes</label>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="filter-block">
            <li class="mb-0">
                <a href="#" class="anime-btn btn-dark border-change">Filter Now</a>
            </li>
        </ul>
    </div>
</section>
<!--=====================================-->
<!--=        anime Area Start          =-->
<!--=====================================-->
<section class="anime sec-mar">
    <div class="container">
        <div class="row">
            @foreach($animes as $anime)
            <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                <div class="anime-blog">
                    <a href="{{ route('filter') }}" class="img-block">
                        <img src="{{ asset("media/thumbnail/$anime->thumbnail") }}" alt="">
                    </a>
                    <a href="{{ route('filter') }}" class="action-overlay"><i class="fal fa-play-circle"></i> Play
                        Now</a>
                    <p class="text">Tv</p>
                    <div class="dropdown">
                        <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.145264" y="0.00012207" width="21.4395" height="2.68125" rx="1.34062" fill="#999999" />
                                <rect x="0.145264" y="7.41272" width="21.4395" height="2.68125" rx="1.34062" fill="#999999" />
                                <rect x="0.145264" y="14.8258" width="16.4914" height="2.68125" rx="1.34062" fill="#999999" />
                                <path d="M19.8784 16.0712C19.8784 15.4163 20.4093 14.8854 21.0642 14.8854H30.2463C30.9011 14.8854 31.432 15.4163 31.432 16.0712C31.432 16.7261 30.9011 17.257 30.2463 17.257H21.0642C20.4093 17.257 19.8784 16.7261 19.8784 16.0712Z" fill="#999999" />
                                <path d="M25.6552 22.0001C25.0171 22.0001 24.4999 21.4828 24.4999 20.8447V11.2977C24.4999 10.6596 25.0171 10.1423 25.6552 10.1423C26.2933 10.1423 26.8106 10.6596 26.8106 11.2977V20.8447C26.8106 21.4828 26.2933 22.0001 25.6552 22.0001Z" fill="#999999" />
                            </svg>
                        </button>
                        <ul class="dropdown-menu bg-color-black pt-3 pb-3 ps-3 pe-3">
                            <li>
                                <a href="" class="none"><i class="fa fa-check"></i> Watch Later </a>
                            </li>
                            <li>
                                <a href=""><i class="fas fa-plus"></i> Add to Playlist </a>
                            </li>
                        </ul>
                    </div>
                    <a href="{{ route('filter') }}">
                        <p>{{$anime -> title}}</p>
                    </a>
                </div>

            </div>
            @endforeach
        </div>
        <div class="pagination-wrape">
            {{$animes->links()}}
        </div>
    </div>
</section>
@endsection