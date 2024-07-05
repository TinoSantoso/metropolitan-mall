@extends('layouts.app')

@section('title', 'Create News')

@section('contents')

    <hr />
    <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Title" required>
            </div>
            <div class="col">
                <label for="author">Author:</label>
                <input type="text" name="author" id="author" class="form-control" placeholder="Author" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="description">Description:</label>
                <textarea class="form-control" name="description" placeholder="Description" required></textarea>
            </div>
            <div class="col">
                <label for="image">Image:</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
