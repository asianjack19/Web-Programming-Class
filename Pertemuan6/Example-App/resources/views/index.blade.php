<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel 8</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>

  <div class="container-fluid p-5 bg-primary text-white text-center">
    <h1>LARAVEL 8</h1>
  </div>
  <div class="container">
    <ul class="nav  justify-content-center">
      <li class="nav-item">
        <a class="nav-link" href="/display">Display Data</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link  dropdown-toggle" data-bs-toggle="dropdown" href="#">Selection</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/if">If</a></li>
          <li><a class="dropdown-item" href="/ifelse">If Else</a></li>
          <li><a class="dropdown-item" href="/switch">Switch</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link  dropdown-toggle" data-bs-toggle="dropdown" href="#">Loop</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/for">For</a></li>
          <li><a class="dropdown-item" href="/while">While</a></li>
          <li><a class="dropdown-item" href="/foreach">Foreach</a></li>
          <li><a class="dropdown-item" href="/forelse">Forelse</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/continuebreak">Continue & Break</a>
      </li>
    </ul>
  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-2">
      </div>
      <div class="col-sm-8 p-3 border">
        <h3>Welcome To Laravel 8</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      </div>
      <div class="col-sm-2">
      </div>
    </div>
  </div>
  <div class="container p-1 mt-5 bg-primary text-white text-center fixed-bottom">
    <small>&copy Binus University {{ date("Y") }}</small>
  </div>
  <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>