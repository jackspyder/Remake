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
    $query = DB::table('items');
    $toMatch = array();

    foreach($request->all() as $key => $value)
    {
      if(!empty(trim($value)) && $key != '_token')
      {
        $toMatch[$key] = $value;
      }
    }

    //$items = Item::where('id', '=', $request['id'])->get();

    $items = Item::where($toMatch)->get();
    return view('items.index', compact('items'));
  }
}
