<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signin.css">
    <title>Document</title>
</head>
<body>

    <form id="signup" class="signup-box">
         <h2>Sign Up</h2>

        <label>Username</label>
        <input type="text" id="userName" class="signin" pattern="[A-Za-z]+"><br>

        <label>Email</label>
        <input type="email" id="userEmail" class="signin"><br>

        <label>Phone Number</label>
        <input type="number" id="userNumber" class="signin" pattern="[0-9]+" maxlength="11"><br>

        <label>Password</label>
        <input type="password" id="userPass" class="signin" minlength="6"><br>

        <span id="notice1"></span>

        <label>Confirm Password</label>
        <input type="password" id="userConfirmPass" class="signin" minlength="6"><br>

        <span id="notice2"></span>

        <button type="submit" class="signup-button">Submit</button><br>

        <a href="" class="login-link">Already have an account?</a><br>

    </form>
</body>

<script src="signin.js"></script>
</html>