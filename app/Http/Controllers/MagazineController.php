<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Magazine;
use Illuminate\Support\Facades\Storage;

class MagazineController extends Controller
{
    public function index()
    {
        $magazines = Magazine::orderBy('created_at', 'DESC')->get();
        return view('magazines.index', compact('magazines'));
    }

    public function create()
    {
        return view('magazines.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'pdf_file' => 'required|mimes:pdf|max:12000',
            'previous_pdf_file' => 'nullable|mimes:pdf|max:12000',
        ]);

        $imageName = null;
        $pdfUrl = null;
        $previousPdfUrl = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->storeAs('public/images', $imageName);
        }

        if ($request->hasFile('pdf_file')) {
            $pdfFile = $request->file('pdf_file');
            $pdfUrl = time().'.'.$pdfFile->extension();
            $pdfFile->storeAs('public/pdfs', $pdfUrl);
        }

        if ($request->hasFile('previous_pdf_file')) {
            $previousPdfFile = $request->file('previous_pdf_file');
            $previousPdfUrl = time().'.'.$previousPdfFile->extension();
            $previousPdfFile->storeAs('public/pdfs', $previousPdfUrl);
        }

        Magazine::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
            'pdf_url' => $pdfUrl,
            'previous_pdf_url' => $previousPdfUrl,
        ]);

        return redirect()->route('magazines.index')->with('success', 'Magazine article added successfully');
    }

    public function show($id)
    {
        $magazine = Magazine::findOrFail($id);
        return view('magazines.show', compact('magazine'));
    }

    public function edit($id)
    {
        $magazine = Magazine::findOrFail($id);
        return view('magazines.edit', compact('magazine'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'pdf_url' => 'required',
            'previous_pdf_url' => 'nullable',
        ]);

        $magazine = Magazine::findOrFail($id);
        $imageName = $magazine->image;

        if ($request->hasFile('image')) {
            if ($imageName) {
                Storage::delete('public/images/'.$imageName);
            }

            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->storeAs('public/images', $imageName);
        }

        $magazine->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
            'pdf_url' => $request->pdf_url,
            'previous_pdf_url' => $request->previous_pdf_url,
        ]);

        return redirect()->route('magazines.index')->with('success', 'Magazine article updated successfully');
    }

    public function destroy($id)
    {
        $magazine = Magazine::findOrFail($id);

        if ($magazine->image) {
            Storage::delete('public/images/'.$magazine->image);
        }

        $magazine->delete();

        return redirect()->route('magazines.index')->with('success', 'Magazine article deleted successfully');
    }
}
