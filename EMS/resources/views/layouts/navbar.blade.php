<!--Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark default-color">
  <a class="navbar-brand">
    <img src="{{ asset('public/logo.png')}}" height="50" class="d-inline-block align-top"
      alt="EWUCoPC logo"><span class="text-white font-weight-bold"><b> East West University Computer Programming club </b></span><br>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">

    <ul class="navbar-nav ml-auto nav-flex-icons">

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
        <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="{{route('adminlogin')}}">Admin Log In</a>
          <a class="dropdown-item" href="{{route('homelogin')}}">Sign In</a>
          <a class="dropdown-item" href="{{url('/register')}}">Sign Up</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->
