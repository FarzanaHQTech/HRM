
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2024 at 06:29 PM
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
-- Database: `hrm_project`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `allemployeeview`
-- (See below for the actual view)
--
CREATE TABLE `allemployeeview` (
`id` int(11)
,`first_name` varchar(50)
,`last_name` varchar(50)
,`username` varchar(50)
,`image` varchar(100)
,`email` varchar(100)
,`mobile` varchar(50)
,`department` varchar(255)
,`designation` varchar(100)
,`role` varchar(50)
,`dob` date
,`address` varchar(100)
,`gender` varchar(50)
,`martial_status` varchar(100)
,`joining_date` date
,`terminated_date` date
,`basic_salary` decimal(10,2)
,`experience` varchar(100)
,`status` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `client_name` varchar(150) DEFAULT NULL,
  `image` varchar(200) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `designation` varchar(100) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `client_name`, `image`, `email`, `phone`, `password`, `project_id`, `designation`, `company_id`, `created_at`, `updated_at`) VALUES
(1, 'Barry Rud', 'avatar-2.jpg', 'barry@gmail.com', '+9293484475', 'barry123', 1, '', 2, '2024-11-25 14:39:43', '2024-11-25 18:20:32'),
(2, 'Devid', 'devid.jpg', 'devid@gmial.com', '+92893847145', '123456', NULL, '', 2, '2024-11-25 17:52:13', '2024-11-25 17:52:13'),
(3, 'Walid khan', 'walid-khan.jpg', 'khan@gmail.com', '01994209831', '123456', NULL, '', 2, '2024-11-25 17:53:54', '2024-11-25 17:53:54'),
(4, 'Tulip', 'tulip.jpg', 'tulip@gmai.com', '01763553803', '12345', NULL, '', 1, '2024-11-25 18:25:28', '2024-11-25 18:25:28'),
(5, 'Rubi', 'rubi.jpg', 'rubi@gmail.com', '01763553803', 'rubi123', NULL, 'Project Manager', 2, '2024-11-26 12:43:36', '2024-11-26 12:43:36'),
(6, 'Barry Rud', 'avatar-2.jpg', 'barry@gmail.com', '+9293484475', 'barry123', 1, 'CEO', 2, '2024-11-25 14:39:43', '2024-11-25 18:20:32');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `company_name` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `postal_code` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `url` varchar(2550) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `company_name`, `address`, `country`, `mobile`, `postal_code`, `email`, `url`, `updated_at`, `created_at`) VALUES
(1, 'FarzTechnology', '7 Bussy street, Gulshan,Dhaka-1207', 'Bangladesh', '9875432', '1207', 'techportal@gmail.com', 'https://www.company.com', '2024-11-18 20:59:28', '2024-11-18 20:40:19'),
(2, 'Glabal Technologies', 'Hena road,Mirpur-10', 'Bangladesh', '+91283982', '1234', 'gob12@gami.com', 'https//www.global.com', '2024-11-20 20:17:40', '2024-11-20 20:17:40');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `department_name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`, `description`, `company_id`, `created_at`, `updated_at`) VALUES
(1, 'Web Development', 'Depeloping', 1, '2024-11-21 14:56:10', '2024-11-24 13:31:34'),
(2, 'App Development', 'Deal with Website projects', NULL, '2024-11-21 14:57:04', '2024-11-24 14:17:35'),
(3, 'Database Design', NULL, 1, '2024-11-21 14:57:04', '2024-11-24 14:18:31'),
(5, 'Accounting', NULL, NULL, '2024-11-22 06:09:33', '2024-11-22 07:32:25'),
(6, 'Web Designing', NULL, NULL, '2024-11-22 06:30:49', '2024-11-22 07:25:13'),
(8, 'Android Development', NULL, NULL, '2024-11-22 15:49:31', '2024-11-22 15:49:31'),
(9, 'Application Development', NULL, NULL, '2024-11-22 16:48:24', '2024-11-22 16:48:24');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `id` int(11) NOT NULL,
  `designation_name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `department_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`id`, `designation_name`, `description`, `department_id`, `created_at`, `updated_at`) VALUES
