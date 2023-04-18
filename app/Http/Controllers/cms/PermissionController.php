<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePermissionRequest;
use App\Http\Requests\UpdatePermissionRequest;
use App\Models\Guard;
use App\Models\Permission;

use Illuminate\Http\Request;
use DataTables;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // return datatable of the makes available
        $data = Permission::orderBy('created_at', 'desc')->get();
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
                $btn_edit = $btn_del = null;
                if (auth()->user()->hasRole('superadmin')) {
                    $btn_edit = '<a data-toggle="tooltip" 
                                    href="' . route('permissions.edit', $row->id) . '" 
                                    class="btn btn-link btn-primary btn-lg" 
                                    data-original-title="Edit Record">
                                <i class="fa fa-edit"></i>
                            </a>';

                    $btn_del = '<button type="button" 
                                data-toggle="tooltip" 
                                title="" 
                                class="btn btn-link btn-danger" 
                                onclick="delRecord(`' . $row->id . '`, `' . route('permissions.destroy', $row->id) . '`, `#tb_permissions`)"
                                data-original-title="Remove">
                            <i class="fa fa-times"></i>
                        </button>';
                }
                return $btn_edit . $btn_del;
                })
                ->rawColumns(['action', 'created_at', 'created_by'])
                ->make(true);
        }

        // render view
        return view('cms.permissions.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $guards = Guard::where('active', 1)->get();
        // render view
        return view('cms.permissions.create', compact('guards'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePermissionRequest $request)
    {
        Permission::create($request->all());
        return redirect()
            ->route('permissions.index')
            ->with('success', 'Record Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $permission)
    {
        return response()
            ->json($permission, 200, ['JSON_PRETTY_PRINT' => JSON_PRETTY_PRINT]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission)
    {
        $guards = Guard::where('active', 1)->get();
        return view('cms.permissions.create', compact('permission', 'guards'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePermissionRequest $request, Permission $permission)
    {
        $permission->update($request->all());

        // Redirect the user to the user's profile page
        return redirect()
            ->route('permissions.index')
            ->with('success', 'Record updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        if ($permission->delete()) {
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
