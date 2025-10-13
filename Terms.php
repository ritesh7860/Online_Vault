<?php
include_once 'NavBar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Terms & Conditions | freeSpace</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <style>
    body {
      margin: 0;
      padding: 0;
      background: url('s2.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: "Poppins", sans-serif;
      color: #d9e4f0;
    }

    .overlay {
      background: rgba(0, 0, 0, 0.7);
      min-height: 100vh;
      padding: 60px 15px;
    }

    .content-box {
      max-width: 900px;
      margin: 0 auto;
      background: rgba(255, 255, 255, 0.08);
      padding: 40px 50px;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
    }

    h1 {
      color: #b0bed3;
      font-size: 2.3rem;
      text-align: center;
      margin-bottom: 20px;
      font-weight: 500;
      font-family: "Cursive", sans-serif;
    }

    hr {
      border-top: 2px solid #8899aa;
      width: 60%;
      margin: 20px auto 40px auto;
    }

    h3 {
      color: #c8d8e8;
      margin-top: 30px;
      font-size: 1.5rem;
      font-weight: 600;
    }

    p, li {
      color: #d0d7e2;
      line-height: 1.7;
      font-size: 1rem;
    }

    ul {
      list-style-type: disc;
      padding-left: 20px;
    }

    @media (max-width: 768px) {
      .content-box {
        padding: 25px 20px;
      }

      h1 {
        font-size: 1.8rem;
      }
    }
  </style>
</head>
<body>
  <div class="overlay">
    <div class="content-box">
      <h1>Terms & Conditions</h1>
      <hr>

      <p>
        Welcome to <strong>freeSpace</strong>! These terms and conditions outline the rules and regulations
        for the use of our website and services.
      </p>

      <h3>Acceptance of Terms</h3>
      <p>
        By accessing or using freeSpace, you agree to comply with and be bound by these Terms and Conditions.
        If you do not agree, please discontinue use immediately.
      </p>

      <h3>Use of the Website</h3>
      <ul>
        <li>You must be at least 13 years old to use this service.</li>
        <li>You agree to use the platform lawfully and not for any prohibited activity.</li>
        <li>Any unauthorized access or attempt to harm the platform will lead to termination and possible legal action.</li>
      </ul>

      <h3>Intellectual Property</h3>
      <p>
        All content, trademarks, and materials displayed on freeSpace are the intellectual property of the company unless stated otherwise.
        Unauthorized use is strictly prohibited.
      </p>

      <h3>Limitation of Liability</h3>
      <p>
        freeSpace will not be held liable for any indirect, incidental, or consequential damages resulting from your use of the platform.
      </p>

      <h3>Changes to Terms</h3>
      <p>
        We may revise these Terms at any time. Continued use of the website after updates implies acceptance of the revised Terms.
      </p>

      <h3>Contact Us</h3>
      <p>
        If you have any questions about these Terms & Conditions, please reach out to us at <strong>support@freespace.com</strong>.
      </p>
    </div>
  </div>
</body>
</html>