(1, 'Web Designer', NULL, 2, '2024-11-22 15:47:11', '2024-11-22 15:47:11'),
(2, 'Web Developer', NULL, 3, '2024-11-22 15:47:47', '2024-11-22 16:30:03'),
(4, 'UI Designer', NULL, 9, '2024-11-22 16:48:52', '2024-11-22 16:48:52');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `martial_status_id` int(11) DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `terminated_date` date DEFAULT NULL,
  `payroll_id` int(11) DEFAULT NULL,
  `experience` varchar(100) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `user_id`, `image`, `email`, `password`, `mobile`, `department_id`, `designation_id`, `role_id`, `dob`, `address`, `gender`, `martial_status_id`, `joining_date`, `terminated_date`, `payroll_id`, `experience`, `status_id`, `company_id`, `created_at`, `updated_at`) VALUES
(1, 'Farzana', 'Akter', 1, 'farzana.jpg', 'admin@gmail.com', 'admin123', '017920091238', 1, 2, 1, '1999-10-05', 'Bangladesh', 'Female', 1, '2023-10-02', NULL, 1, '4 month', 1, 1, '2024-11-25 11:16:25', '2024-11-25 11:16:25'),
(2, 'Hera', 'Mony', 2, 'hera.jpg', 'hera@gmail.com', 'hera123', '01788239839', 1, 1, 2, '1998-09-12', 'Mohammadpur', 'Female', 1, '2024-10-02', NULL, 1, '1 year', 1, 1, '2024-11-25 11:18:57', '2024-11-25 11:18:57'),
(3, 'Hasan', 'KB', 3, 'hasan.jpg', 'hasan@gmail.com', 'hasan123', '017123873334', 2, 4, 3, '1990-09-12', 'Bangladesh', 'Male', 1, '2024-10-11', NULL, 3, '1 year', 1, 1, '2024-11-25 11:22:02', '2024-11-25 11:22:02');

-- --------------------------------------------------------

--
-- Table structure for table `holiday`
--

