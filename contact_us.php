<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <style>
    body {

      background-image: black;
      background-image: url('s2.jpg');
      background-size: cover;
      background-attachment: fixed;
    }

    .nav-item {
      padding: 0 20px;
      font-size: 16px;
      font-family: cursive;
    }

    .hading {
      padding: 0 400px;
      float: right;
      color: #b0bed3;
      font-size: 40px;
      font-weight: 200;
      font-family: cursive;
    }

    .follow {
      padding: 100px;
      width: 30%;
      height: 38%;
      border: 0px solid gray;
      color: #b0bed3;
      font-family: cursive;
    }

    .problem {
      color: #b0bed3;
      font-size: 16px;
      position: absolute;
      right: 500px;
      bottom: 200px;
      width: 20%;
      height: 20%;
      border: 0px solid #9fa591;
    }

    hr {
      border-top: 3px solid rgb(138, 153, 156);
    }

    .feedback {
      color: #b0bed3;
      font-size: 16px;
      position: absolute;
      right: 100px;
      bottom: 200px;
      width: 20%;
      height: 30%;
      border: 0px solid #9fa591;
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
  </nav><br><br>
  <div class="hading">
    Have Some Questions ?&nbsp;
  </div>
  <br><br>
  <div class="follow">
    <h2>Contact Us</h2>
    <hr>
    </hr><br>
    +512-9673-2345<br>
    +512-9873-0987<br>
    <img src="facebook.png" width="25px" height="25px">
    <img src="twitter.png" width="25px" height="25px">
    <img src="linkedin.png" width="25px" height="25px">
  </div>
  <div class="problem">
    <form>

      <h2>Any Problem ?</h2>
      <hr>
      </hr><br>
      <select>
        <option></option>
        <option>Privacy Issue</option>
        <option>Forget Password</option>
        <option>Want To Leave Your Space</option>
      </select><input type="submit" name="proBtn" value="GO">
    </form>
  </div>
  <div class="feedback">
    <form>

      <h2>feedback</h2>
      <hr>
      </hr><br>
      <input type="text" name="ftext" placeholder="We Appreciate your feedback..">
      <input type="submit" name="proBtn" value="GO">
    </form>
  </div>
</body>

</html>