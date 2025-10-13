<?php
include_once 'NavBar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FreeSpace | Create Account</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <!-- JS Validation -->
  <script type="text/javascript">
    function f() {
      let result = true;
      let name = document.frm.fnm.value.trim();
      let email = document.frm.mail.value.trim();
      let pwd = document.frm.pwd1.value.trim();

      document.getElementById('nm1').innerHTML = "";
      document.getElementById('mL').innerHTML = "";
      document.getElementById('pw').innerHTML = "";

      if (name === "") {
        document.getElementById('nm1').innerHTML = "* Please enter your name";
        result = false;
      }
      if (email === "") {
        document.getElementById('mL').innerHTML = "* Please enter your email";
        result = false;
      }
      if (pwd === "") {
        document.getElementById('pw').innerHTML = "* Please enter your password";
        result = false;
      }
      return result;
    }
  </script>

  <style>
    body {
      background: url('universe.jpg') center center / cover no-repeat fixed;
      font-family: 'Poppins', sans-serif;
      color: #f5f7fa;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    main {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: flex-end;
      padding-right: 8%;
      margin-top: 60px;
    }

    .register-card {
      /* background: rgba(0, 0, 0, 0.7); */
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 12px;
      padding: 40px 45px;
      width: 100%;
      max-width: 400px;
      backdrop-filter: blur(6px);
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.5);
      text-align: left;
    }

    .register-card h2 {
      font-weight: 600;
      text-align: center;
      margin-bottom: 30px;
      color: #ffffff;
      text-shadow: 0 0 8px rgba(255, 255, 255, 0.25);
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


    .error-text {
      color: #ff7b7b;
      font-size: 13px;
      margin-top: 4px;
    }

    .btn-create {
      background: linear-gradient(45deg, #00bfff, #007bff);
      border: none;
      color: #fff;
      font-size: 17px;
      font-weight: 500;
      padding: 10px 0;
      border-radius: 8px;
      margin-top: 15px;
      transition: 0.3s ease;
      width: 100%;
    }

    .btn-create:hover {
      background: linear-gradient(45deg, #0099ff, #00ccff);
      transform: scale(1.02);
    }

    footer {
      text-align: center;
      color: #9caebf;
      margin-top: 40px;
      padding-bottom: 30px;
      font-size: 14px;
    }

    @media (max-width: 768px) {
      main {
        justify-content: center;
        padding: 20px;
      }
      .register-card {
        width: 90%;
      }
    }
  </style>
</head>

<body>

  <main>
    <div class="register-card">
      <h2>Create Your Own Space</h2>
      <form method="post" name="frm" onsubmit="return f()">
        <div class="form-group">
          <label for="fnm">Full Name</label>
          <input type="text" class="form-control" name="fnm" placeholder="Enter your full name">
          <span id="nm1" class="error-text"></span>
        </div>

        <div class="form-group">
          <label for="mail">Email Address</label>
          <input type="email" class="form-control" name="mail" placeholder="Enter your email">
          <span id="mL" class="error-text"></span>
        </div>

        <div class="form-group">
          <label for="pwd1">Password</label>
          <input type="password" class="form-control" name="pwd1" placeholder="Create password">
          <span id="pw" class="error-text"></span>
        </div>

        <button type="submit" name="btn" class="btn-create">Create Account</button>
      </form>
    </div>
  </main>

</body>

</html>

<?php
extract($_REQUEST);
if (isset($btn)) {
  $link = mysqli_connect("localhost", "root", "", "freespace");
  if (!$link) {
    die("Database connection failed: " . mysqli_connect_error());
  }

  $qry = "INSERT INTO regdata (name, email, password) VALUES ('$fnm', '$mail', '$pwd1')";
  $r = mysqli_query($link, $qry);

  echo '<div style="position:fixed;bottom:25px;left:50%;transform:translateX(-50%);text-align:center;">';
  if ($r) {
    echo '<span style="color:limegreen; font-size:18px;">Your account has been created successfully!</span>';
  } else {
    echo '<span style="color:red; font-size:18px;">Error: Try again later.</span>';
  }
  echo '</div>';

  mysqli_close($link);
}
?>
