<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Reverse Records</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- Checkout Section -->
    <div class="container mt-4">
        <h2>Checkout</h2>

        <!-- Order Summary -->
        <div class="card mb-4">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="images/fyC6VbPKYK8jJAyPwJXG4S-1200-80.jpg.webp" class="card-img" alt="KEF LSX II">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">KEF LSX II</h5>
                        <p class="card-text">Power : 200W<br>Inputs : HDMI ARC, USB-C, optical<br>Outputs : Sub<br>Radio : Internet</p>
                        <!-- Additional product details -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Shipping and Payment Information Form -->
        <form action="process_checkout.php" method="post">
            <!-- Shipping Details -->
            <h4>Shipping Details</h4>
            <div class="form-group">
                <label for="shipping_name">Name</label>
                <input type="text" class="form-control" id="shipping_name" name="shipping_name" required>
            </div>
            <div class="form-group">
                <label for="shipping_address">Address</label>
                <input type="text" class="form-control" id="shipping_address" name="shipping_address" required>
            </div>
            <!-- Additional shipping fields as necessary -->

            <!-- Payment Information -->
            <h4>Payment Information</h4>
            <!-- Add payment fields -->
           
            <button type="submit" class="btn btn-primary">Place Order</button>
        </form>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
