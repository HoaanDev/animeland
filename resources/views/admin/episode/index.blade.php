@extends('admin.navigation')

@section('title', 'Table Episodes')

@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                    </div>
                    <div>Data Tables Episodes
                        {{-- <div class="page-title-subheading">Choose between regular React Bootstrap tables or--}}
                        {{-- advanced dynamic ones.</div>--}}
                    </div>
                </div>
                <div class="page-title-actions">
                    <button class="mb-2 mr-2 btn btn-success"
                            onclick="window.location.href='{{ route('episodes.create') }}'">Create new episode
                    </button>
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Episode Name</th>
                        <th>Video URL</th>
                        <th>Anime Title</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($episodes as $episode)
                        <tr>
                            <td>{{ $episode->name }}</td>
                            <td>
                                <video width="320" height="240" controls>
                                    <source src="{{ asset("media/video/$episode->video_url") }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </td>
                            <td>
                                @foreach($animes as $anime)
                                    @if($episode->anime_id == $anime->id)
                                        {{ $anime->title }}
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                <button class="btn-transition btn btn-outline-info"
                                        onclick="window.location.href='{{ route('episodes.detail', $episode) }}'">Detail
                                </button>
                                <form action="{{ route('episodes.destroy', $episode) }}" method="post"
                                      class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-transition btn btn-outline-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    {{-- <tfoot>--}}
                    {{-- <tr>--}}
                    {{-- <th>Avatar</th>--}}
                    {{-- <th>Name</th>--}}
                    {{-- <th>Email</th>--}}
                    {{-- <th>Username</th>--}}
                    {{-- <th>Action</th>--}}
                    {{-- </tr>--}}
                    {{-- </tfoot>--}}
                </table>
            </div>
        </div>
    </div>
@endsection
