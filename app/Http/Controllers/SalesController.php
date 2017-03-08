<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Sale;
use App\Models\Receipt;
use DB;

class SalesController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
      $receipts = Receipt::all();
      return view('sales.index', compact('receipts'));
  }

  public function add()
  {
      $items = Item::all();
      return view('sales.add', compact('items'));
  }

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
}
