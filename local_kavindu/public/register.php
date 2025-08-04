<?php include '../includes/header.php'; ?>
<div class="container mt-5">
    <h2>Register</h2>
    <form method="POST" action="../controllers/AuthController.php?action=register">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group mt-2">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group mt-2">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success mt-3">Register</button>
        <p class="mt-2">Already have an account? <a href="login.php">Login</a></p>
    </form>
</div>
<?php include '../includes/footer.php'; ?>