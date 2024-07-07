# Group7_Software_Development
Software_Development_Summer
Review website/application
- Design a website where users can write and share reviews for products, services or businesses.
- For example, you could make a review app that specializes in letting users share their thoughts on films, medical providers, travel locations or local businesses. To make the project more advanced, you could also allow companies to respond to reviews about their products or services...
  # Restaurants list:
- Lazy Betty
- Gunshow
- BoccaLupo
- Bones
- Umi
- Taqueria del Sol
- Aria 
- Chai Yo Modern Thai
- chastain
- Tiny Lou
- The Select
- Yebo Beach Haus
- Le Bilboquet
- Bistro Niko
- The Alden
- La Grotta
- St. Cecilia
- Ruby Chow
-
create a table for "user"
CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(200) NOT NULL UNIQUE,
    phone VARCHAR(20) NOT NULL,
    address VARCHAR(200) NOT NULL,
    password VARCHAR(200) NOT NULL,
    role VARCHAR(20) NOT NULL DEFAULT 'client',
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);
