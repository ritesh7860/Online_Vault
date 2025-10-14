<?php
include_once 'NavBar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Privacy Policy | freeSpace</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <style>
    .main {
      margin: 0;
      padding: 0;
      background: url('s2.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: "Poppins", sans-serif;
      margin-top: 3%;
      color: #d9e4f0;
    }

    .overlay {
      background: rgba(0, 0, 0, 0.7);
      min-height: 100vh;
      padding: 60px 15px;
    }

    .policy-container {
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
      font-size: 1.7rem;
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
      .policy-container {
        padding: 25px 20px;
      }

      h1 {
        font-size: 1.8rem;
      }
    }
  </style>
</head>

<body class="main">
  <div class="overlay">
    <div class="policy-container">
      <h1>Privacy Policy for freeSpace</h1>
      <hr>

      <p>
        freeSpace, accessible from <strong>freeSpace.com</strong>, one of our main priorities is the privacy of our visitors. 
        This Privacy Policy document contains types of information that are collected and recorded by freeSpace and how we use it.
      </p>

      <p>
        If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.
      </p>

      <h3>Consent</h3>
      <p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>

      <h3>Information We Collect</h3>
      <p>
        The personal information that you are asked to provide will be made clear to you at the point we ask for it. 
        If you contact us directly, we may receive additional details like your name, email, or message contents.
      </p>

      <h3>How We Use Your Information</h3>
      <ul>
        <li>Provide, operate, and maintain our website</li>
        <li>Improve, personalize, and expand our website</li>
        <li>Understand and analyze how you use our site</li>
        <li>Develop new products, services, and features</li>
        <li>Communicate updates and marketing</li>
        <li>Prevent fraud and ensure security</li>
      </ul>

      <h3>Cookies and Web Beacons</h3>
      <p>
        Like any other website, freeSpace uses cookies to store visitor preferences and optimize user experience. 
        For more general information on cookies, please read “What Are Cookies”.
      </p>

      <h3>Third-Party Privacy Policies</h3>
      <p>
        freeSpace’s Privacy Policy does not apply to other advertisers or websites. 
        Please consult their policies for more information on how they handle data.
      </p>

      <h3>GDPR Data Protection Rights</h3>
      <p>
        You have rights including access, rectification, erasure, restriction, objection, and portability of your data. 
        To exercise these rights, contact us anytime.
      </p>

      <h3>Children’s Information</h3>
      <p>
        Protecting children while using the internet is a priority. freeSpace does not knowingly collect any 
        Personal Identifiable Information from children under 13.
      </p>

    </div>
  </div>
</body>
</html>
