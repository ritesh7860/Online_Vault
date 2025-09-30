<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Manager</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <style>
    body {

      background-image: black;
      background-image: url('globe.png');
      background-size: cover;
      background-attachment: fixed;
    }

    .nav-item {
      padding: 0 20px;
      font-size: 16px;
      font-family: cursive;
    }

    .hading {
      padding: 0 500px;
      float: right;
      color: #b0bed3;
      font-size: 40px;
      font-weight: 100px;
      font-family: cursive;
    }

    .form {
      color: #e5ecf7;
      font-size: 16px;
      position: absolute;
      right: 35%;
      bottom: 1%;
      width: 20%;
      height: 38%;
      border: 0px solid gray;

    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="document.php">
      <h2>FreeSpace</h2>
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="FreeSpace.php">HOME </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="contact_us.php">CONTACT US</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="privacy.php">PRIVACY</a>
        </li>
        <li class="nav-item active">
          <form> <input style=background-color:#635f5b;color:aliceblue type="submit" name="logBtn" value="LOGOUT"></form>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav><br>

  <div class="hading">
    Go To Your Space<br><br>
    &nbsp; &nbsp; &nbsp; <a href="ufiles.php"><img src="rocket.png" height="150px" width="150px"></a>
  </div>
  <div class="form">
    <form enctype="multipart/form-data" method="post">
      <input type="file" id="myfile" name="filename"> <br><br>
      &nbsp; &nbsp; &nbsp;<input type="submit" id="myfile" name="sub" value="UPLOAD">




      <?php
      session_start();
      extract($_REQUEST);
      $imgpath = "";
      if (isset($sub)) {

        $tmpPath = $_FILES['filename']['tmp_name'];



        $finalPath = "uploaded data/" . $_FILES['filename']['name'];
        $t = $_SESSION['filesize'];

        $remsize = 52428800 - $t;

        if ($_FILES['filename']['size']  <= $remsize) {

          if ($_FILES['filename']['error'] == 0) {


            $e = explode(".", $_FILES['filename']['name']);
            $s = $_FILES['filename']['size'];
            move_uploaded_file($tmpPath, $finalPath);

            $imgpath =  $finalPath;
            $size = $s;

            $link = mysqli_connect("localhost", "root", "", "freespace");
            //  session_start();
            $qry = "insert into updfiles values('$_SESSION[email]','$imgpath','$size',curdate())";
            //$qry="update regdata set uploadfiles='$imgpath' where email='$_SESSION[email]'";
            $r = mysqli_query($link, $qry);

            if ($r) {


              echo '<span style="color:green  ">File Uploaded Successfully......</span>';
            }
          }
        }
        echo "remaining size=", $remsize, "_bites";
      }

      ?>


      <?php
      extract($_REQUEST);
      if (isset($logBtn)) {
        session_destroy();
        header("location:login.php");
      }
      ?>

    </form>
  </div>
</body>

</html>