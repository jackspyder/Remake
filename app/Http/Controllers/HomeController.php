<?php

namespace App\Http\Controllers;

use App\Models\Item;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('auth.login');
    }


    public function dashboard()
    {

        $forsale = Item::where('status', 'For Sale')->get()->count();
        $forparts = Item::where('status', 'For Parts')->get()->count();
        $storage = Item::where('status', 'Storage')->get()->count();
        $sold = Item::where('status', 'Sold')->get()->count();
        $refurbishment = Item::where('status', 'For Refurbishment')->get()->count();

        $counts = [
            "forsale"           => $forsale,
            "forparts"          => $forparts,
            "storage"           => $storage,
            "sold"              => $sold,
            "For Refurbishment" => $refurbishment
        ];

        return view('home', compact('counts'));
    }
}
