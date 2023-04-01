<?php

namespace App\Http\Controllers;

use App\Models\Post;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

use Datatables;
use Illuminate\Http\Client\Request;

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
                                    href="'. route('users.edit', $row->id) .'" 
                                    class="btn btn-link btn-primary btn-lg" 
                                    data-original-title="Edit Record">
                                <i class="fa fa-edit"></i>
                            </a>
                            <button type="button" 
                                    data-toggle="tooltip" 
                                    title="" 
                                    class="btn btn-link btn-danger" 
                                    onclick="delRecord(`' . $row->id . '`, `'.route('users.destroy', $row->id).'`, `#tb_users`)"
                                    data-original-title="Remove">
                                <i class="fa fa-times"></i>
                            </button>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        // render view
        return view('cms.users.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
