<?php include 'header.php'; ?>
<!-- Login form -->
<div class="container">
    <h2>Login</h2>
    <form action="process_login.php" method="post">
        <!-- Form fields for email and password -->
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php include 'footer.php'; ?>
