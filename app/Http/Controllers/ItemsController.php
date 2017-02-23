<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

/**
 *
 */
class ItemsController extends Controller
{
  public function index()
  {
    $items = DB::table('items')->get();
    return view('items.index', compact('items'));
  }
}
