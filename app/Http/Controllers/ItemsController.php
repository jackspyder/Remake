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


    public function add()
    {
        $items = Item::all();
        $specs = Spec::all();

        return view('items.add', compact('items'), compact('specs'));
    }


    public function searchitems(Request $request)
    {
        $specs = Specs::all();
        $toMatch = [];

        foreach ($request->all() as $key => $value) {
            if ( ! empty(trim($value)) && $key != '_token' ) {
                $toMatch[$key] = trim($value);
            }
        }

        $items = Item::where($toMatch)->get();

        return view('items.index', compact('items'), compact('specs'));
    }

    public function searchspecs(Request $request)
    {
        $specs = Spec::all();
        $toMatch = [];

        foreach ($request->all() as $key => $value) {
            if ( ! empty(trim($value)) && $key != '_token' ) {
                $toMatch[$key] = trim($value);
            }
        }

        $gotspecs = Spec::where($toMatch)->get();
        $items = array();
        foreach($gotspecs as $spec)
        {
          foreach($spec->items as $itemgot)
          {
            $items[] = $itemgot;
          }
        }

        return view('items.index', compact('items'), compact('specs'));
    }

    public function store(Request $request)
    {
        $rules = [
            'id'        => 'unique:users|min:0',
            'spec_id'   => 'required|min:0',
            'category'  => 'required',
            'price'     => 'between:0,9999.99|nullable',
            'weight'    => 'min:0|nullable',
            'condition' => 'required',
            'status'    => 'required',
        ];

        if (trim($request['price']) != "") {
            $rules['price'] .= '|numeric';
        }

        if (trim($request['weight']) != "") {
            $rules['weight'] .= '|numeric';
        }

        $this->validate($request, $rules);

        $item = new Item;

        foreach ($request->all() as $key => $value) {
            if ( ! empty(trim($value)) && $key != '_token') {
                $item->$key = trim($value);
            }
        }

        $item->save();

        return back();
    }
}
