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
        $user = new User;

        $user->name = request('name');
        $user->username = request('username');
        $user->password = bcrypt(request('password'));

        $user->save();

        return redirect('/users');
    }

    //protected function validator(array $data)
    //{
    //    return Validator::make($data, [
    //        'name'     => 'required|max:255',
    //        'username' => 'required|max:255|unique:users',
    //        'password' => 'required|min:6|confirmed',
    //    ]);
    //}

}