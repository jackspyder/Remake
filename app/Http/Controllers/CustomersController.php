<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::All();

        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'first_name' => 'nullable',
            'last_name' => 'nullable',
            'email' => 'unique:customers|required|email',
            'phone_no' => 'unique'
        ]);

        $customer = new Customer;
        $customer->first_name = request('first_name');
        $customer->last_name = request('last_name');
        $customer->email = request('email');
        $customer->phone_no = request('phone_no');
        $customer->save();

        return redirect('/customers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::withTrashed()->findOrFail($id);

        return view('customers.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);

        return view('customers.edit', compact('customer'));
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
        $customer = Customer::findOrFail($id);

        $this->validate(request(),[
            'first_name' => 'nullable',
            'last_name' => 'nullable',
            'email' => [
                'required',
                Rule::unique('customers')->ignore($customer->email),
            ],
            'phone_no' => [
                'required',
                Rule::unique('customers')->ignore($customer->phone_no),
            ]
        ]);

        $customer->first_name = request('first_name');
        $customer->last_name = request('last_name');
        $customer->email = request('email');
        $customer->phone_no = request('phone_no');
        $customer->save();

        return redirect('/customers');
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
