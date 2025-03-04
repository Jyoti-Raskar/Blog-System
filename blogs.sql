-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2025 at 06:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_content` text NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `short_content`, `content`, `image`, `author`, `category`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`) VALUES
(1, 'test', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis porro hic molestiae quae molestias nostrum, id eos quos velit ad atque quibusdam sunt sequi similique numquam possimus corporis omnis sit.', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...', 'jy.png', 'jyot', 'It', 'demo', 'fd', 'demo', '2025-03-01 22:40:40'),
(2, 'Data Structures: What if the wrong one was is right?', 'Most of the times, we pick up the perfect data structure (or so we think) but, how often do we realize it that our choice is the reason the code runs slower than a turtle and our program crashes harder than our motivation during finals? Big-O notations not saving you now?', 'The relative who overstays their welcome \r\nLinked lists according to me are very overhyped. Because we didn’t learn about their dark side. If you don’t agree with me, try to find an element in an unsorted linked list. You will find yourself scanning every single node! And congratulations, you have made your code do treasure hunt.', 'linklist.png', 'Aboli', 'IT', 'Software Development', 'Java, LinkList , Array, OOps Concepts', 'Java Data Structure Notes', '2025-03-02 04:52:39'),
(3, 'Social Engineering', 'The Hack You’ll Never See Coming—Because It’s Not Your Computer at Risk, It’s You', 'The Art Of Hacking Humans\r\nYou build a perfectly secured system. Encryption stronger than your coffee, a 32 character password which you won’t remember after a week. And to your shock, you can still get hacked.\r\nNot by some hoodie- hacker but a friendly email, a fake IT guy or a convincing call.\r\nAnd congratulations, you successfully became a victim of Social Engineering. It is the cyber attack that breaks into you.', 'social_engineering.png', 'Gauri', 'IT', 'Social Engineering', 'Hacking', 'Cyber security, Social Engineering, Cons, Pro.', '2025-03-02 05:00:09'),
(5, 'The Best DevOps Blogs', ' No matter what you\'re looking to learn more about (AI, Cloud, DevSecOps, & more), you can find it and much more in our collection of recent articles.', 'The term “DevOps” seems to be everywhere these days, but I’ve found that understanding what it truly means and how it’s applied in practice can be surprisingly tricky. It’s a broad term that touches on everything from cultural philosophies and automation tools to specific practices like continuous integration and infrastructure as code. It can mean different things to different teams and organizations.\r\n\r\nTo help you learn more about this versatile field, I’ve put together a list of some of the best DevOps blogs out there. These are the blogs that I turn to when I want clear explanations, consistent quality, real technical depth, and practical advice. Whether you’re a DevOps pro or just starting to explore this world, I’m confident you’ll find value in these blogs.\r\n\r\nBefore we dive into the details of each blog, here’s a quick overview of the 27 best DevOps blogs I’ve uncovered:', '1740918406_127ced0d6f59656a5692.png', ' keanan', 'd', 'Devops', 'Security , Development', ' No matter what you\'re looking to learn more about (AI, Cloud, DevSecOps, & more), you can find it and much more in our collection of recent articles.', '2025-03-02 06:56:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
