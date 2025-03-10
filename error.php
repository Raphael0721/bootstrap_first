<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Error</h2>
                <p><?php echo isset($_SESSION['error']) ? htmlspecialchars($_SESSION['error']) : 'An unknown error occurred.'; ?></p>
                <a href="logout.php" class="btn btn-primary">Go Back</a>
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