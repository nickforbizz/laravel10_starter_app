<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::where('active', 1)->get();
        $posts = Post::where('active', 1)->orderBy('created_at', 'desc')->take(3)->get();

        return view('frontend.index', compact('products', 'posts'));
    }
}
