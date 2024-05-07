<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XpertCode - Register</title>
    <link rel="stylesheet" href="app.css">
</head>

<body>
<div class="register-container">
    <form class="register-form" action="{{route('register')}}" method="post">
        @csrf
        <h2>Register</h2>
        <br>
        <div class="input-group">
            <label for="fullname">Full Name</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Register</button>
    </form>
    <div class="login-link">
        <p>Already have an account? <a href="/login">Login</a></p>
    </div>
</div>
</body>
</html>
