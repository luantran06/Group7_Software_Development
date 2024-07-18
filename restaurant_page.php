<?php
session_start();
$authenticated = false;
if (isset($_SESSION['email'])) {
    $authenticated = true;
}
// Assuming $_SESSION['first_name'] and $_SESSION['last_name'] are set after login
$reviewerFirstName = isset($_SESSION['first_name']) ? htmlspecialchars($_SESSION['first_name']) : '';
$reviewerLastName = isset($_SESSION['last_name']) ? htmlspecialchars($_SESSION['last_name']) : '';
$reviewerEmail = isset($_SESSION['reviewer_email']) ? htmlspecialchars($_SESSION['reviewer_email']) : '';
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$database = "restaurant_info";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Get restaurant ID from the query string
$restaurant_id = isset($_GET['id']) ? intval($_GET['id']) : 3;
// Fetch restaurant details, including rating
$restaurant_sql = "SELECT name, website, rating FROM restaurants WHERE id = $restaurant_id";
$restaurant_result = $conn->query($restaurant_sql);
$restaurant = $restaurant_result->fetch_assoc();
// Fetch header photo (always the first photo)
$header_photo_sql = "SELECT url FROM photos WHERE restaurant_id = $restaurant_id ORDER BY id ASC LIMIT 1";
$header_photo_result = $conn->query($header_photo_sql);
$header_photo = $header_photo_result->fetch_assoc();
$photo_url = isset($header_photo['url']) ? $header_photo['url'] : '';
// Fetch photos
$photos_sql = "SELECT url FROM photos WHERE restaurant_id = $restaurant_id AND id != 1";
$photos_result = $conn->query($photos_sql);
// Default photo URLs
$photos = array();
if ($photos_result->num_rows > 0) {
    while ($photo = $photos_result->fetch_assoc()) {
        $photos[] = $photo['url'];
    }
}
// Fetch reviews
$reviews_sql = "SELECT reviewer_name, review_text, rating FROM reviews WHERE restaurant_id = $restaurant_id";
$reviews_result = $conn->query($reviews_sql);
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo htmlspecialchars($restaurant['name']); ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<!-- Google Fonts Link -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap" rel="stylesheet">
<style>
.button {
    display: inline-flex;
    align-items: center; /* Align icon and text vertically */
    padding: 8px 16px;
    border-radius: 20px; /* Adjust the value as needed */
    border: 1px solid #ddd; /* Light gray stroke */
    text-decoration: none;
    color: #333; /* Text color */
    font-weight: bold;
    transition: background-color 0.3s ease;
    margin-top: 5px;
}
.button:hover {
    background-color: #f0f0f0; /* Light gray background on hover */
}
.icon {
    width: 30px; /* Adjust width */
    height: 16px; /* Adjust height */
    margin-right: 8px; /* Space between icon and text */
    vertical-align: middle; /* Align the icon vertically */
}
body {
  font-family: 'Inter', sans-serif;
  margin: 0;
  padding: 0;
}
.header {
  padding: 10px 0; /* Adjust padding as needed */
  text-align: center;
}
.header-img {
  width: 100%;
  max-height: 200px; /* Adjust max-height as needed */
  object-fit: cover;
}
.header-text {
  text-align: center;
  margin-top: 20px; /* Adjust margin as needed */
}
.container {
  width: 100%;
  max-width: 1100px;
  margin: 0 auto;
  padding: 20px;
  display: flex;
  justify-content: space-between; /* Ensure items are spaced evenly */
}
.about {
  flex: 0 0 50%; /* About section takes up more space */
  background-color: #f0f0f0;
  padding: 20px;
  border-radius: 8px;
  margin-right: 20px;
}
.reviews {
  flex: 0 0 50%; /* Reviews section takes up less space */
  background-color: #f0f0f0;
  padding: 20px;
  border-radius: 8px;
}
@media (max-width: 768px) {
  .container {
    flex-direction: column;
  }
  .about, .reviews {
    flex: 1 1 100%; /* Full width on smaller screens */
    margin-right: 0; /* Reset margin */
    margin-bottom: 20px; /* Space between sections */
  }
}
.review-card {
  margin-bottom: 20px;
  padding: 15px;
  border: 1px solid #ddd;
  border-radius: 8px;
  background-color: #fff;
}
@media (max-width: 768px) {
  .container {
    flex-direction: column;
  }
  .about, .reviews {
    flex: 1 1 100%;
    margin-right: 0;
    margin-bottom: 20px;
  }
}
/* Adjustments for star rating */
.rating {
    display: flex; /* Ensure stars are displayed in a row */
    align-items: center; /* Align items vertically */
    font-size: 18px; /* Adjust font size of rating text */
    margin-top: 5px; /* Adjust spacing as needed */
}
.rating-number {
    margin-right: 5px;
}
.star {
    width: 20px; /* Adjust star size */
    height: auto; /* Maintain aspect ratio */
    margin-right: 5px; /* Adjust spacing between stars */
}
#add-review-form {
    margin-top: 20px;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #fff;
}
#add-review-form label {
    display: block;
    margin-top: 10px;
}
#add-review-form input[type="text"],
#add-review-form textarea,
#add-review-form select {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
}
#add-review-form button {
    margin-top: 10px;
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    background-color: #E64042;
    color: #fff;
    cursor: pointer;
}
#add-review-form button:hover {
    background-color: #555;
}
.rating-button-container {
    display: flex;
    align-items: center; /* Align items vertically */
    justify-content: center; /* Center items horizontally */
}
.reviews-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}
/* Modal styles */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
.modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
    border-radius: 8px;
}
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}
.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
.photo-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); /* Responsive grid columns */
    gap: 10px; /* Gap between grid items */
    margin-top: 20px;
}
.photo-item {
    width: 240px; /* Set the width of the container */
    height: 200px; /* Set the height of the container */
    display: inline-block; /* Make sure the containers align horizontally */
}
.photo-item img {
    width: 100%; /* Ensure photos take full width of their containers */
    height: 100%; /* Ensure photos take full height of their containers */
    object-fit: cover; /* Cover the container and crop the excess */
    object-position: center; /* Center the image */
    display: block; /* Prevent extra space below images */
    border-radius: 8px;
}
</style>
</head>
<body>
<!-- Navbar (sit on top) -->
<header class="header">
    <div class="container">
        <a href="#" class="logo">
            <img src="./picture/logo.svg" width="100" height="40" alt="Tastebuds logo">
        </a>
        <nav class="navbar">
            <ul class="navbar-list">
                <li class="navbar-item"><a href="index.php" class="navbar-link">Home</a></li>
                <li class="navbar-item"><a href="recent-post.php" class="navbar-link">Recent Post</a></li>
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
                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a href="logout.php" class="dropdown-item" >Logout</a></li>
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

