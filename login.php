<?php
include_once 'NavBar.php';

extract($_REQUEST);
if (isset($logBtn)) {
  $link = mysqli_connect("localhost", "root", "", "freespace");
  $qry = "SELECT email FROM regdata WHERE email='$umail' AND password='$pass'";
  $r = mysqli_query($link, $qry);
  $c = mysqli_num_rows($r);
  if ($c == 1) {
    $qry = "SELECT SUM(fsize) FROM updfiles WHERE email='$umail'";
    $r = mysqli_query($link, $qry);
    $a = mysqli_fetch_row($r);
    session_start();
    $_SESSION['email'] = $umail;
    $_SESSION['filesize'] = $a[0];
    header("location:updfile.php");
    exit;
  } else {
    $error = "Invalid email or password";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | freeSpace</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      margin: 0;
      padding: 0;
      background: url('login-bg.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: "Poppins", sans-serif;
      color: #fff;
    }

    .overlay {
      background: rgba(0, 0, 0, 0.6);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 30px;
    }

    .login-card {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border-radius: 16px;
      padding: 40px 35px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 0 25px rgba(0, 0, 0, 0.4);
    }

    .login-card img {
      width: 90px;
      height: 90px;
      display: block;
      margin: 0 auto 20px;
      filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.3));
    }

    .login-card h2 {
      text-align: center;
      color: #b0bed3;
      margin-bottom: 20px;
      font-weight: 600;
      font-size: 1.8rem;
    }

    .form-control {
      background-color: transparent; 
      border: 1px solid #3b444b;
      color: #f5f7fa;
      font-size: 15px;
      padding: 10px 15px;
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    .form-control:focus {
      color: #bab0b0ff;
      border-color: #1cb0f6;
      box-shadow: 0 0 10px rgba(28, 176, 246, 0.5);
      background-color: rgba(255, 255, 255, 0.05);
    }

    .form-control::placeholder{
      color: #bab0b0ff ;
    }

    .btn-login {
      width: 100%;
      background-color: #88c0d0;
      border: none;
      padding: 10px;
      font-size: 1.1rem;
      border-radius: 8px;
      color: #1b1b1b;
      font-weight: 600;
      transition: background 0.3s ease;
    }

    .btn-login:hover {
      background-color: #a6dcef;
    }

    .error-msg {
      color: #ffb3b3;
      text-align: center;
      margin-bottom: 15px;
      font-weight: 500;
    }

    hr {
      border-top: 2px solid rgba(255, 255, 255, 0.2);
      margin: 20px 0;
    }

    @media (max-width: 480px) {
      .login-card {
        padding: 30px 20px;
      }
    }
  </style>

  <script>
    function validateForm() {
      let email = document.forms["frm1"]["umail"].value;
      let pass = document.forms["frm1"]["pass"].value;
      let valid = true;

      document.getElementById("emailError").innerHTML = "";
      document.getElementById("passError").innerHTML = "";

      if (email.trim() === "") {
        document.getElementById("emailError").innerHTML = "* Enter Email";
        valid = false;
      }
      if (pass.trim() === "") {
        document.getElementById("passError").innerHTML = "* Enter Password";
        valid = false;
      }

      return valid;
    }
  </script>
</head>

<body>
  <div class="overlay">
    <div class="login-card">
      <img src="login icon.png" alt="Login Icon">
      <h2>Member Login</h2>
      <hr>
      <?php if (isset($error)) echo "<div class='error-msg'>$error</div>"; ?>

      <form name="frm1" method="post" onsubmit="return validateForm()">
        <div class="mb-3">
          <input type="email" class="form-control" name="umail" placeholder="Email">
          <small id="emailError" class="text-danger"></small>
        </div>

        <div class="mb-3">
          <input type="password" class="form-control" name="pass" placeholder="Password">
          <small id="passError" class="text-danger"></small>
        </div>

        <button type="submit" name="logBtn" class="btn-login mt-2">Login</button>
      </form>
    </div>
  </div>
</body>
</html>
