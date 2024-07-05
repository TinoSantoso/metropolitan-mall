@extends('layouts.app')

@section('title', 'Edit Promo')

@section('contents')
    <h1 class="mb-0">Edit Promo</h1>
    <hr />
    <form action="{{ route('promo.update', $promo->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="col">
                @if($promo->image)
                    <img src="{{ asset('storage/images/'.$promo->image) }}" class="img-fluid" alt="Promo Image">
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