<!-- Header Image -->
<div class="header">
    <img src="<?php echo htmlspecialchars($photo_url); ?>" alt="<?php echo htmlspecialchars($restaurant['name']); ?>" class="header-img">
</div>
<!-- Restaurant Name and Rating -->
<div class="header-text">
    <h1><?php echo htmlspecialchars($restaurant['name']); ?></h1>
    <div class="rating-button-container">
        <div class="rating">
            <span><?php echo number_format($restaurant['rating'], 1);?>&nbsp;</span>
            <?php
            $rating = floatval($restaurant['rating']); // Convert rating to float
            $full_stars = floor($rating); // Number of full stars
            $half_star = $rating - $full_stars; // Check if there's a half star
            // Loop to display stars
            for ($i = 1; $i <= 5; $i++) {
                if ($i <= $full_stars) {
                    echo '<img src="assets/vectors/star-filled.png" alt="Star filled" class="star">';
                } else if ($i == ceil($rating) && $half_star >= 0.5) {
                    echo '<img src="assets/vectors/star-half.png" alt="Half filled star" class="star">';
                } else {
                    echo '<img src="assets/vectors/star-empty.png" alt="Empty star" class="star">';
                }
            }
            ?>
        </div>
        <div>
            <a href="<?php echo htmlspecialchars($restaurant['website']); ?>" class="button">
                <img src="assets/vectors/link.png" alt="Link icon" class="icon">
                Website
            </a>
        </div>
    </div>
