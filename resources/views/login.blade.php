<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://kit.fontawesome.com/0d577017ae.js" crossorigin="anonymous"></script>
  <style>
    .bg-light {
      background-color: #f8f9fa; /* Warna latar belakang yang diubah */
    }
    body{
        height: 40rem;
        background-color: ghostwhite;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-6 mt-5 border border-primary-subtle p-4 bg-white">

      <form action="/login" method="post">
      @csrf

      @if(session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

        <h1>Login</h1>
        <div class="form-group  mt-4">
          <label for="form2Example1">Username</label>
          <input type="text" id="form2Example1" class="form-control @error('username') is-invalid @enderror" name="username" required value="{{ old('username')}}"/>
          @error('username')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
        </div>

        <!-- Password input -->
        <div class="form-group ">
          <label for="form2Example2">Password</label>
          <input type="password" id="form2Example2" class="form-control @error('password') is-invalid @enderror" name="password" required />
          @error('password')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
        </div>
        
        <div class="form-row ">
          <div class="col-6">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
              <label class="form-check-label" for="form2Example31"> Remember me </label>
            </div>
          </div>

          <div class="col-6 text-right">
            <a href="#!" class="text-muted">Forgot password?</a>
          </div>
        </div>

        <!-- Submit button -->
        <div class="form-group">
          <button type="submit" class="btn btn-primary mt-4 btn-block">Login</button>
        </div>
        
        <!-- Register buttons -->
        <div class="text-center ">
          <p>Don't have an  account?<a href="/regis" class="text-muted">Register</a></p>
          <!-- <p>or Login with:</p>
          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
          </button>

          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-google"></i>
          </button>

          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-twitter"></i>
          </button>

          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-github"></i>
          </button> -->
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
