@extends('layouts.guest.header')

@section('content')

<section class="promo-section">
    <div class="container">
        <h2 class="text-center mb-4 fw-bold">Promo</h2>
        <div class="row">
            @foreach($promos as $promo)
            <div class="col-md-6 col-lg-3">
                <div class="col text-center promo-card">
                    <img src="{{ asset('storage/images/' . $promo->image) }}" class="card-img-top promo-img" alt="Promo Image">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@include('layouts.guest.footer')
@endsection
