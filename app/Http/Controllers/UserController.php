<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();
        return view('admin.user.index', [
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->fill($request->except('_token'));
        $user->save();
        return redirect()->route('user.users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.user.detail', [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user = $request->except('_token', '_method');
//        $file = $request->file('avatar');
//        $fileName = $file->getClientOriginalName();
//        //Move Uploaded File
//        $destinationPath = 'media/avatar/';
//        $file->move($destinationPath,$file->getClientOriginalName());
//        $user['avatar'] = $fileName;
//        $user->update($user);

        if($request->file('avatar') != ''){
            $destinationPath = 'media/avatar/';

            //code for remove old file
            if($user['avatar'] != ''  && $user['avatar'] != null){
                $file_old = $destinationPath . $user['avatar'];
                unlink($file_old);
            }

            //upload new file
            $file = $request->file('avatar');
            $fileName = $file->getClientOriginalName();
            $file->move($destinationPath, $fileName);

            //for update in table
            $user->update($user);
        }
        return redirect()->route('user.users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.users');
    }
}
