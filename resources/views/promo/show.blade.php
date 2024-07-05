@extends('layouts.app')

@section('title', 'Show Promo')

@section('contents')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Image</label>
            <div class="image-container">
                @if($promo->image)
                    <img src="{{ asset('storage/images/'.$promo->image) }}" class="img-fluid" alt="Promo Image">
                @else
                    <p>No image available</p>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $promo->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $promo->updated_at }}" readonly>
        </div>
    </div>
@endsection
