<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('created_at','DESC')->get();
        return view('news.index', compact('news'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'author' => 'required'
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->storeAs('public/images', $imageName);
        }

        News::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
            'author' => $request->author
        ]);

        return redirect()->route('news.index')->with('success', 'News article added successfully');
    }

    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('news.show', compact('news'));
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'author' => 'required'
        ]);

        $news = News::findOrFail($id);
        $imageName = $news->image;

        if ($request->hasFile('image')) {
            if ($imageName) {
                Storage::delete('public/images/'.$imageName);
            }

            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->storeAs('public/images', $imageName);
        }

        $news->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
            'author' => $request->author
        ]);

        return redirect()->route('news.index')->with('success', 'News article updated successfully');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);

        if ($news->image) {
            Storage::delete('public/images/'.$news->image);
        }

        $news->delete();

        return redirect()->route('news.index')->with('success', 'News article deleted successfully');
    }
}
