<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spec;

class SpecsController extends Controller
{
  public function store(Request $request)
  {
    $rules = [
      'brand'     => 'required',
      'model'     => 'required',
    ];

    $this->validate($request, $rules);

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
