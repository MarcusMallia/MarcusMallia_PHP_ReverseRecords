
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product - Reverse Records</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- Product Details Section -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <!-- Placeholder for Product Image -->
                <img src="images\vsBk5FkASpxxcB9CsH2M3G-1200-80.jpg.webp" alt="KEF LS50 Wireless II" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2>KEF LS50 Wireless II</h2>
                <p class="lead">€2,289</p>
                <p>Power: 380W
Inputs: Optical, coaxial, 3.5mm, HDMI eARC
Outputs: Sub
Radio: Internet.</p>
<!-- Star Rating -->
<div class="star-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                <!-- Add more product details here -->

                <!-- Buttons for actions like add to cart or wishlist -->
                <button type="button" class="btn btn-primary">Add to Cart</button>
                <button type="button" class="btn btn-secondary">Add to Wishlist</button>
            </div>
        </div>
    </div>

    <!-- Reviews Section -->
    <div class="container mt-4">
        <h3>Customer Reviews</h3>
        <!-- Example Review -->
        <div class="review">
            <div class="star-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i> <!-- 4.5 Stars -->
            </div>
            <p>"Great product! Really loved the quality."</p>
            <p><small>– Reviewer Name</small></p>
        </div>
        <!-- Repeat for more static reviews -->

        <!-- Review Form (non-functional) -->
        <h4>Add a Review</h4>
        <form>
            <div class="star-rating">
                <!-- Clickable stars for visual effect (non-functional) -->
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <textarea class="form-control my-2" placeholder="Write your review here..."></textarea>
            <button type="submit" class="btn btn-primary">Submit Review</button>
        </form>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>