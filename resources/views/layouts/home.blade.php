<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <style>
    a{
        text-decoration: none;
    }
  </style>
  <body>
    <div class="conatiner-fluid">
        <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img style="width: 200px" src="{{ asset('image/fasoInova1.png')}}" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Acceuil</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Innovation</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        Forums
                      </a>
                    </li>
                  </ul>
                  <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                  </form>
                </div>
              </div>
          </nav>
        @yield('navbar')
    </div>
    <div class="container">
        @yield('content')
    </div>
    <footer class="text-center text-white bg-dark">
        <div class="container pt-4">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                <div class="mb-3 mb-md-0">
                    <a class="navbar-brand" href="#"><img
                            src="{{ asset('image/fasoInovaW.svg')}}"
                            alt="logo-d-clic" height="100px" width="auto"></a>
                </div>
                <ul class="d-flex list-unstyled mb-0" >
                    <li class="me-4" >
                        <a href="" target="_blank" style="color: white" class="color-light liensFooter"><Strong>Terms & conditions</Strong></a>
                    </li>
                    <li class="me-4">
                        <a href="" target="_blank" style="color: white" class="liensFooter"><Strong>Privacy</Strong></a>
                    </li>
                    <li class="me-4">
                        <a href="" target="_blank" style="color: white" class="liensFooter"><Strong>Cookies</Strong></a>
                    </li>
                </ul>
                <section class="mb-4">
                    <a class="btn btn-link btn-floating btn-lg text-white m-1"
                        href="#" target="_blank" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>

                    <a class="btn btn-link btn-floating btn-lg text-white m-1" href="#"
                        target="_blank" role="button" data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>

                    <a class="btn btn-link btn-floating btn-lg text-white m-1"
                        href="#" target="_blank" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>

                    <a class="btn btn-link btn-floating btn-lg text-white m-1"
                        href="#" target="_blank" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-linkedin"></i></a>

                    <a class="btn btn-link btn-floating btn-lg text-white m-1" href="#" target="_blank" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-github"></i></a>
                </section>
            </div>
            <hr>
            <div class="text-center text-white p-3">
                &copy; 2024 Tous droits réservés |
                <a class="text-white text-decoration-none" href="#"> WebStormers</a>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>

  </body>

</html>