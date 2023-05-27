<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Comment;
use App\Models\Episode;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    //Admin Dashboard
    public function dashboard()
    {
        $clients = User::all();
        $clients = count($clients);

        $animes = Anime::all();
        $animes = count($animes);

        $episodes = Episode::all();
        $episodes = count($episodes);

        $newComments = DB::table('comments')
            ->join('users', 'comments.user_id', '=', 'users.id')
            ->join('animes', 'comments.anime_id', '=', 'animes.id')
            ->orderBy('comments.created_at', 'DESC')
            ->select('comments.id AS comment_id','animes.title', 'users.name', 'comments.content', 'comments.created_at')
            ->limit(20)
            ->get();
        return view('admin.dashboard', [
            'clients' => $clients,
            'animes' => $animes,
            'episodes' => $episodes,
            'newComments' => $newComments,
        ]);
    }

    public function comingSoon()
    {
        return view('pages.coming_soon');
    }
}
