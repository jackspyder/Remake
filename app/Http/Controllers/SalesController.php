<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Spec;
use DB;

class SalesController extends Controller
{
  public function index()
  {
      return view('sales.index');
  }

  public function add()
  {
      $items = Item::all();
      $specs = Spec::all();
      return view('sales.add', compact('items'), compact('specs'));
  }
}
