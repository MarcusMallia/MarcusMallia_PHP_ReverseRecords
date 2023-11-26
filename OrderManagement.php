<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Management - Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="content">
    <!-- Order Management Section -->
    <div class="container mt-4">
        <h2>Order Management</h2>

        <!-- Form for Creating or Editing Orders -->
        <form action="manage_order.php" method="post">
            <div class="form-group">
                <label for="order_id">Order ID</label>
                <input type="text" class="form-control" id="order_id" name="order_id">
            </div>
            <div class="form-group">
                <label for="customer_id">Customer ID</label>
                <input type="text" class="form-control" id="customer_id" name="customer_id">
            </div>
            <div class="form-group">
                <label for="order_details">Order Details</label>
                <textarea class="form-control" id="order_details" name="order_details"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save Order</button>
        </form>

        <!-- Order List with Edit/Cancel Options -->
        <h3 class="mt-4">Existing Orders</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer ID</th>
                    <th>Details</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example Order Row -->
                <tr>
                    <td>12345</td>
                    <td>1001</td>
                    <td>Product Name, Quantity, Price</td>
                    <td>
                        <button class="btn btn-secondary btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Cancel</button>
                    </td>
                </tr>
                <!-- Repeat for other orders -->
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
