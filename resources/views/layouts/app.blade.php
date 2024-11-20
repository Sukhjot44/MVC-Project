<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Restaurant Website')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Optional for icons -->
    <link 
  rel="stylesheet" href= 
"https://fonts.googleapis.com/icon?family=Material+Icons"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"> <!-- Bootstrap Icons -->
</head>
<body style="background-image: url('{{ asset('images/header_bg.jpg') }}'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <!-- NAVIGATION BAR STARTS -->
    <nav class="navbar navbar-expand-md fixed-top">
        <div class="container">
            <a class="navbar-brand" href=""><img class="logo" src="{{ asset('images/logorestro.png') }}" alt="RestrO">RestrO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="navbarOffcanvasLgLabel">
                        <a class="navbar-brand"><img class="logo" src="{{ asset('images/logorestro.png') }}" alt="RestrO">RestrO</a>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <!-- Home Link -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/home') }}">Home</a>
                        </li>

                        <!-- Menu Link -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/menu') }}">Menu</a>
                        </li>

                        <!-- Order Online Link -->
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="{{ url('/order-online') }}">Order Online</a>
                        </li> -->

                        <!-- About Us Link -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                        </li>

                        <!-- Contact Link -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                        </li>

                        <!-- Cart Icon -->
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="{{ url('/cart') }}">
                                <i class="bi bi-cart-fill"></i>
                            </a>
                        </li> -->

                        <!-- Conditional Login/Logout Button -->
                        <li class="nav-item">
                            @if(session('user')) <!-- Check if the user is logged in via session -->
                                <span class="navbar-text">
                                    <!-- Display the User's Name and User Icon -->
                                    <i class="fa fa-user-circle" style="font-size: 24px; margin-right: 8px;"></i>
                                    {{ session('user')->username }}
                                </span>
                                <!-- Logout Form (for CSRF protection) -->
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                                    @csrf
                                    <button type="submit" class="custom-btn">Logout</button>
                                </form>
                            @else
                                <a href="{{ route('login') }}">
                                    <button class="custom-btn">Login/Sign In</button>
                                </a>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- NAVIGATION ENDS -->



    <main>
        @yield('content') <!-- Dynamic content will be injected here -->
    </main>

    <!-- FOOTER STARTS -->
    <div class="footer" style="background-image: url('{{ asset('images/footerbg.png') }}'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-logo">
                        <a class="navbar-brand" href=""><img class="logo" src="{{ asset('images/bugerfot.png') }}" alt="RestrO">RestrO</a>
                        <ul class="list-group">
                            <li class="list-group-item d-flex align-items-center">
                                <div class="icon-background">
                                    <span class="material-icons">location_on</span>
                                </div>
                                <span class="ms-3">4920 Trails End Road Ft <br> United States, FL 33311</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <div class="icon-background">
                                    <span class="material-icons">mail</span>
                                </div>
                                <span class="ms-3">info@example.com<br>test@example.com</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <div class="icon-background">
                                    <span class="material-icons filled">call</span>
                                </div>
                                <span class="ms-3">+123 456 679 123<br>+123 456 789</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="column-heading">Quick Links</div>
                    <div class="quick-links">
                        <ul>
                            <li style="margin-top: 37px;"><a href="#">Home</a></li>
                            <li><a href="#menu">Menu</a></li>
                            <li><a href="#menu">Order Online</a></li>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#contact-us">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="column-heading">Opening Hours</div>
                    <div class="opening-hours">
                        <table style="margin-top: 34px;">
                            <tr><td>Monday - Friday</td><td>9:00 AM - 10:00 PM</td></tr>
                            <tr><td>Saturday - Sunday</td><td>10:00 AM - 11:00 PM</td></tr>
                        </table>
                    </div>

                    <div class="social-buttons">
                        <a href="https://www.facebook.com/" class="btn btn-primary"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.twitter.com" class="btn btn-primary"><i class="bi bi-twitter"></i></a>
                        <a href="https://www.instagram.com" class="btn btn-primary"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.skype.com" class="btn btn-primary"><i class="bi bi-skype"></i></a>
                    </div>
                </div>
            </div>

            <div class="row separator"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        &copy; 2023 RestrO. All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER ENDS -->

    @vite(['resources/js/app.js']) 
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const nav = document.querySelector(".navbar");

        window.addEventListener("scroll", function() {
            if (window.scrollY >= 50) {
                nav.classList.add("navbar-scrolled");
            } else {
                nav.classList.remove("navbar-scrolled");
            }
        });
    });
</script>

</html>
