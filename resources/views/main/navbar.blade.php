<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Bengkel</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  
  <link rel="stylesheet" href="{{ asset('styles/style.css') }}">

</head>

<body>

  <nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand me-auto px-4" href="#">E-Bengkel</a>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">E-Bengkel</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-center flex-grow-1">
            <li class="nav-item">
              <a class="nav-link mx-lg-2 icon" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2 icon" href="#about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2 icon" href="#experience">Experience</a>
            </li>
          </ul>
        </div>
      </div>
      <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->username }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
              </form>
            </li>
          </ul>
        </li>
        @else
        <li class="nav-item pe-4">
          <div class="box-login">
            <a href="/login" class="login-btn nav-link text-white"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </div>
        </li>
        @endauth
      </ul>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  <main class="container">
    @yield('container')
  </main>

  </footer>
  <!-- jQuery, Popper.js, Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
  const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

  navLinks.forEach(function(navLink) {
    navLink.addEventListener('click', function() {
      // Menghapus kelas "active" dari semua elemen navbar
      navLinks.forEach(function(link) {
        link.classList.remove('active');
      });

      // Menambahkan kelas "active" ke elemen yang diklik
      this.classList.add('active');
    });
  });
});

  </script>

</body>

</html>