CREATE TABLE `holiday` (
  `id` int(11) NOT NULL,
  `holiday_name` varchar(100) NOT NULL,
  `holiday_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leave_request`
--

CREATE TABLE `leave_request` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `leave_type_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `number_of_leave` int(50) DEFAULT NULL,
  `remaining_leave` int(50) DEFAULT NULL,
  `reason` text DEFAULT NULL,
  `req_status_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leave_request_status`
--

CREATE TABLE `leave_request_status` (
  `id` int(11) NOT NULL,
  `status_name` varchar(50) NOT NULL DEFAULT 'new',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leave_request_status`
--

INSERT INTO `leave_request_status` (`id`, `status_name`, `created_at`, `updated_at`) VALUES
(1, 'New', '2024-11-27 14:51:08', '2024-11-27 14:51:08'),
(2, 'Pending', '2024-11-27 14:51:15', '2024-11-27 14:51:15'),
(3, 'Approve', '2024-11-27 14:51:21', '2024-11-27 14:51:21'),
(4, 'Decline', '2024-11-27 14:51:28', '2024-11-27 14:51:28');

-- --------------------------------------------------------

--
-- Table structure for table `leave_type`
--

CREATE TABLE `leave_type` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `total_leaves` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leave_type`
--

INSERT INTO `leave_type` (`id`, `name`, `total_leaves`, `created_at`, `updated_at`) VALUES
(1, 'Casual Leave', 8, '2024-11-27 14:57:11', '2024-11-27 14:57:11'),
(2, 'Medical Leave', 20, '2024-11-27 15:00:05', '2024-11-27 15:00:05'),
(3, 'Maternity Leave', 180, '2024-11-27 15:00:59', '2024-11-27 15:00:59'),
(4, 'Annual Leave ', 30, '2024-11-27 15:01:36', '2024-11-27 15:01:36'),
(5, 'Sick leave', 10, '2024-11-27 15:01:57', '2024-11-27 15:01:57'),
(6, 'Emargency Leave', 15, '2024-11-27 15:02:14', '2024-11-27 15:02:14'),
(7, 'Unpaid leave', 0, '2024-11-27 15:02:46', '2024-11-27 15:02:46'),
(8, 'Other leaves', 15, '2024-11-27 15:03:08', '2024-11-27 15:03:08');

-- --------------------------------------------------------

--
-- Table structure for table `martial_status`
--

CREATE TABLE `martial_status` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `martial_status`
--

INSERT INTO `martial_status` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Single', '2024-11-23 14:29:13', '2024-11-23 14:29:13'),
(2, 'Married', '2024-11-23 14:29:44', '2024-11-23 14:29:44');

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `basic_salary` decimal(10,2) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`id`, `employee_id`, `basic_salary`, `company_id`, `created_at`, `updated_at`) VALUES
(1, 1, 25000.00, 1, '2024-11-23 13:44:59', '2024-11-23 13:44:59'),
(2, 2, 20000.00, 1, '2024-11-23 13:44:59', '2024-11-23 13:44:59'),
(3, 3, 20000.00, NULL, '2024-11-23 14:06:55', '2024-11-23 14:06:55');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `rate` decimal(10,2) DEFAULT NULL,
  `rate_type` varchar(50) DEFAULT NULL,
  `priority` varchar(50) DEFAULT NULL,
  `team_leader` varchar(50) DEFAULT NULL,
  `project_team` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(50) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `updated_at`, `created_at`) VALUES
(1, 'Admin', NULL, '2024-11-25 18:29:00'),
(2, 'HR Admin', NULL, '2024-11-25 18:29:00'),
(3, 'Employee', NULL, '2024-11-25 18:29:14'),
(4, 'Manager', NULL, '2024-11-25 18:51:44'),
(5, 'Client', NULL, '2024-11-26 18:01:06');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status_name` varchar(50) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status_name`, `description`) VALUES
(1, 'Active', 'Currently employed and active'),
(2, 'Terminated', 'Employment terminated by the organization'),
(3, 'Resigned', 'Employee voluntarily resigned'),
(4, 'Inactive', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `role_id` int(10) DEFAULT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `verify_code` varchar(50) DEFAULT NULL,
  `inactive` tinyint(1) UNSIGNED DEFAULT 0,
  `mobile` varchar(50) DEFAULT NULL,
  `company_id` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `remember_token` varchar(145) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `role_id`, `full_name`, `password`, `email`, `photo`, `verify_code`, `inactive`, `mobile`, `company_id`, `updated_at`, `remember_token`, `created_at`) VALUES
(1, 'Farzana', 1, NULL, 'admin123', 'admin@gmail.com', NULL, NULL, 0, '01763553803', 1, NULL, NULL, '2024-11-26 17:10:47'),
(2, ' John Doe ', 5, NULL, 'jhon123', 'jhon@gmail.com', NULL, NULL, 0, '017-6355-3803', 2, NULL, NULL, '2024-11-26 12:27:30'),
(3, 'Barry Cuda', 3, NULL, 'barry123', 'barry@gmail.com', NULL, NULL, 0, '+92893847145', 1, NULL, NULL, '2024-11-26 12:28:42'),
(4, 'Hera', 3, NULL, 'hera123', 'hera@gmail.com', NULL, NULL, 0, '+92893847145', 1, NULL, NULL, '2024-11-26 12:29:34'),
(5, 'Hasan', 3, NULL, 'hasan123', 'hasan@gmail.com', NULL, NULL, 0, '01763553834', 1, NULL, NULL, '2024-11-26 12:30:24');

-- --------------------------------------------------------

--
-- Structure for view `allemployeeview`
--
DROP TABLE IF EXISTS `allemployeeview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `allemployeeview`  AS SELECT `e`.`id` AS `id`, `e`.`first_name` AS `first_name`, `e`.`last_name` AS `last_name`, `u`.`username` AS `username`, `e`.`image` AS `image`, `e`.`email` AS `email`, `e`.`mobile` AS `mobile`, `dep`.`department_name` AS `department`, `des`.`designation_name` AS `designation`, `r`.`role_name` AS `role`, `e`.`dob` AS `dob`, `e`.`address` AS `address`, `e`.`gender` AS `gender`, `m`.`name` AS `martial_status`, `e`.`joining_date` AS `joining_date`, `e`.`terminated_date` AS `terminated_date`, `pay`.`basic_salary` AS `basic_salary`, `e`.`experience` AS `experience`, `s`.`status_name` AS `status` FROM (((((((`employees` `e` join `users` `u` on(`e`.`user_id` = `u`.`id`)) join `departments` `dep` on(`e`.`department_id` = `dep`.`id`)) join `designation` `des` on(`e`.`designation_id` = `des`.`id`)) join `roles` `r` on(`e`.`role_id` = `r`.`id`)) join `martial_status` `m` on(`e`.`martial_status_id` = `m`.`id`)) join `payroll` `pay` on(`e`.`payroll_id` = `pay`.`id`)) join `status` `s` on(`e`.`status_id` = `s`.`id`)) ;

