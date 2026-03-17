<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Gear | Lens & Frame Studio</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <div class="logo">
            <h1>Lens & Frame</h1>
        </div>
        <nav>
            <a href="index.html">Home</a>
            <a href="products.php" class="active">Products</a>
            <?php if (isset($_SESSION['email'])): ?>
                <a href="dashboard.php">Dashboard</a>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="register.php">Register</a>
                <a href="login.php">Login</a>
            <?php endif; ?>
        </nav>
    </header>

    <main>
        <section style="padding-top: 60px;">
            <h2 class="section-title">Professional Equipment</h2>

            <div class="product-grid">
                <!-- Mirrorless 4K Camera -->
                <div class='product-card'>
                    <div class='product-image'>
                        <img src='images/4kcamera.avif' alt='Mirrorless 4K Camera'>
                    </div>
                    <div class='product-info'>
                        <h3>Mirrorless 4K Camera</h3>
                        <p>High-resolution camera for studio portraits and video.</p>
                        <span class='product-price'>₵2,499.00</span>
                        <button class='btn btn-primary'>Add to Studio</button>
                    </div>
                </div>

                <!-- 85mm f/1.4 Lens -->
                <div class='product-card'>
                    <div class='product-image'>
                        <img src='images/lens.avif' alt='85mm f/1.4 Lens'>
                    </div>
                    <div class='product-info'>
                        <h3>85mm f/1.4 Lens</h3>
                        <p>Exceptional sharpness and beautiful bokeh.</p>
                        <span class='product-price'>₵1,199.00</span>
                        <button class='btn btn-primary'>Add to Studio</button>
                    </div>
                </div>

                <!-- Cinematic Drone -->
                <div class='product-card'>
                    <div class='product-image'>
                        <img src='images/drone.jpg' alt='Cinematic Drone'>
                    </div>
                    <div class='product-info'>
                        <h3>Cinematic Drone</h3>
                        <p>Capture stunning aerial videography.</p>
                        <span class='product-price'>₵1,599.00</span>
                        <button class='btn btn-primary'>Add to Studio</button>
                    </div>
                </div>

                <!-- Fluid Head Tripod -->
                <div class='product-card'>
                    <div class='product-image'>
                        <img src='images/tripod.jpg' alt='Fluid Head Tripod'>
                    </div>
                    <div class='product-info'>
                        <h3>Fluid Head Tripod</h3>
                        <p>Ultra-stable tripod for smooth video tracking.</p>
                        <span class='product-price'>₵299.50</span>
                        <button class='btn btn-primary'>Add to Studio</button>
                    </div>
                </div>

                <!-- LED Studio Light Kit -->
                <div class='product-card'>
                    <div class='product-image'>
                        <img src='images/lightkit.avif' alt='LED Studio Light Kit'>
                    </div>
                    <div class='product-info'>
                        <h3>LED Studio Light Kit</h3>
                        <p>Bi-color LED panels for professional lighting.</p>
                        <span class='product-price'>₵450.00</span>
                        <button class='btn btn-primary'>Add to Studio</button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-info">
                <h1>Lens & Frame</h1>
                <p>Your premium destination for professional photography and videography gear.</p>
            </div>
            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="products.php">Equipment</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 Lens & Frame Studio. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>