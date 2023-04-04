<?php

namespace App\Http\Controllers;

use App\Helpers\GlobalHelper;
use App\Models\Post;


use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\PostCategory;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // return datatable of the makes available
        $data = Post::where('active', 1)->get();
        if ($request->ajax()) {
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('created_at', function ($row) {
                    return date_format($row->created_at, 'Y/m/d H:i');
                })
                ->addColumn('action', function ($row) {
                    $btn = '<a data-toggle="tooltip" 
                                    href="'. route('posts.edit', $row->id) .'" 
                                    class="btn btn-link btn-primary btn-lg" 
                                    data-original-title="Edit Record">
                                <i class="fa fa-edit"></i>
                            </a>
                            <button type="button" 
                                    data-toggle="tooltip" 
                                    title="" 
                                    class="btn btn-link btn-danger" 
                                    onclick="delRecord(`' . $row->id . '`, `'.route('posts.destroy', $row->id).'`, `#tb_posts`)"
                                    data-original-title="Remove">
                                <i class="fa fa-times"></i>
                            </button>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        // render view
        return view('cms.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $post_categories = PostCategory::where('active', 1)->get();
        return view('cms.posts.create', compact('post_categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $request = $this->storeFeaturedImg($request);
        $post = Post::create($request->all());

        return redirect()
                ->route('cms.posts.index')
                ->with('success', 'Record Created Successfully'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $post_categories = PostCategory::where('active', 1)->get();
        return view('cms.posts.create', compact('post', 'post_categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $request = $this->storeFeaturedImg($request);
        $post->update($request->all());

        // Redirect the post to the post's profile page
        return redirect()
                ->route('posts.index')
                ->with('success', 'Record updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
         // delete post's profile image if it exists
         if ($post->featured_img && Storage::disk('public')->exists($post->featured_img)) {
            Storage::disk('public')->delete($post->featured_img);
        }

        if($post->delete()){
            return response()->json([
                'code' => 1,
                'msg' => 'Record deleted successfully'
            ]);
        }

        return response()->json([
            'code' => -1,
            'msg' => 'Record did not delete'
        ]);
    }

    private function storeFeaturedImg(Request $request, Post $post=null)
    {

        // Delete Image
        if($post){
            if ($post->featured_img && Storage::disk('public')->exists($post->featured_img)) {
                Storage::disk('public')->delete($post->featured_img);
            }
        }

        // Store Image
        if($request->has('profile')){
            $featured_img_filename = GlobalHelper::saveImage($request->file('featured_img'),'profiles', 'public');
            $request->request->add(['featured_img' => $featured_img_filename]);
        }

        return  $request;
    }
    
}
