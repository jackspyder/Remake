<?php

namespace App\Http\Controllers;

use App\Models\User;
use DB;

/**
 *
 */
class UserController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }


    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }


    public function create()
    {
        return view('users.create');
    }


    protected function store()
    {
        $this->validate(request(), [
            'name'     => 'required|max:255',
            'username' => 'required|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);


        $user = new User;
        $user->name = request('name');
        $user->username = request('username');
        $user->password = bcrypt(request('password'));
        $user->save();

        return redirect('/users');
    }

}