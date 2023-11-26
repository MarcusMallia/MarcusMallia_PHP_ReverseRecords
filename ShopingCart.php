<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - Reverse Records</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="content">

    <!-- Shopping Cart Section -->
    <div class="container mt-4">
        <h2>Your Shopping Cart</h2>
        <div class="row">
            <!-- Shopping Cart Item 1 -->
            <div class="col-md-12 mb-4">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                        <img src="images\fyC6VbPKYK8jJAyPwJXG4S-1200-80.jpg.webp" class="card-img-top" alt="KEF LSX II">
                        </div>
                        <div class="col-md-8">
                        
                <div class="card-body">
                    <h5 class="card-title">KEF LSX II</h5>
                    <p class="card-text">Power : 200W<br>Inputs : HDMI ARC, USB-C, optical<br>Outputs : Sub<br>Radio : Internet</p>
                                
                                <!-- Product Quantity Modification -->
                                <div class="quantity-controls">
                                    <button class="btn btn-secondary btn-sm">-</button>
                                    <input type="text" value="1" class="quantity-input">
                                    <button class="btn btn-secondary btn-sm">+</button>
                                </div>

                                <button type="button" class="btn btn-danger">Remove from Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Repeat for other shopping cart items -->

        </div>

        <!-- Proceed to Checkout -->
        <div class="my-4">
    <a href="Checkout.php" class="btn btn-success">Proceed to Checkout</a>
</div>
    </div>
    </div>
    <?php include 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
