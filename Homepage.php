<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sports Shop</title>
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
              <a class="nav-link active" aria-current="page" href="#">Home</a>
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

    <!-- Carousel -->
    <div
      id="carouselExampleIndicators"
      class="carousel slide mx-auto px-0 pt-0 pb-2 w-100 w-md-50"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="./images/sneakers-1024974_1280.jpg"
            class="d-block w-100 img-fluid"
            alt="Slide 1"
            style="height: 500px; object-fit: cover"
          />
        </div>
        <div class="carousel-item">
          <img
            src="./images/football-1396740_1280.jpg"
            class="d-block w-100 img-fluid"
            alt="Slide 2"
            style="height: 500px; object-fit: cover"
          />
        </div>
        <div class="carousel-item">
          <img
            src="./images/tennis-7873937_1280.jpg"
            class="d-block w-100 img-fluid"
            alt="Slide 3"
            style="height: 500px; object-fit: cover"
          />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- Intro-Text -->

    <div class="container mt-5">
      <div class="row">
        <div class="col-12 text-center">
          <h2>Welcome to Sports Shop</h2>
          <p>
            We provide high-quality sports equipment for all your sports needs.
          </p>
        </div>
      </div>
    </div>

    <!-- Featured Products Section -->
    <div class="container mt-5">
      <div class="row">
        <div class="col-12 text-center">
          <h2>Our Products</h2>
        </div>

        <div class="col-12 col-md-4 d-flex align-items-stretch py-3 py-md-0">
          <div class="card w-100">
            <img
              src="./images/sneakers-1024974_1280.jpg"
              class="card-img-top img-fluid"
              alt="Sneakers"
              style="height: 200px; width: 100%; object-fit: cover"
            />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Sneakers</h5>
              <p class="card-text">
                High-quality sneakers for all your sports needs.
              </p>

              <a href="#" class="btn btn-primary mt-auto buy-now-btn"
                >See More</a
              >
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 d-flex align-items-stretch py-3 py-md-0">
          <div class="card w-100">
            <img
              src="./images/football-1396740_1280.jpg"
              class="card-img-top img-fluid"
              alt="Ball"
              style="height: 200px; width: 100%; object-fit: cover"
            />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Ball</h5>
              <p class="card-text">
                Durable and high-quality ball for various sports.
              </p>

              <a href="#" class="btn btn-primary mt-auto buy-now-btn"
                >See More</a
              >
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 d-flex align-items-stretch py-3 py-md-0">
          <div class="card w-100">
            <img
              src="./images/tennis-7873937_1280.jpg"
              class="card-img-top img-fluid"
              alt="Tennis Racket"
              style="height: 200px; width: 100%; object-fit: cover"
            />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Tennis Rackets</h5>
              <p class="card-text">
                The best quality tennis racket for all your sports needs.
              </p>

              <a href="#" class="btn btn-primary mt-auto buy-now-btn"
                >See More</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Toast Notification -->
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
      <div
        id="liveToast"
        class="toast"
        role="alert"
        aria-live="assertive"
        aria-atomic="true"
      >
        <div class="toast-header">
          <strong class="me-auto">Notification</strong>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="toast"
            aria-label="Close"
          ></button>
        </div>
        <div class="toast-body">There are currently no items available.</div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="text-primary text-center py-3 mt-auto">
      <p>&copy; 2024 Sports Shop</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script>
      document.querySelectorAll(".buy-now-btn").forEach((button) => {
        button.addEventListener("click", (event) => {
          event.preventDefault();
          const toast = new bootstrap.Toast(
            document.getElementById("liveToast")
          );
          toast.show();
        });
      });
    </script>
  </body>
</html>
