<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta property="twitter:card" content="summary">
    <meta property="twitter:site" content="@starbucks">
    <meta property="twitter:creator" content="@starbucksprtnrs">
    <meta property="og:title" content="StarbucksĀ®">
    <meta property="og:image" data-hid="image" content="/img/meta.png">
    <meta property="twitter:image" data-hid="twitter:image" content="https://app.starbucks.com/weblx/images/social/summary_image.png">

    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&family=Dongle&family=Poppins:wght@500&family=Viga&display=swap" rel="stylesheet">
    <title>Starbuck</title>
  </head>
  <body>
      <div class="jumbotron jumbotron-fluid" id = "jum" style="height: 500px;">
        <div class="container text-center">
          <div class="row">
          <div class="col">
            <a href="/menu" style="float: left; color: white; margin-left: 50px;">Menu</a>
          </div>
            <div class="col">
              <a href="/register" style="float: right; border-radius: 50px;" class="ml-3 btn btn-dark">Register</a>
              <a href="/login" style="float: right; border-radius: 50px;" class="mr-1 btn btn-dark">Login</a>
          </div>  
          </div>
          <img src="/img/bg2.png" alt="" class="rounded-circle" width="150px" height="140px">
          <p class="lead mt-5 ketik" style="color: white; font-size: 70px;"><q>Start Your Day <br>With Coffee</q></p>
        </div>
      </div>
      
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img/dis1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/img/dis2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/img/dis3.png" class="d-block w-100" alt="...">
          </div>
        </div>
       <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>

            @yield('content')

         <footer class="text-center text-lg-start bg-light text-muted pt-4">
        <section class="">
          <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
              <!-- Grid column -->
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4" style="font-weight: 200px;">
                  <i class="fas fa-gem me-3"></i>Starbuck Coffe
                </h6>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nisi nemo iure enim laborum.
                </p>
              </div>
              <!-- Grid column -->
      
              <!-- Grid column -->
              {{-- <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                  Products
                </h6>
                <p>
                  <a href="#!" class="text-reset">Angular</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">React</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Vue</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Laravel</a>
                </p>
              </div> --}}
              <!-- Grid column -->
      
              <!-- Grid column -->
            
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                  Useful links
                </h6>
                <p>
                  <a href="/" class="text-reset">Home</a>
                </p>
                <p>
                  <a href="/login" class="text-reset">Login</a>
                </p>
                <p>
                  <a href="/register" class="text-reset">Register</a>
                </p>
              </div>
              <!-- Grid column -->
      
              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                  Contact
                </h6>
                <p>
                  <i class="fas fa-envelope me-3"></i>
                  info@example.com
                </p>
                <p><i class="fas fa-phone me-3"></i>022-6652442</p>
                <p><i class="fas fa-print me-3"></i> 022-6652442</p>
              </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
          </div>
        </section>
        <!-- Section: Links  -->
      
        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
          Ā© 2021 Copyright:
          <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Yogi</a>
          <div class="row">
            <div class="col">
              <p>Made With <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
              </svg></p>
            </div>
          </div>
        </div>
        <!-- Copyright -->
      </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
    <script type="text/javascript" src="/js/vanilla-tilt.min.js"></script>
  </body>
</html>