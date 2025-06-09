<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Http\Requests\StorerolRequest;
use App\Http\Requests\UpdaterolRequest;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // if (!auth()->user()->can('view rols')) {
        //     abort(403);
        // }
        $rols = Rol::all();
        return View('rols.index', compact('rols'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $this->authorize('create', Rol::class);
        return View('rols.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorerolRequest $request)
    {
        // $this->authorize('create', Rol::class);
        // dd($request);
        $rol = Rol::create($request->validated());
        return redirect()->route('rols.show', $rol);
    }

    /**
     * Display the specified resource.
     */
    public function show(Rol $rol)
    {
        // $this->authorize('view', $rol);
        return View('rols.show', compact('rol'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rol $rol)
    {
        // $this->authorize('update', $rol);
        return View('rols.edit', compact('rol'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdaterolRequest $request, rol $rol)
    {
        // $this->authorize('update', $rol);
        $rol->update($request->validated());
        return redirect()->route('rols.show', $rol);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rol $rol)
    {
        // $this->authorize('delete', $rol);
        $rol->delete();
        return redirect()->route('rols.index');
    }
}
