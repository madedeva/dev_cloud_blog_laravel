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

    <div class="fadeIn first">
      <h1>Login Admin</h1>
    </div>

    <form>
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="username">
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
      <input type="submit" class="fadeIn fourth bg-info" value="Log In">
    </form>

    <div id="formFooter">
      <a class="text-info" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
</body>
</html>