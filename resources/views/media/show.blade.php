@extends('layouts.guest.header')

@section('title', $news->title)

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2 class="mb-4">{{ $news->title }}</h2>
            <img src="{{ asset('storage/images/'.$news->image) }}" class="img-fluid mb-4" alt="News Image">
            <p class="lead" style="text-align: justify;">{{ $news->description }}</p>
        </div>
    </div>
</div>
@endsection
