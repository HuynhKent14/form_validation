<?php
require_once "Auth.php";
$auth = new Auth();

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
  <title>Le Critique</title>
  <link rel="stylesheet" href="css/landing.css">
</head>

<body>

  <div class="upper-container">
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
          <li><a href="">Home</a></li>

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
  <div class="bottom-container">
    <div class="header">
      <div class="preview">
        <div class="stars">⭐⭐⭐⭐⭐</div>
        <div class="prev-title">
          <h1>Attack on Pekora</h1>
        </div>
        <div class="movie-info">
          <h3>Director: Kent Kaneki</h3>
          <h4>2023</h4>
          <a href="">go to reviews →</a>
        </div>
      </div>
      <div class="title">Le Critique</div>
    </div>
    <div class="movies">
      <a href="details.php?id=1">
        <div class="movie-card1"></div>
      </a>
      <a href="details.php?id=2">
        <div class="movie-card2"></div>
      </a>
      <a href="details.php?id=3">
        <div class="movie-card3"></div>
      </a>
      <a href="details.php?id=4">
        <div class="movie-card4"></div>
      </a>
      <a href="details.php?id=5">
        <div class="movie-card5"></div>
      </a>
    </div>
  </div>

</body>
<script src="javascript/landing.js"></script>

</html>