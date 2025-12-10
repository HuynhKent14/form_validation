<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <form id="login">
        <div class="login-box">
            <h2>Login</h2>
            <label> Username</label>
            <input type="text" id="username" class="username" placeholder="Type your username"><br>

            <label> Password</label>
            <input type="password" id="password" class="password" minlength="6" placeholder="Type your Password">
            <div class="check-container">
                <input type="checkbox" id="check-pass" class="check-pass" onclick="showPassword()">
                <label for="check-pass"> Show Password</label>
            </div>
            <br>
            <span></span>
            <a href="">Forgot Your Password?</a>
            <input type="submit" value="Submit"> <br>
            <a onclick=toggleForms(1)>Doesn't have an account?</a>
        </div>
    </form>
</body>

<script src="javascript/login.js"></script>

</html>