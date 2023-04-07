<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\ModelHasRole;
use App\Http\Requests\StoreModelHasRoleRequest;
use App\Http\Requests\UpdateModelHasRoleRequest;

use Illuminate\Http\Request;
use DataTables;

class AssignRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // return datatable of the makes available
        $data = ModelHasRole::get();
        if ($request->ajax()) {
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('role', function ($row) {
                    return $row->role()->name;
                })
                ->editColumn('model', function ($row) {
                    return $row->model_id;
                })
                ->addColumn('action', function ($row) {
                    $btn_edit = '<a data-toggle="tooltip" 
                                    href="'. route('assignRoles.edit', $row->id) .'" 
                                    class="btn btn-link btn-primary btn-lg" 
                                    data-original-title="Edit Record">
                                <i class="fa fa-edit"></i>
                            </a>';
                    $btn_del = null;
                    if(auth()->user()->hasRole('superadmin')){
                        $btn_del = '<button type="button" 
                                    data-toggle="tooltip" 
                                    title="" 
                                    class="btn btn-link btn-danger" 
                                    onclick="delRecord(`' . $row->id . '`, `'.route('assignRoles.destroy', $row->id).'`, `#tb_assignroles`)"
                                    data-original-title="Remove">
                                <i class="fa fa-times"></i>
                            </button>';
                    }
                    return $btn_edit.$btn_del;
                })
                ->rawColumns(['role', 'model', 'action'])
                ->make(true);
        }

        // render view
        return view('cms.users.assignrole_index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // render view
        return view('cms.users.assignrole_index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreModelHasRoleRequest $request)
    {
        TODO: // add logic
        return redirect()
            ->route('assignRoles.index')
            ->with('success', 'Record Created Successfully');  
    }

    /**
     * Display the specified resource.
     */
    public function show(ModelHasRole $modelHasRole)
    {
        return response()
        ->json($modelHasRole, 200, ['JSON_PRETTY_PRINT' => JSON_PRETTY_PRINT]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ModelHasRole $modelHasRole)
    {
        return view('cms.users.assignrole_create', compact('modelHasRole'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateModelHasRoleRequest $request, ModelHasRole $modelHasRole)
    {
        TODO: // add logic
        // Redirect the user to the user's profile page
        return redirect()
                ->route('assignRoles.index')
                ->with('success', 'Record updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModelHasRole $modelHasRole)
    {
        if($modelHasRole->delete()){
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
