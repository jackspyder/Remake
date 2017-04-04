<?php

namespace App\Http\Controllers;

use App\Models\Dimension;
use App\Models\Item;
use App\Models\Spec;
use Illuminate\Http\Request;
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
        $items = Item::orderBy('barcode')->get();

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
        $specs = Spec::all();

        return view('items.create', compact('items', 'specs'));
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
            'barcode' => 'unique:items|min:0|required',
            'category' => 'required',
            'price' => 'between:0,9999.99|nullable',
            'weight' => 'min:0|nullable',
            'condition' => 'required',
            'status' => 'required',
            'brand' => 'max:20',
            'model' => 'max:20',
            'cpu' => 'max:20',
            'ram' => 'max:20',
            'hdd' => 'max:20',
            'odd' => 'max:20',
            'gpu' => 'max:20',
            'battery' => 'max:20',
            'usb' => 'max:20',
            'lan' => 'max:20',
            'wlan' => 'max:20',
            'os' => 'max:20',
            'psu' => 'max:20',
            'screen_size' => 'max:20',
            'screen rez' => 'max:20',
        ]);

        $item = Item::create($request->only('barcode', 'category', 'price', 'weight', 'condition', 'status', 'furniture',
            'coa', 'notes'));

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
        $item = Item::findOrFail($id);

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
        $item = Item::findOrFail($id);
        $spec = Spec::all();

        return view('items.edit', compact('item', 'spec'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        $this->validate(request(), [
            'barcode' => [
                'required',
                Rule::unique('items')->ignore($item->id),
            ],
            'category' => 'required',
            'price' => 'between:0,9999.99|nullable',
            'weight' => 'min:0|nullable',
            'condition' => 'required',
            'status' => 'required',
            'brand' => 'max:20',
            'model' => 'max:20',
            'cpu' => 'max:20',
            'ram' => 'max:20',
            'hdd' => 'max:20',
            'odd' => 'max:20',
            'gpu' => 'max:20',
            'battery' => 'max:20',
            'usb' => 'max:20',
            'lan' => 'max:20',
            'wlan' => 'max:20',
            'os' => 'max:20',
            'psu' => 'max:20',
            'screen_size' => 'max:20',
            'screen rez' => 'max:20',
        ]);



        $item->update($request->only('barcode', 'category', 'price', 'weight', 'condition', 'status', 'furniture', 'coa',
            'notes'));

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

    }


    public function search(Request $request)
    {
        $toMatch = [];

        foreach ($request->all() as $key => $value) {
            if (!empty(trim($value)) && $key != '_token') {
                $toMatch[$key] = trim($value);
            }
        }
        $items = Item::where($toMatch)->get();

        return view('items.index', compact('items'));
    }


    public function searchspecs(Request $request)
    {
        $specs = Spec::all();
        $toMatch = [];

        foreach ($request->all() as $key => $value) {
            if (!empty(trim($value)) && $key != '_token') {
                $toMatch[$key] = trim($value);
            }
        }

        $gotspecs = Spec::where($toMatch)->get();
        $items = [];
        foreach ($gotspecs as $spec) {
            foreach ($spec->items as $itemgot) {
                $items[] = $itemgot;
            }
        }

        return view('items.index', compact('items'), compact('specs'));
    }
}
