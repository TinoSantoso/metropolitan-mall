@extends('layouts.guest.header')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/menu/slider.jpg" class="d-block w-100 h-80" alt="Slide 1">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="fw-bold"></h1>
            </div>
        </div>
    </div>

<section class="py-5 news-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="fw-bold">METROPOLITAN MALL BEKASI</h1>
                <p>Metropolitan Mall Bekasi dibangun pada tahun 1993 merupakan mal kelas menengah pertama di pusat bisnis Kota Bekasi dengan konsep one stop shopping center dan hingga kini tetap menjadi mal pilihan untuk berbelanja warga Bekasi dan Jakarta Timur. Variasi tenant department store, fashion, supermarket, bioskop, tempat bermain anak, berbagai tenant F&B dan restoran, toko elektronik, toko gadget, dsb yang tepat menjadikan Metropolitan Mall Bekasi dapat memenuhi semua kebutuhan berbelanja sekaligus hiburan keluarga.</p>
                <p>Metropolitan Mall Bekasi berlokasi strategis diapit oleh jalan tol Jakarta - Cikampek dan Kalimalang sehingga dapat diakses dengan mudah. Metropolitan Mall Bekasi memiliki luas 3,5 ha terhubung, langsung dengan Hotel Horison Ultima Bekasi yang merupakan hotel bisnis bintang 4, dengan luas lahan yang disewakan sekitar + 48.000 m2, terdiri dari 4 lantai dan 1 basement Metropolitan Mall Bekasi mengakomodasi sebanyak lebih dari + 300 tenant.</p>
            </div>
        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@include('layouts.guest.footer')
@endsection
