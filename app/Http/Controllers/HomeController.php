<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // Cache::put('name', auth()->user(), 1000);
        // dd(
        //     Cache::get('name')
        // );
        return view('home');
    }


    /**
     * Show the application cms.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function cms()
    {
        return view('cms.index');
    }
}
