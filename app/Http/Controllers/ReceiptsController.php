<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Receipt;
use DB;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class ReceiptsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $receipts = Receipt::all();
        $items = Item::all();

        return view('receipts.index', compact('receipts', 'items'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Item::where('status', 'For Sale')->get();

        return view('receipts.create', compact('items'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'id'        => 'unique:receipts|min:0',
            'payment'   => 'required',
        ];

        $this->validate($request, $rules);

        $receipt = new Receipt;

        if (trim($request['id']) != "") {
            $receipt->id = trim($request['id']);
        }


        $receipt->warranty = $request['warranty'];
        $receipt->payment = $request['payment'];
        $receipt->served_by = \Auth::user()->username;

        $receipt->save();

        foreach ($request['list'] as $item) {
            //mark the listed items as sold.
            $sold = Item::findOrFail($item);
            $sold->status = 'Sold';
            $sold->save();

            //attack the items to the receipt.
            $receipt->items()->attach($item);
        }

        return redirect('/receipts');
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $receipt = Receipt::findOrFail($id);

        return view('receipts.show', compact('receipt'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $receipt = Receipt::findOrFail($id);

        return view('receipts.edit', compact('receipt'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }


    public function search(Request $request)
    {
        $toMatch = [];

        foreach ($request->all() as $key => $value) {
            if ( ! empty(trim($value)) && $key != '_token') {
                $toMatch[$key] = trim($value);
            }
        }

        $receipts = Receipt::where($toMatch)->get();
        $items = Item::all();

        return view('receipts.index', compact('receipts', 'items', 'specs'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
