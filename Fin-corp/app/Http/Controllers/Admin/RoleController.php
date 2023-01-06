<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Yajra\DataTables\Facades\DataTables;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if (!Gate::allows('role-list')) {
            abort(401);
        }

        if ($request->ajax()) {
            $data = Role::all();
            return DataTables::of($data)
                ->addColumn('action', function ($row) {

                    $btn = '<span type="button"   title="Edit"><i class="fa fa-edit" onclick="edit(' . $row->id . ')"></i> </span>';
                    return $btn;
                })
                ->addColumn('permissions', function ($row) {
                    $btn = '';
                    foreach ($row->permissions as $item) {
                        $btn .= ' <span class="badge badge-primary">' . $item->name . '</span>';
                    }
                    return $btn;
                })
                ->addColumn('select', function ($row) {

                    $btn = '<div class="form-check">
                <input class="form-check-input" type="checkbox" onclick=checkThis(' . $row->id . ',this)>';
                    return $btn;
                })
                ->rawColumns(['select', 'action', 'permissions'])
                ->make(true);
        }
        return response()->view('admin.role.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if (!Gate::allows('role-create')) {
            abort(401);
        }

        $permissions = Permission::all();
        return response()->view('admin.role.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Gate::allows('role-create')) {
            abort(401);
        }

        $request->validate([
            'name' => 'required|max:255',
        ]);

        $role  = new Role();
        $role->name = $request->name;
        $role->slug = Role::generateSlug($request->name);
        $role->save();

        $role->permissions()->attach($request->permissions);

        return redirect()->route('role.index')->with('success', 'Role Successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!Gate::allows('role-show')) {
            abort(401);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!Gate::allows('role-edit')) {
            abort(401);
        }

        $permissions = Permission::all();
        $role = Role::findOrFail($id);
        return response()->view('admin.role.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!Gate::allows('role-edit')) {
            abort(401);
        }

        $request->validate([
            'name' => 'required|max:255',
        ]);

        $role = Role::findOrFail($id);
        $role->name = $request->name;
        $role->slug = Role::generateSlug($request->name);
        $role->update();
        $role->permissions()->sync($request->permissions);

        return redirect()->route('role.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if (!Gate::allows('role-delete')) {
            abort(401);
        }
        foreach ($request->ids as $id) {
            $role = Role::findOrFail($id);
            $role->delete();
        }
        return response('success', 200);
    }
}
