<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="bootstrap/jquery.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="images/icons/logo_icon.png">
    <title>Home | LAN Tube</title>
  </head>
  <body>

    <div class="jumbotron text-center">
      <h1>Welcome to LAN Tube</h1>
      <p>Live streaming on your LAN from any device</p>
    </div>

    <div class="btn-group btn-group-justified">
      <a href="index.php" class="btn btn-success">Home</a>
      <a href="videos/uploads.php" class="btn btn-primary">Uploads</a>
      <a href="#" class="btn btn-primary">Library</a>
      <a href="#" class="btn btn-info">About</a>
    </div>


    <style>
body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: black;
}
p {font-size: 16px;}
.margin {margin-bottom: 45px;}
.bg-1 {
    background-color: #1abc9c; /* Green */
    color: #ffffff;
}
.bg-2 {
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
}
.bg-3 {
    background-color: #ffffff; /* White */
    color: #555555;
}
.bg-4 {
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
}
.container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
}
.navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
}
.navbar-nav  li a:hover {
    color: #1abc9c !important;
}
</style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
<div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">LAN Tube</a>
  </div>

</div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
<h3 class="margin">Watch you videos offline!</h3>
<img src="images/logo.png" class="img-thumbnail" style="display:inline" alt="Bird" width="150" height="150">
<h3>Upload and share your movies on your LAN</h3>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
<h3 class="margin">What is LAN Tube?</h3>
<p><strong>LAN Tube</strong> is an offline movie streaming for your home network. you host and manage your videos on your local server. It works with any local server </p>
<a href="videos/uploads.php" class="btn btn-default btn-lg">
   Get started >>
</a>
</div>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">
<h3 class="margin">Advantages</h3><br>
<div class="row">
  <div class="col-sm-4">
    <center>
    <img src="images/icons/free.png" class="img-responsive margin" style="width:30%" alt="Image1">
    <h3>It's cool and FREE!</h3>
    <p><strong>LAN Tube</strong> is an Open source project. Watch on video file on any device connected to the same LAN with <strong>LAN Tube</strong>.</p>
    </center>
  </div>
  <div class="col-sm-4">
    <center>
    <img src="images/icons/storage.png" class="img-responsive margin" style="width:30%" alt="Image2">
    <h3>One storage point</h3>
    <p>Practically stores you movies on the saver machine giving you free space on any of your other devices.</p>
    </center>
  </div>
  <div class="col-sm-4">
    <center>
    <img src="images/icons/sharing-files.png" class="img-responsive margin" style="width:30%" alt="Image3">
    <h3>LAN view expirience</h3>
    <p>Watch your Video file across any device connected to your LAN network. enjoy!</p>
  </center>
  </div>
</div>
</div>


    <hr>
      <div class="container">
          <center>
            Copyright &copy; <?php echo date("Y");?>. WittySoft
          </center>
      </div>
  </body>
</html>
