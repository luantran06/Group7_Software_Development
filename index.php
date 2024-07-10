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
  <title>Tastebuds - Hey, we’re Tastebuds. See our thoughts, stories and restaurants.</title>
  <meta name="title" content="Tastebuds - Hey, we’re Tastebuds. See our thoughts, stories and restaurants.">
  <meta name="description" content="This is a restaurant review blog.">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href=".picture\logo.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href=".\style.css">

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

      <a href="#" class="logo">
        <img src=".\picture\logo.svg" width="100" height="40" alt="Tastebuds logo">
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

        <li class="navbar-item">
            <a href="index.php" class="navbar-link hover:underline" data-nav-link>Home</a>
        </li>

        <li class="navbar-item">
            <a href="index.php" class="navbar-link hover:underline" data-nav-link>Recent Post</a>
        </li>

        <li class="navbar-item">
            <a href="search.php" class="navbar-link hover:underline" data-nav-link>Search</a>
        </li>

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
            
        </ul>
        </nav>
        <?php
        } else {
        ?>
      <div class="wrapper">

        <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
          <span class="span one"></span>
          <span class="span two"></span>
          <span class="span three"></span>
        </button>

        <a href="./loginpage.php" class="btn">Log in</a>
        <a href="./register.php" class="btn">Register</a>

      </div>
        <?php
        }   
        ?>
    </div>
  </header>





  <!-- 
    - #SEARCH BAR
  -->

  <div class="search-bar" data-search-bar>

    <div class="input-wrapper">
      <input type="search" name="search" placeholder="Search" class="input-field">

      <button class="search-close-btn" aria-label="close search bar" data-search-toggler>
        <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
      </button>

    </div>

    <p class="search-bar-text">Please enter at least 3 characters</p>

  </div>

  <div class="overlay" data-overlay data-search-toggler></div>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" aria-label="home">
        <div class="container">

          <h1 class="h1 hero-title">
            <strong class="strong">Hey, we’re Tastebuds.</strong> See our thoughts, stories and restaurants.
          </h1>

          <div class="wrapper">

            <form action="" class="newsletter-form">
              <input type="email" name="email_address" placeholder="Your email address" class="email-field">

              <button type="submit" class="btn">Subscribe</button>
            </form>

            <p class="newsletter-text">
              Get the email newsletter and updates from Tastebuds.
            </p>

          </div>

        </div>
      </section>





      <!-- 
        - #FEATURED POST
      -->

      <section class="section featured" aria-label="featured post">
        <div class="container">

          <p class="section-subtitle">
            Get started with our <strong class="strong">best restaurants</strong>
          </p>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
                  <img src="./picture/lazy_betty.jpg" width="500" height="600" loading="lazy"
                    alt="Lazy Beety" class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./picture/author-1.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./picture/author-2.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li>
                      <a href="#" class="card-tag">Design</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Fine Dining</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Open Space</a>
                    </li>

                  </ul>

                  <h3 class="h4">
                    <a href="#" class="card-title hover:underline">
                        Lazy Betty’s menu is creative without being confusing, and technical while still tasty.
                    </a>
                  </h3>

                  <p class="card-text">
                    Ask any Atlanta foodie about buzzy local restaurants, and you're likely to get an earful about Lazy Betty. Chefs Ron Hsu and Aaron Phillips, vets of Le Bernardin, began developing their menu with a series of pop-ups that quickly sold out. So it came as no surprise that when Lazy Betty and its tasting menu finally began welcoming diners, it was an instant smash.
                  </p>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
                  <img src="./picture/Gunshow.jpg" width="500" height="600" loading="lazy"
                    alt="It’s a new era in design, there are no rules" class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./picture/author-3.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li>
                      <a href="#" class="card-tag">Creative</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Industrial</a>
                    </li>

                  </ul>

                  <h3 class="h4">
                    <a href="#" class="card-title hover:underline">
                      It’s a industrial era in design, there are no rules
                    </a>
                  </h3>

                  <p class="card-text">
                    The fluorescent lights are bright, the hard-rock music is loud, and the kitchen is so in-your-face that you can see right into the walk-in cooler.
                  </p>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
                  <img src="./picture/boccalupo.jpg" width="500" height="600" loading="lazy"
                    alt="Perfection has to do with the end product" class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./picture/author-4.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li>
                      <a href="#" class="card-tag">Origin</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Italian</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Pasta</a>
                    </li>

                  </ul>

                  <h3 class="h4">
                    <a href="#" class="card-title hover:underline">
                        BoccaLupo's little white bungalow looks unassuming, but it serves the city’s best pasta.
                    </a>
                  </h3>

                  <p class="card-text">
                    At BoccaLupo, on a residential street in Inman Park, the chef-owner shows why The New York Times hailed him the fief of his own “neighborhood pasta kingdom.”
                  </p>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
                  <img src="./picture/bones.jpg" width="500" height="600" loading="lazy"
                    alt="Everyone has a different life story" class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./picture/author-5.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./picture/author-2.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li>
                      <a href="#" class="card-tag">Steak</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Fine Dining</a>
                    </li>

                  </ul>

                  <h3 class="h4">
                    <a href="#" class="card-title hover:underline">
                        Buckhead’s most iconic steakhouse.
                    </a>
                  </h3>

                  <p class="card-text">
                    Since opening in 1979, Bones has become a Buckhead institution, and the classic menu is a big part of the reason why. Start with the sharable chilled seafood platter with shrimp, crab legs, and lobster. 
                  </p>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
                  <img src="./picture/umi.jpg" width="500" height="600" loading="lazy"
                    alt="The difference is quality" class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./picture/author-6.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li>
                      <a href="#" class="card-tag">Design</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Japanese</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Fine Dining</a>
                    </li>

                  </ul>

                  <h3 class="h4">
                    <a href="#" class="card-title hover:underline">
                        Atlanta's see-and-be-seen sushi spot.
                    </a>
                  </h3>

                  <p class="card-text">
                    At Umi, a see-and-be-scene hot spot in Buckhead, the staff flies its seafood in from all over the world to create clean, crisp dishes. 
                  </p>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
                  <img src="./picture/Taqueria.jpg" width="500" height="600" loading="lazy"
                    alt="Problems are not stop signs, they are guidelines" class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./picture/author-3.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li>
                      <a href="#" class="card-tag">Mexican</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Industrial</a>
                    </li>

                  </ul>

                  <h3 class="h4">
                    <a href="#" class="card-title hover:underline">
                        People spill out of Taqueria del Sol’s Westside restaurant all day long.
                    </a>
                  </h3>

                  <p class="card-text">
                    You walk to the bar, grab a margarita, then walk back outside to wait in the main line.
                  </p>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #RECENT POST
      -->

      <section class="section recent" aria-label="recent post">
        <div class="container">

          <div class="title-wrapper">

            <h2 class="h2 section-title">
              See what we’ve <strong class="strong">written lately</strong>
            </h2>

            <div class="top-author">
              <ul class="avatar-list">

                <li class="avatar-item">
                  <a href="#" class="avatar large img-holder" style="--width: 100; --height: 100;">
                    <img src="./picture/author-1.jpg" width="100" height="100" alt="top author" class="img-cover">
                  </a>
                </li>

                <li class="avatar-item">
                  <a href="#" class="avatar large img-holder" style="--width: 100; --height: 100;">
                    <img src="./picture/author-2.jpg" width="100" height="100" alt="top author" class="img-cover">
                  </a>
                </li>

                <li class="avatar-item">
                  <a href="#" class="avatar large img-holder" style="--width: 100; --height: 100;">
                    <img src="./picture/author-3.jpg" width="100" height="100" alt="top author" class="img-cover">
                  </a>
                </li>

                <li class="avatar-item">
                  <a href="#" class="avatar large img-holder" style="--width: 100; --height: 100;">
                    <img src="./picture/author-4.jpg" width="100" height="100" alt="top author" class="img-cover">
                  </a>
                </li>

                <li class="avatar-item">
                  <a href="#" class="avatar large img-holder" style="--width: 100; --height: 100;">
                    <img src="./picture/author-5.jpg" width="100" height="100" alt="top author" class="img-cover">
                  </a>
                </li>

              </ul>

              <span class="span">Meet our top authors</span>
            </div>

          </div>

          <ul class="grid-list">

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 550; --height: 660;">
                  <img src="./picture/aria.jpg" width="550" height="660" loading="lazy"
                    alt="Creating is a privilege but it’s also a gift" class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./picture/author-3.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./picture/author-5.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li>
                      <a href="#" class="card-tag">Lifestyle</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">People</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Fine Dining</a>
                    </li>

                  </ul>

                  <h3 class="h4">
                    <a href="#" class="card-title hover:underline">
                        If you’re looking for a place to have a great night and even better food, Aria should be at the top of your list. 
                    </a>
                  </h3>

                  <p class="card-text">
                    My first visit to Aria and the service, wine and food were excellent. I had an amazing white by the glass (two in fact) of the Albillo and it was so fragrant and aromatic. Totally delicious and I've been searching the web to try and order it (not successful yet). I felt like comfort food and wanted to try a couple of different dishes so we ordered the pork belly for the table. This was the only disappointment. It was really overcooked and tough and nothing like other pork belly I'd previously had. For a starter, I order the hamachi which is probably my favorite sushi. It was superb. There was a lot of fish yet it was light. I could have done without so much radish and sauce but the fish was generous. Finally, I wanted comfort food so I ordered the clam chowder for an entree. Yes, weird I know. But it was the best of all three dishes! Again, portion was quite large and all that warm deliciousness was perfectly seasoned and balanced. Someone ordered. dessert to share and I had a bite but I honestly can't remember what it was. So, it was literally forgettable. Or maybe I was just so satisfied with my main that it didn't imprint. Service was perfection! Warm, friendly but professional and perfectly timed. Would definitely return.
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 550; --height: 660;">
                  <img src="./picture/chaiyo.jpg" width="550" height="660" loading="lazy"
                    alt="Being unique is better than being perfect" class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./picture/author-5.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li>
                      <a href="#" class="card-tag">Thai</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Fine Dining</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Luxury</a>
                    </li>

                  </ul>

                  <h3 class="h4">
                    <a href="#" class="card-title hover:underline">
                      Being unique is better than being perfect
                    </a>
                  </h3>

                  <p class="card-text">
                    Chai Yo Modern Thai is an Atlanta Eats staff favorite and with one just one date night visit, you’ll understand why. This sexy, upscale Buckhead spot is serving Thai cuisine that truly impresses, and the natural wood, mood lighting, and special touches that make this place truly stunning. 
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 550; --height: 660;">
                  <img src="./picture/chastain.jpg" width="550" height="660" loading="lazy"
                    alt="Now we’re getting somewhere" class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./picture/author-2.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./picture/author-5.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./picture/author-1.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li>
                      <a href="#" class="card-tag">Old</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Nostalgia</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Wine</a>
                    </li>

                  </ul>

                  <h3 class="h4">
                    <a href="#" class="card-title hover:underline">
                      Now we’re getting somewhere
                    </a>
                  </h3>

                  <p class="card-text">
                    It’s old Atlanta, revamped. The Chastain has recently opened up in the old Horseradish Grill Space, and the decor is truly impressive. The bistro seating and firepits make the patio extra cozy, and the  natural lighting pours in from the restaurant’s many floor to ceiling windows. Their menu consists of delicious New American eats, and we also love their pastry and bread offerings in the morning! 
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 550; --height: 660;">
                  <img src="./picture/tinylou.jpg" width="550" height="660" loading="lazy"
                    alt="The trick to getting more done is to have the freedom to roam around" class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./picture/author-3.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li>
                      <a href="#" class="card-tag">Steak</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Old</a>
                    </li>

                  </ul>

                  <h3 class="h4">
                    <a href="#" class="card-title hover:underline">
                      The trick to getting more done is to have the freedom to roam around
                    </a>
                  </h3>

                  <p class="card-text">
                    The revamped and revitalized Hotel Clermont has taken extra touches to make the dining experience and ambiance as special as the rest. Walking into Tiny Lou’s is like taking a step back into a more glamorous place in time, and we love the tiny nods to that famous establishment in the basement that can be found in things like their “Ode To Blondie” dessert. Tiny Lou’s recently welcomed Executive Chef Jon Novak and Pastry Chef Charmain Ware to their roster, so we’re excited to see what this powerhouse duo does to the menu as well.
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 550; --height: 660;">
                  <img src="./picture/theselect.jpg" width="550" height="660" loading="lazy"
                    alt="Every day, in every city and town across the country" class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./picture/author-1.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./picture/author-6.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li>
                      <a href="#" class="card-tag">Bright</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Wine</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Lifestyle</a>
                    </li>

                  </ul>

                  <h3 class="h4">
                    <a href="#" class="card-title hover:underline">
                      Every day, in every city and town across the country
                    </a>
                  </h3>

                  <p class="card-text">
                    With its sweeping, luxe interiors and chic cocktails, The Select is one of those restaurants where it’s equally about the ambiance as it is about the food. A part of the new Sandy Springs City Springs development, The Select has been making a name for itself in the community with rave reviews from diners and food critics alike. You’re going to love the miso sea bass and ever-changing pastry menu, as well as their patio with plentiful seating. The Select is also now open for brunch! 
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 550; --height: 660;">
                  <img src="./picture/yebo.jpg" width="550" height="660" loading="lazy"
                    alt="Your voice, your mind, your story, your vision" class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./picture/author-6.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li>
                      <a href="#" class="card-tag">Open</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Wine</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Ambiance</a>
                    </li>

                  </ul>

                  <h3 class="h4">
                    <a href="#" class="card-title hover:underline">
                      Your voice, your mind, your story, your vision
                    </a>
                  </h3>

                  <p class="card-text">
                    Yebo is a restaurant that puts as much care into their menu as they do into their ambiance and decor. In the summer, they transform into Yebo Beach Haus, with coastal fun all around, in the wintertime, they become Yebo Ski Haus, with the best ski chateau vibes. They’ve recently moved into a more expansive space in Andrews Square. 
                  </p>

                </div>

              </div>
            </li>

          </ul>

          <button class="btn">Load more</button>

        </div>
      </section>





      <!-- 
        - #RECOMMENDED POST
      -->

      <section class="section recommended" aria-label="recommended post">
        <div class="container">

          <p class="section-subtitle">
            <strong class="strong">Recommended</strong>
          </p>

          <ul class="grid-list">

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 300; --height: 360;">
                  <img src="./picture/bilbo.jpg" width="300" height="360" loading="lazy"
                    alt="The trick to getting more done is to have the freedom to roam around " class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./picture/author-5.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./picture/author-2.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <h3 class="h5">
                    <a href="#" class="card-title hover:underline">
                        Le Bilboquet is a total experience. Enjoy top tier French cuisine in their light and airy dining room.
                    </a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 300; --height: 360;">
                  <img src="./picture/bistroniko.jpg" width="300" height="360" loading="lazy"
                    alt="Every day, in every city and town across the country " class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./picture/author-3.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <h3 class="h5">
                    <a href="#" class="card-title hover:underline">
                        Take your sweetie to enjoy classic French fare at this Buckhead staple. 
                    </a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 300; --height: 360;">
                  <img src="./picture/thealden.jpg" width="300" height="360" loading="lazy"
                    alt="I work best when my space is filled with inspiration " class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./picture/author-1.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <h3 class="h5">
                    <a href="#" class="card-title hover:underline">
                        The restaurant to be somewhat of a blank slate and for the focus to be on the food and service.
                    </a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 300; --height: 360;">
                  <img src="./picture/lagrotta.jpg" width="300" height="360" loading="lazy"
                    alt="I have my own definition of minimalism " class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./picture/author-4.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./picture/author-3.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <h3 class="h5">
                    <a href="#" class="card-title hover:underline">
                        Enjoy the coziness of this place and the white tablecloth restaurant type of service and attention to detail
                    </a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 300; --height: 360;">
                  <img src="./picture/cecilia.jpg" width="300" height="360" loading="lazy"
                    alt="Change your look and your attitude " class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./picture/author-6.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <h3 class="h5">
                    <a href="#" class="card-title hover:underline">
                        You and your date will love this elegant, airy Italian option!
                    </a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 300; --height: 360;">
                  <img src="./picture/rubychow.jpg" width="300" height="360" loading="lazy"
                    alt="The difference is quality " class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./picture/author-3.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <h3 class="h5">
                    <a href="#" class="card-title hover:underline">
                      The menu is an eclectic mix of pan-Asian tapas, with baos and pork belly and very interesting soy sauce egg dish called Shoyu Tomago.
                    </a>
                  </h3>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #NEWSLETTER
      -->

      <section class="section newsletter">

        <h2 class="h2 section-title">
          Subscribe to <strong class="strong">new posts</strong>
        </h2>

        <form action="" class="newsletter-form">
          <input type="email" name="email_address" placeholder="Your email address" required class="email-field">

          <button type="submit" class="btn">Subscribe</button>
        </form>

      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">

      <div class="footer-top section">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./picture/logo.svg" width="129" height="40" alt="Blogy logo">
          </a>

          <p class="footer-text">
            A minimal, functional theme for running a paid-membership publication on Team 7.
          </p>

        </div>

        <ul class="footer-list">

          <li>
            <p class="h5">Social</p>
          </li>

          <li class="footer-list-item">
            <ion-icon name="logo-facebook"></ion-icon>

            <a href="#" class="footer-link hover:underline">Facebook</a>
          </li>

          <li class="footer-list-item">
            <ion-icon name="logo-twitter"></ion-icon>

            <a href="#" class="footer-link hover:underline">Twitter</a>
          </li>

          <li class="footer-list-item">
            <ion-icon name="logo-pinterest"></ion-icon>

            <a href="#" class="footer-link hover:underline">Pinterest</a>
          </li>

          <li class="footer-list-item">
            <ion-icon name="logo-vimeo"></ion-icon>

            <a href="#" class="footer-link hover:underline">Vimeo</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="h5">About</p>
          </li>

          <li>
            <a href="#" class="footer-link hover:underline">Style Guide</a>
          </li>

          <li>
            <a href="#" class="footer-link hover:underline">Features</a>
          </li>

          <li>
            <a href="#" class="footer-link hover:underline">Contact</a>
          </li>

          <li>
            <a href="#" class="footer-link hover:underline">404</a>
          </li>

          <li>
            <a href="#" class="footer-link hover:underline">Privacy Policy</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="h5">Features</p>
          </li>

          <li>
            <a href="#" class="footer-link hover:underline">Upcoming Events</a>
          </li>

          <li>
            <a href="#" class="footer-link hover:underline">Blog & News</a>
          </li>

          <li>
            <a href="#" class="footer-link hover:underline">Features</a>
          </li>

          <li>
            <a href="#" class="footer-link hover:underline">FAQ Question</a>
          </li>

          <li>
            <a href="#" class="footer-link hover:underline">Testimonial</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="h5">Membership</p>
          </li>

          <li>
            <a href="#" class="footer-link hover:underline">Account</a>
          </li>

          <li>
            <a href="#" class="footer-link hover:underline">Membership</a>
          </li>

          <li>
            <a href="#" class="footer-link hover:underline">Subscribe</a>
          </li>

          <li>
            <a href="#" class="footer-link hover:underline">Tags</a>
          </li>

          <li>
            <a href="#" class="footer-link hover:underline">Authors</a>
          </li>

        </ul>

      </div>

      <div class="section footer-bottom">

        <p class="copyright">
          &copy; Team 7 2024. Published by <a href="#" class="copyright-link hover:underline">Team 7</a>.
        </p>

      </div>

    </div>
  </footer>






  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>