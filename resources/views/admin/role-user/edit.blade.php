@extends('admin.layouts.app')

@section('contents')
    <div class="container-xl">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Update User</h3>
                <div class="card-actions">
                    <a href="{{ route('admin.role-users.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.role-users.update', $admin) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label required">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="" value="{{ $admin->name }}">
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label required">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="" value="{{ $admin->email }}">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label required">Password</label>
                                <input type="text" class="form-control" name="password" placeholder="" value="">
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label required">Konfirmasi Password</label>
                                <input type="text" class="form-control" name="password_confirmation" placeholder=""
                                    value="">
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label required">Role</label>
                                <select name="role" id="" class="form-control">
                                    <option value="">Select</option>
                                    @foreach ($roles as $role)
                                        <option @selected(in_array($role->name, $admin->getRoleNames()->toArray())) value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer text-end">
                <button class="btn btn-primary mt-3" onclick="$('form').submit()">Update</button>
            </div>
        </div>
    </div>
@endsection
