 <!DOCTYPE html>
 <html>
 <head>
   <title>Movie Lover - @yield('title')</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
   <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
   <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
   <script type="text/javascript" src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
   <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
   <link rel="icon" href="{{ asset('assets/image/favicon.ico') }}" type="image/x-icon">
   <link rel="stylesheet" type="text/css" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
 </head>
 <body>
  <!-- Navbar -->
  <nav class="navbar menu navbar-expand-lg fixed-top navbar-light bg-light">
    <a href="index.html"><img src="{{ asset('assets/image/movie.png') }}" height="70px" class="rounded float-center"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ml-5" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('homepage')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('moviepage')}}">Movies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('moviepage')}}">Series</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="{{route('moviepage')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Action
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
           <a class="dropdown-item" href="{{route('moviepage')}}">Adventure</a>
           <a class="dropdown-item" href="{{route('moviepage')}}">Comedy</a>
           <a class="dropdown-item" href="{{route('moviepage')}}">Crime</a>
           <a class="dropdown-item" href="{{route('moviepage')}}">Animation</a>
           <a class="dropdown-item" href="{{route('moviepage')}}">Fantasy</a>
           <a class="dropdown-item" href="{{route('moviepage')}}">Family</a>
           <a class="dropdown-item" href="{{route('moviepage')}}">Horro</a>
           <a class="dropdown-item" href="{{route('moviepage')}}">Live Action</a>
           <a class="dropdown-item" href="{{route('moviepage')}}">School</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('aboutpage')}}">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contactpage')}}">Contact Us</a>
        </li>
      </ul>
      <button class="btn btn-sm btn-outline-success my-2 my-sm-0" data-target="#logIn" data-toggle="modal" type="submit">Login</button>
      <button class="btn btn-sm btn-outline-success my-2 mx-2 my-sm-0" data-target="#sinIn" data-toggle="modal" type="submit">SingUp</button>
      <form class="float-left">
        <div class="form-group  my-2">
          <div class="row mx-2">
            <input type="text" placeholder="Search...." class="form-control">
            <button type="submit" class="btn btn-success fa fa-search mx-2"></button>
          </div>
        </div>
      </form>
    </div>
  </nav>
  <!-- End Navbar -->

@yield('content')

@yield('testing')

<!-- footer -->
<footer class="footer text-center bg-dark">
  <div class="container">
    <div class="row">
      <!-- Footer Location-->
      <div class="col-lg-4 mb-5 mb-lg-0">
        <h4 class="text-uppercase mb-4">Location</h4>
        <p class="lead mb-0">
          2215 John Daniel Drive
          <br />
          Clark, MO 65243
        </p>
      </div>
      <!-- Footer Social Icons-->
      <div class="col-lg-4 mb-5 mb-lg-0">
        <h4 class="text-uppercase mb-4">Around the Web</h4>
        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
      </div>
      <!-- Footer About Text-->
      <div class="col-lg-4">
        <h4 class="text-uppercase mb-4">About Freelancer</h4>
        <p class="lead mb-0">
          Freelance is a free to use, MIT licensed Bootstrap theme created by
          <a href="http://startbootstrap.com">Start Bootstrap</a>
          .
        </p>
      </div>
    </div>
  </div>
</footer>
<!-- Copyright Section-->
<div class="b py-4 text-center text-white">
  <div class="container"><small>Copyright © Your Website 2020</small></div>
</div>
<!-- Login -->
<div class="modal fade" id="logIn">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="text-success">Sign In</h3>
              <!-- <button class="close" data-dismiss="modal">
                <span>&times;</span>
              </button> -->
            </div>
            <div class="modal-body">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <img src="{{ asset('assets/image/movie.png') }}" class="img-fluid menu">
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <form>
                        <div class="form-row">
                          <div class="form-group col-md-12">
                            <label for="inputEmail4" class="text-success">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                          </div>
                          <div class="form-group col-md-12">
                            <label for="inputPassword4" class="text-success">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                          </div>
                        </div>
                        <button class="btn btn-outline-success">Login</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button class="btn btn-outline-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- singIn -->
      <div class="modal fade" id="sinIn">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="text-success">Sign In</h3>
              <!-- <button class="close" data-dismiss="modal">
                <span>&times;</span>
              </button> -->
            </div>
            <div class="modal-body">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <img src="{{ asset('assets/image/movie.png') }}" class="img-fluid menu" height="300px">
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <form>
                        <div class="form-row">
                          <div class="form-group col-md-12">
                            <label for="inputName" class="text-success">Name</label>
                            <input type="name" class="form-control" id="inputName4" placeholder="Username">
                          </div>
                          <div class="form-group col-md-12">
                            <label for="inputEmail4" class="text-success">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                          </div>
                          <div class="form-group col-md-12">
                            <label for="inputPassword4" class="text-success">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                          </div>
                          <div class="form-group col-md-12">
                            <label for="inputRepassword4" class="text-success">Repassword</label>
                            <input type="password" class="form-control" id="inputRepassword4" placeholder="Repassword">
                          </div>
                        </div>
                        <button class="btn btn-outline-success">Sign Up</button>
                        <!-- <button class="btn btn-outline-success" data-dismiss="modal">Cancel</button> -->
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button class="btn btn-outline-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- info box -->
      <div class="modal fade" id="info">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="text-success">Movie Information</h3>
              <button class="close" data-dismiss="modal">
                <span>&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container">
                <div class="row">
                  <div class="col-md-4 py-2">
                    <img src="{{ asset('assets/image/m1.jpg') }}" class="img-fluid menu">
                  </div>
                  <div class="col-md-8">
                    <div class="row">
                      <div class="col-6">
                        <h4>Movie Name</h4>
                      </div>
                      <div class="col-6">
                        <span class="fa fa-star bg-dark checked rounded float-right  py-2 px-1"><span>&nbsp8.0&nbsp</span></span>
                      </div>
                    </div>
                    <div class="row py-3">
                      <p>(Japanese: 君の名は。, Hepburn: Kimi no Na wa.) is a 2016 Japanese animated romantic fantasy film written and directed by Makoto Shinkai, and produced by CoMix Wave Films. ... Your Name tells the story of a high school boy in Tokyo and a high school girl in a rural town, who suddenly and inexplicably begin to swap bodies.</p>
                    </div>
                    <div class="row">
                      <div class="col-12">
                       <div class="form-group text-right">
                        <a href="tvshow.html" class="button py-2 my-1">Play<i class="mx-2 fa fa-play"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </body>
  </html>