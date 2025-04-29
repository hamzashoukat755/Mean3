-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2025 at 03:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mean3_clone`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image_url`, `content`, `created_at`) VALUES
(1, 'WooCommerce vs BigCommerce: Which One Wins?', 'assets/images/blog1.jpg', 'This blog compares WooCommerce and BigCommerce, two leading e-commerce platforms, to help you decide which one suits your business needs better.', '2025-04-25 15:06:13'),
(2, 'Why Big Brands Choose Shopify Plus for E-commerce Success', 'assets/images/blog2.jpg', 'Discover why major brands opt for Shopify Plus to power their e-commerce operations and achieve success.', '2025-04-25 15:06:13'),
(3, 'Digital Marketing Trends You Can’t Afford to Ignore in 2025', 'assets/images/blog3.jpg', 'Stay ahead of the curve with the top digital marketing trends for 2025 that every business needs to know.', '2025-04-25 15:06:13'),
(4, 'How Digital Marketing Can Skyrocket Your Online Retailer', 'assets/images/blog4.jpg', 'Learn how effective digital marketing strategies can boost your online retail business to new heights.', '2025-04-25 15:06:13'),
(5, 'Why Should Online Retailers Choose Magento', 'assets/images/blog5.jpg', 'Explore the benefits of using Magento for online retailers and why it’s a preferred choice for many.', '2025-04-25 15:06:13');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo_url` varchar(255) NOT NULL,
  `website_url` varchar(255) NOT NULL DEFAULT 'https://www.mean3.com'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `logo_url`, `website_url`) VALUES
(1, 'Habitt', 'assets/images/client1.png', 'https://habitt.com/'),
(2, 'Tapal Group', 'assets/images/client2.jpg', 'https://tapaltea.com/'),
(3, 'Ismail Industries', 'assets/images/client3.jpg', 'https://ismailindustries.com.pk/'),
(4, 'Candyland', 'assets/images/client4.jpg', 'https://candyland.com.pk/'),
(5, 'Laziza International', 'assets/images/client5.jpg', 'https://www.lazizafoods.com/'),
(6, 'Vital Group', 'assets/images/client6.jpg', 'https://vitalshop.pk/'),
(7, 'Cambridge', 'assets/images/client7.jpg', 'https://thecambridgeshop.com/'),
(8, 'Zashko', 'assets/images/client8.jpg', 'https://zashko.com/');

-- --------------------------------------------------------

--
-- Table structure for table `influencer`
--

CREATE TABLE `influencer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contact` bigint(20) DEFAULT NULL,
  `inst_hand` varchar(255) DEFAULT NULL,
  `fb_page` varchar(255) DEFAULT NULL,
  `follow_insta` int(11) DEFAULT NULL,
  `likeFb` int(11) DEFAULT NULL,
  `positionFollower` varchar(255) DEFAULT NULL,
  `ageFollower` int(11) DEFAULT NULL,
  `chargePost` decimal(10,2) DEFAULT NULL,
  `chargeVideo` decimal(10,2) DEFAULT NULL,
  `typeBlog` text DEFAULT NULL,
  `storyView` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `influencer`
--

INSERT INTO `influencer` (`id`, `name`, `contact`, `inst_hand`, `fb_page`, `follow_insta`, `likeFb`, `positionFollower`, `ageFollower`, `chargePost`, `chargeVideo`, `typeBlog`, `storyView`) VALUES
(1, 'Hamza Ali', 12345678901, '0', '0', 5000, 0, 'Karachi', 27, 5000.00, 7000.00, 'Traveling', 4000),
(2, 'Fahad', 12345678902, 'Saeed Kahn', 'fahadBoss', 5000, 0, 'Karachi', 23, 2300.00, 2500.00, 'Street Video', 2000),
(3, 'Anas', 12345678123, 'Bilal', 'juttdikahani', 10000, 0, 'Pakistan', 21, 5000.00, 5500.00, 'Travelling', 8000),
(4, 'hamza', 12345678901, 'someone', 'sohamza', 5000, 4500, 'Islamabad', 25, 2000.00, 2000.00, 'travelling', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `image_url`, `year`, `created_at`) VALUES
(1, 'Mean3 Was Featured In Dawn.com As The Pakistan’s First IT Company To Takeover Times Square', 'In a historic moment for Pakistan’s thriving tech industry, Mean3 has achieved a monumental feat by becoming the first IT company to be featured at the iconic New York Times Square. This momentous occasion has cemented Mean3’s status as a rising star in the global tech landscape.', 'assets/images/news1.jpg', '2023', '2025-04-23 15:25:11'),
(2, 'Shopify Invites Mean3 to NYC as One of the Top 15 High-Value Agencies Around the World', 'The event hosted by Shopify in New York City was not just a meet-and-greet but a strategic assembly aimed at fostering close collaborations with some of the world’s most influential and high-value agencies, including Pakistan’s own Mean3 led by Abdul Hadi Siraj.', 'assets/images/news2.jpg', '2024', '2025-04-23 15:25:11'),
(3, 'Mean3 Partners with TechCrunch to Host Tech Summit 2025', 'Mean3 has partnered with TechCrunch to host the Tech Summit 2025 in Karachi, bringing together global tech leaders to discuss the future of innovation. This collaboration highlights Mean3’s growing influence in the tech ecosystem.', 'assets/images/news3.jpg', '2025', '2025-04-23 15:25:11'),
(4, 'Mean3 Wins Global Innovation Award at CES 2024', 'Mean3 was honored with the Global Innovation Award at CES 2024 for its groundbreaking work in ecommerce solutions. The award recognizes Mean3’s contributions to advancing technology on a global scale.', 'assets/images/news4.jpg', '2024', '2025-04-23 15:25:11');

-- --------------------------------------------------------

--
-- Table structure for table `placeorder`
--

CREATE TABLE `placeorder` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `phone` bigint(20) NOT NULL,
  `services` varchar(50) NOT NULL,
  `company` text NOT NULL,
  `budget` double NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `placeorder`
--

INSERT INTO `placeorder` (`id`, `name`, `email`, `phone`, `services`, `company`, `budget`, `message`) VALUES
(1, 'hamza', 'hamzashoukat125@gmail.com', 3368262919, 'mobile-app', 'onetech', 5, 'i want to make mobile app development but its urgent'),
(2, 'hamza', 'hamzashoukat125@gmail.com', 3368262919, 'ecommerce', 'onetech', 5, 'i want to make ecommerce website in urgent basis'),
(3, 'burhan', 'burhan@gmail.com', 1234568901, 'mobile-app', 'techin', 5, 'i want make mobile app');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumbnail_url` varchar(255) NOT NULL,
  `video_file_url` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `thumbnail_url`, `video_file_url`, `description`, `created_at`) VALUES
