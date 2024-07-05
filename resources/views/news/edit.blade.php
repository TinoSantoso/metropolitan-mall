@extends('layouts.app')

@section('title', 'Edit News')

@section('contents')
    <h1 class="mb-0">Edit News</h1>
    <hr />
    <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $news->title }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Author</label>
                <input type="text" name="author" class="form-control" placeholder="Author" value="{{ $news->author }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" placeholder="Description">{{ $news->description }}</textarea>
            </div>
            <div class="col mb-3">
                <label class="form-label">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                @if($news->image)
                    <img src="{{ asset('storage/images/'.$news->image) }}" class="img-fluid" alt="News Image">
                @else
                    <p>No image available</p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
