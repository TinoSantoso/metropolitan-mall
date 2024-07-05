@extends('layouts.app')

@section('title', 'Show News')

@section('contents')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Image</label>
            <div class="image-container">
                @if($news->image)
                    <img src="{{ asset('storage/images/'.$news->image) }}" class="img-fluid" alt="News Image">
                @else
                    <p>No image available</p>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $news->title }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Author</label>
            <input type="text" name="author" class="form-control" placeholder="Author" value="{{ $news->author }}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" placeholder="Description" readonly>{{ $news->description }}</textarea>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $news->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $news->updated_at }}" readonly>
        </div>
    </div>
@endsection
