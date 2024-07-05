@extends('layouts.guest.header')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/menu/slider.jpg" class="d-block w-100 h-80" alt="Slide 1">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="fw-bold">Facilities</h1>
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
        <div class="row">
            <!-- Gojek dan GoCar Instant -->
            <div class="col-md-4">
                <div class="card facilities-card">
                    <img src="images/facilities/gojek_gocar.jpg" class="card-img-top" alt="Gojek dan GoCar Instant">
                    <div class="card-body">
                        <h5 class="card-title">Gojek dan GoCar Instant</h5>
                        <p class="card-text">Gocar Instant tersedia untuk memudahkan akomodasi customer setia Metropolitan Mall Bekasi di Pintu Utara 1 dan GoJek Instant tersedia di area Pintu Timur.</p>
                    </div>
                </div>
            </div>

            <!-- Shuttle Bus -->
            <div class="col-md-4">
                <div class="card facilities-card">
                    <img src="images/facilities/shuttle_bus.jpg" class="card-img-top" alt="Shuttle Bus">
                    <div class="card-body">
                        <h5 class="card-title">Shuttle Bus</h5>
                        <p class="card-text">Tersedia 2 buah free shuttle bus di Pintu Utara 1 Metropolitan Mall Bekasi yang siap untuk mengantarkan anda ke Grand Metropolitan Bekasi maupun sebaliknya.</p>
                    </div>
                </div>
            </div>

            <!-- Galeri PMI -->
            <div class="col-md-4">
                <div class="card facilities-card">
                    <img src="images/facilities/galeri_pmi.jpg" class="card-img-top" alt="Galeri PMI">
                    <div class="card-body">
                        <h5 class="card-title">Galeri PMI</h5>
                        <p class="card-text">Galeri PMI disediakan di Metropolitan Mall Bekasi untuk para customer setia yang ingin mendonorkan darahnya untuk sesama. Galeri PMI tersedia di Lt 3.</p>
                    </div>
                </div>
            </div>

            <!-- Taxi Queue -->
            <div class="col-md-4">
                <div class="card facilities-card">
                    <img src="images/facilities/taxi_queue.jpg" class="card-img-top" alt="Taxi Queue">
                    <div class="card-body">
                        <h5 class="card-title">Taxi Queue</h5>
                        <p class="card-text">Taxi Queue tersedia untuk memudahkan akomodasi customer setia Metropolitan Mall Bekasi. Taxi resmi yang kami sediakan merupakan armada terbaik dari Blue Bird.</p>
                    </div>
                </div>
            </div>

            <!-- Nursery Room -->
            <div class="col-md-4">
                <div class="card facilities-card">
                    <img src="images/facilities/nursery_room.jpg" class="card-img-top" alt="Nursery Room">
                    <div class="card-body">
                        <h5 class="card-title">Nursery Room</h5>
                        <p class="card-text">Nursery Room di area bermain anak Metropolitan Mall Bekasi Lt. 3 memiliki 3 bilik menyusui dan baby tuffel untuk ganti popok.</p>
                    </div>
                </div>
            </div>

            <!-- Musholla -->
            <div class="col-md-4">
                <div class="card facilities-card">
                    <img src="images/facilities/musholla.jpg" class="card-img-top" alt="Musholla">
                    <div class="card-body">
                        <h5 class="card-title">Musholla</h5>
                        <p class="card-text">Musholla disediakan untuk customer setia kami yang beragama islam untuk menjalankan sholat 5 waktu. Sholat Jumat biasanya dilaksanakan di Musholla Lt 3.</p>
                    </div>
                </div>
            </div>

            <!-- Mobile Charging Station -->
            <div class="col-md-4">
                <div class="card facilities-card">
                    <img src="images/facilities/mobile_charging_station.jpg" class="card-img-top" alt="Mobile Charging Station">
                    <div class="card-body">
                        <h5 class="card-title">Mobile Charging Station</h5>
                        <p class="card-text">Kami menyediakan charging station untuk tipe handphone Samsung, Apple dan Type C agar anda dapat nyaman berbelanja dengan handphone tetap menyala.</p>
                    </div>
                </div>
            </div>

                        <!-- Free Wifi -->
                        <div class="col-md-4">
                <div class="card facilities-card">
                    <img src="images/facilities/free_wifi.jpg" class="card-img-top" alt="Free Wifi">
                    <div class="card-body">
                        <h5 class="card-title">Free Wifi</h5>
                        <p class="card-text">Wifi gratis tersedia di seluruh area Metropolitan Mall Bekasi dengan nama metmal_free@wifi.id. Kecepatannya mencapai 9 Mbps.</p>
                    </div>
                </div>
            </div>

            <!-- Metland Card Gallery -->
            <div class="col-md-4">
                <div class="card facilities-card">
                    <img src="images/facilities/metland_card_gallery.jpg" class="card-img-top" alt="Metland Card Gallery">
                    <div class="card-body">
                        <h5 class="card-title">Metland Card Gallery</h5>
                        <p class="card-text">Metland Card Gallery merupakan tempat pembuatan serta posting poin Privilege Card PT Metropolitan Land Tbk yang bisa digunakan di seluruh unit Metland.</p>
                    </div>
                </div>
            </div>

            <!-- ATM Center -->
            <div class="col-md-4">
                <div class="card facilities-card">
                    <img src="images/facilities/atm_center.jpg" class="card-img-top" alt="ATM Center">
                    <div class="card-body">
                        <h5 class="card-title">ATM Center</h5>
                        <p class="card-text">Tersedia fasilitas ATM Center di Metropolitan Mall Bekasi yang siap mendukung kegiatan perbankan Anda dengan mudah dan nyaman.</p>
                    </div>
                </div>
            </div>

            <!-- Toilet -->
            <div class="col-md-4">
                <div class="card facilities-card">
                    <img src="images/facilities/toilet.jpg" class="card-img-top" alt="Toilet">
                    <div class="card-body">
                        <h5 class="card-title">Toilet</h5>
                        <p class="card-text">Toilet untuk pria dan wanita tersedia di setiap lantai untuk kenyamanan customer setia Metropolitan Mall Bekasi ketika berbelanja.</p>
                    </div>
                </div>
            </div>

            <!-- Difabel Toilet -->
            <div class="col-md-4">
                <div class="card facilities-card">
                    <img src="images/facilities/difabel_toilet.jpg" class="card-img-top" alt="Difabel Toilet">
                    <div class="card-body">
                        <h5 class="card-title">Difabel Toilet</h5>
                        <p class="card-text">Toilet untuk para customer setia yang menggunakan kursi roda atau berkebutuhan khusus dengan area yang lebih luas dan nyaman.</p>
                    </div>
                </div>
            </div>

            <!-- Baby Stroller -->
            <div class="col-md-4">
                <div class="card facilities-card">
                    <img src="images/facilities/baby_stroller.jpg" class="card-img-top" alt="Baby Stroller">
                    <div class="card-body">
                        <h5 class="card-title">Baby Stroller</h5>
                        <p class="card-text">Kami utamakan kenyamanan berbelanja Anda dengan Baby Stroller untuk anak Anda, memberikan pengalaman tanpa hambatan.</p>
                    </div>
                </div>
            </div>

                        <!-- Wheel Chair -->
                        <div class="col-md-4">
                <div class="card facilities-card">
                    <img src="images/facilities/wheel_chair.jpg" class="card-img-top" alt="Wheel Chair">
                    <div class="card-body">
                        <h5 class="card-title">Wheel Chair</h5>
                        <p class="card-text">Kursi roda kami sediakan khusus untuk customer setia kami dengan kebutuhan khusus atau lanjut usia agar tetap nyaman selama berbelanja.</p>
                    </div>
                </div>
            </div>

            <!-- First Aid Clinic -->
            <div class="col-md-4">
                <div class="card facilities-card">
                    <img src="images/facilities/first_aid_clinic.jpg" class="card-img-top" alt="First Aid Clinic">
                    <div class="card-body">
                        <h5 class="card-title">First Aid Clinic</h5>
                        <p class="card-text">First Aid Clinic tersedia untuk memberikan pertolongan pertama kepada customer yang mengalami kecelakaan kecil atau sakit di area Metropolitan Mall Bekasi.</p>
                    </div>
                </div>
            </div>

            <!-- Customer Service -->
            <div class="col-md-4">
                <div class="card facilities-card">
                    <img src="images/facilities/customer_service.jpg" class="card-img-top" alt="Customer Service">
                    <div class="card-body">
                        <h5 class="card-title">Customer Service</h5>
                        <p class="card-text">Tim Customer Service kami siap bantu dengan info seputar Metropolitan Mall Bekasi dan Metland Card.</p>
                    </div>
                </div>
            </div>

            <!-- Metland Member Parking -->
            <div class="col-md-4">
                <div class="card facilities-card">
                    <img src="images/facilities/metland_member_parking.jpg" class="card-img-top" alt="Metland Member Parking">
                    <div class="card-body">
                        <h5 class="card-title">Metland Member Parking</h5>
                        <p class="card-text">Di area parkir mobil, telah disediakan tempat parkir khusus yang eksklusif untuk para pemegang kartu Metland Card.</p>
                    </div>
                </div>
            </div>

            <!-- Motorcyle Parking -->
            <div class="col-md-4">
                <div class="card facilities-card">
                    <img src="images/facilities/motorcycle_parking.jpg" class="card-img-top" alt="Motorcyle Parking">
                    <div class="card-body">
                        <h5 class="card-title">Motorcyle Parking</h5>
                        <p class="card-text">Parkir sepeda motor tersedia di Metropolitan Mall Bekasi yang aman dan nyaman.</p>
                    </div>
                </div>
            </div>

            <!-- Car Parking -->
            <div class="col-md-4">
                <div class="card facilities-card">
                    <img src="images/facilities/car_parking.jpg" class="card-img-top" alt="Car Parking">
                    <div class="card-body">
                        <h5 class="card-title">Car Parking</h5>
                        <p class="card-text">Disediakan parkir mobil yang aman dan nyaman untuk setiap customer.</p>
                    </div>
                </div>
            </div>

                        <!-- Bike Parking -->
                        <div class="col-md-4">
                <div class="card facilities-card">
                    <img src="images/facilities/bike_parking.jpg" class="card-img-top" alt="Bike Parking">
                    <div class="card-body">
                        <h5 class="card-title">Bike Parking</h5>
                        <p class="card-text">Tersedia lahan parkir sepeda yang aman untuk Anda yang hobi bersepeda.</p>
                    </div>
                </div>
            </div>

            <!-- Ladies Parking -->
            <div class="col-md-4">
                <div class="card facilities-card">
                    <img src="images/facilities/ladies_parking.jpg" class="card-img-top" alt="Ladies Parking">
                    <div class="card-body">
                        <h5 class="card-title">Ladies Parking</h5>
                        <p class="card-text">Ada parkir khusus mobil wanita untuk pelanggan setia kami.</p>
                    </div>
                </div>
            </div>

            <!-- Motorcyle Parking (250cc) -->
            <div class="col-md-4">
                <div class="card facilities-card">
                    <img src="images/facilities/motorcycle_parking_250cc.jpg" class="card-img-top" alt="Motorcyle Parking (250cc)">
                    <div class="card-body">
                        <h5 class="card-title">Motorcyle Parking (250cc)</h5>
                        <p class="card-text">Parkiran untuk sepeda motor besar dengan minimal 250cc yang nyaman.</p>
                    </div>
                </div>
            </div>

            <!-- Valet Parking -->
            <div class="col-md-4">
                <div class="card facilities-card">
                    <img src="images/facilities/valet_parking.jpg" class="card-img-top" alt="Valet Parking">
                    <div class="card-body">
                        <h5 class="card-title">Valet Parking</h5>
                        <p class="card-text">Manfaatkan layanan valet kami untuk parkir yang lebih cepat dan aman.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@include('layouts.guest.footer')
@endsection
