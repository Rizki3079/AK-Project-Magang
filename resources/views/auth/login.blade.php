
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- My Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <title>login bro</title>
  </head>
  <body>

    <section class="login d-flex" >
        <div class="login-left w-50 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-6">
              <div class="header" >
                <img src="assets/imglogin/logo login areakerja.png" alt="logo" width="300px">
                <h1>Selamat Datang Kembali </h1>
                <p>Silahkan masukkan Email dan Password.</p>
            </div>
            
            <div class="login-form">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email">

                <label for="Password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password">
                <a href="#" class="text-decoration-none text-center">Forgot password</a>
                <button class="signin">Sign In</button>
                <div class="text-center">
                  <span class="d-inline">Don’t have an account? <a href="#" class=" d-inline text-decoration-none">Sign up for free</a></span>
                </div>
            </div>
            </div>
          </div>
            
        </div>
        <div class="login-right w-100 h-100">
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/imglogin/administration.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  {{-- <h5>Convenient Place</h5> --}}
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/imglogin/background login.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  {{-- <h5>Get the future </h5> --}}
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/imglogin/administration (1).png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  {{-- <h5>Learn and Study</h5> --}}
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>