<?php
session_start();
$authenticated = false;
if (isset($_SESSION['email'])) {
    $authenticated = true;
}
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
  <title>Search Restaurants - Tastebuds</title>
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

  <header class="header section" data-header>
    <div class="container">

      <a href="index.php" class="logo">
        <img src="./picture/logo.svg" width="100" height="40" alt="Tastebuds logo">
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

        <li class="navbar-item">
            <a href="index.php" class="navbar-link hover:underline" data-nav-link>Home</a>
        </li>

        <li class="navbar-item">
            <a href="recent-post.php" class="navbar-link hover:underline" data-nav-link>Recent Post</a>
        </li>

        </ul>
      </nav>

        <div class="wrapper">
                 <a href="search.php" class="search-btn" aria-label="search">
                    <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
                    <span class="span">Search</span>
                </a>
                <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
                    <span class="span one"></span>
                    <span class="span two"></span>
                    <span class="span three"></span>
                </button>

        <?php
        if ($authenticated) {
        ?>

        <li class="navbar-item dropdown">
            <a href="#" class="navbar-link hover:underline" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?= htmlspecialchars($_SESSION['first_name']) ?>
            </a>
        <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/profile.php">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a href="/logout.php" class="dropdown-item" >Logout</a></li>
        </ul>
        </li>
            
        <?php
        } else {
        ?>
        <a href="./loginpage.php" class="btn">Log in</a>
        <a href="./register.php" class="btn">Register</a>
        <?php
        }   
        ?>
      </div>
    </div>
  </header>

  <!-- Search Section -->
  <section class="section search" aria-label="search restaurants">
      <div class="container">
          <h2 class="h2 section-title">Search for Restaurants</h2>
          <form id="searchForm" class="search-form" method="GET" action="search-results.php">
              <input type="text" id="searchInput" name="search" placeholder="e.g. Lazy Betty, Gunshow" class="search-field">
              <button type="submit" class="btn">Search</button>
          </form>
      </div>
  </section>

  <!-- Categories Section -->
  <section class="section categories" aria-label="categories">
      <div class="container">
          <h2 class="h2 section-title">Categories</h2>
          <ul class="category-list">
              <li><button class="category-item" data-category="american">American</button></li>
              <li><button class="category-item" data-category="mexican">Mexican</button></li>
              <li><button class="category-item" data-category="asian">Asian</button></li>
              <li><button class="category-item" data-category="indian">Indian</button></li>
              <li><button class="category-item" data-category="vegan">Vegan</button></li>
			  
          </ul>
      </div>
  </section>

  <!-- Search Results Section -->
  <section class="section search-results" aria-label="search results">
      <div class="container">
          <h2 class="h2 section-title">Search Results</h2>
          <ul class="results-list" id="resultsList">
              <!-- Dynamic search results will be inserted here -->
          </ul>
      </div>
  </section>

  <script src="script.js" defer></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
