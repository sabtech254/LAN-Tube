<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <script src="../bootstrap/bootstrap.min.js"></script>
    <script src="../bootstrap/jquery.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../images/icons/logo_icon.png">
    <title>LAN Tube | Uploads</title>


    <?php
   include("config.php");
   if(isset($_POST['but_upload'])){
      $maxsize = 2048242880; // 2048MB = 2GB

      $name = $_FILES['file']['name'];
      $target_dir = "videos/";
      $target_file = $target_dir . $_FILES["file"]["name"];

      // Select file type
      $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

      // Valid file extensions
      $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

      // Check extension
      if( in_array($videoFileType,$extensions_arr) ){

         // Check file size
         if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
           echo "File too large. File must be less than 2GB.";
         }else{
           // Upload
           if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
             // Insert record
             $query = "INSERT INTO videos(name,location) VALUES('".$name."','".$target_file."')";

             mysqli_query($con,$query);
             echo "Upload successfully.";
           }
         }

      }else{
         echo "Invalid file extension.";
      }

    }
    ?>




  </head>
  <body>

    <div class="jumbotron text-center">
      <h1>Uploads - LAN Tube</h1>
      <p>Live streaming on your LAN from any device</p>
    </div>

    <div class="btn-group btn-group-justified">
      <a href="../index.php" class="btn btn-success">Home</a>
      <a href="uploads.php" class="btn btn-primary">Uploads</a>
      <a href="#" class="btn btn-primary">Library</a>
      <a href="#" class="btn btn-info">About</a>
    </div>


    <center>
      <h1>Recently uploaded Movies<br/>
      </h1>

      <h3>
        <?php
          echo '<div class="alert alert-info">';
          echo "Date: " . date("Y-m-d h:i:sa");
          echo '</div>';
        ?>
      </h3>


      <hr>


      <style>
    video{
     box-shadow: 1px 2px 10px black;
     transition: 1s;

    }
    video:hover{
      box-shadow: 3px 7px 15px black;
      transition: 1s;
    }
    </style>

     <div>

      <?php
      $fetchVideos = mysqli_query($con, "SELECT location, name FROM videos ORDER BY id DESC");
      while($row = mysqli_fetch_assoc($fetchVideos)){
        $location = $row['location'];
        $name_of_file = $row['name'];

        echo '<strong><h4>Movie title:</h4> <font color="blue">'.$name_of_file.'</font></strong>';
        echo "<div >";
        echo "<video src='".$location."' controls width='520px' height='300px' >";
        echo "</video></div>";
      }
      ?>

     </div>

</center>

<hr>
<div class="container">
    <div class="row">
        <div class="col-md-8">
              <h1>Upload new movie below...</h1>
              <hr>

              <form method="post" action="uploads.php" enctype='multipart/form-data'>
                <input class="form-control" type='file' name='file' />
                <hr>
                <input class="btn btn-primary" type='submit' value='Upload' name='but_upload'>
            </form>
              <hr>
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
