@extends('layouts.guest.header')


@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/menu/slider.jpg" class="d-block w-100 h-80" alt="Slide 1">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="fw-bold">Media</h1>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <section class="py-5 news-bg">
    <div class="container">
        <h2 class="text-center mb-4 fw-bold" style="color: #38877f;">Latest News</h2>
        <div class="row">
            @foreach($news as $article)
                <div class="col-md-12 mb-4">
                    <div class="row align-items-center">
                        <div class="col-md-4 mb-4 mb-md-2">
                            <img src="{{ asset('storage/images/'.$article->image) }}" class="img-fluid" alt="News Image">
                        </div>
                        <div class="col-md-6" style="color: #38877f;">
                            <h2 class="fw-bold">{{ $article->title }}</h2>
                            <p>{{ Str::limit($article->description, 150, '...') }}</p>
                            <a href="{{ route('media.show', $article->id) }}" class="btn btn-primary mt-4 custom-button">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

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

<section class="magazine-section">
    <div class="container">
        <h2 class="text-center mb-4 fw-bold">Magazines</h2>
        <div class="row">
            @foreach($magazines as $magazine)
            <div class="col-md-6 col-lg-3">
                <div class="col text-center magazine-card">
                    <img src="{{ asset('storage/images/' . $magazine->image) }}" class="card-img-top magazine-img" alt="Magazine Cover">
                    <div class="card-body">
                        <h5 class="card-title">{{ $magazine->title }}</h5>
                        <p class="card-text">{{ $magazine->description }}</p>
                        <a href="{{ asset('storage/pdfs/' . basename($magazine->pdf_url)) }}" class="btn btn-primary custom-button" target="_blank">View</a>
                        <a href="{{ asset('storage/pdfs/' . basename($magazine->pdf_url)) }}" class="btn btn-secondary custom-button" download>Download</a>
                        @if($magazine->previous_pdf_url)
                        <a href="{{ asset('storage/pdfs/' . basename($magazine->previous_pdf_url)) }}" class="btn btn-info custom-button">Previous Edition</a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@include('layouts.guest.footer')
@endsection
