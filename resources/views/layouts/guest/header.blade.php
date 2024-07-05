<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metropolitan Mall Bekasi</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- font --}}
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
    <!-- First Header -->
    <header class="bg-light py-2">
        <div class="container">
            <div class="row align-items-center">
                <!-- Logo -->
                <div class="col-md-2 logo-container text-center text-md-start">
                    <img src="images/logo.png" alt="Logo" class="img-fluid">
                </div>
                <!-- Opening Hours -->
                <div class="col-md-2 d-none d-md-block">
                    <p class="mb-0 header-text"><i class="fa fa-shopping-cart me-2"></i>Opening Hours: 10.00 - 20.00</p>
                </div>
                <!-- Phone Number -->
                <div class="col-md-2 d-none d-md-block">
                    <p class="mb-0 header-text"><i class="fas fa-mobile-alt me-2"></i>(021) 855 5555 </p>
                </div>
                <!-- Address -->
                <div class="col-md-4 d-none d-md-block">
                    <p class="mb-0 header-text"><i class="fas fa-map-marker-alt me-2"></i>KH. Noer Ali Mall Metropolitan Building South Bekasi 17148</p>
                </div>
                <!-- Social Media Icons -->
                <div class="col-md-2 text-center text-md-end d-none d-md-flex">
                    <a href="#" class="me-3"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="me-3"><i class="fab fa-tiktok"></i></a>
                    <a href="#" class="me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="me-3"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </header>

    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container justify-content-right">
                {{-- <a class="navbar-brand" href="#">Logo</a> --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/event">Event & Promotion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/directory">Directory</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/media">Media</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://metlandcard.metropolitanland.com/">Metland Card</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/facilities">Facilities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Career</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/aboutus">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contactus">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
