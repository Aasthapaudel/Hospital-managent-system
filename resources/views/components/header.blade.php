<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>Healthcare.com</title>

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        .content {
            flex: 1;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
        }
        .footer h5 {
            margin-top: 0;
            color: #333;
        }
        .footer .footer-link {
            display: block;
            margin-bottom: 10px;
            color: #007bff;
            text-decoration: none;
        }
        .footer .footer-link:hover {
            text-decoration: underline;
        }
        .footer .footer-sosmed a {
            margin: 0 10px;
            color: #333;
            text-decoration: none;
            font-size: 24px; /* Adjust icon size */
        }
        .footer .footer-sosmed a:hover {
            color: #007bff;
        }
        hr {
            border-top: 1px solid #dee2e6;
        }
        .container {
            padding: 20px;
            text-align: center;
        }
        .row {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .col-sm-6 {
            max-width: 300px;
            margin: 10px;
        }
    </style>
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-sm">
                        <div class="site-info">
                            <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
                            <span class="divider">|</span>
                            <a href="#"><span class="mai-mail text-primary"></span> Healthcare@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-sm-4 text-right text-sm">
                        <div class="social-mini-button">
                            <a href="#"><span class="mai-logo-facebook-f"></span></a>
                            <a href="#"><span class="mai-logo-twitter"></span></a>
                            <a href="#"><span class="mai-logo-dribbble"></span></a>
                            <a href="#"><span class="mai-logo-instagram"></span></a>
                        </div>
                    </div>
                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- .topbar -->

        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

                <form action="#">
                    <div class="input-group input-navbar">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username"
                            aria-describedby="icon-addon1">
                    </div>
                </form>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                    aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/about')}}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/doctor')}}">Doctors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/latest')}}">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/contact')}}">Contact</a>
                        </li>
                        @if(Route::has('login'))
                        @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/doctor')}}">Appointment list</a>
                        </li>
                        <x-app-layout>
                        </x-app-layout>

                        @else
                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
                            <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
                        </li>
                        @endauth

                        @endif
                    </ul>
                </div> <!-- .navbar-collapse -->
            </div> <!-- .container -->
        </nav>
    </header>

    @if(session()->has('message'))

<div class="alert alert-success">
    <button type="button" class="close" data-bs-dismiss="alert" aria-hidden="true">x</button>

    {{session()->get('message')}}
</div>



@endif
