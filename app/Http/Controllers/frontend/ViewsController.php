<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function index(Request $request)
    {
        return view('frontend.index');
    }
}
