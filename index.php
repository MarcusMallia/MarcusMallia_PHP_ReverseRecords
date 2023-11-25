<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget Galaxy</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- Banner Section -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Welcome to Gadget Galaxy!</h1>
        <p class="lead">Your one-stop shop for the latest tech gadgets.</p>
      </div>
    </div>

    <!-- Featured Products Section -->
    <div class="container mt-4">
      <h2>Featured Products</h2>
      <div class="row">
        <!-- Card for a featured product -->
        <div class="col-md-4">
          <div class="card">
            <img src="path_to_image" class="card-img-top" alt="Product Image">
            <div class="card-body">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="product.php" class="btn btn-primary">View Product</a>
            </div>
          </div>
        </div>
        <!-- Repeat for other featured products -->
      </div>
    </div>

    <!-- Existing Page Content -->
    <div class="container">
        <h1>Welcome to Gadget Galaxy!</h1>
        <p>Discover the latest tech gadgets and accessories.</p>
        <!-- Add more content here as needed -->
    </div>

    <?php include 'footer.php'; ?>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
