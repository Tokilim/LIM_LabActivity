<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Product Page</title>

    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
    }

    .container {
        width: 80%;
        margin: 0 auto;
    }

    header {
        background-color: #333;
        color: white;
        padding: 20px 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    nav ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    nav li {
        display: inline;
        margin-left: 20px;
    }

    nav a {
        color: white;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    nav a:hover {
        color: #f0f0f0;
    }

    nav .active a {
        color: #f0f0f0;
        border-bottom: 2px solid #f0f0f0;
    }

    main section {
        padding: 20px;
        background-color: white;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .product-list {
        list-style: none;
        padding: 0;
        display: flex;
        flex-wrap: wrap;
    }

    .product-list li {
        width: 30%;
        margin: 15px;
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #fff;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .product-list li img {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .product-list li h3 {
        font-size: 1.2em;
        margin: 0 0 10px;
    }

    .product-list li p {
        font-size: 0.9em;
        color: #555;
    }

    .product-list li button {
        display: block;
        margin-top: 10px;
        padding: 10px 20px;
        border: none;
        background-color: #333;
        color: white;
        font-size: 0.9em;
        cursor: pointer;
    }

    .product-list li button:hover {
        background-color: #555;
    }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <h1>KEEBSOUT</h1>
            <nav>
                <ul>
                    <li><a href="welcome">Home</a></li>
                    <li><a href="about">About Us</a></li>
                    <li><a href="contact">Contact Us</a></li>
                    <li><a href="product">Product Page</a></li>
                    <li><a href="signin">Sign In Page</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container">
        <section>
            <h2>Our Products</h2>
            <ul class="product-list">
                <li>
                    <img src="product1.jpg" alt="Product 1">
                    <h3>Product 1</h3>
                    <p>Description of Product 1.</p>
                    <button>Add to Cart</button>
                </li>
                <li>
                    <img src="product2.jpg" alt="Product 2">
                    <h3>Product 2</h3>
                    <p>Description of Product 2.</p>
                    <button>Add to Cart</button>
                </li>
                <li>
                    <img src="product3.jpg" alt="Product 3">
                    <h3>Product 3</h3>
                    <p>Description of Product 3.</p>
                    <button>Add to Cart</button>
                </li>
            </ul>
        </section>
    </main>

    <footer class="container">
        <p>&copy; 2023 KEEBSOUT</p>
    </footer>
</body>

</html>