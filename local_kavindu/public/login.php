<?php include '../includes/header.php'; ?>


<div class="container mt-5">
    <h2>Login</h2>

    <?php if (isset($_GET['error']) && $_GET['error'] == 'invalid_credentials'): ?>
        <div style="color: red; margin-bottom: 10px;">
            You entered invalid credentials.
        </div>
    <?php endif; ?>


    <form method="POST" action="../controllers/AuthController.php?action=login">
        <div class="form-group">
            <label>Email address</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group mt-2">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Login</button>
        <p class="mt-2">No account? <a href="register.php">Register</a></p>
    </form>
</div>


<!--<?php include '../includes/footer.php'; ?> -->