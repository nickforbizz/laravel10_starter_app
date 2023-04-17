<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        
        $results = DB::table('posts')
                    ->where('title', 'like', '%'.$query.'%')
                    ->orWhere('body', 'like', '%'.$query.'%')
                    ->get();
        
        return view('search', ['results' => $results]);
    }

}
