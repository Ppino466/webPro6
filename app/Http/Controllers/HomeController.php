<?php

namespace App\Http\Controllers;

use App\Models\Client;

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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $numeroClientes = Client::count();
    
        return view('dashboard')->with('numeroClientes', $numeroClientes);
        
    }
}
