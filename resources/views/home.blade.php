<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nirvoy News</title>
  <link rel="icon" type="image/x-icon" href="{{asset('newsportal.png')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
</head>

<body>
  <div id="app">

    <!-- header section -->
    <header class="header d-none d-lg-block">
      <a class="anniversary-logo" href="#">
        <img src="{{asset('frontend/images/logo/nirvoynews.png')}}" alt="Nirvoy News">
      </a>
    </header>
    <!-- end header section -->

    <!-- navbar start -->
    <nav id="navbar_top" class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand d-lg-none" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="##main_nav" aria-controls="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="#main_nav">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="text-secondary bi bi-house-fill"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">জাতীয়</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                অন্যান্য
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <div class="row">
                  <div class="col-lg-6 col-sm-6 col-6">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another</a></li>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-6">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another</a></li>
                  </div>
                </div>
              </ul>
            </li>
            <li class="nav-item nav-search d-flex align-items-center">
              <a href="#" id="google-search" onclick="showSearch(event)"><i class="bi bi-search"></i></a>
              <form class="d-none" action="" method="get" id="cse-search-box">
                <input type="search">
              </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <script src="{{asset('js/app.js')}}"></script>

  <script>
    function showSearch(event){
      $("#cse-search-box").removeClass("d-none")
    }
  </script>
</body>

</html>