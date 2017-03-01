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

    $query = DB::table('items');

    foreach($request->all() as $key => $value)
    {
      if(!empty(trim($value)) && $key != '_token')
      {
        $query->where($key, $value);
      }
    }

    //$items = Item::where('id', '=', $request['id'])->get();

    $items = $query->get();
    return view('items.index', compact('items'));
  }
}
