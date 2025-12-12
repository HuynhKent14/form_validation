<?php
require_once "Auth.php";
$auth = new Auth();

$error = "";

if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($auth->login($username, $password)) {
        header("Location: landing.php");
        exit;
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <form id="login" method="POST" action="">
        <div class="login-box">
            <h2>Login</h2>

            <?php if ($error): ?>
                <p style="color:red;"><?php echo $error; ?></p>
            <?php endif; ?>

            <label>Username</label>
            <input type="text" name="username" id="username" class="username" placeholder="Type your username" required><br>

            <label>Password</label>
            <input type="password" name="password" id="password" class="password" minlength="6" placeholder="Type your Password" required>
            <div class="check-container">
                <input type="checkbox" id="check-pass" class="check-pass" onclick="showPassword()">
                <label for="check-pass"> Show Password</label>
            </div>
            <br>

            <a class="visitor" href="index.php">Proceed As Visitor?</a>
            <br><br>

            <input type="submit" name="login" value="Submit"> <br>
            <a href="#" onclick="toggleForms(1)">Doesn't have an account?</a>
        </div>
    </form>
</body>

<script src="javascript/login.js"></script>

</html>