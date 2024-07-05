@extends('layouts.app')

@section('title', 'Show Magazine')

@section('contents')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Image</label>
            <div class="image-container">
                @if($magazine->image)
                    <img src="{{ asset('storage/images/'.$magazine->image) }}" class="img-fluid" alt="Magazine Image">
                @else
                    <p>No image available</p>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $magazine->title }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">PDF URL</label>
            <br/>
            <a href="{{ asset('storage/pdfs/'.$magazine->pdf_url) }}" class="btn btn-primary" download>{{ $magazine->pdf_url }}</a>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" placeholder="Description" readonly>{{ $magazine->description }}</textarea>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Previous PDF URL</label>
            @if($magazine->previous_pdf_url)
            <br/>
            <a href="{{ asset('storage/pdfs/'.$magazine->previous_pdf_url) }}" class="btn btn-primary" download>{{ $magazine->previous_pdf_url }}</a>
            @else
                <textarea name="previous_pdf_url" class="form-control" placeholder="Previous PDF URL" readonly>N/A</textarea>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $magazine->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $magazine->updated_at }}" readonly>
        </div>
    </div>
@endsection
