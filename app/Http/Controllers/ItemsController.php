<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Spec;
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
        $specs = Spec::all();

        return view('items.index', compact('items'), compact('specs'));
    }


    public function search(Request $request)
    {
        $specs = Specs::all();
        $toMatch = [];

        foreach ($request->all() as $key => $value)
        {
            if ( ! empty(trim($value)) && $key != '_token')
            {
                $toMatch[$key] = trim($value);
            }
        }

        $items = Item::where($toMatch)->get();

        return view('items.index', compact('items'), compact('specs'));
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
      return back();
    }
}
