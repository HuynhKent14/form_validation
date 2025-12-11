<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signin.css">
    <title>Document</title>
</head>

<body>

    <form id="signup" class="signup-box">
        <h2>Sign Up</h2>
        <label> Username</label>
        <input type="text" id="userName" class="signin" placeholder="e.g. JohnDoe2">

        <label> Email</label>
        <input type="email" id="userEmail" class="signin" placeholder="e.g. username@gmail.com ">

        <label> Password</label>
        <input type="password" id="userPass" class="signin" minlength="6" placeholder="Minimum 6 characters">
        <span id="notice1"></span>

        <label> Confirm Password</label>
        <input type="password" id="userConfirmPass" class="signin" minlength="6" placeholder="Confirm Password">
        <span id="notice2"></span>

        <div class="check-container">
            <input type="checkbox" id="check-pass2" class="check-pass2" onclick="showPassword()">
            <label for="check-pass2"> Show Password</label>
        </div>

        <button type="submit" class="signup-button">Submit</button><br>
        <a class="login-link" onclick="toggleForms(2)">Already have an account?</a><br>

    </form>
</body>

<script src="javascript/signin.js"></script>

</html>