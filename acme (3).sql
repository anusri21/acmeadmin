-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 21, 2018 at 08:13 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acme`
--

-- --------------------------------------------------------

--
-- Table structure for table `acme-course`
--

DROP TABLE IF EXISTS `acme-course`;
CREATE TABLE IF NOT EXISTS `acme-course` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `coursecode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coursename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startdate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enddate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `acme-course`
--

INSERT INTO `acme-course` (`id`, `coursecode`, `coursename`, `category`, `description`, `startdate`, `enddate`, `status`, `created_at`, `updated_at`) VALUES
(1, '12345', 'Laravel', 'java course', 'course', '2018-11-15', '2018-11-16', 1, '2018-11-13 02:38:21', '2018-11-13 02:52:40'),
(2, '1001', 'dotnet', 'java course', '', '2018-11-15', '2019-01-17', 1, '2018-11-14 02:51:00', NULL),
(3, '2001', 'java', 'java course', 'desc', '2018-11-15', '2018-12-30', 1, '2018-11-15 06:13:43', NULL),
(4, '2002', 'software testing', 'Testing', 'desc', '2018-11-16', '2018-12-28', 1, '2018-11-15 06:14:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `acme-enquiry`
--

DROP TABLE IF EXISTS `acme-enquiry`;
CREATE TABLE IF NOT EXISTS `acme-enquiry` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alternate_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alternate_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_batch` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enquiry` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doj` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_class` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_syllabus` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_school` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `acme-enquiry`
--

INSERT INTO `acme-enquiry` (`id`, `name`, `email`, `phone`, `alternate_email`, `alternate_phone`, `course`, `course_batch`, `enquiry`, `doj`, `address`, `reference`, `comments`, `student_name`, `student_class`, `student_syllabus`, `student_school`, `status`, `created_at`, `updated_at`) VALUES
(1, 'acme', 'acme@gmail.com', '9898989898', '', '9898989898', '1,2', '', 'self', '', '', '0', '', '', '', '', '', 1, '2018-11-13 02:41:02', NULL),
(2, 'student', 'acme@gmail.com', '9898989898', 'user@gmail.com', '9898989899', '  Laravel , dotnet  ', '', 'self', '2018-11-23', 'chennai', 'internet', 'good', 'acme', '2', 'stateboard', 'school', 1, '2018-11-14 02:52:17', NULL),
(3, 'acme', 'acme@gmail.com', '9898989898', 'user@gmail.com', '9898989898', '  Laravel  ', 'self', 'self', '2018-11-10', 'chennai', 'internet', 'good', 'acme', '2', 'stateboard', 'school', 1, '2018-11-14 07:26:32', NULL),
(4, 'acme', 'acme@gmail.com', '9898989898', 'user@gmail.com', '9898989898', '  dotnet  ', 'morning', 'self', '2018-11-10', 'chennai', 'facebook', 'good', 'acme', '2', 'stateboard', 'school', 1, '2018-11-14 07:29:11', NULL),
(5, 'sri', 'sri@gmail.com', '9898989896', 'anu@gmail.com', '9696969698', ' 1,2 ', NULL, 'self', '2018-11-12', 'chennai', 'internet', 'good', '', '', '', '', 1, '2018-11-16 02:33:03', NULL),
(6, 'acme enquiry', 'acme@gmail.com', '9898989898', 'user@gmail.com', '9898989898', '  2 , 3 , 4  ', NULL, 'self', '2018-11-02', 'chennai', 'internet', 'good', 'acme', '2', 'stateboard', 'school', 1, '2018-11-16 02:35:26', NULL),
(7, 'admin', 'admin@gmail.com', '9898989898', '', '9898989898', 'Laravel,dotnet', NULL, 'son', '2018-11-22', 'chennai', 'facebook', 'good', '', '', '', '', 1, '2018-11-16 03:57:46', '2018-11-16 03:58:05');

-- --------------------------------------------------------

--
-- Table structure for table `acme-payment`
--

DROP TABLE IF EXISTS `acme-payment`;
CREATE TABLE IF NOT EXISTS `acme-payment` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paymentmethod` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paymentapplied` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datarecived` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `acme-paymentdetails`
--

DROP TABLE IF EXISTS `acme-paymentdetails`;
CREATE TABLE IF NOT EXISTS `acme-paymentdetails` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `acme-paymentdetails`
--

INSERT INTO `acme-paymentdetails` (`id`, `payment_type`, `payment_category`, `username`, `amount`, `phone`, `payment_method`, `date`, `comments`, `status`, `created_at`, `updated_at`) VALUES
(1, 'income', 'fees', 'acme', '1500', '9898989898', 'cod', '2018-11-14', 'good', 1, '2018-11-16 02:13:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `acme-pdf`
--

DROP TABLE IF EXISTS `acme-pdf`;
CREATE TABLE IF NOT EXISTS `acme-pdf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pdf_category` int(11) NOT NULL,
  `pdf_title` varchar(191) NOT NULL,
  `pdf_desc` varchar(191) NOT NULL,
  `pdf_path` varchar(191) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acme-pdf`
--

INSERT INTO `acme-pdf` (`id`, `pdf_category`, `pdf_title`, `pdf_desc`, `pdf_path`, `created_at`, `updated_at`) VALUES
(1, 1, 'pdf title', 'pdf description', 'pdf1.pdf', '2018-12-18 10:52:17', NULL),
(2, 1, 'java title', 'java descdc', 'pdf2.pdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `acme-pdfcatgeory`
--

DROP TABLE IF EXISTS `acme-pdfcatgeory`;
CREATE TABLE IF NOT EXISTS `acme-pdfcatgeory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(191) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acme-pdfcatgeory`
--

INSERT INTO `acme-pdfcatgeory` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Java', '2018-12-18 09:38:30', '2018-12-18 09:53:06'),
(2, 'PHP', '2018-12-18 09:49:26', NULL),
(3, 'Laravel', '2018-12-18 09:49:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `acme-staff`
--

DROP TABLE IF EXISTS `acme-staff`;
CREATE TABLE IF NOT EXISTS `acme-staff` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` int(11) NOT NULL,
  `qualification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staffimage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `acme-student`
--

DROP TABLE IF EXISTS `acme-student`;
CREATE TABLE IF NOT EXISTS `acme-student` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `bloodgroup` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_school` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_syllabus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_class` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admission_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admission_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doj` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_occupation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `batch_schedule`
--

DROP TABLE IF EXISTS `batch_schedule`;
CREATE TABLE IF NOT EXISTS `batch_schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `batch_name` varchar(55) NOT NULL,
  `start_time` varchar(55) NOT NULL,
  `end_time` varchar(55) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch_schedule`
--

INSERT INTO `batch_schedule` (`id`, `course_id`, `batch_name`, `start_time`, `end_time`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Evening', '3:00 PM', '5:00 PM', 1, '2018-11-14 11:35:40', '2018-11-16 13:05:05'),
(2, 2, 'Evening', '3:00 PM', '5:00 PM', 1, '2018-11-14 11:43:03', NULL),
(3, 3, 'Morning', '2:00 PM', '4:00 PM', 0, '2018-11-15 13:08:04', '2018-11-16 13:13:10'),
(4, 1, 'Evening', '7:00 PM', '7:00 PM', 1, '2018-11-15 13:24:53', NULL),
(5, 4, 'Evening', '6:00 PM', '8:00 PM', 1, '2018-11-16 10:08:10', NULL),
(6, 1, 'morning', '11:00 AM', '2:00 PM', 1, '2018-11-16 11:59:38', NULL),
(7, 4, 'Evening', '3:00 PM', '5:00 PM', 1, '2018-11-16 12:07:06', NULL),
(8, 4, 'Morning', '10:00 AM', '12:00 PM', 1, '2018-11-16 12:12:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_category`
--

DROP TABLE IF EXISTS `course_category`;
CREATE TABLE IF NOT EXISTS `course_category` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_category`
--

INSERT INTO `course_category` (`id`, `category`, `status`, `created_at`, `updated_at`) VALUES
(1, 'java course', 1, '2018-11-13 02:27:08', '2018-11-13 02:32:31'),
(2, 'php', 1, '2018-11-13 04:11:49', NULL),
(3, 'Testing', 1, '2018-11-15 06:14:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_10_10_064334_create_login_table', 1),
(4, '2018_10_10_083831_create_roles_table', 1),
(5, '2018_10_10_091120_create_role_users_table', 1),
(6, '2018_10_10_093339_create_throttle_table', 1),
(7, '2018_10_11_123657_create_staff_table', 1),
(8, '2018_10_12_045212_create_acme-student_table', 1),
(9, '2018_10_15_074751_create_acme-course_table', 1),
(10, '2018_10_16_064631_create_acme-enquiry_table', 1),
(11, '2018_10_17_045024_create_acme-payment_table', 1),
(12, '2018_10_17_104128_create_acme-staff_table', 1),
(13, '2018_10_18_063257_create_acme-payment-details_table', 1),
(14, '2018_11_13_075132_create_course_category_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

DROP TABLE IF EXISTS `role_users`;
CREATE TABLE IF NOT EXISTS `role_users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` int(11) NOT NULL,
  `qualification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staffimage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_course`
--

DROP TABLE IF EXISTS `student_course`;
CREATE TABLE IF NOT EXISTS `student_course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `course_id` int(55) NOT NULL,
  `course_price` varchar(55) NOT NULL,
  `discount` varchar(55) NOT NULL,
  `payment_mode` varchar(55) NOT NULL,
  `payment_desc` varchar(55) NOT NULL,
  `course_batch` varchar(555) NOT NULL,
  `comments` varchar(55) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_course`
--

INSERT INTO `student_course` (`id`, `student_id`, `course_id`, `course_price`, `discount`, `payment_mode`, `payment_desc`, `course_batch`, `comments`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 4, '5000', '25', 'paypal', 'descriiption', '1', 'good', 1, '2018-11-16 05:52:41', '2018-11-16 10:26:47'),
(2, 2, 2, '2500', '12', 'cod', 'desc', '1', 'dfs', 1, '2018-11-16 05:52:41', '2018-11-16 07:25:16'),
(3, 1, 3, '5000', '1', 'paypal', 'dsfds', '2', 'dsd', 1, '2018-11-16 05:52:41', NULL),
(4, 5, 1, '199', '1', 'cod', 'dsfsf', '1', 'sdfdsfdf', 0, '2018-11-16 05:55:47', '2018-11-16 11:24:30'),
(5, 5, 2, '2000', '1', 'cod', 'asdasd', '2', 'sadasdd', 1, '2018-11-16 05:55:47', NULL),
(6, 6, 2, '100', '12', 'paypal', 'sdfs', '2', 'good', 1, '2018-11-16 07:41:04', NULL),
(7, 6, 3, '2900', '20', 'paypal', 'cfxdf', '4', 'dss', 1, '2018-11-16 07:41:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_lines`
--

DROP TABLE IF EXISTS `student_lines`;
CREATE TABLE IF NOT EXISTS `student_lines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `course_name` varchar(55) NOT NULL,
  `batch_name` varchar(55) NOT NULL,
  `start_time` varchar(55) NOT NULL,
  `end_time` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

DROP TABLE IF EXISTS `throttle`;
CREATE TABLE IF NOT EXISTS `throttle` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `ip` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `mobile`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', '999999999', 'admin@gmail.com', '$2y$10$aueC/hZsMJT5SNaRv840VO9quvdCl8dNDaewuVxxvl7jaVzVu4GR6', 'Q5SngOc6iq0MHQncY16AtAV8mfSEQNH26Y7OugAStwZ0p7Ii00aXhixvvnXD', '2018-11-13 02:23:34', '2018-11-13 02:23:34'),
(2, 1, 'acme', '9898989', 'acme@gmail.com', '$2y$10$80DsPoeFxqAff/KFv77smOrO88DWKrbLzGrftqsS3S5MTnWu8xsMu', NULL, '2018-11-21 05:21:47', '2018-11-21 05:21:47'),
(3, 1, 'anu', '9090909090', 'anu@gmail.com', '$2y$10$Nkv1QMyslewSESHtT5U5q.4KrL5qSl7OkcwtucukZyqozHI7vYW4S', NULL, NULL, NULL),
(4, 2, 'user', '8989898989', 'staff@gmail.com', '$2y$10$T9LLSr/b8opiECR8inVB.eqvIilsze5EdLTamRdY.x..p1dPgKGkG', 'vuxj19MwLVXGQnkwjPhUTmwyKg2AsmbF6OoW57X0POY3qzimH4tiaOLiNvh4', '2018-12-18 01:17:10', '2018-12-18 01:17:10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
