<?php
require_once "Auth.php";
require_once "database.php";

$auth = new Auth();

$conn = (new Database())->connect();

// fetch accounts
$stmt = $conn->query("SELECT id, email, username, level FROM accounts");
$accounts = $stmt->fetchAll(PDO::FETCH_ASSOC);

/* detect states */
$isGuest = isset($_SESSION['guest']) && $_SESSION['guest'] === true;
$isLoggedIn = $auth->isLoggedIn();
$isAdmin = $isLoggedIn && isset($_SESSION['level']) && $_SESSION['level'] == 1;

/* username display */
$username = $isGuest
  ? 'Guest'
  : ($_SESSION['username'] ?? '');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="css/admin.css">
</head>

<body>
  <header>
    <h1>Le Critique</h1>
    <div class="menu-container">
      <button onclick="toggleOverlay()"></button>
      <!--Overlay for menu-->
      <div class="overlay">
      <span class="closebtn" onclick="toggleExit()">x</span>
      <div class="profile">
        <img src="images/d.jpg">
        <h4><?= htmlspecialchars($username ?: 'Guest', ENT_QUOTES, 'UTF-8') ?></h4>

      </div>
      <hr style="color:red; width:60%;">
      <div class="options">
        <ul>
          <li><a href="landing.php">Home</a></li>

          <!-- if admin -->
          <?php if ($isAdmin): ?>
            <li><a href="admin.php">Dashboard</a></li>
          <?php endif; ?>

          <!-- guest or logged in -->
          <?php if ($isGuest || !$isLoggedIn): ?>
            <li><a href="index.php">Sign In</a></li>
          <?php else: ?>
            <li><a href="logout.php" style="color:rgb(128, 32, 32);">Log Out</a></li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
    </div>
  </header>
  <hr style="width:90%;">
  <div class="dashboard">
    <h1 class="dashboard-title">Account List</h1>
  </div>
  <table class="account-table">
    <th>
      <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Username</th>
        <th>Access Level</th>
      </tr>
    </th>
    <tb>
      <?php foreach ($accounts as $acc): ?>
        <tr>
          <td><?= $acc['id'] ?></td>
          <td><?= $acc['email'] ?></td>
          <td><?= $acc['username'] ?></td>
          <td>
            <?= $acc['level'] == 1 ? 'Admin' : 'User' ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </tb>
  </table>

</body>
<script src="javascript/landing.js"></script>

</html>