<?php

namespace App\Http\Controllers;

use App\Models\Following;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index()
    {
        return view('pages.user.profile');
    }

    public function editProfile()
    {
        return view('pages.user.edit_profile');
    }

    public function updateProfile(Request $request, User $user)
    {

        $userInfo = $request->except('_token');
        if ($request->file('avatar') != '') {
            $destinationPath = 'media/avatar/';
            $userInfo['avatar'] = $request->file('avatar')->getClientOriginalName();
            $file_old = $destinationPath . $userInfo['avatar'];
            //code for remove old file
            if ($file_old != '' && $file_old != null) {

            } else {
                unlink($file_old);
            }

            //upload new file
            $file = $request->file('avatar');
            $fileName = $file->getClientOriginalName();
            $file->move($destinationPath, $fileName);

            //for update in table
        }
        $user->update($userInfo);
        return redirect()->route('profiles.profiles');
    }

    //Watch History Page
    public function watchHistoryPage() {
        return view('pages.anime.anime_watch_history');
    }

    //Following Page
    public function followingPage() {
        $followingAnimes = DB::table('followings')
            ->join('animes', 'followings.anime_id', '=', 'animes.id')
            ->where('followings.user_id', '=', Auth::user()->id)
            ->groupBy('animes.title')
            ->paginate(6);
        if(count($followingAnimes) == 0) {
            return view('pages.user.following');
        }
        return view('pages.user.following', [
            'followingAnimes' => $followingAnimes,
        ]);
    }
}
