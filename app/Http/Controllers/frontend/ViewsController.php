<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Product;
use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function index(Request $request)
    {
       

        return view('frontend.index');
    }



    public function getPost($id)
    {
        $post_categories = PostCategory::where('active', 1)->with('posts')->get();
        $latest_posts = Post::where('active', 1)->orderBy('created_at', 'desc')->take(4)->get();
        $post = Post::with('comments.user')->findOrFail($id);
        return view('frontend.post', compact('post_categories', 'latest_posts', 'post'));
    }


    public function posts()
    {
        $post_categories = PostCategory::where('active', 1)->with('posts')->get();
        $posts = Post::where('active', 1)->orderBy('created_at', 'desc')->paginate(10);
        $featured_posts = Post::where('active', 1)->where('status', 3)->orderBy('created_at', 'desc')->get();

        return view('frontend.posts', compact('post_categories', 'posts', 'featured_posts'));
    }
}
