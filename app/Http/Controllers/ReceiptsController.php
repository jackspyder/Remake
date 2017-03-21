<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Sale;
use App\Models\Receipt;
use DB;

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
        $items    = Item::all();
        return view('receipts.index', compact('receipts', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Item::all();
        return view('sales.add', compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'id'        => 'unique:receipts|min:0',
            'payment'   => 'required',
            'served_by' => 'required',
        ];

        $this->validate($request, $rules);

        $receipt = new Receipt;

        if(trim($request['id']) != "")
        {
            $receipt->id = trim($request['id']);
        }

        $receipt->warranty = $request['warranty'];
        $receipt->payment = $request['payment'];
        $receipt->served_by = $request['served_by'];

        $receipt->save();

        foreach($request['list'] as $item)
        {
            $sale = new Sale;

            //Get last entry into the receipt table i.e the one we just added up there ^^^
            $sale->receipt_id = Receipt::orderby('created_at', 'desc')->first()->id;
            $sale->item_id = $item;

            $sale->save();
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
