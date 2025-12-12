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
          <h4>Usada Pekora</h4>

        </div>
        <hr style="color:red; width:60%;">
        <div class="options">
          <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Dashboard</a></li>
            <li><a href="" style="color:rgb(128, 32, 32);">Log Out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <hr style="width:90%;">
  <div class="dashboard">
    <h1 class="dashboard-title">Account List</h1>
  </div>
</body>
<script src="javascript/landing.js"></script>

</html>