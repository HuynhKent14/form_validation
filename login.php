<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <form id="login">
        <div class="login-box">
            <h2>Login</h2>
            <label> Username</label>
            <input type="text" id="username" class="username" placeholder="Type your username"><br>

            <label> Password</label>
            <input type="password" id="password" class="password" placeholder="Type your Password">
            <span></span>
            <a href="">Forgot Your Password?</a>
            <input type="submit" value="Submit"> <br>
            <a onclick=toggleForms(1)>Doesn't have an account?</a>
        </div>       
    </form>
</body>

<script src="login.js"></script>
</html>