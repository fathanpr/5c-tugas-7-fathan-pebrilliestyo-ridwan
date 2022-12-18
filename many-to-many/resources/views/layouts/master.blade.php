<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- CSS only -->
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css"
    rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container-fluid">
          <!-- Toggle button -->
          <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarCenteredExample"
            aria-controls="navbarCenteredExample"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars"></i>
          </button>
      
          <!-- Collapsible wrapper -->
          <div
            class="collapse navbar-collapse justify-content-center"
            id="navbarCenteredExample"
          >
            <!-- Left links -->
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link @yield('active1')" href="/">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @yield('active2')" href="/mahasiswa">Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @yield('active3')"  href="/ukf">UKF</a>
              </li>
            </ul>
            <!-- Left links -->
          </div>
          <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
      </nav>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col py-3">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <footer class="text-center text-white" style="background-color: #f1f1f1;">
      <!-- Grid container -->
      <div class="container pt-3 mt-5">
        <!-- Section: Social media -->
        <section class="mb-4">
            
          <!-- Facebook -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="https://www.facebook.com/Tyo.Ganteng023"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-facebook-f"></i
          ></a>
    
          <!-- Instagram -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="https://www.instagram.com/qsuuut/"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-instagram"></i
          ></a>
    
          <!-- Github -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="https://github.com/fathanpr"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-github"></i
          ></a>
        </section>
        <!-- Section: Social media -->
      </div>
      <!-- Grid container -->
    
      <!-- Copyright -->
      <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright: Kelompok Fathan, Ilhan, Silfa Fasilkom UNSIKA 2022
      </div>
      <!-- Copyright -->
    </footer>
</body>
</html>