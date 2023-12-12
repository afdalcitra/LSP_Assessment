<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Rental Web Service</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!-- Custom styles -->
    <style>
        body {
            padding-top: 56px;
        }

        @media (min-width: 768px) {
            body {
                padding-top: 70px;
            }
        }

        .card-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 70vh;
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Rumah Musik</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Rental Now</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Welcome to Rumah Musik!</h1>
            <p class="lead">Find the perfect rental for musical day!</p>
        </div>
    </div>

    <!-- Card Section -->
    <div class="row card-container">
        <div class="col-md-4 pb-4">
            <div class="card" style="height: 100%;">
                <img src="{{ asset('images/drumset.jpg') }}" class="card-img-top custom-card-img" alt="Card Image">
                <div class="card-body" style="height: 250px;">
                    <h5 class="card-title">Fame 5 PC Junior Drumset Black Luis</h5>
                    <p class="card-text">Mapex Saturn V, 5 Piece Drumset, Natural Maple Burl Finish, Maple/Walnut Hybrid Shell</p>
                    <a href="#" class="btn btn-primary">Rent Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 pb-4">
            <div class="card" style="height: 100%;">
                <img src="{{ asset('images/speaker.jpg') }}" class="card-img-top custom-card-img" alt="Card Image">
                <div class="card-body" style="height: 250px;">
                    <h5 class="card-title">Samson Live! 612 Series</h5>
                    <p class="card-text">The Samson Live! 612 active 2-way PA speaker packs a 12" driver and 1" tweeter into an angled, compact cabinet for a great-sounding, versatile live sound solution.</p>
                    <a href="#" class="btn btn-primary">Rent Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 pb-4">
            <div class="card" style="height: 100%;">
                <img src="{{ asset('images/gitar_listrik.jpg') }}" class="card-img-top custom-card-img" alt="Card Image">
                <div class="card-body" style="height: 250px">
                    <h5 class="card-title">Yamaha Gitar Elektrik PAC 112J</h5>
                    <p class="card-text">Double cutaway electric guitar. Amazing value. Amazing Tone. One of the best electric guitar values ​​for over a decade, the Yamaha Pacifica guitar is renowned for its great tone and exceptional playability.</p>
                    <a href="#" class="btn btn-primary">Rent Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 pb-4">
            <div class="card" style="height: 100%;">
                <img src="{{ asset('images/bass_listrik.jpg') }}" class="card-img-top custom-card-img" alt="Card Image">
                <div class="card-body" style="height: 250px">
                    <h5 class="card-title">Yamaha Gitar Elektrik Bass BB400</h5>
                    <p class="card-text">Yamaha Gitar Elektrik Bass BB400 400 Series ( BB434 / BB 434 M ) Maple</p>
                    <a href="#" class="btn btn-primary">Rent Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 pb-4">
            <div class="card" style="height: 100%;">
                <img src="{{ asset('images/keyboard.jpeg') }}" class="card-img-top custom-card-img" alt="Card Image">
                <div class="card-body" style="height: 250px">
                    <h5 class="card-title">Keyboard Piano Casio Ctx-700</h5>
                    <p class="card-text">Wherever you are on your musical journey, and no matter your budget, you shouldn't have to compromise on sound quality.</p>
                    <a href="#" class="btn btn-primary">Rent Now</a>
                </div>
            </div>
        </div>



    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
