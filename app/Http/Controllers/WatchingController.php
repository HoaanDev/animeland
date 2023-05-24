<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Comment;
use App\Models\Episode;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class WatchingController extends Controller
{
    public function index(Anime $anime, Episode $episode)
    {
        $episodes = $anime->episodes;
        $genres = $anime->genres;
        $similarAnimes = DB::table('animes')
            ->join('anime_genre', 'animes.id', '=', 'anime_genre.anime_id')
            ->join('episodes', 'animes.id', '=', 'episodes.anime_id')
            ->where('anime_genre.genre_id', '=', 3)
            ->groupBy('animes.title')
            ->limit(6)
            ->get();

        $comments = DB::table('comments')
            ->join('users', 'comments.user_id', '=', 'users.id')
            ->where('comments.anime_id', '=', $anime->only('id'))
            ->select('comments.id AS comment_id', 'comments.content', 'users.id AS user_id', 'users.name', 'users.avatar')
            ->get();
        if (empty($comments)) {
        $comments = $anime->comments;
        if(session()->get('watched')) {
            $count = count(session()->get('watched'));
            if($count >= 8 ) {
                $animesWatched = session()->pull('watched', []);
                $animesWatched = array_values($animesWatched);
                unset($animesWatched[0]);
                session()->put('watched', $animesWatched);
            }
        }
        $episodesSession = collect($episode);
        session()->push('watched', $episodesSession);
        foreach ($comments as $comment) {
            $usersInfo = User::where('id', $comment->user_id)->first();
        }
        if (empty($usersInfo)) {
            return view('pages.anime.anime_watching', [
                'anime' => $anime,
                'episodes' => $episodes,
                'episode' => $episode,
                'genres' => $genres,
                'similarAnimes' => $similarAnimes,
            ]);
        } else {
            return view('pages.anime.anime_watching', [
                'anime' => $anime,
                'episodes' => $episodes,
                'episode' => $episode,
                'comments' => $comments,
                'genres' => $genres,
                'similarAnimes' => $similarAnimes,
            ]);
        }
    }

    public function storeComment(Request $request)
    {
        $comment = new Comment();
        $commentInfo = $request->except('_token', 'episode');
        $episode = $request->only('episode');
        $comment->fill($commentInfo);
        $comment->save();
        return redirect()->route('watching', [$comment->anime_id, $episode['episode']]);
    }

    public function destroyComment(Request $request, Comment $comment)
    {
        $episode = $request->only('episode');
        $comment->delete();
        return redirect()->route('watching', [$comment->anime_id, $episode['episode']]);
    }
}
