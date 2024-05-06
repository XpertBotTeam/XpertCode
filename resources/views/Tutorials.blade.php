<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XpertCode - Tutorials</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }


    /* Navigation Styles */
    .navbar {
        background-color: #343a40;
        padding: 20px 0;
        position: fixed;
        width: 100%;
        z-index: 1000;
    }

    .nav-container {
        padding: 0px 40px 0px 40px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .logo {
        font-size: 1.8em;
        color: #fff;
    }

    .nav-links {
        list-style: none;
        display: flex;
    }

    .nav-links li {
        margin-right: 20px;
    }

    .nav-links li a {
        color: #fff;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .nav-links li a:hover {
        color: #ffcc00;
    }

    /* Burger menu */
    .burger {
        display: none;
        cursor: pointer;
    }

    .burger div {
        width: 25px;
        height: 3px;
        background-color: #fff;
        margin: 5px;
        transition: all 0.3s ease;
    }

    @media screen and (max-width: 768px) {
        .nav-links {
            display: none;
            position: absolute;
            top: 80px;
            left: 0;
            width: 100%;
            background-color: #343a40;
            flex-direction: column;
            align-items: center;
        }

        .nav-links.active {
            display: flex;
        }

        .burger {
            display: block;
        }
    }

    /* Hero Section */
    .hero {
        background-image: url('https://source.unsplash.com/1600x900/?programming');
        background-size: cover;
        background-position: center;
        color: #fff;
        padding: 150px 0;
        text-align: center;
    }

    .hero-content {
        max-width: 600px;
        margin: 0 auto;
    }

    .hero h2 {
        font-size: 3em;
        margin-bottom: 20px;
    }

    .hero p {
        font-size: 1.2em;
        margin-bottom: 40px;
    }

    .btn {
        display: inline-block;
        padding: 10px 20px;
        font-size: 1.1em;
        background-color: #ffcc00;
        color: #343a40;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .btn:hover {
        background-color: #343a40;
        color: #fff;
    }

    /* Featured Tutorials Section */

    .featured-tutorials {
        background-color: #fff;
        padding: 50px 20px; /* Adjust padding for smaller screens */
    }

    .featured-tutorials h2 {
        text-align: center;
        margin-bottom: 40px;
    }

    .tutorial-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .tutorial {
        width: calc(33.333% - 20px);
        background-color: #f8f9fa;
        padding: 20px;
        margin-bottom: 40px;
        border-radius: 5px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .tutorial h3 {
        font-size: 1.5em;
        margin-bottom: 10px;
    }

    .tutorial p {
        color: #666;
        margin-bottom: 20px;
    }

    @media screen and (max-width: 768px) {
        .tutorial {
            width: calc(50% - 20px);
        }
    }

    /* Footer Section */
    footer {
        background-color: #343a40;
        color: #fff;
        padding: 20px 0;
        text-align: center;
    }

    /* Responsive Styles */
    @media screen and (max-width: 768px) {
        .nav-links {
            display: none;
            position: absolute;
            top: 80px;
            left: 0;
            width: 100%;
            background-color: #343a40;
            flex-direction: column;
            align-items: center;
        }

        .nav-links.active {
            display: flex;
        }

        .burger {
            display: block;
        }
    }
</style>
<body>
<header>
    <nav class="navbar">
        <div class="nav-container">
            <h1 class="logo">XpertCode</h1>
            <ul class="nav-links">
                <li><a href="/tutorials">Tutorials</a></li>
                <li><a href="#">Exercises</a></li>
                <li><a href="#">Account</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </div>
    </nav>
</header>
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h2>Learn to code from the best tutorials</h2>
            <p>Expand your coding skills with our comprehensive tutorials covering a wide range of topics.</p>
            <a href="#" class="btn btn-primary">Get Started</a>
        </div>
    </div>
</section>
<section class="featured-tutorials">
    <div class="container">
        <h2>Featured Tutorials</h2>
        <div class="tutorial-list">
            <div class="tutorial">
                <h3>Introduction to HTML</h3>
                <p>Learn the basics of HTML and how to create web pages.</p>
                <a href="#" class="btn btn-secondary">Start Tutorial</a>
            </div>
            <div class="tutorial">
                <h3>Introduction to CSS</h3>
                <p>Explore the fundamentals of CSS and enhance your web design skills.</p>
                <a href="#" class="btn btn-secondary">Start Tutorial</a>
            </div>
            <div class="tutorial">
                <h3>Introduction to JavaScript</h3>
                <p>Get started with JavaScript and add interactivity to your websites.</p>
                <a href="#" class="btn btn-secondary">Start Tutorial</a>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <p>&copy; 2024 Coding Tutorials</p>
    </div>
</footer>

<script>
    // JavaScript for the burger menu
    const burger = document.querySelector('.burger');
    const navLinks = document.querySelector('.nav-links');

    burger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });
</script>
</body>
</html>
