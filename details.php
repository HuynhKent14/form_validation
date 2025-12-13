<?php
require_once "Auth.php";
$auth = new Auth();
$conn = (new Database())->connect();

// Admin, Guest, or logged in detector
$isGuest = isset($_SESSION['guest']) && $_SESSION['guest'] === true;
$username = $isGuest ? 'Guest' : ($_SESSION['username'] ?? '');
$isLoggedIn = $auth->isLoggedIn();
$isAdmin = $isLoggedIn && isset($_SESSION['level']) && $_SESSION['level'] == 1;

// Get movie ID
if (!isset($_GET['id'])) {
  exit("Movie not found");
}
$movieId = (int) $_GET['id'];

// Fetch movie details
$stmt = $conn->prepare("SELECT * FROM moviedetails WHERE id = ?");
$stmt->execute([$movieId]);
$movie = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$movie) {
  exit("Movie not found");
}

// Review table name
$reviewTable = "movie{$movieId}reviews";

// Handle comment submission
if (!$isGuest && isset($_POST['comment'])) {
  $comment = trim($_POST['comment']);
  if ($comment !== '') {
    $comment = substr($comment, 0, 255); // limit to 255 characters

    $stmt = $conn->prepare("INSERT INTO {$reviewTable} (username, review) VALUES (?, ?)");
    $stmt->execute([$username, $comment]);

    // reload page to show the new comment
    header("Location: details.php?id={$movieId}");
    exit;
  }
}

// Fetch reviews
$stmt = $conn->prepare("SELECT * FROM {$reviewTable} ORDER BY id ASC");
$stmt->execute();
$reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie Details</title>
  <link rel="stylesheet" href="css/Details.css">
</head>

<body>

  <div class="header">
    <div class="topCon">
      <div class="upperCon">
        <div class="siteTitle">Le Critique </div>

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
      </div>


      <div class="movieDetails">
        <div class="movieImage">
          <img src="images/movie<?= $movieId ?>.jpg" alt="">
        </div>

        <div class="movieInfo">
          <img class="ratings" src="images/starImage.png" alt="">
          <div class="movieTitle"><?= htmlspecialchars($movie['title']) ?></div>
          <div class="movieDirector">
            <span class="directorLabel">Director:</span>
            <span class="movieDirector"><?= htmlspecialchars($movie['director']) ?></span>
          </div>

          <div class="yearReleased"><?= $movie['year'] ?></div>

          <div class="synopsisSec">
            <h2>Synopsis</h2>
            <p class="synopsisPar">
              <?= htmlspecialchars($movie['synopsis']) ?>
            </p>
          </div>
        </div>
      </div>

      <hr class="separator">

      <?php if (!$isGuest): ?>
        <div class="commentSec">
          <form method="POST" id="commentForm">
            <div class="commentBox">
              <input type="text" name="comment" maxlength="255" placeholder="Write a comment" required>
            </div>
            <button class="commentButton" type="submit">
              <img class="commentIcon" src="images/commentIcon.png" alt="Submit Comment">
            </button>
          </form>
        </div>
      <?php endif; ?>


      <!-- review table -->
      <?php foreach ($reviews as $review): ?>
        <div class="userComment">
          <img class="userPfp" src="images/userPfp.jpg" alt="">
          <div class="commentDetails">
            <div class="userName">
              <?= htmlspecialchars($review['username'], ENT_QUOTES, 'UTF-8') ?>
            </div>
            <p class="commentText">
              <?= htmlspecialchars($review['review'], ENT_QUOTES, 'UTF-8') ?>
            </p>
          </div>
        </div>
      <?php endforeach; ?>
      <!-- review table end-->
    </div>
  </div>
  </div>

</body>
<script src="javascript/landing.js"></script>

</html>