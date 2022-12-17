<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>DCB | {{ $tittle ?? '' }}</title>
</head>
<style></style>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">

    <div class="fadeIn first mt-4">
      <h1>Register Account</h1>
    </div>

    <form class="mt-4" action="" method="POST">
        @csrf
        <input type="text" id="name" class="fadeIn second" name="name" placeholder="example: Taylor Otwell">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="example: taylorotwell">
        <input type="text" id="email" class="fadeIn second" name="email" placeholder="name@example.com">
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
      <input type="submit" class="fadeIn fourth bg-info mt-3" value="Register">
    </form>

  </div>
</div>
</body>
</html>