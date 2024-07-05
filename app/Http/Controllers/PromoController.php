<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;
use Illuminate\Support\Facades\Storage;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $promos = Promo::orderBy('created_at', 'DESC')->get();
        return view('promo.index', compact('promos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('promo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // image validation
        ]);

        // Save image to storage
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->storeAs('public/images', $imageName);
        }

        // Save promo data to database
        Promo::create([
            'image' => $imageName,
        ]);

        return redirect()->route('promo.index')->with('success', 'Promo added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $promo = Promo::findOrFail($id);
        return view('promo.show', compact('promo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $promo = Promo::findOrFail($id);
        return view('promo.edit', compact('promo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // image validation
        ]);

        $promo = Promo::findOrFail($id);

        // Update promo data
        $promo->update($request->all());

        // Check if there's a new image uploaded
        if ($request->hasFile('image')) {
            // Delete old image (if any)
            if ($promo->image) {
                Storage::delete('public/images/'.$promo->image);
            }

            // Save new image
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->storeAs('public/images', $imageName);

            // Update image name in the database
            $promo->update(['image' => $imageName]);
        }

        return redirect()->route('promo.index')->with('success', 'Promo updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $promo = Promo::findOrFail($id);

        // Delete image from storage
        if ($promo->image) {
            Storage::delete('public/images/'.$promo->image);
        }

        $promo->delete();

        return redirect()->route('promo.index')->with('success', 'Promo deleted successfully');
    }
}
