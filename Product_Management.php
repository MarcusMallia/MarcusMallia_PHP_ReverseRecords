<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management - Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="content">

    <!-- Product Management Section -->
    <div class="container mt-4">
        <h2>Product Management</h2>

        <!-- Form for Adding or Editing Products -->
        <form action="manage_product.php" method="post">
            <div class="form-group">
                <label for="product_id">Product ID</label>
                <input type="text" class="form-control" id="product_id" name="product_id">
            </div>
            <div class="form-group">
                <label for="product_name">Product Name</label>
                <input type="text" class="form-control" id="product_name" name="product_name">
            </div>
            <div class="form-group">
                <label for="product_description">Description</label>
                <textarea class="form-control" id="product_description" name="product_description"></textarea>
            </div>
            <div class="form-group">
                <label for="product_price">Price</label>
                <input type="text" class="form-control" id="product_price" name="product_price">
            </div>
            <button type="submit" class="btn btn-primary">Save Product</button>
        </form>

        <!-- Product List with Edit/Delete Options -->
        <h3 class="mt-4">Existing Products</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example Product Row -->
                <tr>
                    <td>1</td>
                    <td>Product Name</td>
                    <td>Product Description</td>
                    <td>$Price</td>
                    <td>
                        <button class="btn btn-secondary btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <!-- Repeat for other products -->
            </tbody>
        </table>
    </div>
    </div>
    <?php include 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
