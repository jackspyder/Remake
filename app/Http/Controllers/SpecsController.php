<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spec;

class SpecsController extends Controller
{
  public function store(Request $request)
  {
    $spec = new Spec;

    foreach ($request->all() as $key => $value)
    {
        if ( !empty(trim($value)) && $key != '_token')
        {
            $spec->$key = trim($value);
        }
    }

    $spec->save();
    return back();
  }
}
