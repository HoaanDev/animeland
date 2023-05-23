<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Comment;
use App\Models\Episode;
use App\Models\User;
use Illuminate\Http\Request;

class WatchingController extends Controller
{
    public function index(Anime $anime, Episode $episode)
    {
        $episodes = $anime->episodes;
        $comments = $anime->comments;
        foreach ($comments as $comment) {
            $usersInfo = User::where('id', $comment->user_id)->first();
        }
        if (empty($usersInfo)) {
            return view('pages.anime.anime_watching', [
                'anime' => $anime,
                'episodes' => $episodes,
                'episode' => $episode,
                'comments' => $comments,
            ]);
        } else {
            return view('pages.anime.anime_watching', [
                'anime' => $anime,
                'episodes' => $episodes,
                'episode' => $episode,
                'comments' => $comments,
                'usersInfo' => $usersInfo,
            ]);
        }
    }

    public function storeComment(Request $request)
    {
        $comment = new Comment();
        $commentInfo = $request->except('_token', 'episode');
        $comment->fill($commentInfo);
        $comment->save();
        return redirect()->route('watching', [$comment->anime_id, $comment->user_id]);
    }

    public function destroyComment(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('watching', [$comment->anime_id, $comment->user_id]);
    }
}
