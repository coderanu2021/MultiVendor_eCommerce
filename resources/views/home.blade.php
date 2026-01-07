<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MultiVendor Marketplace</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #f5f6f8;
            color: #333;
        }

        /* Header */
        header {
            background: #111827;
            color: #fff;
            padding: 15px 0;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
        }

        header .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header a {
            color: #fff;
            text-decoration: none;
            margin-left: 15px;
            font-size: 14px;
        }

        /* Hero */
        .hero {
            background: linear-gradient(120deg, #4f46e5, #6366f1);
            color: #fff;
            padding: 80px 0;
        }

        .hero h1 {
            font-size: 42px;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 18px;
            max-width: 600px;
        }

        .hero button {
            margin-top: 25px;
            padding: 12px 25px;
            border: none;
            background: #fff;
            color: #4f46e5;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Section */
        section {
            padding: 60px 0;
        }

        h2 {
            margin-bottom: 30px;
        }

        /* Categories */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .card {
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            text-align: center;
        }

        .card span {
            font-size: 40px;
        }

        /* Products */
        .product img {
            width: 100%;
            height: 160px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .price {
            color: #4f46e5;
            font-weight: bold;
        }

        /* Vendors */
        .vendor {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .vendor-icon {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
        }

        /* Footer */
        footer {
            background: #111827;
            color: #9ca3af;
            text-align: center;
            padding: 20px 0;
            font-size: 14px;
        }
    </style>
</head>
<body>

<!-- Header -->
<header>
    <div class="container nav">
        <h2>MarketPlace</h2>
        <nav>
            <a href="#">Home</a>
            <a href="#">Shop</a>
            <a href="#">Vendors</a>
            <a href="#">Login</a>
        </nav>
    </div>
</header>

<!-- Hero -->
<div class="hero">
    <div class="container">
        <h1>Discover Products from Trusted Vendors</h1>
        <p>Buy from multiple vendors in one place. Quality products, secure payments, fast delivery.</p>
        <button>Start Shopping</button>
    </div>
</div>

<!-- Categories -->
<section>
    <div class="container">
        <h2>Shop by Category</h2>
        <div class="grid">
            <div class="card"><span>📱</span><p>Electronics</p></div>
            <div class="card"><span>👗</span><p>Fashion</p></div>
            <div class="card"><span>🏠</span><p>Home</p></div>
            <div class="card"><span>⚽</span><p>Sports</p></div>
        </div>
    </div>
</section>

<!-- Products -->
<section style="background:#fff;">
    <div class="container">
        <h2>Trending Products</h2>
        <div class="grid">
            <div class="card product">
                <img src="https://via.placeholder.com/300x200" alt="">
                <h4>Wireless Headphones</h4>
                <p class="price">$99</p>
            </div>
            <div class="card product">
                <img src="https://via.placeholder.com/300x200" alt="">
                <h4>Smart Watch</h4>
                <p class="price">$149</p>
            </div>
            <div class="card product">
                <img src="https://via.placeholder.com/300x200" alt="">
                <h4>Running Shoes</h4>
                <p class="price">$79</p>
            </div>
            <div class="card product">
                <img src="https://via.placeholder.com/300x200" alt="">
                <h4>Backpack</h4>
                <p class="price">$45</p>
            </div>
        </div>
    </div>
</section>

<!-- Vendors -->
<section>
    <div class="container">
        <h2>Top Vendors</h2>
        <div class="grid">
            <div class="card vendor">
                <div class="vendor-icon">🏪</div>
                <div>
                    <strong>Tech Store</strong><br>
                    <small>Electronics</small>
                </div>
            </div>
            <div class="card vendor">
                <div class="vendor-icon">👗</div>
                <div>
                    <strong>Fashion Hub</strong><br>
                    <small>Clothing</small>
                </div>
            </div>
            <div class="card vendor">
                <div class="vendor-icon">🏠</div>
                <div>
                    <strong>Home Decor</strong><br>
                    <small>Furniture</small>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    © 2026 MultiVendor Marketplace. All rights reserved.
</footer>

</body>
</html>
