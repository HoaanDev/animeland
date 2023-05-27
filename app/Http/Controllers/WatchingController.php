<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Comment;
use App\Models\Episode;
use App\Models\Following;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class WatchingController extends Controller
{
    public function index(Anime $anime, Episode $episode)
    {
        $episodes = $anime->episodes;
        $genres = $anime->genres;
        $ratings = $anime->ratings;
        $userRatingValue = 0;
        foreach ($ratings as $rating) {
            if ($rating->user_id == session('user_id')) {
                $userRatingValue = $rating->rating_value;
            }
        }
        $isFollowing = "";
        if (!empty(session('user_id'))) {
            $isFollowing = Following::where('user_id', Auth::user()->id)->where('anime_id', $anime->id)->first();
        }
        $similarAnimes = DB::table('animes')
            ->join('anime_genre', 'animes.id', '=', 'anime_genre.anime_id')
            ->join('episodes', 'animes.id', '=', 'episodes.anime_id')
            ->where('anime_genre.genre_id', '=', $genres[0]->id)
            ->groupBy('animes.title')
            ->limit(6)
            ->get();
        $comments = DB::table('comments')
            ->join('users', 'comments.user_id', '=', 'users.id')
            ->where('comments.anime_id', '=', $anime->only('id'))
            ->select('comments.id AS comment_id', 'comments.content', 'users.id AS user_id', 'users.name', 'users.avatar')
            ->paginate(6);
        if (session()->get('watched')) {
            $count = count(session()->get('watched'));
            if ($count >= 8) {
                $animesWatched = session()->pull('watched', []);
                $animesWatched = array_values($animesWatched);
                unset($animesWatched[0]);
                session()->put('watched', $animesWatched);
            }
        }
        $episodesSession = collect($episode);
        session()->push('watched', $episodesSession);
        if (empty($comments)) {
            if (empty($ratings)) {
                if (empty($userRatingValue)) {
                    return view('pages.anime.anime_watching', [
                        'anime' => $anime,
                        'episodes' => $episodes,
                        'episode' => $episode,
                        'genres' => $genres,
                        'similarAnimes' => $similarAnimes,
                    ]);
                }
            }
        } else {
            $avgRating = Rating::where('anime_id', '=', $anime->id)->avg('rating_value');
            return view('pages.anime.anime_watching', [
                'anime' => $anime,
                'episodes' => $episodes,
                'episode' => $episode,
                'comments' => $comments,
                'genres' => $genres,
                'ratings' => $ratings,
                'userRatingValue' => $userRatingValue,
                'avgRating' => $avgRating,
                'isFollowing' => $isFollowing,
                'similarAnimes' => $similarAnimes,
            ]);
        }
    }

    public
    function storeComment(Request $request)
    {
        $comment = new Comment();
        $commentInfo = $request->except('_token');
        $comment->fill($commentInfo);
        $comment->save();
        return redirect()->back();
    }

    public
    function destroyComment(Request $request, Comment $comment)
    {
        $comment->delete();
        return redirect()->back();
    }

    public function ratingAnime(Request $request, Anime $anime)
    {
        $rating = new Rating;
        $ratingInfo = $request->except('_token');
        $rating->fill($ratingInfo);
        $rating->save();
        return redirect()->back();
    }

    public function followingAnime(Request $request, Anime $anime)
    {
        auth()->user()->followingAnimes()->attach($anime);
        return redirect()->back();
    }

    public function unfollowingAnime(Request $request, Anime $anime)
    {
        $user = Auth::user();
        $user->followingAnimes()->detach($anime);
        return redirect()->back();
    }
}

