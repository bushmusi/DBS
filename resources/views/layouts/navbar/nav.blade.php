<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark primary-color">
  <a class="navbar-brand" href="#">DBS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Real Estate</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">vehicle</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="#">About us</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      {{-- <li class="nav-item">
          <a class="nav-link waves-effect waves-light">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link waves-effect waves-light">
            <i class="fab fa-google-plus-g"></i>
          </a>
        </li> --}}
      @guest
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          <i class="fas fa-user"> </i>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
          <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
        </div>
      </li>
      @else
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          <i class="fas fa-user"> {{ Auth::user()->name }}</i>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      @endguest


    </ul>
  </div>
</nav>
<!--/.Navbar -->