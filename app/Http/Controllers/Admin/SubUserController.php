<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class SubUserController extends Controller
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
        if (!Gate::allows('subuser-list')) {
            abort(401);
        }
        if ($request->ajax()) {
            $data = User::all();

            return DataTables::of($data)
                ->addColumn('action', function ($row) {

                    $btn = '<span type="button"   title="Edit"><i class="fa fa-edit" onclick="edit(' . $row->id . ')"></i> </span>';
                    return $btn;
                })
                ->addColumn('roles', function ($row) {
                    $btn = '';
                    foreach ($row->roles as $item) {
                        $btn .= ' <span class="badge badge-primary">' . $item->name . '</span>';
                    }
                    return $btn;
                })
                ->addColumn('select', function ($row) {

                    $btn = '<div class="form-check">
                <input class="form-check-input" type="checkbox" onclick=checkThis(' . $row->id . ',this)>';
                    return $btn;
                })
                ->rawColumns(['select', 'action', 'roles'])
                ->make(true);
        }
        return response()->view('admin.subuser.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Gate::allows('subuser-create')) {
            abort(401);
        }

        $roles = Role::all();
        return response()->view('admin.subuser.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Gate::allows('subuser-create')) {
            abort(401);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user  = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $user->roles()->attach($request->roles);

        return redirect()->route('subuser.index')->with('success', 'User Successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!Gate::allows('subuser-show')) {
            abort(401);
        }

        $user = User::findOrFail($id);
        return response()->view('admin.subuser.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!Gate::allows('subuser-edit')) {
            abort(401);
        }

        $roles = Role::all();
        $user = User::findOrFail($id);
        return response()->view('admin.subuser.edit', compact('user', 'roles'));
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
        if (!Gate::allows('subuser-edit')) {
            abort(401);
        }

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->update();
        $user->roles()->sync($request->roles);

        return redirect()->route('subuser.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if (!Gate::allows('subuser-delete')) {
            abort(401);
        }
        foreach ($request->ids as $id) {
            $user = User::findOrFail($id);
            $user->delete();
        }
        return response('success', 200);
    }
}
