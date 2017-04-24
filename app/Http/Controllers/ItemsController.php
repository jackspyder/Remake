<?php

namespace App\Http\Controllers;

use App\Models\Dimension;
use App\Models\Item;
use App\Models\Spec;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class ItemsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::orderBy('barcode')->withTrashed()->get();

        return view('items.index', compact('items'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Item::all();

        $code = DB::table('items')->max('barcode');

        return view('items.create', compact('items', 'code'));
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

        $this->validate(request(), [
            'barcode'     => 'unique:items|min:0|required',
            'category'    => 'required',
            'price'       => 'between:0,9999.99|required',
            'weight'      => 'min:0|required',
            'condition'   => 'required',
            'status'      => 'required',
            'brand'       => 'max:40',
            'model'       => 'max:40',
            'cpu'         => 'max:40',
            'ram'         => 'max:40',
            'hdd'         => 'max:40',
            'odd'         => 'max:40',
            'gpu'         => 'max:40',
            'battery'     => 'max:40',
            'usb'         => 'max:100',
            'lan'         => 'max:40',
            'wlan'        => 'max:40',
            'os'          => 'max:40',
            'psu'         => 'max:40',
            'screen_size' => 'max:40',
            'screen rez'  => 'max:40',
        ]);

        $item = Item::create($request->only('barcode', 'category', 'price', 'weight', 'condition', 'status',
            'furniture', 'coa', 'notes'));

        $spec = Spec::create($request->only('brand', 'model', 'cpu', 'ram', 'hdd', 'odd', 'gpu', 'battery', 'usb',
            'lan', 'wlan', 'os', 'psu', 'screen_size', 'screen rez'));

        $dim = Dimension::create($request->only('height', 'width', 'depth'));

        $item->specs()->save($spec);
        $item->dimensions()->save($dim);

        return redirect('/items');
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
        $item = Item::withTrashed()->findOrFail($id);

        return view('items.show', compact('item'));
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
        $item = Item::withTrashed()->findOrFail($id);

        //$spec = Spec::all();

        return view('items.edit', compact('item'));
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
        $item = Item::findOrFail($id);

        $this->validate(request(), [
            'barcode'     => [
                'required',
                Rule::unique('items')->ignore($item->id),
            ],
            'category'    => 'required',
            'price'       => 'between:0,9999.99|nullable',
            'weight'      => 'min:0|nullable',
            'condition'   => 'required',
            'status'      => 'required',
            'brand'       => 'max:40',
            'model'       => 'max:40',
            'cpu'         => 'max:40',
            'ram'         => 'max:40',
            'hdd'         => 'max:40',
            'odd'         => 'max:40',
            'gpu'         => 'max:40',
            'battery'     => 'max:40',
            'usb'         => 'max:100',
            'lan'         => 'max:40',
            'wlan'        => 'max:40',
            'os'          => 'max:40',
            'psu'         => 'max:40',
            'screen_size' => 'max:40',
            'screen rez'  => 'max:40',
        ]);

        $item->update($request->only('barcode', 'category', 'price', 'weight', 'condition', 'status', 'furniture',
            'coa', 'notes'));

        $item->specs->update($request->only('brand', 'model', 'cpu', 'ram', 'hdd', 'odd', 'gpu', 'battery', 'usb',
            'lan', 'wlan', 'os', 'psu', 'screen_size', 'screen rez'));

        $item->dimensions->update($request->only('height', 'width', 'depth'));

        return redirect('/items');
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

        $item = Item::findOrFail($id);

        $item->delete();

        return redirect('/items');
    }


    public function restore($id)
    {
        Item::withTrashed()->findOrFail($id)->restore();

        return redirect('/items');
    }


    public function search(Request $request)
    {
        $toMatch = [];

        foreach ($request->all() as $key => $value) {
            if ( ! empty(trim($value)) && $key != '_token') {
                $toMatch[$key] = trim($value);
            }
        }
        $items = Item::where($toMatch)->withTrashed()->get();

        return view('items.index', compact('items'));
    }


    public function searchspecs(Request $request)
    {
        $specs = Spec::all();
        $toMatch = [];

        foreach ($request->all() as $key => $value) {
            if ( ! empty(trim($value)) && $key != '_token') {
                $toMatch[$key] = trim($value);
            }
        }

        $gotspecs = Spec::where($toMatch)->get();
        $items2 = [];
        foreach ($gotspecs as $spec) {
            $items2[] = $spec['item_id'];
            //foreach ($spec->item_id as $itemgot) {
            //    $items[] = $itemgot;
            //}
        }

        $items = Item::find($items2);

        return view('items.index', compact('items'), compact('specs'));
    }
}
