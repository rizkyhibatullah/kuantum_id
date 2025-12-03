<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Services\AlertService;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StoreController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $store = auth('web')->user()?->store;
        return view('vendor-dashboard.store-profile.index', compact('store'));
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
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'logo' => ['nullable', 'image', 'max:2048'],
            'banner' => ['nullable', 'image', 'max:2048'],
            'name' => ['required', 'string', 'max:50'],
            'phone' => ['nullable', 'string', 'max:50'],
            'email' => ['nullable', 'email', 'max:50'],
            'address' => ['nullable', 'string', 'max:255'],
            'short_description' => ['required', 'string', 'max:255'],
            'long_description' => ['nullable', 'string', 'max:2000'],
        ]);

        $data = [
            'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
        ];

        if($request->hasFile('logo')){
            $data['logo'] = $this->uploadFile($request->file('logo'), auth('web')->user()?->store?->logo);
        }
        if($request->hasFile('logo')){
            $data['banner'] = $this->uploadFile($request->file('banner'), auth('web')->user()?->store->banner);
        }

        Store::updateOrCreate(
            ['seller_id' => auth('web')->user()->id],
            $data
            );

            AlertService::updated();

            return redirect()->back();
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
