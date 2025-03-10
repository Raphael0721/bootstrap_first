<?php

session_start();

if (!isset($_SESSION['email'])) {
    $_SESSION['error'] = "Login required";
    echo $_SESSION['error'];
    header("Location: Jobs.php");
    exit();
}

$progress = rand(0, 100);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Information</title>
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

    <!-- User Information -->
    <div class="container mt-5">
      <div class="row">
        <div class="col-12 text-center">
          <h2>User Information</h2>
          <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
          <p>Your email address is: <?php echo $_SESSION['email']; ?></p>
          <p>Your phone number is: <?php echo $_SESSION['phone']; ?></p>
          <p>The position you applied for is: <?php echo $_SESSION['position']; ?></p>
          <a href="logout.php" class="btn btn-primary">Logout</a>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12 text-center">
          <h3>Progress of your job application</h3>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: <?php echo $_SESSION['progress']; ?>%;" aria-valuenow="<?php echo $_SESSION['progress']; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $_SESSION['progress']; ?>%</div>
          </div>
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
