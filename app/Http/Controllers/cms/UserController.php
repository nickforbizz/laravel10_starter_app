<?php

namespace App\Http\Controllers\cms;

use App\Helpers\GlobalHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Permission;
use App\Models\Role;
use DataTables;
use Illuminate\Support\Facades\Storage;

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
        $roles = Role::all();
        $permissions = Permission::all();
        return view('cms.users.create', compact('roles', 'permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        
        $request = $this->addFieldsStoreImg($request);
        
        $user = User::create($request->all());

        if(! empty($request->roles)) {
            $user->assignRole($request->roles);
        }

        return redirect()->back()->with('success', 'Record Created Successfully');   
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return $user;
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
        $request = $this->addFieldsStoreImg($request, $user);

        $user->update($request->all());

        if(! empty($request->roles)) {
            $user->assignRole($request->roles);
        }

        // Redirect the user to the user's profile page
        return redirect()
                ->route('users.index')
                ->with('success', 'Record updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {

         // delete user's profile image if it exists
        if ($user->avator && Storage::disk('public')->exists($user->avator)) {
            Storage::disk('public')->delete($user->avator);
        }

        if($user->delete()){
            return response()->json([
                'code' => 1,
                'msg' => 'Record deleted successfully'
            ]);
        }

        return response()->json([
            'code' => -1,
            'msg' => 'Record did not delete'
        ]);

        // return redirect()->back()->with('success', 'Record Deleted Successfully');
    }


    private function addFieldsStoreImg(Request $request, User $user=null)
    {
        // Delete Image
        if($user){
            if ($user->avator && Storage::disk('public')->exists($user->avator)) {
                Storage::disk('public')->delete($user->avator);
            }
        }

        // Store Image
        if($request->has('profile')){
            $avator_filename = GlobalHelper::saveImage($request->file('profile'),'profiles', 'public');
            $request->request->add(['avator' => $avator_filename]);
        }
        $fullname = $request->sname.' '.$request->fname.' '.$request->lname;
        $request->request->add(['name' =>  $fullname]);

        return  $request;
    }
}
