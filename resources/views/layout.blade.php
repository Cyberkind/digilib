<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<link rel="stylesheet" href="/asset/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/navbars/navbar-1/assets/css/navbar-1.css">
<body>
    <style>
      body{
        background: rgb(248, 248, 248);

      }
    </style>
  <!-- Navbar 1 - Bootstrap Brain Component -->
<nav class="navbar navbar-expand-md bg-secondary shadow-lg bsb-navbar bsb-navbar-hover bsb-navbar-caret">
  <div class="container">
    <a class="navbar-brand" href="index.html">
      <img src="logo.png" alt="Digital Library" width="100" height="100">
    </a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
      </svg>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('home')}}">Home</a>
          </li>
         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#!" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
            <ul class="dropdown-menu border-0 shadow bsb-zoomIn" aria-labelledby="servicesDropdown">
              <li><a class="dropdown-item" href="#!">Data Buku</a></li>
              <li><a class="dropdown-item" href="{{url('kategori')}}">Kategori</a></li>
              <li><a class="dropdown-item" href="#!">List Admin</a></li>
             
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#!" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
            <ul class="dropdown-menu border-0 shadow bsb-zoomIn" aria-labelledby="accountDropdown">
              <li><a class="dropdown-item" href="#!">Log in</a></li>
              <li><a class="dropdown-item" href="#!">Lost Password?</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#!">Sign up</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

</body>
@yield('home')
<script src="https://unpkg.com/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>