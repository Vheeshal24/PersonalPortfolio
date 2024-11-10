@extends('layout')

@section('content')
    <!-- Hero Section -->
    <div class="jumbotron text-center">
        <h1>Welcome to My Profile</h1>
        <p class="lead">A brief introduction about myself and my work</p>
        <a href="{{ route('about') }}" class="btn btn-primary btn-lg">Learn More About Me</a>
    </div>

    <!-- Carousel -->
    <div id="projectCarousel" class="carousel slide mb-5" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#projectCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#projectCarousel" data-slide-to="1"></li>
            <li data-target="#projectCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image1.jpg" class="d-block w-100" alt="Project 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Project 1</h5>
                    <p>Brief description of project 1</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image2.jpg" class="d-block w-100" alt="Project 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Project 2</h5>
                    <p>Brief description of project 2</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image3.jpg" class="d-block w-100" alt="Project 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Project 3</h5>
                    <p>Brief description of project 3</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#projectCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#projectCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection
