<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Contact Us</title>

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

    .contact-info p {
        margin: 10px 0;
    }

    .contact-info p:last-child {
        margin-bottom: 0;
    }

    form {
        margin-top: 20px;
    }

    form label {
        display: block;
        margin-bottom: 5px;
    }

    form input,
    form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    form button {
        padding: 10px 20px;
        border: none;
        background-color: #333;
        color: white;
        font-size: 1em;
        cursor: pointer;
    }

    form button:hover {
        background-color: #555;
    }

    form button:focus {
        outline: none;
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
            <h2>Contact Us</h2>
            <p>If you have any questions or inquiries, feel free to reach out to us using the contact information below.
            </p>

            <div class="contact-info">
                <p>Email: info@example.com</p>
                <p>Phone: 123-456-7890</p>
                <p>Address: 1234 Example St, City, Country</p>
            </div>

            <form>
                <h3>Contact Form</h3>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Your name">

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Your email">

                <label for="message">Message:</label>
                <textarea id="message" name="message" placeholder="Your message"></textarea>

                <button type="submit">Submit</button>
            </form>
        </section>
    </main>

    <footer class="container">
        <p>&copy; 2023 KEEBSOUT</p>
    </footer>
</body>

</html>