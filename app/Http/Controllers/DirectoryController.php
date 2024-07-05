<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;

class DirectoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tenant = Tenant::orderBy('created_at','DESC')->get();
        return view('directory.directory', compact('tenant'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function search(Request $request)
    {
        $category = $request->input('category');
        $floor = $request->input('floor');
        $tenant_name = $request->input('tenant_name');
        $image = $request->input('image');

        $query = Tenant::query();

        // dd($query);
        if ($category) {
            $query->where('category', $category);
        }

        if ($floor) {
            $query->where('floor', $floor);
        }

        if ($tenant_name) {
            $query->where('tenant_name', 'LIKE', "%$tenant_name%");
        }

        $tenant = $query->get();

        return view('directory.directory', compact('tenant'));
    }
}
