-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2024 at 06:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `restaurant_id`, `url`) VALUES
(1, 3, 'https://cdn2.atlantamagazine.com/wp-content/uploads/sites/4/2020/01/taqueriadelsol01_feitenphotography_courtesy.jpg'),
(2, 3, 'https://media.cntraveler.com/photos/5b730f0fde8e29470d34f555/16:9/w_1920,c_limit/Taqueria-del-Sol-(Howell-Mill-location)_Courtesy-Green-Olive-Media_2018_TDS-Westside-0001.jpg'),
(3, 3, 'https://www.atlantaeats.com/wp-content/uploads/2017/03/taqueriadelsol_memphistacoandshrimpcornchowder_blog.png'),
(4, 3, 'https://tastychomps.com/wp-content/uploads/2012/09/tacos_chowder_04.jpg'),
(5, 3, 'https://s3.amazonaws.com/secretsaucefiles/photos/images/000/250/680/original/Spoon_pic.jpeg?1679946543'),
(6, 4, 'https://www.atlantaluxuryrentals.com/wp-content/uploads/2021/07/boccalupo.jpg'),
(7, 4, 'https://lh6.googleusercontent.com/proxy/JJn5OpXVAzfRKxGfvSmzMMxzBgcaXUyeJdiqFOOTfN9bGfcO1AaDBb38G4yhmE8D3_CVPWHot0wBor-zs9EKQKK38Fq_F9zQW0Hl5WR3-1g68eQ'),
(8, 4, 'https://media-cdn.tripadvisor.com/media/photo-s/10/65/05/83/wide-pappardelle-black.jpg'),
(9, 4, 'https://media.cntraveler.com/photos/5fd81db4f777c48dba926012/16:9/w_2560,c_limit/129853926_3811690932248047_4487038285972776110_o.jpg'),
(10, 4, 'https://lh6.googleusercontent.com/proxy/bDBZujlj_SSt7qlojvC5p61nctdEznMC81ecxdpqHInCYZflshBWg63Z3DmYuLeYjwx4Ss1YZ1fT-HXsOrgFbDbz8Xla8smx-oVrekr6VZTOAck'),
(11, 1, 'https://cdn.vox-cdn.com/uploads/chorus_image/image/72687465/Food.0.jpg'),
(12, 1, 'https://resizer.otstatic.com/v2/photos/wide-xlarge/2/46816232.png'),
(13, 1, 'https://www.atlantaeats.com/wp-content/uploads/2020/02/chaiyo-lunch-600x400.png'),
(14, 1, 'https://img.cdn4dd.com/cdn-cgi/image/fit=contain,width=1200,height=672,format=auto/https://doordash-static.s3.amazonaws.com/media/store/header/32aba225-c558-439f-8cc6-9c8bd0eb2630.jpeg'),
(15, 1, 'https://cdn2.atlantamagazine.com/wp-content/uploads/sites/12/2018/05/0518_chaiyo01_hgeldhauser_oneuseonly.jpg'),
(16, 2, 'https://woodwardparkatl.com/wp-content/uploads/2020/09/wp_spread-display.jpg'),
(17, 2, 'https://media.cntraveler.com/photos/5b730f061f8f5f5aacc3780c/16:9/w_2560,c_limit/Gunshow__2018_Gunshow01-by-Angie-Mosier.jpg'),
(18, 2, 'https://static.spotapps.co/web/gunshowatl--com/custom/about/about_slide_4.jpg'),
(19, 5, 'https://media.cntraveler.com/photos/5fd8e44ec69073455bce25a7/16:9/w_2560%2Cc_limit/Umi%2520Spicy%2520Tuna%2520Tartare%2520on%2520Crispy%2520Rice.JPG'),
(20, 5, 'https://umiatlanta.com/wp-content/uploads/2013/07/IMG_1501-1.jpg'),
(21, 5, 'https://culturated.com/wp-content/uploads/2015/03/Umi_Sushi_Atlanta_Fuyuhiko_Ito-1050x700.jpg'),
(22, 5, 'https://culturated.com/wp-content/uploads/2015/03/Umi_Sushi_Atlanta.jpg'),
(23, 5, 'https://umiatlanta.com/wp-content/uploads/2013/07/IMG_0199-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `website`, `rating`, `category`) VALUES
(1, 'Chai Yo Modern Thai', 'https://www.chaiyoatl.com/', NULL, 'Asian'),
(2, 'Gunshow', 'http://www.gunshowatl.com/', NULL, 'American'),
(3, 'Taqueria Del Sol', 'http://www.taqueriadelsol.com', 3.5714, 'Mexican'),
(4, 'BoccaLupo', 'http://boccalupoatl.com/', 5, 'Italian'),
(5, 'Umi', 'https://umiatlanta.com/', NULL, 'Japanese');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `reviewer_name` varchar(255) NOT NULL,
  `review_text` text NOT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `restaurant_id`, `reviewer_name`, `review_text`, `rating`) VALUES
(1, 3, 'Jane Doe', 'Great food. A bit crowded.', 3),
(2, 3, 'John Smith', 'Great food!', 5),
(3, 3, 'Alice Brown', 'Loved the ambiance and the dishes were delicious. Could expand menu more. ', 4),
(6, 3, 'Jack John', 'Great Time!', 5),
(7, 3, 'John Doe', 'Limited menu', 2),
(19, 4, 'Accounta Lastname', 'Loved it!', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restaurant_id` (`restaurant_id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restaurant_id` (`restaurant_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
