<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FreeSpace</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    /* Navbar Styling */
    .navbar {
      background: rgba(15, 15, 15, 0.9);
      backdrop-filter: blur(6px);
      padding: 0.8rem 1.5rem;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.4);
    }

    .navbar-brand {
      font-family: 'Poppins', cursive;
      font-size: 1.8rem;
      color: #88c0d0 !important;
      font-weight: 600;
      letter-spacing: 1px;
    }

    .nav-link {
      color: #e5ecf7 !important;
      font-size: 1rem;
      font-family: 'Poppins', sans-serif;
      margin: 0 10px;
      transition: all 0.3s ease;
      position: relative;
    }

    .nav-link:hover {
      color: #88c0d0 !important;
    }

    .nav-link::after {
      content: "";
      display: block;
      width: 0;
      height: 2px;
      background: #88c0d0;
      transition: width 0.3s;
      position: absolute;
      bottom: -4px;
      left: 0;
    }

    .nav-link:hover::after,
    .nav-link.active::after {
      width: 100%;
    }

    .navbar-toggler {
      border: none;
      outline: none;
    }

    .navbar-toggler:focus {
      box-shadow: none;
    }

    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgb(200, 200, 200)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }

    @media (max-width: 991px) {
      .navbar-nav {
        text-align: center;
        padding-top: 1rem;
      }

      .nav-item {
        margin: 8px 0;
      }
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="document.php">FreeSpace</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="FreeSpace.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact_us.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="privacy.php">Privacy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Terms.php">Terms & Conditions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="About.php">About Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</body>
</html>
