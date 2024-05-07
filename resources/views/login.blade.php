<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XpertCode - Login</title>
    <link rel="stylesheet" href="app.c">
</head>
<style>/* Global Styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    /* Login Page Styles */
    .login-container {
        width: 400px; /* Adjust the width as needed */
        padding: 40px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .login-form h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #343a40;
    }

    .input-group {
        margin-bottom: 20px;
    }

    .input-group label {
        display: block;
        margin-bottom: 5px;
        color: #666;
    }

    .input-group input {
        width: 100%;
        padding: 12px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .input-group input:focus {
        outline: none;
        border-color: #ffcc00;
        box-shadow: 0 0 5px rgba(255, 204, 0, 0.5);
    }

    button[type="submit"] {
        width: 100%;
        padding: 12px;
        font-size: 16px;
        color: #fff;
        background-color: #343a40;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
        background-color: #ffcc00;
    }

    .register-link {
        text-align: center;
        color: #666;
        margin-top: 15px;
    }

    .register-link a {
        color: #ffcc00;
        text-decoration: none;
    }

    .register-link a:hover {
        text-decoration: underline;
    }

</style>
<body>
<div class="login-container">
    <form class="login-form" action="{{route('login')}}" method="post">
        @csrf
        <h2>Login</h2>
        <br>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
    <div class="register-link">
        <p>Don't have an account? <a href="/register">Register</a></p>
    </div>
</div>
</body>
</html>
