<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\AlertService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $roles = Role::withCount('permissions')->get();
        return view('admin.role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        $permissions = Permission::all()->groupBy('group_name');
        return view('admin.role.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'role' => ['required', 'string', 'max:255', 'unique:roles,name'],
            'permissions' => ['required', 'array']
        ]);

        $role = Role::create(['name' => $request->role, 'guard_name' => 'admin']);
        $role->syncPermissions($request->permissions);

        AlertService::created();

        return to_route('admin.role.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        $permissions = Permission::all()->groupBy('group_name');
        return view('admin.role.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'role' => ['required', 'string', 'max:255', 'unique:roles,name,'. $role->id],
            'permissions' => ['required', 'array']
        ]);

        $role->update(['name' => $request->role]);
        $role->syncPermissions($request->permissions);

        AlertService::updated();

        return to_route('admin.role.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        try{
            DB::beginTransaction();
            $role->users()->detach();
            $role->permissions()->detach();
            $role->delete();
            DB::commit();

            AlertService::deleted();

            return response()->json(['status' => 'success', 'message' => 'Berhasil Di Hapus']);
        } catch(\Throwable $th){
            DB::rollBack();
            Log::error('Log Delete Error: ', $th);

            return response()->json(['status' => 'error', 'message' => $th->getMessage()], 500);
        }
    }
}
