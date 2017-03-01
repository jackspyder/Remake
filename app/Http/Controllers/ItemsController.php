<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Item;

/**
 *
 */
class ItemsController extends Controller
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
    $items = Item::all();
    return view('items.index', compact('items'));
  }

  public function search(Request $request)
  {
    if(empty($request))
    {
      index();
    }

    $items = Item::where('id', '=', $request['id'])->get();
    return view('items.index', compact('items'));
  }
}
