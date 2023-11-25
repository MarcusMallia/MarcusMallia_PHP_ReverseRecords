<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist - Reverse Records</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- Wishlist Section -->
    <div class="container mt-4">
        <h2>Your Wishlist</h2>
        <div class="row">
            <!-- Wishlist Item 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                <img src="images/vsBk5FkASpxxcB9CsH2M3G-1200-80.jpg.webp" class="card-img-top" alt="KEF LS50 Wireless II">
                    <div class="card-body">
                        <h5 class="card-title">KEF LS50 Wireless II</h5>
                        <p class="card-text">Power: 380W<br>Inputs: Optical, coaxial, 3.5mm, HDMI eARC<br>Outputs: Sub<br>Radio: Internet</p>
                        <a href="product.php" class="btn btn-primary">View Product</a>
                        <button type="button" class="btn btn-danger">Remove from Wishlist</button>
                    </div>
                </div>
            </div>

            <!-- Wishlist Item 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                <img src="images\fyC6VbPKYK8jJAyPwJXG4S-1200-80.jpg.webp" class="card-img-top" alt="KEF LSX II">
                <div class="card-body">
                    <h5 class="card-title">KEF LSX II</h5>
                    <p class="card-text">Power : 200W<br>Inputs : HDMI ARC, USB-C, optical<br>Outputs : Sub<br>Radio : Internet</p>
                        <a href="product.php" class="btn btn-primary">View Product</a>
                        <button type="button" class="btn btn-danger">Remove from Wishlist</button>
                    </div>
                </div>
            </div>
            <!-- Repeat the structure for more wishlist items -->

        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
