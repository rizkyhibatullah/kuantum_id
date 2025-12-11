<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Services\AlertService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Nette\Utils\Paginator;
use Spatie\Permission\Models\Role;

class UserRoleController extends Controller
{
    public function index(): View
    {
        $admins = Admin::all();
        return view('admin.role-user.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $roles = Role::all();
        return view('admin.role-user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:admins,email'],
            'password' => ['required', 'confirmed', 'min:8']
        ]);

        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = bcrypt($request->password);
        $admin->save();

        $role = Role::findOrFail($request->role);
        $admin->assignRole($role);

        AlertService::created();

        return to_route('admin.role-users.index');
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
    public function edit(admin $role_user): View
    {
        $admin = $role_user;
        $roles = Role::all();
        return view('admin.role-user.edit', compact('admin', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $role_user)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:admins,email,' . $role_user->id],

        ]);

        $admin = $role_user;
        $admin->name = $request->name;
        $admin->email = $request->email;
        if ($request->filled('password')) {
            $request->validate([
                'password' => ['required', 'confirmed', 'min:8']
            ]);
            $admin->password = bcrypt($request->password);
        }
        $admin->save();

        $role = Role::findOrFail($request->role);
        $admin->assignRole($role);

        AlertService::created();

        return to_route('admin.role-users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $role_user)
    {
        try {
            foreach ($role_user->getRoleNames() as $role) {
                $role_user->removeRole($role);
            }
            $role_user->delete();
            AlertService::deleted();
            return response()->json(['status' => 'success', 'message' => 'Berhasil Dihapus']);
        } catch (\Throwable $th) {
            Log::error('Error Saat Menghapus Role: ', $th);
            return response()->json(['status' => 'error', 'message' => $th->getMessage()]);
        }
    }
}
