<!Doctype html>
<html>
    <head>
    <title>WEBSITE USING PHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" name="text/css" href="style.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
  </head>
    <body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">WEB_FIXER</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-- My caresoul part   please FOCUS here -->



<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/1.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">

    <div class="py-5">
    <h1 class="text-center">Our Services</h1>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
        <div class="card" >
  <img class="card-img-top" src="images/1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Awesome</h4>
    <p class="card-text">Beautifull Text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  
        </div>
        </div>
        </div>
      
      
        <div class="col-lg-4 col-md-4 col-12">
        <div class="card" >
  <img class="card-img-top" src="images/3.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Awesome</h4>
    <p class="card-text">Beautifull Text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
        </div>
      

      
        <div class="col-lg-4 col-md-4 col-12">
        <div class="card" >
  <img class="card-img-top" src="images/1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Awesome</h4>
    <p class="card-text">Beautifull Text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>

      </div>
      <div>
    </div>
    </div>
    
</section>
<section class="my-5">

<div class="py-5">
    <h1 class="text-center">Our Gallery</h1>
    </div>
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
    <img src="images/1.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
    <img src="images/3.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
    <img src="images/1.jpg" class="img-fluid pb-3">
    </div>
  </div>
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
    <img src="images/3.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
    <img src="images/1.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
    <img src="images/3.jpg" class="img-fluid pb-3">
    </div>
  </div>
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
    <img src="images/1.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
    <img src="images/3.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
    <img src="images/1.jpg" class="img-fluid pb-3">
    </div>
  </div>
  </section>
  <section class="my-5">

<div class="py-5">
    <h1 class="text-center">Query For Website Design</h1>
    </div>
    <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
        <div class="form-group">
        <label>Username:</label>
        <input type="text" name="user" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
        <label>Email:</label>
        <input type="email" name="email" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
        <label>Mobile:</label>
        <input type="text" name="mobile" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
        <label>Comment:</label>
          <textarea class="form-control" name="comment">
           </textarea>
        </div>
        <button type="submit" class="btn btn-success" >   Submit   </button>
      </form>
    </div>
    </section>
    <footer >
    <p class="p-3 bg-dark text-white text-center"> Copyright @ Mobo<p>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
    </body>
</html>