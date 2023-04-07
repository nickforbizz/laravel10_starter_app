<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\Role;

use Illuminate\Http\Request;
use DataTables;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // return datatable of the makes available
        $data = Role::where('active', 1)->get();
        if ($request->ajax()) {
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('created_at', function ($row) {
                    return date_format($row->created_at, 'Y/m/d H:i');
                })
                ->editColumn('created_by', function ($row) {
                    return isset($row->created_by) ? $row?->user?->email : 'N/A';
                })
                ->addColumn('action', function ($row) {
                    $btn = '<a data-toggle="tooltip" 
                                    href="'. route('roles.edit', $row->id) .'" 
                                    class="btn btn-link btn-primary btn-lg" 
                                    data-original-title="Edit Record">
                                <i class="fa fa-edit"></i>
                            </a>
                            <button type="button" 
                                    data-toggle="tooltip" 
                                    title="" 
                                    class="btn btn-link btn-danger" 
                                    onclick="delRecord(`' . $row->id . '`, `'.route('roles.destroy', $row->id).'`, `#tb_roles`)"
                                    data-original-title="Remove">
                                <i class="fa fa-times"></i>
                            </button>';
                    return $btn;
                })
                ->rawColumns(['action', 'created_at', 'created_by'])
                ->make(true);
        }

        // render view
        return view('cms.roles.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // render view
        return view('cms.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request)
    {
        Role::create($request->all());
        return redirect()
            ->route('roles.index')
            ->with('success', 'Record Created Successfully');   
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return response()
        ->json($role, 200, ['JSON_PRETTY_PRINT' => JSON_PRETTY_PRINT]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        return view('cms.roles.create', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        $role->update($request->all());

        // Redirect the user to the user's profile page
        return redirect()
                ->route('roles.index')
                ->with('success', 'Record updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        if($role->delete()){
            return response()->json([
                'code' => 1,
                'msg' => 'Record deleted successfully'
            ], 200, ['JSON_PRETTY_PRINT' => JSON_PRETTY_PRINT]);
        }

        return response()->json([
            'code' => -1,
            'msg' => 'Record did not delete'
        ], 422, ['JSON_PRETTY_PRINT' => JSON_PRETTY_PRINT]);
    }
}
