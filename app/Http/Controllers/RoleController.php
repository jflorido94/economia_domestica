<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // if (!auth()->user()->can('view roles')) {
        //     abort(403);
        // }
        $roles = Role::all();
        return View('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $this->authorize('create', Role::class);
        return View('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request)
    {
        // $this->authorize('create', Role::class);
        // dd($request);
        $role = Role::create($request->validated());
        return redirect()->route('roles.show', $role);
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        // $this->authorize('view', $role);
        return View('roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        // $this->authorize('update', $role);
        return View('roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        // $this->authorize('update', $role);
        $role->update($request->validated());
        return redirect()->route('roles.show', $role);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        // $this->authorize('delete', $role);
        $role->delete();
        return redirect()->route('roles.index');
    }
}
