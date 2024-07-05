@extends('layouts.app')

@section('title', 'Create Promo')

@section('contents')

    <hr />
    <form action="{{ route('promo.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <label for="image">Image:</label>
                <input type="file" name="image" id="image" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
