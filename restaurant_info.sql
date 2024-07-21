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

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `restaurant_id` (`restaurant_id`)
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
(23, 5, 'https://umiatlanta.com/wp-content/uploads/2013/07/IMG_0199-1.jpg'),
(24, 6, 'https://static.wixstatic.com/media/0337ff_af47d9938fe64aa4abbd46cf346c272a~mv2.jpg/v1/fill/w_638,h_929,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/0337ff_af47d9938fe64aa4abbd46cf346c272a~mv2.jpg'),
(25, 6, 'https://images.squarespace-cdn.com/content/v1/5a9b049f75f9eef8f485a56e/1561141646776-EF7KJJ5EMUK1LFV0RN71/1.png'),
(26, 7, 'https://bonesrestaurant.com/wp-content/uploads/2019/02/reservation_650_280.jpg'),
(27, 7, 'https://bonesrestaurant.com/wp-content/uploads/2019/02/bones-wine-shot.jpg'),
(28, 8, 'https://images.squarespace-cdn.com/content/v1/53d6cfc4e4b08c041922de0d/1512146276758-JP9NW7MIYVTPWDRAYS60/aria-9952sqsm.jpg?format=1500w'),
(29, 8, 'https://images.squarespace-cdn.com/content/v1/53d6cfc4e4b08c041922de0d/1500431603141-B2470TNAVID2ARU6T44O/Produce_Colors-11.png?format=1500w'),
(30, 9, 'https://thechastainatl.com/wp-content/uploads/2024/03/menu-1.jpg'),
(31, 9, 'https://thechastainatl.com/wp-content/uploads/2024/03/web4.jpg'),
(32, 10, 'https://images.squarespace-cdn.com/content/v1/6063293cd736ea44f69b9f60/4a4fc8f5-975b-4053-9946-ee28d41d9376/Tiny+Lou%27s+2.jpg?format=500w'),
(33, 10, 'https://images.squarespace-cdn.com/content/v1/6063293cd736ea44f69b9f60/1690999431604-MCF4C02EEUYNZO10HPA5/Tiny%2BLou%2527s%2B1.jpg?format=750w'),
(34, 11, 'https://popmenucloud.com/cdn-cgi/image/width%3D412%2Cheight%3D412%2Cfit%3Dscale-down%2Cformat%3Dauto%2Cquality%3D60/qegjhdml/307ed457-9ead-48cf-9a4c-54434770c746.jpg'),
(35, 11, 'https://popmenucloud.com/cdn-cgi/image/width%3D412%2Cheight%3D412%2Cfit%3Dscale-down%2Cformat%3Dauto%2Cquality%3D60/qegjhdml/53de075f-ce88-4945-800a-6467f77c3342.jpg'),
(36, 12, 'https://yebobeachhaus.com/wp-content/uploads/2021/11/6AE6EF79-18A9-4E8B-A8CE-537EFEC85C27-scaled.jpg'),
(37, 12, 'https://yebobeachhaus.com/wp-content/uploads/2023/01/Tezza-9968.jpg'),
(38, 13, 'https://images.squarespace-cdn.com/content/v1/6483544bed15ed69dc9e87e5/0d0672e4-9232-4ca3-85c5-f2224b65b2f4/Bilbo_Atlanta_D_ANMV2opt.gif?format=1500w'),
(39, 13, 'https://images.squarespace-cdn.com/content/v1/6483544bed15ed69dc9e87e5/23e2c27a-c26c-44e7-ab9b-fc86575a9670/Le+Bilboquet+Atlanta+2023+%2829%29.jpg?format=500w'),
(40, 14, 'https://bistroniko.com/wp-content/uploads/2022/10/Bistro-Niko-Mussels-Gilbert.jpg'),
(41, 14, 'https://buckheadrestaurants.com/wp-content/uploads/2022/12/bistro-niko-beef-cheeks.jpg.jpg'),
(42, 15, 'https://s26269.pcdn.co/wp-content/uploads/2023/07/TheAlden-1.png'),
(43, 15, 'https://s26269.pcdn.co/wp-content/uploads/2023/07/Lunar-Chocolate-Close-1536x1024.jpg'),
(44, 16, 'https://images.squarespace-cdn.com/content/v1/651199578bfa4f0119468845/993ebac2-1aba-4e81-801d-b6269a56e132/01.18.24-lagrotta-final-0037.jpeg?format=750w'),
(45, 16, 'https://images.squarespace-cdn.com/content/v1/651199578bfa4f0119468845/961d600d-942c-4f11-af12-73ace3d6ebd9/01.18.24-lagrotta-final-0024.jpeg?format=750w'),
(46, 17, 'https://stceciliaatl.com/wp-content/themes/st-cecilia/assets/images/st-cecilia-logo.png'),
(47, 17, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXYJTbMzqbhZxo-McyhnR9j7XX_BaKBKtjcQ&s'),
(48, 18, 'https://popmenucloud.com/qrajlvcb/09b22dbc-7ad2-4c70-948c-2f280875f1ff.png'),
(49, 18, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQAgpqgc2bgKmyOoxxA-dSj-hQoqPo83bW4A&s');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE IF NOT EXISTS `restaurants` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `website`, `rating`, `category`) VALUES
(1, 'Chai Yo Modern Thai', 'https://www.chaiyoatl.com/', NULL, 'Asian'),
(2, 'Gunshow', 'http://www.gunshowatl.com/', NULL, 'American'),
(3, 'Taqueria Del Sol', 'http://www.taqueriadelsol.com', 3.5714, 'Mexican'),
(4, 'BoccaLupo', 'http://boccalupoatl.com/', 5, 'Italian'),
(5, 'Umi', 'https://umiatlanta.com/', NULL, 'Japanese'),
(6, 'Lazy Betty', 'https://lazybettyatl.com/', NULL, 'American'),
(7, 'Bones', 'http://www.bonesrestaurant.com/', NULL, 'Steakhouse'),
(8, 'Aria', 'http://www.aria-atl.com/', NULL, 'American'),
(9, 'chastain', 'https://www.thechastainatl.com/', NULL, 'American'),
(10, 'Tiny Lou', 'https://tinylous.com/', NULL, 'French'),
(11, 'The Select', 'https://theselectatl.com/', NULL, 'American'),
(12, 'Yebo Beach Haus', 'https://www.yebobeachhaus.com/', NULL, 'Seafood'),
(13, 'Le Bilboquet', 'http://www.lebilboquetatlanta.com/', NULL, 'French'),
(14, 'Bistro Niko', 'https://bistroniko.com/', NULL, 'French'),
(15, 'The Alden', 'https://www.thealdenrestaurant.com/', NULL, 'American'),
(16, 'La Grotta', 'https://lagrottaatlanta.com/', NULL, 'Italian'),
(17, 'St. Cecilia', 'https://stceciliaatl.com/', NULL, 'Italian'),
(18, 'Ruby Chow', 'https://rubychowsatl.com/', NULL, 'Asian');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `reviewer_name` varchar(255) NOT NULL,
  `review_text` text NOT NULL,
  `rating` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `restaurant_id` (`restaurant_id`)
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

-- Constraints for dumped tables
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`id`);

ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`id`);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
