<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dynamic webpage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CORONA VIRUS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="preventions.php">preventions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="symptoms.php">Symptoms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="update.php"> COVID Update </a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/cor1.jpg" alt="Los Angeles" width="500" height="500">
      <div class="carousel-caption">
        <h3></h3>
        <p>Lets take a step to prevent corona</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/cor2.jpg" alt="Chicago" width="500" height="500">
      <div class="carousel-caption">
        <h3></h3>
        <p>corona is horrible</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/cor3.jpg" alt="New York" width="500" height="500">
      <div class="carousel-caption">
        <h3></h3>
        <p>Lets finish it now!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
    <div>
        <h2 class="text-center">About Corona</h2>
    </div>
    
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <img src="images/cor4.jpg" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <h2 class="display-4">What is corona virus?</h2>
            <p class="py-3">
            Coronaviruses are a group of related RNA viruses that cause diseases in mammals and birds. In humans and birds, they cause respiratory tract infections that can range from mild to lethal. Mild illnesses in humans include some cases of the common cold (which is also caused by other viruses, predominantly rhinoviruses)
            </p>
            <a href="about.php" class="btn btn-success">Check more</a>
        </div>
    </div>
    <hr>
</section>
<div class="container my-4">
          <div class="row">
            <div class="card col-lg-3 mx-auto" style="width: 18rem;">
                <img class="card-img-top" src="images/cor5.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">Corona Treatment by docter.<br><br><br><br></p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card col-lg-3 mx-auto" style="width: 18rem;">
                <img class="card-img-top" src="images/cor6.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text"> Docters are unsafe due to covid patients.<br><br><br><br></p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card col-lg-3 mx-auto" style="width: 18rem;">
                <img class="card-img-top" src="images/cor7.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">salute to docters who risk their lives.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
          </div>
      </div>
      <hr>
<section class="my-1">
    <div class="py-5">
        <h2 class="text-center">Sign Up For Help:</h2>
    </div>
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post"> 
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="user" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Email id</label>
                <input type="text" name="email" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" name="mobile" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Symptoms</label>
                <textarea class="form-control" name="symptoms"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</section>
<footer>
    <p class="p-3 bg-dark text-white text-center">@faizyaProduction</p>
</footer>







  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>