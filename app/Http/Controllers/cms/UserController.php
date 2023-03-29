<?php

namespace App\Http\Controllers\cms;

use App\Helpers\GlobalHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

use DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // return datatable of the makes available
        $data = User::where('active', 1)->get();
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
                                    onclick="delRecord(`' . $row->id . '`)"
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
        return view('cms.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $record_id = (int) $request->record_id ?? -99;
        if($record_id !== -99){
            $user = User::findOrFail($record_id);
            // $this->update($request, $user);
        }

        $user = new User;

        if($request->has('avator')){
            $avator_filename = GlobalHelper::saveImage($request->file('avator'),'category', 'public');
        }

        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->sname = $request->sname;
        $user->name = $request->sname.' '.$request->fname.' '.$request->lname;
        $user->email = $request->email;
        $user->password = md5($request->password);
        $user->avator = $avator_filename;
        $user->save();

        return redirect()->back()->with('success', 'your message,here');   
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('cms.users.create', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
      dd( $request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
