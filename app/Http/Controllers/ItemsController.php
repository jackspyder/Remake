<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Item;

/**
 *
 */
class ItemsController extends Controller
{
  public function index()
  {
    $items = Item::all();
    return view('items.index', compact('items'));
  }
}