</div>
<div class="container">
    <!-- Photos Section -->
    <div class="about">
        <h2>Photos</h2>
        <div class="photo-grid">
            <?php if (count($photos) > 0): ?>
                <?php foreach ($photos as $photo_url): ?>
                    <div class="photo-item">
                        <img src="<?php echo htmlspecialchars($photo_url); ?>" alt="Restaurant Photo">
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No photos available.</p>
            <?php endif; ?>
        </div>
    </div>
    <!-- Reviews Section -->
    <div class="reviews">
        <div class="reviews-header">
            <h2>Reviews</h2>
            <button class="button" id="add-review-button" style="background-color: #EE4D47; color: white;">Add Your Own</button>
        </div>
        <?php if ($reviews_result->num_rows > 0): ?>
            <?php while ($review = $reviews_result->fetch_assoc()): ?>
                <div class="review-card">
                    <h3><?php echo htmlspecialchars($review['reviewer_name']); ?></h3>
                    <div class="rating">
                    <span class="rating-number"><?php echo htmlspecialchars($review['rating']); ?></span>
                    <?php
                        $rating = floatval($review['rating']); // Convert rating to float
                        $full_stars = floor($rating); // Number of full stars
                        $half_star = $rating - $full_stars; // Check if there's a half star
                        
                        // Loop to display stars
                        for ($i = 1; $i <= 5; $i++) {
                            if ($i <= $full_stars) {
                                echo '<img src="assets/vectors/star-filled.png" alt="Star filled" class="star">';
                            } else if ($i == ceil($rating) && $half_star >= 0.5) {
                                echo '<img src="assets/vectors/star-half.png" alt="Half filled star" class="star">';
                            } else {
                                echo '<img src="assets/vectors/star-empty.png" alt="Empty star" class="star">';
                            }
                        }
                        ?>
                        
                    </div>
                    <p><?php echo htmlspecialchars($review['review_text']); ?></p>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No reviews yet.</p>
        <?php endif; ?>
    </div>
</div>
<!-- The Modal -->
<div id="reviewModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <form id="add-review-form" method="post" action="submit_review.php">
        <h3>Add Your Review</h3>
        <label for="reviewer_first_name">First Name:</label>
        <input type="text" id="reviewer_first_name" name="reviewer_first_name" value="<?php echo htmlspecialchars($reviewerFirstName); ?>" disabled>
        <label for="reviewer_last_name">Last Name:</label>
        <input type="text" id="reviewer_last_name" name="reviewer_last_name" value="<?php echo htmlspecialchars($reviewerLastName); ?>" disabled>
        <label for="review_text">Comment:</label>
        <textarea id="review_text" name="review_text" required></textarea>
        <label for="rating">Rating:</label>
        <select id="rating" name="rating" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <input type="hidden" name="restaurant_id" value="<?php echo $restaurant_id; ?>">
        <button type="submit" class="button">Submit</button>
    </form>
    </div>
</div>
<script>
document.getElementById('add-review-button').addEventListener('click', function() {
    var modal = document.getElementById('reviewModal');
    modal.style.display = 'block';
});
document.querySelector('.close').addEventListener('click', function() {
    var modal = document.getElementById('reviewModal');
    modal.style.display = 'none';
});
window.onclick = function(event) {
    var modal = document.getElementById('reviewModal');
    if (event.target == modal) {
        modal.style.display = 'none';
    }
};
</script>
</body>
</html>