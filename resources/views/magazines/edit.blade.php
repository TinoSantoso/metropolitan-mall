@extends('layouts.app')

@section('title', 'Edit Magazine')

@section('contents')
    <h1 class="mb-0">Edit Magazine</h1>
    <hr />
    <form action="{{ route('magazines.update', $magazine->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $magazine->title }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">PDF URL</label>
                <input type="text" name="pdf_url" class="form-control" placeholder="PDF URL" value="{{ $magazine->pdf_url }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" placeholder="Description">{{ $magazine->description }}</textarea>
            </div>
            <div class="col mb-3">
                <label class="form-label">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                @if($magazine->image)
                    <img src="{{ asset('storage/images/'.$magazine->image) }}" class="img-fluid" alt="Magazine Image">
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
