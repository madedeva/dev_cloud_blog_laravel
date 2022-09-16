<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap" rel="stylesheet">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/8c9b6b8b8a.js" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="/css/styles.css">

    <title>DCB | {{ $tittle ?? '' }}</title>
  </head>
  <body>

    @include('partials.navbar')

    <div class="container mt-4">
        @yield('container')
    </div>

    <!-- breakpoints footer-->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <br><br><br><br><br><br>
          <br><br><br><br><br><br>
        </div>
      </div>
    </div>
    <div class="container">
      <hr>
    </div>
    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Vue Js -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>

  </body>
</html>