<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Home</title>

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

    main section {
        padding: 20px;
        background-color: white;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    footer {
        background-color: #333;
        color: white;
        padding: 10px 0;
        text-align: center;
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
            <h2>Welcome to KEEBSOUT</h2>
            <p>Your main content goes here.</p>
        </section>
    </main>

    <footer class="container">
        <p>&copy; 2023 KEEBSOUT</p>
    </footer>
</body>

</html>