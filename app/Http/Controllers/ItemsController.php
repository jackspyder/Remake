<?php

namespace App\Http\Controllers;

use App\Models\Item;
use DB;
use Illuminate\Http\Request;

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
        $toMatch = [];

        foreach ($request->all() as $key => $value)
        {
            if ( ! empty(trim($value)) && $key != '_token')
            {
                $toMatch[$key] = trim($value);
            }
        }

        //$items = Item::where('id', '=', $request['id'])->get();

        $items = Item::where($toMatch)->get();

        return view('items.index', compact('items'));
    }

    public function store(Request $request)
    {
      $item = new Item;

      foreach ($request->all() as $key => $value)
      {
          if ( !empty(trim($value)) && $key != '_token')
          {
              $item->$key = trim($value);
          }
      }

      $item->save();
    }
}
