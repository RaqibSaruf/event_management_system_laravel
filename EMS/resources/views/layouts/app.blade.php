<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>EWUCoPC</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('public/face/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{ asset('public/face/css/mdb.min.css')}}" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{ asset('public/face/css/style.css')}}" rel="stylesheet">
</head>

<nav class="navbar navbar-expand-lg navbar-dark default-color">
  <a class="navbar-brand">
    <img src="{{ asset('public/logo.png')}}" height="50" class="d-inline-block align-top"
      alt="EWUCoPC logo"><span class="text-white font-weight-bold"><b> East West University Computer Programming club / USER</b></span><br>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">

    <ul class="navbar-nav ml-auto nav-flex-icons">



      @guest

      <li class="nav-item">
        <a class="nav-link" href="{{ route('home')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('about')}}">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('homelogin')}}">Event Registration</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('recruitmenthomepage')}}">Recruitment</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          @if (Route::has('register'))
          <a class="dropdown-item" href="{{route('adminlogin')}}">Admin Log In</a>
          <a class="dropdown-item" href="{{route('homelogin')}}">Sign In</a>
          <a class="dropdown-item" href="{{url('/register')}}">Sign Up</a>
          @endif
        </div>
      </li>


      @else

      <li class="nav-item">
        <a class="nav-link" href="{{ route('homelogin')}}">Index</a>
      </li>
          <li class="nav-item">
                  <a class="nav-link" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </li>
      @endguest




    </ul>
  </div>
</nav>


<body>


                    @yield('content')
                    @include('layouts.footer')
                    <script type="text/javascript" src="{{ asset('public/face/js/jquery-3.4.1.min.js')}}"></script>
                    <!-- Bootstrap tooltips -->
                    <script type="text/javascript" src="{{ asset('public/face/js/popper.min.js')}}"></script>
                    <!-- Bootstrap core JavaScript -->
                    <script type="text/javascript" src="{{ asset('public/face/js/bootstrap.min.js')}}"></script>
                    <!-- MDB core JavaScript -->
                    <script type="text/javascript" src="{{ asset('public/face/js/mdb.min.js')}}"></script>
</body>
</html>
