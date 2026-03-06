<?php
session_start();

if (!isset($_SESSION['email'])) {
    $_SESSION['error'] = "Please login to access the dashboard.";
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Lens & Frame Studio</title>
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
            <a href="dashboard.php" class="active">Dashboard</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>

    <main>
        <div class="profile-container">
            <img src="<?php echo $_SESSION['profile_image']; ?>" alt="Profile" class="profile-img-large">


            <h2>Welcome, <?php echo $_SESSION['fullname']; ?></h2>
            <p style="color: var(--text-muted); margin-bottom: 20px;">
                <?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>
            </p>

            <div class="group-section">
                <h2>Group Members</h2>
                <div class="custom-table-container">
                    <table class="custom-table">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Student No.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="sn-cell">1</td>
                                <td>Anyindana Gifty Akoigma</td>
                                <td><span class="student-no">052541360421</span></td>
                            </tr>
                            <tr>
                                <td class="sn-cell">2</td>
                                <td>Appiah Diana Princess</td>
                                <td><span class="student-no">052441360338</span></td>
                            </tr>
                            <tr>
                                <td class="sn-cell">3</td>
                                <td>Nyame Kofi Stephen</td>
                                <td><span class="student-no">052441360243</span></td>
                            </tr>
                            <tr>
                                <td class="sn-cell">4</td>
                                <td>Amaning Emmanuel</td>
                                <td><span class="student-no">052341360099</span></td>
                            </tr>
                            <tr>
                                <td class="sn-cell">5</td>
                                <td>Yussif Jamal-Deen</td>
                                <td><span class="student-no">052441360114</span></td>
                            </tr>
                            <tr>
                                <td class="sn-cell">6</td>
                                <td>Brobbey Lloyd Justice</td>
                                <td><span class="student-no">052441360037</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div style="display: flex; gap: 15px; justify-content: center; margin-top: 30px;">
                <a href="products.php" class="btn btn-primary">Browse Gear</a>
                <a href="logout.php" class="btn btn-outline" style="border-color: #dc3545; color: #dc3545;">Logout</a>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-bottom" style="margin-top: 0; border-top: none;">
            <p>&copy; 2026 Lens & Frame Studio. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>