-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 05, 2021 at 03:52 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `questionbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_08_26_140117_create_questions_table', 1),
(5, '2021_08_26_141905_create_questions_table', 2),
(6, '2021_08_31_165626_create_subjects_table', 3),
(7, '2021_09_02_160403_create_topics_table', 4);

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
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `course_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark` int(11) NOT NULL,
  `difficulty_level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=99 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `user_id`, `course_title`, `course_code`, `question`, `mark`, `difficulty_level`, `created_at`, `updated_at`) VALUES
(1, 1, 'Software Engineering', 'CSE 201', 'What is computer software?', 2, 'easy', '2021-08-30 09:43:32', '2021-08-30 09:43:32'),
(2, 1, 'Software Engineering', 'CSE 201', 'Can you differentiate computer software and computer program?', 2, 'easy', '2021-08-30 09:44:07', '2021-08-30 09:44:07'),
(3, 1, 'Software Engineering', 'CSE 201', 'What is software engineering?', 2, 'easy', '2021-08-30 10:00:42', '2021-08-30 10:00:42'),
(4, 1, 'Software Engineering', 'CSE 201', 'When you know programming, what is the need to learn software engineering concepts?', 2, 'easy', '2021-08-30 10:10:27', '2021-08-30 10:10:27'),
(5, 1, 'Software Engineering', 'CSE 201', 'Who is software project manager?', 2, 'easy', '2021-08-30 10:11:08', '2021-08-30 10:11:08'),
(6, 1, 'Software Engineering', 'CSE 201', 'What does software project manager do?', 2, 'easy', '2021-08-30 10:11:35', '2021-08-30 10:11:35'),
(7, 1, 'Software Engineering', 'CSE 201', 'What is software project management?', 2, 'easy', '2021-08-30 10:12:17', '2021-08-30 10:12:17'),
(8, 1, 'Software Engineering', 'CSE 201', 'What is software process or Software Development Life Cycle (SDLC)?', 3, 'medium', '2021-08-30 10:12:54', '2021-08-30 10:12:54'),
(9, 1, 'Software Engineering', 'CSE 201', 'What is software scope?', 3, 'medium', '2021-08-30 10:13:28', '2021-08-30 10:13:28'),
(10, 1, 'Software Engineering', 'CSE 201', 'What is project estimation?', 3, 'medium', '2021-08-30 10:13:46', '2021-08-30 10:13:46'),
(11, 1, 'Software Engineering', 'CSE 201', 'How can we derive the size of software product?', 3, 'medium', '2021-08-30 10:14:09', '2021-08-30 10:14:09'),
(12, 1, 'Software Engineering', 'CSE 201', 'What are function points?', 3, 'medium', '2021-08-30 10:14:27', '2021-08-30 10:14:27'),
(13, 1, 'Software Engineering', 'CSE 201', 'What are software project estimation techniques available?', 3, 'medium', '2021-08-30 10:14:44', '2021-08-30 10:14:44'),
(14, 1, 'Software Engineering', 'CSE 201', 'What is Software configuration management?', 3, 'medium', '2021-08-30 10:15:02', '2021-08-30 10:15:02'),
(15, 1, 'Software Engineering', 'CSE 201', 'What is change control?', 3, 'hard', '2021-08-30 10:15:43', '2021-08-30 10:15:43'),
(16, 1, 'Software Engineering', 'CSE 201', 'How can you measure project execution?', 3, 'hard', '2021-08-30 10:16:09', '2021-08-30 10:16:09'),
(17, 1, 'Software Engineering', 'CSE 201', 'Mention some project management tools.', 3, 'hard', '2021-08-30 10:16:41', '2021-08-30 10:16:41'),
(18, 1, 'Software Engineering', 'CSE 201', 'What are software requirements?', 4, 'easy', '2021-08-30 10:17:41', '2021-08-30 10:17:41'),
(19, 1, 'Software Engineering', 'CSE 201', 'What is feasibility study?', 4, 'easy', '2021-08-30 10:17:58', '2021-08-30 10:17:58'),
(20, 1, 'Software Engineering', 'CSE 201', 'How can you gather requirements?', 4, 'easy', '2021-08-30 10:18:14', '2021-08-30 10:18:14'),
(21, 1, 'Software Engineering', 'CSE 201', 'What is SRS?', 4, 'easy', '2021-08-30 10:18:30', '2021-08-30 10:18:30'),
(22, 1, 'Software Engineering', 'CSE 201', 'What are functional requirements?', 4, 'easy', '2021-08-30 10:20:08', '2021-08-30 10:20:08'),
(23, 1, 'Software Engineering', 'CSE 201', 'What are non-functional requirements?', 4, 'easy', '2021-08-30 10:20:24', '2021-08-30 10:20:24'),
(24, 1, 'Software Engineering', 'CSE 201', 'What are SDLC models available?', 4, 'easy', '2021-08-30 10:21:14', '2021-08-30 10:21:14'),
(25, 1, 'Software Engineering', 'CSE 201', 'What are various phases of SDLC?', 5, 'hard', '2021-08-30 10:22:10', '2021-08-30 10:22:10'),
(26, 1, 'Software Engineering', 'CSE 201', 'Which SDLC model is the best?', 5, 'hard', '2021-08-30 10:22:41', '2021-08-30 10:22:41'),
(27, 1, 'Software Engineering', 'CSE 201', 'What is software measure?', 5, 'hard', '2021-08-30 10:23:19', '2021-08-30 10:23:19'),
(28, 1, 'Software Engineering', 'CSE 201', 'What is software metric?', 5, 'hard', '2021-08-30 10:23:35', '2021-08-30 10:23:35'),
(29, 1, 'Software Engineering', 'CSE 301', 'What is modularization?', 5, 'hard', '2021-08-30 10:23:59', '2021-08-30 10:23:59'),
(30, 1, 'Software Engineering', 'CSE 301', 'What is modularization?', 5, 'hard', '2021-08-30 10:23:59', '2021-08-30 10:23:59'),
(31, 1, 'Software Engineering', 'CSE 201', 'What is concurrency and how it is achieved in software?', 5, 'hard', '2021-08-30 10:24:19', '2021-08-30 10:24:19'),
(32, 1, 'Software Engineering', 'CSE 201', 'Briefly define top-down and bottom-up design model.', 4, 'medium', '2021-08-30 11:18:55', '2021-08-30 11:18:55'),
(33, 1, 'Software Engineering', 'CSE 301', 'What is the basis of Halstead’s complexity measure?', 4, 'medium', '2021-08-30 11:19:12', '2021-08-30 11:19:12'),
(34, 1, 'Software Engineering', 'CSE 201', 'Mention the formula to calculate Cyclomatic complexity of a program?', 4, 'medium', '2021-08-30 11:19:29', '2021-08-30 11:19:29'),
(35, 1, 'Software Engineering', 'CSE 201', 'What is functional programming?', 4, 'medium', '2021-08-30 11:19:49', '2021-08-30 11:19:49'),
(36, 1, 'Software Engineering', 'CSE 201', 'Differentiate validation and verification?', 4, 'hard', '2021-08-30 11:20:14', '2021-08-30 11:20:14'),
(37, 1, 'Software Engineering', 'CSE 301', 'What is black-box and white-box testing?', 4, 'hard', '2021-08-30 11:20:41', '2021-08-30 11:20:41'),
(38, 1, 'Software Engineering', 'CSE 201', 'What is black-box and white-box testing?', 4, 'hard', '2021-08-30 11:20:54', '2021-08-30 11:20:54'),
(39, 1, 'Software Engineering', 'CSE 201', 'Describe the difference between Interface-oriented, Object-oriented and Aspect-oriented programming', 6, 'easy', '2021-08-31 12:59:14', '2021-08-31 12:59:14'),
(40, 1, 'Software Engineering', 'CSE 201', 'What is the difference between stack and queue?', 5, 'easy', '2021-08-31 13:45:32', '2021-08-31 13:45:32'),
(41, 1, 'Software Engineering', 'CSE 201', 'Describe waterfall model', 8, 'hard', '2021-09-02 10:58:39', '2021-09-02 10:58:39'),
(42, 1, 'Software Engineering', 'CSE 201', 'Develop an algorithm that output your current location and a list of ATMs locations in that area. Get you the closest K ATMs to your location.', 10, 'medium', '2021-09-02 14:20:22', '2021-09-02 14:20:22'),
(43, 1, 'Software Engineering', 'CSE 201', 'Is it possible to execute multiple catch blocks for a single try statement?', 10, 'medium', '2021-09-02 14:20:56', '2021-09-02 14:20:56'),
(44, 1, 'Software Engineering', 'CSE 201', 'Where is a protected class-level variable available?\r\n', 10, 'easy', '2021-09-02 14:21:37', '2021-09-02 14:21:37'),
(84, 1, 'Software Engineering', 'CSE 201', 'what is software?', 2, 'medium', '2021-09-03 11:58:39', '2021-09-03 11:58:39'),
(45, 1, 'Software Engineering', 'CSE 201', ' Where is a protected class-level variable available?\r\n', 10, 'easy', '2021-09-02 14:21:37', '2021-09-02 14:21:37'),
(46, 1, 'Operating System', 'CSE 201', 'Why is the operating system important?', 10, 'easy', '2021-09-02 14:26:24', '2021-09-02 14:26:24'),
(47, 1, 'Operating System', 'CSE 201', 'What\'s the main purpose of an OS? What are the different types of OS?', 10, 'easy', '2021-09-02 14:26:42', '2021-09-02 14:26:42'),
(48, 1, 'Operating System', 'CSE 301', 'What are the benefits of a multiprocessor system?', 10, 'medium', '2021-09-02 14:27:11', '2021-09-02 14:27:11'),
(49, 1, 'Operating System', 'CSE 301', 'What is GUI?', 10, 'medium', '2021-09-02 14:27:42', '2021-09-02 14:27:42'),
(50, 1, 'Software Engineering', 'CSE 201', 'Explain the concept of cloud computing', 6, 'easy', '2021-09-02 14:33:18', '2021-09-02 14:33:18'),
(51, 1, 'Software Engineering', 'CSE 201', 'Explain the concept of cloud computing', 6, 'easy', '2021-09-02 14:33:18', '2021-09-02 14:33:18'),
(52, 1, 'Software Engineering', 'CSE 201', 'What is software analysis and design tools?', 5, 'easy', '2021-09-03 06:18:04', '2021-09-03 06:18:04'),
(53, 1, 'Software Engineering', 'CSE 201', 'Explain data flow diagram', 5, 'easy', '2021-09-03 06:18:31', '2021-09-03 06:18:31'),
(54, 1, 'Software Engineering', 'CSE 201', 'Explain data flow diagram', 5, 'easy', '2021-09-03 06:18:31', '2021-09-03 06:18:31'),
(55, 1, 'Software Engineering', 'CSE 201', 'Mention the types of data flow diagram', 5, 'easy', '2021-09-03 06:18:59', '2021-09-03 06:18:59'),
(56, 1, 'Software Engineering', 'CSE 201', 'What are the approaches of software designing', 5, 'medium', '2021-09-03 06:20:23', '2021-09-03 06:20:23'),
(57, 1, 'Software Engineering', 'CSE 201', 'Explain the meaning of software danger and its importance in concerned of software engineering', 10, 'hard', '2021-09-03 06:22:21', '2021-09-03 06:22:21'),
(58, 1, 'Software Engineering', 'CSE 201', 'Describe the importance of software Engineering? What should be steps taken under the process of developing a software system', 10, 'hard', '2021-09-03 06:22:54', '2021-09-03 06:22:54'),
(59, 1, 'Software Engineering', 'CSE 201', 'Explain the principles which play a major role in development of software', 10, 'easy', '2021-09-03 06:25:06', '2021-09-03 06:25:06'),
(60, 1, 'Software Engineering', 'CSE 201', 'What are the benefits of metrics in software engineering?', 3, 'easy', '2021-09-03 06:44:20', '2021-09-03 06:44:20'),
(61, 1, 'Software Engineering', 'CSE 201', 'Explain the term Configuration management.', 3, 'easy', '2021-09-03 06:45:59', '2021-09-03 06:45:59'),
(62, 1, 'Software Engineering', 'CSE 201', 'Write a short note on review process.', 3, 'easy', '2021-09-03 06:46:18', '2021-09-03 06:46:18'),
(63, 1, 'Software Engineering', 'CSE 201', 'Define the blue print methodology', 3, 'easy', '2021-09-03 06:46:50', '2021-09-03 06:46:50'),
(64, 1, 'Software Engineering', 'CSE 201', 'Give your views about what is more important - the product or the process.', 3, 'easy', '2021-09-03 06:47:21', '2021-09-03 06:47:21'),
(65, 1, 'Software Engineering', 'CSE 201', 'Write a short note on Software Testing process.', 3, 'easy', '2021-09-03 06:47:57', '2021-09-03 06:47:57'),
(66, 1, 'Software Engineering', 'CSE 201', 'Give the detail of quality parameters which are used in a software system', 3, 'easy', '2021-09-03 06:48:17', '2021-09-03 06:48:17'),
(67, 1, 'Software Engineering', 'CSE 201', 'Explain software reliability and define how software and hardware reliability related to each other.', 3, 'hard', '2021-09-03 06:49:21', '2021-09-03 06:49:21'),
(68, 1, 'Software Engineering', 'CSE 201', 'Give a description of prototyping model', 3, 'hard', '2021-09-03 06:50:08', '2021-09-03 06:50:08'),
(69, 1, 'Software Engineering', 'CSE 201', 'What is analysis package?', 3, 'hard', '2021-09-03 06:52:49', '2021-09-03 06:52:49'),
(70, 1, 'Software Engineering', 'CSE 201', 'What is spike solution in XP?', 2, 'hard', '2021-09-03 06:56:28', '2021-09-03 06:56:28'),
(71, 1, 'Software Engineering', 'CSE 201', 'Describe agility for software projects', 2, 'hard', '2021-09-03 06:57:00', '2021-09-03 06:57:00'),
(72, 1, 'Software Engineering', 'CSE 201', 'What is feasibility study?', 2, 'hard', '2021-09-03 08:41:22', '2021-09-03 08:41:22'),
(73, 1, 'Operating System', 'CSE 301', 'What is RAID structure in OS? What are the different levels of RAID configuration?', 10, 'hard', '2021-09-03 08:44:32', '2021-09-03 08:44:32'),
(74, 1, 'Operating System', 'CSE 301', 'What is a Pipe and when it is used?', 10, 'medium', '2021-09-03 08:44:57', '2021-09-03 08:44:57'),
(75, 1, 'Operating System', 'CSE 301', 'What is a bootstrap program in OS?', 10, 'easy', '2021-09-03 08:45:34', '2021-09-03 08:45:34'),
(76, 1, 'Operating System', 'CSE 301', 'What do you mean by process synchronization?', 10, 'easy', '2021-09-03 08:45:55', '2021-09-03 08:45:55'),
(77, 1, 'Operating System', 'CSE 301', 'What is different between main memory and secondary memory?', 10, 'easy', '2021-09-03 08:46:16', '2021-09-03 08:46:16'),
(78, 1, 'Operating System', 'CSE 301', 'What is a process? What are the different states of a process?', 10, 'easy', '2021-09-03 08:46:46', '2021-09-03 08:46:46'),
(79, 1, 'Operating System', 'CSE 301', 'What is the difference between paging and segmentation?', 10, 'medium', '2021-09-03 08:47:10', '2021-09-03 08:47:10'),
(80, 1, 'Operating System', 'CSE 301', 'What is the main objective of multiprogramming?', 10, 'medium', '2021-09-03 08:47:50', '2021-09-03 08:47:50'),
(81, 1, 'Software Engineering', 'CSE 201', 'What errors are commonly found during unit testing?', 5, 'medium', '2021-09-03 08:51:25', '2021-09-03 08:51:25'),
(82, 1, 'Software Engineering', 'CSE 201', 'What is \"critical module\" ?', 5, 'medium', '2021-09-03 08:52:11', '2021-09-03 08:52:11'),
(83, 1, 'Software Engineering', 'CSE 201', 'Why is debugging so difficult?', 5, 'medium', '2021-09-03 08:52:47', '2021-09-03 08:52:47'),
(85, 1, 'Software Engineering', 'CSE 201', 'what is software?', 2, 'medium', '2021-09-03 11:58:39', '2021-09-03 11:58:39'),
(86, 1, 'Software Engineering', 'CSE 201', 'what is unified process?', 2, 'easy', '2021-09-03 11:59:22', '2021-09-03 11:59:22'),
(87, 1, 'Operating System', 'CSE 301', 'what is deadlock?', 5, 'hard', '2021-10-05 00:36:44', '2021-10-05 00:36:44'),
(88, 1, 'Software Engineering', 'CSE 201', 'What is the disadvantage of waterfall model?', 6, 'easy', '2021-10-05 03:21:47', '2021-10-05 03:21:47'),
(89, 1, 'Software Engineering', 'CSE 201', 'How does class diagram work?', 6, 'easy', '2021-10-05 03:22:08', '2021-10-05 03:22:08'),
(90, 1, 'Software Engineering', 'CSE 201', 'What is the difference between prototyping and incremental process model?', 6, 'easy', '2021-10-05 03:23:14', '2021-10-05 03:23:14'),
(91, 1, 'Software Engineering', 'CSE 201', 'State the characteristics of software', 6, 'easy', '2021-10-05 03:23:45', '2021-10-05 03:23:45'),
(92, 1, 'Software Engineering', 'CSE 201', 'How will you execute interface testing?', 6, 'easy', '2021-10-05 05:37:55', '2021-10-05 05:37:55'),
(93, 1, 'Software Engineering', 'CSE 201', 'Differentiate between prescriptive and evolutionary process model', 8, 'medium', '2021-10-05 05:40:31', '2021-10-05 05:40:31'),
(94, 1, 'Software Engineering', 'CSE 201', 'Draw a activity diagram for library management system', 8, 'medium', '2021-10-05 05:42:03', '2021-10-05 05:42:03'),
(95, 1, 'Software Engineering', 'CSE 201', 'Draw a use case diagram for blood donation management system', 8, 'easy', '2021-10-05 05:42:29', '2021-10-05 05:42:29'),
(96, 1, 'Software Engineering', 'CSE 201', 'Why doesn\'t software \"wear out\" ?', 3, 'medium', '2021-10-05 06:57:00', '2021-10-05 06:57:00'),
(97, 1, 'Software Engineering', 'CSE 201', 'State any two myth of customer.', 3, 'easy', '2021-10-05 06:57:28', '2021-10-05 06:57:28'),
(98, 1, 'Software Engineering', 'CSE 201', 'What is umbrella acitivies?', 3, 'hard', '2021-10-05 06:57:47', '2021-10-05 06:57:47');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `user_id`, `title`, `course_id`, `topic`, `created_at`, `updated_at`) VALUES
(1, 1, 'Software Engineering', 'CSE 201', NULL, '2021-08-31 13:33:45', '2021-08-31 13:33:45'),
(2, 1, 'Operating System', 'CSE 301', NULL, '2021-08-31 13:45:54', '2021-08-31 13:45:54'),
(3, 1, 'Numerical Methods', 'CSE 205', NULL, '2021-08-31 13:46:11', '2021-08-31 13:46:11');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

DROP TABLE IF EXISTS `topics`;
CREATE TABLE IF NOT EXISTS `topics` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `topic_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `user_id`, `topic_name`, `title`, `course_code`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Software Development Models & Architecture', 'Software Engineering', 'CSE 201', NULL, '2021-09-02 10:41:00', '2021-09-02 10:41:00'),
(2, 1, 'Software Project Management(SPM)', 'Software Engineering', 'CSE 201', NULL, '2021-09-02 10:41:42', '2021-09-02 10:41:42'),
(3, 1, 'testing', 'Software Engineering', 'CSE 201', NULL, '2021-10-05 07:48:41', '2021-10-05 07:48:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user_1', 'test@mail.com', NULL, '$2y$10$yqQlbiw3DYGcv858G8Nph.U9ENoUTR/pB6BWMReGtd82Gplw3LUae', '5YjPCu3wFo8i0JGY3uxHivFzJ2isq9TIHL5rbcefk7z3EVqGsKpUvopKpQAL', '2021-08-27 05:43:38', '2021-08-27 05:43:38');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
