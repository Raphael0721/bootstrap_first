<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Production - Sports Shop</title>
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
    <script>
      function updateParagraph() {
        let userId = document.getElementById("userId");
        let eingabe = userId.value;

        let xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
          if (this.readyState == 4 && this.status == 200) {
            outputParagraph.innerHTML = this.responseText;
          }else{
            alert("Error: " + this.status+" "+this.responseText);
          }
        };
        xhr.open("POST", "loadProduction.php" , true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("userId=" + eingabe);

      }
    </script>
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
              <a class="nav-link active" aria-current="page" href="#"
                >Production</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Jobs.php">Jobs</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Business Description Section -->
    <div class="container mt-5">
      <div class="row">
        <div class="col-12 text-center text-md-start">
          <h2>About Our Production</h2>
          <p>
            At Sports Shop, we pride ourselves on producing high-quality sports
            equipment that meets the needs of athletes of all levels. Our
            production process is designed to ensure the highest standards of
            quality and performance.
          </p>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12 col-md-6">
          <img
            src="./images/desk-3139127_1280.jpg"
            class="img-fluid"
            alt="Production Image 1"
          />
        </div>
        <div class="col-12 col-md-6 text-center text-md-start">
          <h3>State-of-the-Art Facilities</h3>
          <p>
            Our production facilities are equipped with the latest technology to
            ensure that every product we manufacture meets the highest standards
            of quality. From raw materials to finished products, we maintain
            strict quality control measures at every stage of the production
            process.
          </p>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12 col-md-6 order-md-2">
          <img
            src="./images/production-4408573_1280.jpg"
            class="img-fluid"
            alt="Production Image 2"
          />
        </div>
        <div class="col-12 col-md-6 order-md-1 text-center text-md-start">
          <h3>Expert Craftsmanship</h3>
          <p>
            Our team of skilled craftsmen and women bring years of experience
            and expertise to the production process. Their attention to detail
            and commitment to excellence ensure that every product we produce is
            of the highest quality.
          </p>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12 col-md-6">
          <img
            src="./images/machine-4907216_1280.jpg"
            class="img-fluid"
            alt="Production Image 3"
          />
        </div>
        <div class="col-12 col-md-6 text-center text-md-start">
          <h3>Innovative Design</h3>
          <p>
            We are constantly innovating and improving our products to meet the
            evolving needs of athletes. Our design team works closely with
            athletes to develop products that enhance performance and provide
            the best possible experience.
          </p>
        </div>
      </div>
    </div>

    <!-- ID Input Section -->
    <div class="container mt-5">
      <div class="row">
        <div class="col-12 text-center">
          <h2>Enter Your ID</h2>
          <input type="text" id="userId" class="form-control my-3" placeholder="Enter your ID" />
          <button class="btn btn-primary" onclick="updateParagraph()">Submit</button>
          <p id="outputParagraph" class="mt-3"></p>
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
