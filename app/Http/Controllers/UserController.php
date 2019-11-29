<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use App\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $users = \App\User::where('name', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $users = \App\User::all();
        }

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mandor = Role::where('name', 'mandor')->first();

        $new_user = new User;
        $new_user->name = $request->get('name');
        $new_user->email = $request->get('email');
        $new_user->password = bcrypt($request->get('password'));
        $new_user->save();
        $new_user->roles()->attach($mandor);
        // dd($new_user);

        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.users.show')->with('users', User::findOrFail($user->id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if (Auth::user()->id == $user->id) {
            return redirect()->route('users.index');
        }

        User::destroy($user->id);
        return redirect()->route('users.index');
    }

    public function tambahuser()
    { }

    // public function simpanuser(Request $request)
    // {
    //     $admin = Role::where('name', 'admin')->first();

    //     $new_user = new User;
    //     $new_user->name = $request->get('name');
    //     $new_user->email = $request->get('email');
    //     $new_user->password = bcrypt($request->get('password'));
    //     $new_user->save();
    //     $new_user->roles()->attach($admin);
    //     // dd($new_user);

    //     return redirect()->route('users.index');
    // }
}
