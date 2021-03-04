<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 
    <title>@yield('tittle')</title>
  </head>
  <style>
    body {
    background-color: #16082f
    }
</style>
  <body>
  <div class="container">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li><a id="len1" class="hoverable" href="/">Home</a></li>
        <li><a id="len2" class="hoverable" href="/class">Class</a></li>
        <li><a id="len3" class="hoverable" href="/about">About</a></li>
      </ul>
    </div>
  </nav>
  <div id="what-the-hell-is-this">
    <div class="page-title">
      @yield('container')
    </div>
  </div>
</div>
<div class="footer">
Copyright © 2021 Fitri Zakiatul Lailia
</div>
  <script src="js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  </body>

</html>