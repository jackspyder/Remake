<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\User;

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
}