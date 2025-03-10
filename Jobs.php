<?php
  session_start();
  if (isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
  }


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jobs - Sports Shop</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      .card:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease;
      }
    </style>
  </head>
  <body class="d-flex flex-column min-vh-100">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-sm navbar-light bg-primary sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="#">
          <img src="./images/logo.png" width="30" height="30" alt="Logo" />
          <span class="ms-2">Sports Shop</span>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNav"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="Homepage.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Production.php">Production</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Jobs</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Job Application Form -->
    <div class="container mt-5">
      <div class="row">
        <div class="col-12 text-center text-md-start">
          <h2>Job Application</h2>
          <p>
            We are always looking for talented individuals to join our team.
            Please fill out the form below to apply for a position at Sports
            Shop.
          </p>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12">
          <form action="job.php" method="post">
            <div class="mb-3">
              <label for="nameID" class="form-label">Full Name</label>
              <input
                type="text"
                class="form-control"
                id="nameID"
                name="name"
                required
              />
            </div>
            <div class="mb-3">
              <label for="emailID" class="form-label">Email address</label>
              <input
                type="email"
                class="form-control"
                id="emailID"
                name="email"
                required
              />
            </div>
            <div class="mb-3">
              <label for="pswID" class="form-label">Password</label>
              <input
                type="password"
                class="form-control"
                id="pswID"
                name="psw"
                required
              />
            </div>
            <div class="mb-3">
              <label for="phoneID" class="form-label">Phone Number</label>
              <input
                type="tel"
                class="form-control"
                id="phoneID"
                name="phone"
                required
              />
            </div>
            <div class="mb-3">
              <label for="positionID" class="form-label"
                >Position Applied For</label
              >
              <input
                type="text"
                class="form-control"
                id="positionID"
                name="position"
                required
              />
            </div>
            <div class="mb-3">
              <button type="submit" class="btn btn-primary">
                Submit Application
              </button>
            </div>
          </form>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12">
          <form action="signIn.php" method="post">
            <div class="mb-3">
              <label for="loginID" class="form-label">Email</label>
              <input
                type="email"
                class="form-control"
                id="loginID"
                name="login"
                required
              />
            </div>
            <div class="mb-3">
              <label for="secureID" class="form-label">Password</label>
              <input
                type="password"
                class="form-control"
                id="secureID"
                name="secure"
                required
              />
            </div>
            <div class="mb-3">
              <button type="submit" class="btn btn-primary">Sign In</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="text-primary text-center py-3 mt-auto">
      <p>&copy; 2024 Sports Shop</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
  </body>
</html>
