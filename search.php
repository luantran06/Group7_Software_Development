<?php
session_start();
$authenticated = false;
if (isset($_SESSION['email'])) {
    $authenticated = true;
}

// Include the database connection settings
include 'db.php';

// Implement search functionality
$search_results = [];
if (isset($_GET['search'])) {
    $search_term = $conn->real_escape_string($_GET['search']);
    $sql = "SELECT * FROM restaurants WHERE name LIKE '%$search_term%' OR category LIKE '%$search_term%'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $search_results[] = $row;
        }
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Restaurants - Tastebuds</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <!-- Header -->
    <header class="header section" data-header>
        <div class="container">
            <a href="index.php" class="logo">
                <img src="./picture/logo.svg" width="100" height="40" alt="Tastebuds logo">
            </a>
            <nav class="navbar" data-navbar>
                <ul class="navbar-list">
                    <li class="navbar-item"><a href="index.php" class="navbar-link hover:underline" data-nav-link>Home</a></li>
                    <li class="navbar-item"><a href="recent-post.php" class="navbar-link hover:underline" data-nav-link>Recent Post</a></li>
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
                <?php if ($authenticated): ?>
                    <li class="navbar-item dropdown">
                        <a href="#" class="navbar-link hover:underline" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?= htmlspecialchars($_SESSION['first_name']) ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/profile.php">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a href="/logout.php" class="dropdown-item">Logout</a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <a href="./loginpage.php" class="btn">Log in</a>
                    <a href="./register.php" class="btn">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <!-- Search Section -->
    <section class="section search" aria-label="search restaurants">
        <div class="container">
            <h2 class="h2 section-title">Search for Restaurants</h2>
            <form id="searchForm" class="search-form" method="GET" action="search.php">
                <input type="text" id="searchInput" name="search" placeholder="e.g. Gunshow" class="search-field">
                <button type="submit" class="btn">Search</button>
            </form>
        </div>
    </section>

    <!-- Search Results Section -->
    <section class="section search-results" aria-label="search results">
        <div class="container">
            <h2 class="h2 section-title">Search Results</h2>
            <ul class="results-list" id="resultsList">
                <?php if (!empty($search_results)): ?>
                    <?php foreach ($search_results as $restaurant): ?>
                        <li class="result-item">
                            <h3><?= htmlspecialchars($restaurant['name']) ?></h3>
                            <p>Category: <?= htmlspecialchars($restaurant['category']) ?></p>
                            <p>Rating: <?= number_format($restaurant['rating'], 1) ?></p>
                            <a href="restaurant_page.php?id=<?= $restaurant['id'] ?>">View Details</a>
                        </li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <li>No results found.</li>
                <?php endif; ?>
            </ul>
        </div>
    </section>

    <!-- Footer -->

    <script src="script.js" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
