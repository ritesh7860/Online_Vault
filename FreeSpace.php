<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FreeSpace</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script type="text/javascript">
    function f() {
      var result = true;
      var a = document.frm.fnm.value;
      if (a == "") {
        document.getElementById('nm1').innerHTML = "*Enter Name";
        result = false;
      } else {
        document.getElementById('nm1').innerHTML = "";
      }
      a = document.frm.mail.value;
      if (a == "") {
        document.getElementById('mL').innerHTML = "*Enter Email";
        result = false;
      } else {
        document.getElementById('mL').innerHTML = "";
      }

      a = document.frm.pwd1.value;
      if (a == "") {
        document.getElementById('pw').innerHTML = "*Enter Password";
        result = false;
      } else {
        document.getElementById('pw').innerHTML = "";
      }

      return result;

    }
  </script>
  <style>
    body {

      background-image: black;
      background-image: url('universe.jpg');
      background-size: cover;
      background-attachment: fixed;
    }

    .nav-item {
      padding: 0 20px;
      font-size: 16px;
      font-family: cursive;
    }

    .hading {
      padding: 0 150px;
      float: right;
      color: #b0bed3;
      font-size: 40px;
      font-weight: 200;
      font-family: cursive;
    }

    .form {
      color: #e5ecf7;
      font-size: 16px;
      position: absolute;
      right: 200px;
      bottom: 200px;
      width: 20%;
      height: 30%;
      border: 0px solid #9fa591;
    }

    div form input[type=submit] {
      border: 4px solid rgb(71, 80, 82);
      background-color: #9fa591;
      color: #171718;
      font-size: 20px;
      padding: 10px 30px;

    }

    div form input[type=text],
    div form input[type=email],
    div form input[type=password] {
      background-color: transparent;
      color: white;


    }

    div form input[type=text]:focus,
    div form input[type=email]:focus {
      border: 5px solid rgb(163, 170, 172);
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
          <a class="nav-link" href="login.php">LOGIN</a>
        </li>

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <br> <br><br> <br>
  <div class="hading">
    Create Your Own Space
  </div>
  <div class="form">
    <form align="center" method="post" name="frm" onsubmit="return f()"><br>
      Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="fnm" placeholder="Full Name" /><b id="nm1"></b>
      <hr>
      </hr>
      Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="mail" placeholder="Enter mail" /><b id="mL"></b>
      <hr>
      </hr>
      Password:<input type="password" name="pwd1" placeholder="Password"><b id="pw"></b>
      <hr>
      </hr>
      <input type="submit" name="btn" value="CREATE ACCOUNT">
    </form>
  </div>
</body>

</html>

<?php
extract($_REQUEST);
if (isset($btn)) {
  $link = mysqli_connect("localhost", "root", "", "freespace");
  $qry = "insert into regdata values('$fnm','$mail','$pwd1')";
  $r = mysqli_query($link, $qry);

  if ($r) {
    echo '<span style="color:green  ">your account has been created</span>';
  } else {
    echo   '<span style="color:red" style= "padding:1 100px">Try Again</span>';
  }
  mysqli_close($link);
}
?>