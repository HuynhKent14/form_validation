<?php
require_once "Auth.php";
$auth = new Auth();

$message = "";

if (isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm  = trim($_POST['confirm']);

    if ($password !== $confirm) {
        $message = "Passwords do not match!";
    } else {
        $result = $auth->register($email, $username, $password);

        if ($result === true) {
            header("Location: index.php");
            exit;
        } else {
            $message = $result;  // e.g. "Username already taken"
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signin.css">
    <title>Document</title>
</head>

<body>

    <form id="signup" class="signup-box" method="POST" action="">
        <h2>Sign Up</h2>

        <?php if ($message): ?>
            <p style="color:red;"><?php echo htmlspecialchars($message); ?></p>
        <?php endif; ?>

        <label>Username</label>
        <input type="text" name="username" id="userName" class="signin" placeholder="e.g. JohnDoe2" required>

        <label>Email</label>
        <input type="email" name="email" id="userEmail" class="signin" placeholder="e.g. username@gmail.com" required>

        <label>Password</label>
        <input type="password" name="password" id="userPass" class="signin" minlength="6" placeholder="Minimum 6 characters" required>
        <span id="notice1"></span>

        <label>Confirm Password</label>
        <input type="password" name="confirm" id="userConfirmPass" class="signin" minlength="6" placeholder="Confirm Password" required>
        <span id="notice2"></span>

        <div class="check-container">
            <input type="checkbox" id="check-pass2" class="check-pass2" onclick="showPassword()">
            <label for="check-pass2"> Show Password</label>
        </div>

        <button type="submit" name="register" class="signup-button">Submit</button><br>
        <a class="login-link" onclick="toggleForms(2)">Already have an account?</a><br>

    </form>
</body>

<script src="javascript/signin.js"></script>

</html>