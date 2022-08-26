<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="css.style.css">

    <title>Dev Writing | {{ $tittle }}</title>
  </head>
  <style>
    @media (min-width: 992px) {
    .navbar-nav{
    position: absolute;
    left: 75%;
    }
  }
  .navbar {
    min-height: 60px;
  }
  
  .navbar-brand {
    padding: 0 15px;
    height: 60px;
    line-height: 60px;
  }
  
  .navbar-toggle {
    margin-top: 23px;
    padding: 9px 10px !important;
  }
  </style>
  <body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-info">
  <div class="container">
    <a class="navbar-brand" href="/">Dev Writing</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($tittle === "Home") ? 'active' : ''}}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($tittle === "About") ? 'active' : ''}}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($tittle === "Posts") ? 'active' : ''}}" href="/posts">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($tittle === "Contact") ? 'active' : ''}}" href="/contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <br><br><br>
    <div class="container mt-4">
        @yield('container')
    </div>

  <!-- <div class="fixed-bottom">

  <footer class="bg-info text-white">
        <div class="container">
            <div class="row">
                <div class="col pt-4">
                    <p>Copyright 2022 | Deva Kerti Wijaya</p>
                </div>
            </div>
        </div>
    </footer>

  </div> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>