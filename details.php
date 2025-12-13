<?php
require_once "database.php";

$conn = (new Database())->connect();

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

// Fetch reviews
$reviewTable = "movie{$movieId}reviews";
$reviews = $conn->query("SELECT * FROM $reviewTable")->fetchAll(PDO::FETCH_ASSOC);
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
        <img class="dashIcon" src="dashIcon.png" alt="">
      </div>


      <div class="movieDetails">
        <div class="movieImage">
          <img src="images/movieImage.jpg" alt="">
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

      <div class="commentSec">
        <div class="commentBox">
          <input type="text" placeholder="Write a comment">
        </div>
        <img class="commentIcon" src="images/commentIcon.png" alt="">
      </div>

      <!-- REVIEWS START HERE -->
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
      <!-- REVIEWS END HERE -->
    </div>
  </div>
  </div>

</body>

</html>