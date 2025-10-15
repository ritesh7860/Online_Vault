<?php
include 'NavBar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FreeSpace | Home</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background: #0f172a;
      color: #f1f5f9;
      overflow-x: hidden;
    }

    /* Hero Section */
    .hero {
      min-height: 100vh;
      background: linear-gradient(rgba(15, 23, 42, 0.85), rgba(15, 23, 42, 0.85)), url('home-bg.jpg') center/cover no-repeat;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 0 20px;
    }

    .hero h1 {
      font-size: 3rem;
      font-weight: 700;
      color: #38bdf8;
      margin-bottom: 15px;
      animation: fadeInDown 1s ease;
    }

    .hero p {
      max-width: 600px;
      font-size: 1.1rem;
      color: #e2e8f0;
      margin-bottom: 25px;
      animation: fadeInUp 1.2s ease;
    }

    .hero .btn-primary {
      background-color: #38bdf8;
      border: none;
      color: #0f172a;
      padding: 12px 30px;
      font-weight: 600;
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    .hero .btn-primary:hover {
      background-color: #7dd3fc;
      transform: scale(1.05);
    }

    /* Features Section */
    .features {
      padding: 80px 0;
      background: #1e293b;
      text-align: center;
    }

    .features h2 {
      color: #38bdf8;
      margin-bottom: 40px;
      font-weight: 600;
    }

    .feature-box {
      background: rgba(255, 255, 255, 0.05);
      border-radius: 12px;
      padding: 25px;
      transition: 0.3s;
    }

    .feature-box:hover {
      transform: translateY(-10px);
      background: rgba(255, 255, 255, 0.1);
    }

    .feature-box h4 {
      color: #f1f5f9;
      font-weight: 600;
      margin-bottom: 10px;
    }

    .feature-box p {
      color: #94a3b8;
      font-size: 15px;
    }

    /* How It Works */
    .how-it-works {
      padding: 40px 0;
      background: #0f172a;
      text-align: center;
    }

    .how-it-works h2 {
      color: #38bdf8;
      margin-bottom: 40px;
    }

    .step {
      background: rgba(255, 255, 255, 0.05);
      padding: 25px;
      border-radius: 12px;
      transition: 0.3s;
    }

    .step:hover {
      transform: translateY(-8px);
      background: rgba(255, 255, 255, 0.1);
    }

    .step-number {
      background-color: #38bdf8;
      color: #0f172a;
      font-weight: 700;
      border-radius: 50%;
      width: 45px;
      height: 45px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 15px;
    }

    /* Testimonials */
    .testimonials {
      background: #0f172a;
      padding: 40px 0;
      text-align: center;
    }

    .testimonial {
      background: rgba(255, 255, 255, 0.05);
      padding: 25px;
      border-radius: 12px;
      color: #e2e8f0;
      margin: 15px;
    }

    .testimonial p {
      font-style: italic;
      color: #cbd5e1;
    }

    .testimonial h5 {
      margin-top: 15px;
      color: #38bdf8;
    }

    footer {
      background: #0f172a;
      text-align: center;
      padding: 20px;
      color: #94a3b8;
      font-size: 14px;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    @keyframes fadeInDown {
      0% {
        opacity: 0;
        transform: translateY(-30px);
      }

      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(30px);
      }

      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (max-width: 768px) {
      .hero h1 {
        font-size: 2.2rem;
      }
    }
  </style>
</head>

<body>

  <!-- Hero Section -->
  <section class="hero">
    <h1>Welcome to FreeSpace</h1>
    <p>Securely store, manage, and access your files anywhere, anytime. Your cloud — your control.</p>
    <a href="FreeSpace.php" class="btn btn-primary">Get Started</a>
  </section>

  <!-- Features -->
  <section class="features">
    <div class="container">
      <h2>Why Choose FreeSpace?</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="feature-box">
            <h4>🔒 Secure Storage</h4>
            <p>Your files are encrypted and protected with the latest security standards.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box">
            <h4>⚡ Fast Uploads</h4>
            <p>Enjoy lightning-fast file uploads and downloads from anywhere in the world.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box">
            <h4>📂 Easy Management</h4>
            <p>Upload, view, and organize your files effortlessly from a single dashboard.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- How It Works -->
  <section class="how-it-works">
    <div class="container">
      <h2>How It Works</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="step">
            <div class="step-number">1</div>
            <h5>Create Your Account</h5>
            <p>Sign up for free and get access to your own secure FreeSpace dashboard.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="step">
            <div class="step-number">2</div>
            <h5>Upload Your Files</h5>
            <p>Upload documents, images, or any file — all securely stored in your account.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="step">
            <div class="step-number">3</div>
            <h5>Access Anytime</h5>
            <p>View or download your files anywhere, anytime — complete control in your hands.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials">
    <div class="container">
      <h2>What Our Users Say</h2>
      <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="testimonial">
            <p>“FreeSpace has made my file management so simple. I can access my documents anytime!”</p>
            <h5>- Ritesh Singh</h5>
          </div>
        </div>
        <div class="col-md-4">
          <div class="testimonial">
            <p>“The speed and security are top-notch. Highly recommend FreeSpace for personal use.”</p>
            <h5>- Deepali Singh</h5>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    © <?php echo date("Y"); ?> FreeSpace — All Rights Reserved. |
    <a href="contact_us.php" style="color:#38bdf8; text-decoration:none;">Contact Support</a>
  </footer>
</body>
</html>
