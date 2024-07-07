<?php
session_start();
$authenticated = false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Tastebuds - Hey, we’re Tastebuds. See our thoughts, stories and restaurants.</title>
  <meta name="title" content="Tastebuds - Hey, we’re Tastebuds. See our thoughts, stories and restaurants.">
  <meta name="description" content="This is a restaurant review blog.">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./picture/logo.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>

<body>

  <!-- 
    - #HEADER
  -->

  <header class="header">
    <div class="container">

      <a href="#" class="logo">
        <img src="./picture/logo.svg" width="100" height="40" alt="Tastebuds logo">
      </a>

      <nav class="navbar">
        <ul class="navbar-list">
          <li class="navbar-item">
            <a href="index.php" class="navbar-link">Home</a>
          </li>
          <li class="navbar-item">
            <a href="index.php" class="navbar-link">Recent Post</a>
          </li>
          <li class="navbar-item">
            <a href="search.html" class="navbar-link">Search</a>
          </li>

          <?php if ($authenticated): ?>
            <li class="navbar-item dropdown">
              <a href="#" class="navbar-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Admin</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/profile.php">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/logout.php">Logout</a></li>
              </ul>
            </li>
          <?php else: ?>
            <li class="navbar-item">
              <a href="./loginpage.php" class="navbar-link">Log in</a>
            </li>
            <li class="navbar-item">
              <a href="./register.php" class="navbar-link">Register</a>
            </li>
          <?php endif; ?>
        </ul>
      </nav>

    </div>
  </header>

</body>

</html>
