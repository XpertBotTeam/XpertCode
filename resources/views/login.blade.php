<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XpertCode - Login</title>
    <link rel="stylesheet" href="app.css">
</head>
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
