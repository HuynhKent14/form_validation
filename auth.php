<?php
require_once "database.php";

class Auth
{
    private $conn;
    public function __construct()
    {
        // Start session only if none exists
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Connect to database
        $this->conn = (new Database())->connect();
    }

    // LOGIN FUNCTION
    public function login($username, $password)
    {
        $stmt = $this->conn->prepare("SELECT * FROM accounts WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {

            $_SESSION['auth'] = true;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['level'] = $user['level'];


            return true;
        }

        return false;
    }

    // REGISTER FUNCTION
    public function register($email, $username, $password)
    {
        // Check if username already exists
        $stmt = $this->conn->prepare("SELECT * FROM accounts WHERE username = ?");
        $stmt->execute([$username]);

        if ($stmt->fetch()) {
            return "Username already taken";
        }

        // Hash password
        $hashed = password_hash($password, PASSWORD_DEFAULT);

        // Insert new user
        $stmt = $this->conn->prepare("INSERT INTO accounts (email, username, password, level) VALUES (?, ?, ?, 2)");
        $stmt->execute([$email, $username, $hashed]);

        return true;
    }



    // LOGOUT FUNCTION
    public function logout()
    {
        session_unset();
        session_destroy();
    }

    public function isLoggedIn()
    {
        return isset($_SESSION['auth']);
    }
}
