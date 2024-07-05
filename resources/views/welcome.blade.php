@extends('layouts.guest.header')

@section('content')

<div id="carouselExampleDark" class="carousel carousel-dark slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="images/slide1.svg" class="d-block w-100" alt="slider1">
        <div class="carousel-caption d-none d-md-block text-end text-white">
            <h1 class="fw-bold" style="font-size: 80px; text-align: right;"> METROPOLITAN</h1>
            <h1 class="fw-bold" style="font-size: 80px; text-align: right;">MALL BEKASI</h1>
            <p style="font-size: 40px; text-align: right;">Dunia Belanja dan Rekreasi</p>
          </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="images/slide1.svg" class="d-block w-100" alt="slider1">
        <div class="carousel-caption d-none d-md-block text-end text-white">
            <h1 class="fw-bold" style="font-size: 80px; text-align: right;"> METROPOLITAN</h1>
            <h1 class="fw-bold" style="font-size: 80px; text-align: right;">MALL BEKASI</h1>
            <p style="font-size: 40px; text-align: right;">Dunia Belanja dan Rekreasi</p>
          </div>
      </div>
      <div class="carousel-item">
        <img src="images/slide1.svg" class="d-block w-100" alt="slider1">
        <div class="carousel-caption d-none d-md-block text-end text-white">
            <h1 class="fw-bold" style="font-size: 80px; text-align: right;"> METROPOLITAN</h1>
            <h1 class="fw-bold" style="font-size: 80px; text-align: right;">MALL BEKASI</h1>
            <p style="font-size: 40px; text-align: right;">Dunia Belanja dan Rekreasi</p>
          </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>

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
        <div class="col text-center">
            <!-- Menambahkan kelas "custom-button" untuk menyesuaikan tampilan tombol -->
            <a href="#" class="btn btn-primary mt-4 custom-button">Read More</a>
          </div>
    </div>
  </section>
  <br/>
  <div id="carouselExampleDark" class="carousel carousel-dark slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/menu/metlandcard.jpg" class="d-block w-100">
      </div>
    </div>
</div>


<section class="py-5 news-bg">
    <div class="container">
        <h2 class="text-center mb-4">News</h2>
        <div class="row">
            @foreach($news as $article)
                <div class="col-md-3">
                    <div class="card news-green-card">
                        <img src="{{ asset('storage/images/'.$article->image) }}" class="card-img-top" alt="{{ $article->title }}">
                        <div class="card-body">
                            <h2 class="text-center fw-bold">{{ $article->title }}</h2>
                            <p class="card-text">{{ Illuminate\Support\Str::limit($article->description, 100) }}</p>
                            <!-- Change '100' to the desired character limit -->
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>




<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="video-container">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/YOUTUBE_VIDEO_ID" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
        <div class="row section-mgz">
          
        </div>
    </div>

      <div class="col-md-5">
      <div class="text-center">
    <h2>E-Magazine</h2>
    @foreach($magazines as $magazine)
    <img src="{{ asset('storage/images/' . $magazine->image) }}" class="img-fluid" alt="E-Magazine" style="width: 200px; height: 200px;">
      <div class="col text-center">
          <a href="{{ asset('storage/pdfs/' . basename($magazine->pdf_url)) }}" class="btn btn-primary mt-4 custom-button" target="_blank">Read More</a>
      </div>
      @endforeach
      </div>
    </div>
    </div>
  </div>
</div>

@include('layouts.guest.footer')

@endsection
