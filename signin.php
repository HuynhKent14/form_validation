<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form id="signup">
        <label>Username</label>
        <input type="text" id="userName" pattern="[A-Za-z]+" ></input><br>
        <label>Email</label>
        <input type="email" id="userEmail" ></input><br>
        <label>Phone Number</label>
        <input type="number" id="userNumber" pattern="[0-9]+" maxlength="11" ></input><br>
        <label>Password</label>
        <input type="password" id="userPass" minlength="6" ></input><br>
        <span id="notice1"></span>
        <label>Confirm Password</label>
        <input type="password" id="userConfirmPass" minlength="6" ></input> <br>
        <span id="notice2"></span>
        <button type="submit">Submit</button> <br>
        <a href="">Already have an account?</a> <br>

    </form>
</body>

<script src="signin.js"></script>
</html>
