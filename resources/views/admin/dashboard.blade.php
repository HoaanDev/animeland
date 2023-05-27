@extends('admin.navigation')

@section('title', 'Dashboard')

@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-browser icon-gradient bg-mean-fruit"></i>
                    </div>
                    <div>
                        AnimeLand Dashboard
                        <div class="page-title-subheading">
                            Carry your task.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tabs-animation">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-3 bg-arielle-smile widget-chart text-white card-border">
                        <div class="icon-wrapper rounded">
                            <div class="icon-wrapper-bg bg-white opacity-6"></div>
                            <i class="lnr-users icon-gradient bg-arielle-smile"></i>
                        </div>
                        <div class="widget-numbers">{{ $clients }}</div>
                        <div class="widget-subheading">Total Clients</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3 bg-warm-flame widget-chart text-white card-border">
                        <div class="icon-wrapper rounded">
                            <div class="icon-wrapper-bg bg-white opacity-6"></div>
                            <i class="pe-7s-albums icon-gradient bg-arielle-smile"></i>
                        </div>
                        <div class="widget-numbers">{{ $animes }}</div>
                        <div class="widget-subheading">Total Animes</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3 bg-ripe-malin widget-chart text-white card-border">
                        <div class="icon-wrapper rounded">
                            <div class="icon-wrapper-bg bg-white opacity-6"></div>
                            <i class="lnr-film-play icon-gradient bg-arielle-smile"></i>
                        </div>
                        <div class="widget-numbers">{{ $episodes }}</div>
                        <div class="widget-subheading">Total Episodes</div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header-tab card-header">
                    <div
                        class="card-header-title font-size-lg text-capitalize font-weight-normal"
                    >
                        <i
                            class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"
                        >
                        </i
                        >New Comments
                    </div>
                </div>
                <div class="card-body">
                    <table
                        style="width: 100%"
                        id="example"
                        class="table table-hover table-striped table-bordered"
                    >
                        <thead>
                        <tr>
                            <th>Anime Title</th>
                            <th>User Name</th>
                            <th>Content</th>
                            <th>Time</th>
                            <th style="width: 50px">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($newComments as $newComment)
                            <tr>
                                <td>{{ $newComment->title }}</td>
                                <td>{{ $newComment->name }}</td>
                                <td>{{ $newComment->content }}</td>
                                <td>{{ $newComment->created_at }}</td>
                                <td>
                                    <form action="{{ route('comments.destroy', $newComment->comment_id) }}"
                                          method="post"
                                          class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-transition btn btn-outline-danger">DELETE
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <div class="panel panel-default">
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                        </div>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h5>Chart JS</h5>
                    <div id="piechart" style="width: 100%; height: 600px;"></div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages': ['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Month Name', 'Registered User Count'],

                @php
                    echo "['". "Clients"."', ".$clients."],";
                    echo "['". "Animes"."', ".$animes."],";
                    echo "['". "Episodes"."', ".$episodes."],";
                @endphp
            ]);

            var options = {
                title: '',
                is3D: false,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
@endsection