(1, 'Introduction to MEAN3 Services', 'assets/images/intro-mean3.jpg', 'assets/videos/intro-mean3.mp4', 'This video introduces the core services offered by MEAN3, showcasing our expertise in web development, ecommerce solutions, and digital marketing. Learn how we help businesses grow globally.', '2025-04-23 15:02:42'),
(2, 'Client Success Stories', 'assets/images/video2.jpg', 'assets/videos/video2.mp4', 'Hear from our satisfied clients as they share their success stories with MEAN3. Discover how our tailored solutions have driven their businesses to new heights.', '2025-04-23 15:02:42'),
(3, 'Behind the Scenes at MEAN3', 'assets/images/video3.jpg', 'assets/videos/video3.mp4', 'Get a glimpse behind the scenes at MEAN3. See our team in action as we collaborate to deliver innovative solutions for our clients.', '2025-04-23 15:02:42'),
(4, 'MEAN3 Web Development Tutorial', 'assets/images/video4.jpg', 'assets/videos/video4.mp4', 'A step-by-step tutorial on web development with MEAN3. Learn best practices and techniques to build modern, scalable web applications.', '2025-04-23 15:02:42'),
(5, 'Ecommerce Solutions with MEAN3', 'assets/images/video5.jpg', 'assets/videos/video5.mp4', 'Explore how MEAN3 provides cutting-edge ecommerce solutions. From Shopify to WooCommerce, we help businesses create seamless online stores.', '2025-04-23 15:02:42'),
(6, 'Digital Marketing Strategies by MEAN3', 'assets/images/video6.jpg', 'assets/videos/video6.mp4', 'Discover effective digital marketing strategies with MEAN3. This video covers SEO, social media marketing, and more to boost your online presence.', '2025-04-23 15:02:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `influencer`
--
ALTER TABLE `influencer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `placeorder`
--
ALTER TABLE `placeorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `influencer`
--
ALTER TABLE `influencer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `placeorder`
--
ALTER TABLE `placeorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
