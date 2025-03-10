<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Account Created Successfully</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
              <a class="nav-link" href="Jobs.php">Jobs</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Success Message -->
    <div class="container mt-5">
      <div class="row">
        <div class="col-12 text-center">
          <h2>Account Created Successfully</h2>
          <p>Your account has been created successfully.</p>
          <a href="Homepage.php" class="btn btn-primary">Go to Homepage</a>
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
