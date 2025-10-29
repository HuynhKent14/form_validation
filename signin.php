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
        <label> Username</label>
        <input type="text" id="userName" class="signin" pattern="[A-Za-z]+" placeholder="e.g. JohnDoe">

        <label> Email</label>
        <input type="email" id="userEmail" class="signin" placeholder="e.g. username@gmail.com ">

        <label> Phone Number</label>
        <input type="tel" id="userNumber" class="signin" pattern="[0-9]+" placeholder="e.g. 09xxxxxxxxx">

        <label> Password</label>
        <input type="password" id="userPass" class="signin" placeholder="Minimum 6 characters">
        <span id="notice1"></span>

        <label> Confirm Password</label>
        <input type="password" id="userConfirmPass" class="signin" placeholder="Confirm Password">
        <span id="notice2"></span>

        <button type="submit" class="signup-button">Submit</button><br>
        <a class="login-link" onclick="toggleForms(2)">Already have an account?</a><br>

    </form>
</body>

<script src="signin.js"></script>
</html>