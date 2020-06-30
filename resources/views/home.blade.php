<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figo Restaurant</title>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400&family=Poppins:wght@100;500&display=swap" rel="stylesheet">

</head>
<body>
      
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
             <div class="container">
                <a class="navbar-brand" href="#"><img src="{{ asset('frontend/assets/image/Logo.png') }}"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav ml-auto ">
                    <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">Menu</a>
                    <a class="nav-item nav-link" href="#">Service</a>
                    <a class="nav-item nav-link" href="#">Sign In</a>
                  </div>
                </div>
              </nav>
        </div>
        <!-- Header -->
            <div class="header">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>All in Good Taste <br>
                                    Food With Figo.</h1>
                                    <p>Quickly predominate standard compliant architecture <br>
                                        and may have prospective internal or organic sources. </p>
                                        <form class="form-inline my-2 my-lg-0">
                                            <input class="form-control" type="search" placeholder="Enter Your Address">
                                            <button class="btn btn-success my-2 my-sm-0" type="submit">Get Started</button>
                                        </form>
                                         </div>
                                          <div class="row">
                                            <div class="col">
                                             <div class="piza">
                                        <img src="{{ asset('frontend/assets/image/pizza.png') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
        </div>

        <!-- Content -->
       
            <div class="jumbotron"> 
            <div class="content">
                <div class="container">
                    @foreach ($welcome as $result)
                    <div class="row">
                        <div class="col-md-6 col-sm-6">  
                            <img src="{{ Storage::url($result->image) }}" alt="">
                        </div>
                        <div class="col-md-6 col-sm-6">
                             <span>Welcome</span>
                                <h1>{{ $result->title }}</h1>
                                <p>{{ $result->description }}</p>
                             <button class="btn btn-success">Explore Our Story</button>
                            </div>   
                        </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
<!-- Why Me  -->

        <div class="introduction">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="text-center">
                        <p class="text-blue">Reason</p>
                    </div>
                    <div class="text-center">
                        <h2>Why Choose Us ?</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Intro -->
<section class="intro">
    <div class="jumbotron">
        <div class="container justify-content-center">
            <div class="row">
                @foreach ($choose as $result)
                <div class="col-md-4 col-sm-4">
                    <div class="card">
                        <img src="{{ Storage::url($result->image) }}" class="card-img-top" alt="...">
                        <h1>{{ $result->title }}</h1>
                        <div class="card-body text-center">
                          <p class="card-text">{{ $result->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- History -->
@foreach ($history as $result)
<div class="jumbotron"> 
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md">
                     <span>History of Figo</span>
                        <h1>{{ $result->title }}</h1>
                        <p>{{ $result->description }}</p>
                        {{-- <h1>adsasd</h1>
                        <p>asdasd</p> --}}
                     <button class="btn btn-success figo">Explore Our Story</button>
                </div>   
                <div class="row">
                    <div class="col-md">
                        <div class="gmbr">
                            <img src="{{ Storage::url($result->image) }}" alt="">
                            {{-- <img src="asdasd.jpg" alt=""> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach



<!-- Latest News -->
<div class="container">
    <div class="text-center">
        <div class="latest">
        <h2>News</h2>
        <H1>Latest News</H1>
        <div class="row">
            @foreach ($news as $new)
            <div class="col-md-4 col-sm-4 col-lg-4">
                <div class="card" style="width: 21rem;">
                    <img src="{{ Storage::url($new->image) }}" class="card-img-top" alt="...">
                    <div class="card-body text-left">
                    <h6 class="card-text">{{ $new->title }}</h6>
                      <p class="card-text">{{ $new->description }}</p>
                      <a href="#" class="card-link">Readmore</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>
<!-- Footer -->
<footer class="section-footer mt-5 mb-4 border-top">
    <div class="container pt-5 pb-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-lg-3">
                    <img src="{{ asset('frontend/assets/image/Logo.png') }}" alt="">
                    <p>Don't miss to subscribe to our new 
                        feeds, Kindly fill the form bellow.</p>
                        <div class="more-sosmed">
                            <div class="sosmed">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets/image/Social Icons.png') }}" class="gmbr">
                                </a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-12 col-lg-3">
                        <h5>Our Menu</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Lunch</a></li>
                            <li><a href="#">Dinner</a></li>
                            <li><a href="#">Catering</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-3">
                        <h5>Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Terms Of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-3">
                        <h5>Contact</h5>
                        <ul class="list-unstyled">
                            <li><a href="">0882-9051-8571</a></li>
                            <li><a href="#">info@Restaurant.com</a></li>
                            <li><a href="#">Daudkandi,Cammilla</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('frontend/assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
</body>
</html>