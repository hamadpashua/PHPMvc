{{-- <a class="nav-link" aria-current="page" href="{{ url('/') }}">Welcome, {{ user()->name }}</a> --}}


<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/PostsController/index') }}">Mvc Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/PostsController/index') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        </ul>   
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        @if (!isAuthenticated())
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/PostsController/create') }}">New Post</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome, Hamad
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ url('/AuthController/profile') }}">Set Profile</a></li>
            <li><a class="dropdown-item" href="{{ url('/AuthController/changePassword') }}">Change Password</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{ url('/AuthController/accountSetting') }}">Account Settings</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/AuthController/logout') }}">Logout</a>
        </li>
        @else
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ url('/AuthController/login') }}"></span> Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/AuthController/register') }}">Register</a>
          </li>
        @endif
        </ul>
      </div>
    </div>
  </nav>
</header>