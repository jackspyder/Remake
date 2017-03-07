<?php

namespace App\Http\Controllers;

use App\Models\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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


    public function add()
    {
        return view('users.add');
    }

    protected function store(Request $request)
    {
        $rules = [
            'name'     => 'required|max:255',
            'username' => 'required|max:255|unique:users',
            'password' => 'required|min:6|confirmed'
        ];

        $this->validate($request, $rules);
        $user = new User;
        $user->save();

        //$user->assignRole('user');

        return back();

    }
}