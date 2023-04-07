<?php

namespace App\Http\Controllers\cms;
use App\Http\Controllers\Controller;

use App\Helpers\GlobalHelper;
use App\Models\Post;


use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\PostCategory;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // return datatable of the makes available
        $data = Post::orderBy('created_at', 'desc')->get();
        if ($request->ajax()) {
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('created_at', function ($row) {
                    return date_format($row->created_at, 'Y/m/d H:i');
                })
                ->editColumn('featured_img', function ($row) {
                    return '<img class="tb_img" src="'. url('storage/'.$row->featured_img) .'" alt="'. $row->slug .'" data-toggle="popover" data-placement="top" data-content="<img src='. url('storage/'.$row->featured_img) .' style=\'max-height: 200px; max-width: 200px;\'>">';
                })
                ->editColumn('category_id', function ($row) {
                    return $row->post_category->name;
                })
                ->editColumn('title', function ($row) {
                    return Str::limit($row->title, 10, '...');
                })
                ->editColumn('content', function ($row) {
                    return Str::limit($row->content, 20, '...');
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
                ->rawColumns(['featured_img', 'category_id', 'title', 'content', 'action'])
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

        if($post){
            return redirect()
            ->route('posts.index')
            ->with('success', 'Record Created Successfully');  
        }
        $post_categories = PostCategory::where('active', 1)->get();
        return redirect()
        ->route('cms.posts.create', compact('post_categories'))
        ->with('error', 'Error while creating record'); 
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
        if($request->has('featuredimg')){
            $featured_img_filename = GlobalHelper::saveImage($request->file('featuredimg'),'posts', 'public');
            $request->request->add(['featured_img' => $featured_img_filename]);
        }

        return  $request;
    }
    
}