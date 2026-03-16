<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // =====================
    // 1. COLLECT FORM DATA
    // =====================
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $profile_img = $_FILES['profile_image'];


    // =====================
    // 2. VALIDATION (if–elseif)
    // =====================
    if (empty($fullname) || empty($email) || empty($password)) {
        header("Location: register.php?error=emptyfields");
        exit();
    } elseif (strlen($password) < 6) {
        header("Location: register.php?error=passwordtooshort");
        exit();
    }

    // =====================
    // 3. VALIDATE PROFILE IMAGE
    // =====================
    $allowedImages = ['image/jpeg', 'image/png'];

    if ($profile_img['error'] !== 0) {
        header("Location: register.php?error=uploaderror");
        exit();
    }

    if (!in_array($profile_img['type'], $allowedImages)) {
        header("Location: register.php?error=invalidtype");
        exit();
    }

    // =====================
    // 5. MOVE FILES
    // =====================
    $profileName = time() . "_" . $profile_img['name'];
    $profilePath = "uploads/" . $profileName;

    if (!is_dir('uploads')) {
        mkdir('uploads', 0777, true);
    }

    move_uploaded_file($profile_img['tmp_name'], $profilePath);


    // =====================
    // 6. STORE COOKIE
    // =====================
    setcookie("fullname", $fullname, time() + 3600, "/");

    // =====================
    // 7. STORE SESSION DATA
    // =====================
    $_SESSION['fullname'] = $fullname;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['profile_image'] = $profilePath;
    $_SESSION['message'] = "Registration successful";

    header("Location: login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join the Studio | Lens & Frame Studio</title>
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
            <a href="register.php" class="active">Register</a>
            <a href="login.php">Login</a>
        </nav>
    </header>

    <main>
        <div class="auth-container">
            <h2>Create Account</h2>

            <form action="register.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" name="fullname" id="fullname" placeholder="Princess Diana" required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" placeholder="pdiana@example.com" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" minlength="6" placeholder="Min. 6 characters"
                        required>
                </div>

                <div class="form-group">
                    <label for="profile_image">Profile Image</label>
                    <input type="file" name="profile_image" id="profile_image" accept="image/*" required
                        style="padding: 8px;">
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 10px;">Join the
                    Studio</button>
            </form>

            <p style="text-align: center; margin-top: 20px; font-size: 0.9rem; color: var(--text-muted);">
                Already have an account? <a href="login.php"
                    style="color: var(--primary-orange); text-decoration: none; font-weight: 600;">Login here</a>
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