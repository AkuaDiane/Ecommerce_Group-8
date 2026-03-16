<?php
session_start();

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Basic session-based credential check
    if (
        isset($_SESSION['email']) && $_SESSION['email'] === $email &&
        isset($_SESSION['password']) && $_SESSION['password'] === $password
    ) {

        $_SESSION['message'] = "Login successful";
        header("Location: dashboard.php");
        exit();
    } else {
        $_SESSION['error'] = "Invalid email or password.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Lens & Frame Studio</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <div class="logo">
            <h1>Lens & Frame</h1>
        </div>
        <nav>
            <a href="index.html">Home</a>
            <a href="products.php">Products</a>
            <a href="register.php">Register</a>
            <a href="login.php" class="active">Login</a>
        </nav>
    </header>

    <main>
        <div class="auth-container">
            <h2>Welcome Back</h2>

            <?php if (isset($_SESSION['error'])): ?>
                <div class="message error">
                    <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    ?>
                </div>
            <?php endif; ?>

            <?php if (isset($_SESSION['message'])): ?>
                <div class="message success">
                    <?php
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                    ?>
                </div>
            <?php endif; ?>

            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" required>
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 10px;">Login to
                    Studio</button>
            </form>

            <p style="text-align: center; margin-top: 20px; font-size: 0.9rem; color: var(--text-muted);">
                Don't have an account? <a href="register.php"
                    style="color: var(--primary-orange); text-decoration: none; font-weight: 600;">Register here</a>
            </p>
        </div>
    </main>

    <footer>
        <div class="footer-bottom" style="margin-top: 0; border-top: none;">
            <p>&copy; 2026 Lens & Frame Studio. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>