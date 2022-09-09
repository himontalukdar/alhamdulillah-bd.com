-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 09, 2022 at 06:21 AM
-- Server version: 10.3.36-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alhamdul_alhamdulillah`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` int(11) NOT NULL,
  `cv_name` varchar(255) NOT NULL,
  `job_id` varchar(255) NOT NULL,
  `apply_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `cv_name`, `job_id`, `apply_date`) VALUES
(1, '31594 Mozahidul Islam.pdf', '1', '10-Jul-2021'),
(2, '76803 Mozahidul Islam.pdf', '2', '11-Jul-2021'),
(3, '49741 Md. Mahabub Hasan.pdf', '1', '12-Jul-2021'),
(4, '67342 Md. Mahabub Hasan.pdf', '2', '12-Jul-2021');

-- --------------------------------------------------------

--
-- Table structure for table `authentication`
--

CREATE TABLE `authentication` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authentication`
--

INSERT INTO `authentication` (`id`, `email`, `pwd`) VALUES
(1, 'himontalukdar@gmail.com', 'Badhon@15');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `expire_date` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `job_title`, `location`, `department`, `expire_date`, `status`) VALUES
(1, 'Junior Web Developer', 'Mirpur-Dhaka', 'Creative', '15/07/2021', '0'),
(2, 'Digital Marketing Manager', 'Mipur', 'Marketing', '15/07/2021', '0');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(15, 'Client Service'),
(16, 'Media'),
(17, 'Creative'),
(18, 'ADMIN & ACCOUNTS'),
(19, 'WEB DESIGN AND DEVELOPMENT'),
(20, 'IT SUPPORT'),
(21, 'FRONT DESK');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `company_name`, `company_image`) VALUES
(14, 'skitto', 'skitto.png'),
(17, 'Mirpur Science College', 'MSC.png'),
(18, 'Meghna-Group', 'Meghna-Group.jpg'),
(19, 'Abul-Khair', 'Abul-Khair.jpg'),
(20, 'BCCP', 'BCCP.jpg'),
(21, 'Uttara', 'Uttara.jpg'),
(22, 'Premear-Cement', 'Premear-cement.jpg'),
(23, 'Jamuna', 'Jamuna.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_mobile` int(20) NOT NULL,
  `user_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `employee_name` varchar(255) NOT NULL,
  `employee_post` varchar(255) NOT NULL,
  `employee_image` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `employee_name`, `employee_post`, `employee_image`, `category_id`) VALUES
(16, 'Shimul Hossain', 'Senior Developer', 'shimul.jpeg', 19),
(17, 'MOZAHIDUL ISLAM', 'IT Support Engineer', 'Mozahidul Islam.jpg', 20),
(18, '', '', 'blank_images.png', 21),
(19, 'Himon Talukdar', 'Manager-Digital Marketing & Client Service', 'IMG_20190121_203131.jpg', 15),
(20, 'Abu Jafar', 'Genarel Maneger', 'Abu Jafar.jpg', 18),
(23, 'MD SUJAN MIAH', 'Manager Media & PR Dept.', 'Ariful Islam Sujan.jpeg', 16),
(24, 'MD. MORSALIN', 'Asst. Manager Media & PR Dept.', '2.jpg', 16),
(25, 'Yaqub Ali', 'Client Service', 'Md. Yaqub Ali.jpg', 15),
(26, 'Mst. Farjana Hayat', 'Sr. Graphics Designer', 'mst farjana.jpeg', 17),
(29, 'Md. Mizanur Rahman', 'Maneger Accounts', 'Md. Mizanur Rahman.jpeg', 18);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `service_title` varchar(255) NOT NULL,
  `service_image` varchar(255) NOT NULL,
  `service_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service_title`, `service_image`, `service_details`) VALUES
(19, 'MARKETING STRATEGY', 'Marketing Strategy.jpg', ' It is a plan for the business to another level. We provide you with the best for superior service.'),
(20, 'BUSINESS TO BUSINESS ( B2B )', 'Business to Business ( B2B ).jpg', ' Business to business refers to a link between a company and individual customers that requires planning to be successful. We bring the best B2B planning for you to establish a good relationship with our client.'),
(21, 'PRODUCTION', 'Production.jpg', ' The power of digital marketing is enormous. So, we prove a wide range of platform or device to make the marketing more effective.'),
(22, 'CUSTOMERS ANALYTICS', 'Customers Analytics.jpg', 'A customer analytics helps to get insights into customers and what they expect from a product or service. We provide this customers analytics that allows the company in modeling, data visualization, information management, and more.'),
(23, 'MEDIA PLANNING & BUYING', 'Media Planning & Buying.jpg', ' This is associated with a marketing campaign where media buying add the advantage of negotiation. So, Reach Digital Marketing well concerns about this media planning and buying.'),
(24, 'CREATIVE DESIGN', 'Graphics Design.jpg', ' We provide graceful, unique and innovative design to engage customers that help to have a positive effect.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
