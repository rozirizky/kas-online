<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kas Online</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('images/logos/logo.png') }}" />
  <link rel="stylesheet" href="{{asset('css/styles.min.css')  }}" />
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark  bg-primary mx-auto">
        <div class="container">
          <a class="navbar-brand " href="#"><img src="{{ asset('images/logos/logoputih.png') }}"  width="150"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNavDropdown">
            
             
              
             
             
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item ">
                    <a href="" class="navbar-brand px-3">About</a>
                   </li>
                   <li class="nav-item ">
                       <a href="" class="navbar-brand px-3">Contact Us</a>
                      </li>
              <li class="nav-item ">
               <a href="{{ route('signin') }}" class="btn btn-light text-primary rounded-5 px-3">Get Started</a>
              </li>
           
            </ul>
          </div>
        </div>
      </nav>
      <div id="carouselExampleSlidesOnly" class="carousel slide shadow" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
            
                <div class="col-lg-6 px-5 text-center">
                    <img src="{{ asset('images/logos/logo.png') }}" class="mt-5" width="200">
                    <h1 class="">BUKU KAS ONLINE</h1>
                    <h3 class="mb-5 mt-4">Catat uang kas masih pake kertas
                        Pindah ke  Kas Online ajaaa</h3>

                        <a href="{{ route('signin') }}" class="btn btn-primary rounded-5 btn-lg">Get Started</a>
                </div>
                <div class="col-lg-6">
                      <img src="{{ asset('images/backgrounds/bg.png') }}" class="d-block w-100" alt="...">
                </div>
             
            </div>
            
          </div>
        
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>