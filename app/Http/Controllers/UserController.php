<?php

namespace App\Http\Controllers;

use App\Models\User;
use DB;
use Illuminate\Http\Request;

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


    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('users.show', compact('user'));
    }


    protected function store(Request $request)
    {
        $rules = [
            'name'     => 'max:255',
            'username' => 'unique:users|min:4',
            'password' => 'min:6'
        ];

        $this->validate($request, $rules);
        $user = new User;
        $user->save();
        $user->assignRole('user');

        return back();

    }
}