<?php

namespace App\Http\Controllers;

use App\Models\role;
use App\Http\Requests\StoreroleRequest;
use App\Http\Requests\UpdateroleRequest;
use Illuminate\Support\Facades\Redirect;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("permissionAndRoles.roles",[
            "roles"=>role::paginate(5),
            "permissions"=>Permission::all()
        ]);
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
    public function store(StoreroleRequest $request)
    {
        //
        $validated = $request->validated();
        $role = Role::create(['name' => $validated['name']]);
        $role->permissions()->sync($validated['permissions']);
        return redirect()->route('roles.index')->with('success', 'Role created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateroleRequest $request, role $role)
    {
        //
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(role $role)
    {
        //
        $role->delete();
        return Redirect::route('roles.index')->with('status', 'role-deleted-successfully');
    }
}
