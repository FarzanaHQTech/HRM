-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2024 at 08:06 PM
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
,`username` varchar(100)
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
,`basic_salary` int(255)
,`experience` varchar(100)
,`status` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `check_in_time` time DEFAULT NULL,
  `check_out_time` time DEFAULT NULL,
  `attendance_status_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `employee_id`, `date`, `check_in_time`, `check_out_time`, `attendance_status_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2024-12-12', '09:30:00', '18:00:00', 1, '2024-12-11 06:34:50', '2024-12-14 07:20:19'),
(2, 2, '2024-12-14', '09:07:00', '17:30:00', 1, '2024-12-13 16:30:34', '2024-12-13 16:30:34'),
(3, 4, '2024-12-18', '09:43:00', '17:44:00', 1, '2024-12-17 14:44:15', '2024-12-17 14:44:15');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_status`
--

CREATE TABLE `attendance_status` (
  `id` int(11) NOT NULL,
  `status_name` varchar(50) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance_status`
--

INSERT INTO `attendance_status` (`id`, `status_name`, `description`) VALUES
(1, 'Present', 'Employee was present'),
(2, 'Absent', 'Employee was absent'),
(3, 'Late', 'Employee was late'),
(4, 'leave', 'Employee was leave');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `client_name` varchar(150) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `image` varchar(200) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `company_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `designation` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `client_name`, `username`, `image`, `email`, `phone`, `password`, `company_id`, `role_id`, `project_id`, `designation`, `created_at`, `updated_at`) VALUES
(1, 'Barry Rode', 'Barry', 'barry-rode.jpg', 'barry@gmail.com', '+92893847145', 'barry123', 1, 5, NULL, 'CEO', '2024-11-28 01:21:08', '2024-12-17 15:18:56'),
(2, 'Tressa Wexler', 'Tressa ', 'tressa-wexler.jpg', 'tressa@gmail.com', '+9397898634', 'tressa123', 2, 5, NULL, 'Project Manager', '2024-11-28 01:23:10', '2024-12-17 15:19:09'),
(3, 'Walter Weaver ', 'Walter Weaver ', 'walter-weaver.jpg', 'Walter@gamil.com', '01790128471', '', 4, 5, NULL, 'CEO', '2024-12-17 18:37:22', '2024-12-17 18:37:22');

-- --------------------------------------------------------

--
-- Table structure for table `client_companies`
--

CREATE TABLE `client_companies` (
  `id` int(11) NOT NULL,
  `company_name` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `review` varchar(255) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_companies`
--

INSERT INTO `client_companies` (`id`, `company_name`, `image`, `address`, `country`, `mobile`, `email`, `url`, `owner`, `review`, `client_id`, `updated_at`, `created_at`) VALUES
(1, 'Global Techonology', 'global-techonology.svg', 'Bangladesh', NULL, '017123873334', 'client@gmail.com', 'WWW', 'Guillory', 'Highest', 1, '2024-12-14 19:07:07', '2024-12-10 13:54:05'),
(2, 'Delta Infotech', 'delta-infotech.svg', 'UK', NULL, '01938937963', 'client@gmail.com', 'WWW', 'Jami', 'Highest', 2, '2024-12-14 19:07:33', '2024-12-10 13:54:56'),
(3, 'SilverHawk', 'silverhawk.svg', 'Bangladesh', NULL, '9238998734', 'company1@gmail.com', 'WWW', 'Guillory', 'Lowest', 1, '2024-12-18 00:15:07', '2024-12-18 00:15:07'),
(4, 'International Software Inc', 'international-software-inc.svg', 'Bangladesh', NULL, '92318197349', 'Internationa@g.com', 'WWW', 'Jami', 'Highest', 1, '2024-12-18 00:26:02', '2024-12-18 00:26:02');

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
(1, 'FarzTechnology', '7 Bussy street, Gulshan,Dhaka-1207', 'Bangladesh', '9875432', '1207', 'techportal@gmail.com', 'https://www.company.com', '2024-11-18 20:59:28', '2024-11-18 20:40:19');

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
(1, 'Web Development', 'Depeloping', 1, '2024-11-21 08:56:10', '2024-11-24 07:31:34'),
(2, 'App Development', 'Deal with Website projects', NULL, '2024-11-21 08:57:04', '2024-11-24 08:17:35'),
(3, 'Database Design', NULL, 1, '2024-11-21 08:57:04', '2024-11-24 08:18:31'),
(5, 'Accounting', NULL, NULL, '2024-11-22 00:09:33', '2024-11-22 01:32:25'),
(6, 'Web Designing', NULL, NULL, '2024-11-22 00:30:49', '2024-11-22 01:25:13'),
(8, 'Android Development', NULL, NULL, '2024-11-22 09:49:31', '2024-11-22 09:49:31'),
(9, 'Application Development', NULL, NULL, '2024-11-22 10:48:24', '2024-11-22 10:48:24'),
(10, 'IT Department', NULL, NULL, '2024-12-14 06:45:21', '2024-12-14 06:45:21'),
(11, 'Marketing', NULL, NULL, '2024-12-14 06:45:44', '2024-12-14 06:48:48'),
(12, '	Support Management', NULL, NULL, '2024-12-14 06:45:55', '2024-12-14 06:45:55');

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
(1, 'Web Designer', NULL, 2, '2024-11-22 09:47:11', '2024-11-22 09:47:11'),
(2, 'Web Developer', NULL, 3, '2024-11-22 09:47:47', '2024-11-22 10:30:03'),
(4, 'UI Designer', NULL, 9, '2024-11-22 10:48:52', '2024-11-22 10:48:52'),
(5, 'IOS Developer', NULL, 9, '2024-12-14 06:47:10', '2024-12-14 06:47:10'),
(6, '	IT Technician', NULL, 10, '2024-12-14 06:47:21', '2024-12-14 06:47:21'),
(7, 'Product Manage', NULL, 11, '2024-12-14 06:47:55', '2024-12-14 06:47:55'),
(8, 'UX Designer', NULL, 8, '2024-12-14 06:48:11', '2024-12-14 06:48:11');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
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
  `basic_salary` int(255) DEFAULT NULL,
  `experience` varchar(100) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `username`, `image`, `email`, `password`, `mobile`, `department_id`, `designation_id`, `role_id`, `dob`, `address`, `gender`, `martial_status_id`, `joining_date`, `terminated_date`, `basic_salary`, `experience`, `status_id`, `company_id`, `created_at`, `updated_at`) VALUES
(1, 'John ', 'Doe', 'John ', 'john.jpg', 'John@gmail.com', 'jhon123', '01788239839', 10, 2, 1, '1990-12-14', 'Mohammadpur', 'Male', 1, '2024-12-14', NULL, 40000, '1 year', 1, 1, '2024-12-14 06:53:39', '2024-12-14 06:53:39'),
(2, 'Richard ', 'Miles', 'Richard ', 'richard.jpg', 'richard@gmail.com', 'richard123', '017920091238', 9, 1, 3, '1992-12-14', 'Bangladesh', 'Male', 1, '2020-11-05', NULL, 30000, '5 month', 1, 1, '2024-12-14 07:00:46', '2024-12-14 07:00:46'),
(3, 'Hasibur', 'Rahman', 'Hasibur', 'hasibur.jpg', 'hasib@gmail.com', 'hasib123', '01938937963', 12, 5, 4, '1995-12-13', 'Chittagong', 'Male', 2, '2022-11-11', NULL, 35000, '2 years', 1, 1, '2024-12-14 07:04:00', '2024-12-14 07:04:00'),
(4, 'Hasan', 'Khan', 'Hasan', 'hasan.jpg', 'hasan@gmail.com', 'hasan123', '01788239839', 9, 4, 3, '1995-12-05', 'Dhaka', 'Male', 1, '2022-12-14', NULL, 25000, '5 month', 1, 1, '2024-12-14 11:45:31', '2024-12-14 11:45:31'),
(5, 'Jeffery ', 'Lalor', 'Jeffery ', 'jeffery.jpg', 'Jeffery@gmail.com', 'no value', '9978478624', 3, 5, 3, '1990-12-18', 'Barishal', 'Male', 1, '2022-12-11', NULL, 40000, '1 years', 1, 1, '2024-12-17 04:34:37', '2024-12-17 12:48:21'),
(6, 'Lesley ', 'Grauer', 'Lesley ', 'lesley.jpg', 'Lesley@gemai.com', 'Lesley ', '9083497357', 6, 6, 3, '1999-12-11', 'Dhaka', 'Male', 1, '2023-12-18', NULL, 40000, '1 years', 1, 1, '2024-12-17 06:49:39', '2024-12-17 06:49:39'),
(7, 'Tarah', ' Shropshire', 'Tarah', 'tarah.jpg', 'Tarah@gmail.com', 'Tarah', '01938937963', 8, 6, 1, '1999-12-26', 'Bangladesh', 'Female', 1, '2024-12-18', NULL, 30000, '1 year', 1, 1, '2024-12-17 17:31:37', '2024-12-17 17:31:37');

-- --------------------------------------------------------

--
-- Table structure for table `employee_goals`
--

CREATE TABLE `employee_goals` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `goal_type_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `goal_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_goals`
--

INSERT INTO `employee_goals` (`id`, `employee_id`, `goal_type_id`, `start_date`, `end_date`, `goal_status_id`) VALUES
(1, 2, 2, '2024-12-11', '2024-12-25', 2),
(2, 2, 7, '2024-12-12', '2025-01-03', 3);

-- --------------------------------------------------------

--
-- Table structure for table `employee_tasks`
--

CREATE TABLE `employee_tasks` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `goal_type_id` int(11) NOT NULL,
  `assigned_date` date NOT NULL,
  `due_date` date NOT NULL,
  `completion_date` date DEFAULT NULL,
  `goal_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_tasks`
--

INSERT INTO `employee_tasks` (`id`, `employee_id`, `name`, `goal_type_id`, `assigned_date`, `due_date`, `completion_date`, `goal_status_id`) VALUES
(1, 1, 'Task 1', 1, '2024-12-17', '2024-12-18', '2024-12-19', 4),
(2, 2, 'Prepare Weekly Progress Report', 1, '2024-12-18', '2025-01-03', '2025-01-02', 7),
(3, 1, 'Develop Training Modules', 3, '2024-12-19', '2024-12-25', '2024-12-19', 3);

-- --------------------------------------------------------

--
-- Table structure for table `goal_status`
--

CREATE TABLE `goal_status` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `goal_status`
--

INSERT INTO `goal_status` (`id`, `name`) VALUES
(1, 'Not Started'),
(2, 'Pending'),
(3, 'In Progress'),
(4, 'Completed'),
(5, 'On Hold'),
(6, 'Overdue'),
(7, 'Approved'),
(8, 'Failed'),
(9, 'Achieved');

-- --------------------------------------------------------

--
-- Table structure for table `goal_types`
--

CREATE TABLE `goal_types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `goal_types`
--

INSERT INTO `goal_types` (`id`, `name`) VALUES
(1, 'Performance'),
(2, 'Training'),
(3, 'Personal Development'),
(4, 'Sales'),
(5, 'Marketing'),
(6, 'Compliance'),
(7, 'Team Development'),
(8, 'Efficiency'),
(9, 'Productivity'),
(10, 'Leadership');

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

--
-- Dumping data for table `holiday`
--

INSERT INTO `holiday` (`id`, `holiday_name`, `holiday_date`, `created_at`, `updated_at`) VALUES
(1, 'Victory Day', '2024-12-16', '2024-11-29 12:07:41', '2024-11-29 12:07:41'),
(2, 'May Day', '2024-05-01', '2024-12-14 01:16:24', '2024-12-14 01:16:24'),
(3, 'Christmas', '2024-12-25', '2024-12-14 01:17:39', '2024-12-14 01:17:39'),
(4, '	Good Friday', '2024-12-06', '2024-12-14 01:19:04', '2024-12-14 01:19:04');

-- --------------------------------------------------------

--
-- Table structure for table `leave_requests`
--

CREATE TABLE `leave_requests` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `leave_type_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `no_of_leave` int(11) GENERATED ALWAYS AS (to_days(`end_date`) - to_days(`start_date`) + 1) STORED,
  `remaining_leave` int(11) DEFAULT NULL,
  `leave_request_status_id` int(11) DEFAULT NULL,
  `reason` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leave_requests`
--

INSERT INTO `leave_requests` (`id`, `employee_id`, `leave_type_id`, `start_date`, `end_date`, `remaining_leave`, `leave_request_status_id`, `reason`, `created_at`) VALUES
(1, 1, 1, '2024-11-28', '2024-12-01', 4, 3, 'Personal Issue', '2024-11-29 02:33:27'),
(2, 2, 1, '2024-11-28', '2024-11-30', 5, 3, 'Go for shopping', '2024-11-29 02:35:19'),
(3, 3, 2, '2024-12-14', '2024-12-17', 16, 4, 'Hosipitalised', '2024-12-14 07:18:07');

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
(1, 'New', '2024-11-27 08:51:08', '2024-11-27 08:51:08'),
(2, 'Pending', '2024-11-27 08:51:15', '2024-11-27 08:51:15'),
(3, 'Approve', '2024-11-27 08:51:21', '2024-11-27 08:51:21'),
(4, 'Decline', '2024-11-27 08:51:28', '2024-11-27 08:51:28');

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
(1, 'Casual Leave', 8, '2024-11-27 08:57:11', '2024-11-27 08:57:11'),
(2, 'Medical Leave', 20, '2024-11-27 09:00:05', '2024-11-27 09:00:05'),
(3, 'Maternity Leave', 180, '2024-11-27 09:00:59', '2024-11-27 09:00:59'),
(4, 'Annual Leave ', 30, '2024-11-27 09:01:36', '2024-11-27 09:01:36'),
(5, 'Sick leave', 10, '2024-11-27 09:01:57', '2024-11-27 09:01:57'),
(6, 'Emargency Leave', 15, '2024-11-27 09:02:14', '2024-11-27 09:02:14'),
(7, 'unpaid leave', 0, '2024-11-27 09:02:46', '2024-11-28 12:06:50'),
(8, 'Other leaves', 15, '2024-11-27 09:03:08', '2024-11-27 09:03:08');

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
(1, 'Single', '2024-11-23 08:29:13', '2024-11-23 08:29:13'),
(2, 'Married', '2024-11-23 08:29:44', '2024-11-23 08:29:44');

-- --------------------------------------------------------

--
-- Table structure for table `payslips`
--

CREATE TABLE `payslips` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `period` varchar(100) NOT NULL,
  `paydate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payslips`
--

INSERT INTO `payslips` (`id`, `employee_id`, `period`, `paydate`) VALUES
(1, 1, 'December 2024', '2024-12-14'),
(2, 2, 'December 2024', '2024-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `payslip_details`
--

CREATE TABLE `payslip_details` (
  `id` int(11) NOT NULL,
  `payslip_id` int(11) NOT NULL,
  `payslip_item_id` int(11) NOT NULL,
  `payslip_factor` tinyint(1) NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payslip_details`
--

INSERT INTO `payslip_details` (`id`, `payslip_id`, `payslip_item_id`, `payslip_factor`, `amount`) VALUES
(1, 1, 1, 1, 40000),
(2, 1, 5, 2, 2000),
(3, 1, 2, 1, 10000),
(4, 1, 3, 1, 3000),
(5, 2, 1, 1, 40000),
(6, 2, 2, 1, 10000),
(7, 2, 5, 2, 1000),
(8, 3, 1, 1, 40000),
(9, 3, 2, 1, 10000),
(10, 3, 5, 2, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `payslip_items`
--

CREATE TABLE `payslip_items` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `factor` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payslip_items`
--

INSERT INTO `payslip_items` (`id`, `name`, `factor`) VALUES
(1, 'basic_salary', 1),
(2, 'house_allawnce', 1),
(3, 'Transport Allowance', 1),
(4, 'Other Allowances', 1),
(5, 'Provident Fund', 2),
(6, 'Tax Deducted at Source (T.D.S.)', 2),
(7, 'Leave', 2),
(8, 'Other deductions', 2);

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
  `team_leader_id` int(11) DEFAULT NULL,
  `project_team_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_teams`
--

CREATE TABLE `project_teams` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `role` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `provident_fund`
--

CREATE TABLE `provident_fund` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `provident_type_id` int(11) NOT NULL,
  `emp_amount` decimal(10,2) NOT NULL,
  `org_amount` decimal(10,2) NOT NULL,
  `organization_share` decimal(5,2) NOT NULL,
  `employee_share` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `provident_fund`
--

INSERT INTO `provident_fund` (`id`, `employee_id`, `provident_type_id`, `emp_amount`, `org_amount`, `organization_share`, `employee_share`) VALUES
(1, 1, 6, 100.00, 100.00, 2.00, 2.00),
(2, 2, 2, 200.00, 200.00, 3.00, 3.00);

-- --------------------------------------------------------

--
-- Table structure for table `provident_type`
--

CREATE TABLE `provident_type` (
  `id` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `provident_type`
--

INSERT INTO `provident_type` (`id`, `type_name`) VALUES
(1, 'Employee Provident Fund (EPF)'),
(2, 'Corporate Provident Fund'),
(3, 'Tech Provident Fund'),
(4, 'Educational Employees Provident Fund'),
(5, 'Healthcare Provident Fund'),
(6, 'Fixed Amount'),
(7, '% of Basic Salary');

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
(1, 'Active', NULL),
(2, 'Inactive', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `total_leave_taken`
--

CREATE TABLE `total_leave_taken` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `leave_type_id` int(11) NOT NULL,
  `current_taking_leave` int(11) NOT NULL DEFAULT 0,
  `leave_taken_history_id` int(11) NOT NULL DEFAULT 0,
  `total_taken_leave` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `phone` float(10,2) NOT NULL,
  `status_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `employee_id`, `designation_id`, `email`, `phone`, `status_id`, `created_at`, `updated_at`) VALUES
(2, 4, 4, 0, 1000.00, 2, '2024-12-17 10:10:25', '2024-12-17 10:10:25');

-- --------------------------------------------------------

--
-- Table structure for table `training_lists`
--

CREATE TABLE `training_lists` (
  `id` int(11) NOT NULL,
  `training_type_id` int(11) NOT NULL,
  `trainer_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `cost` float(10,2) NOT NULL,
  `status_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `training_lists`
--

INSERT INTO `training_lists` (`id`, `training_type_id`, `trainer_id`, `employee_id`, `cost`, `status_id`, `created_at`, `updated_at`, `start_date`, `end_date`) VALUES
(1, 2, 2, 2, 0.00, 1, '2024-12-17 10:10:50', '2024-12-17 10:10:50', '2024-12-04', '2024-12-27'),
(2, 2, 2, 4, 0.00, 1, '2024-12-17 10:10:50', '2024-12-17 10:10:50', '2024-12-04', '2024-12-27'),
(3, 3, 2, 1, 0.00, 2, '2024-12-17 10:12:16', '2024-12-17 10:12:16', '2024-12-19', '2024-12-18'),
(4, 3, 2, 3, 0.00, 2, '2024-12-17 10:12:16', '2024-12-17 10:12:16', '2024-12-19', '2024-12-18');

-- --------------------------------------------------------

--
-- Table structure for table `training_types`
--

CREATE TABLE `training_types` (
  `id` int(11) NOT NULL,
  `type_name` varchar(50) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `training_types`
--

INSERT INTO `training_types` (`id`, `type_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Node Training', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Git Training', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Swift Training', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Html Training', 'Inactive', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Laravel Training', 'Inactive', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(1, 'John ', 1, NULL, 'jhon123', 'John@gmail.com', NULL, NULL, 0, '01788239839', 1, NULL, NULL, '2024-12-14 06:53:39'),
(2, 'Richard ', 3, NULL, 'richard123', 'richard@gmail.com', NULL, NULL, 0, '017920091238', 1, NULL, NULL, '2024-12-14 07:00:46'),
(3, 'Hasibur', 4, NULL, 'hasib123', 'hasib@gmail.com', NULL, NULL, 0, '01938937963', 1, NULL, NULL, '2024-12-14 07:04:00'),
(4, 'Farzana', 1, NULL, 'admin123', 'admin@gmail.com', NULL, NULL, 0, '01763553803', 1, NULL, NULL, '2024-12-14 07:44:47'),
(6, 'Hasan', 3, NULL, 'hasan123', 'hasan@gmail.com', NULL, NULL, 0, '01788239839', 1, NULL, NULL, '2024-12-14 11:46:00'),
(7, 'Tarah', 1, NULL, 'Tarah', 'Tarah@gmail.com', NULL, NULL, 0, '01938937963', 1, NULL, NULL, '2024-12-17 17:31:37'),
(8, 'Ruby Bartlett', 5, NULL, '', 'Ruby@gm.com', NULL, NULL, 0, '01788239839', 3, NULL, NULL, '2024-12-17 18:24:00'),
(9, 'Walter Weaver', 5, NULL, '', 'client@gmail.com', NULL, NULL, 0, '01788239839', 4, NULL, NULL, '2024-12-17 18:27:46'),
(10, 'Walter Weaver ', 5, NULL, '', 'Walter@gamil.com', NULL, NULL, 0, '01790128471', 4, NULL, NULL, '2024-12-17 18:37:22');

-- --------------------------------------------------------

--
-- Structure for view `allemployeeview`
--
DROP TABLE IF EXISTS `allemployeeview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `allemployeeview`  AS SELECT `e`.`id` AS `id`, `e`.`first_name` AS `first_name`, `e`.`last_name` AS `last_name`, `e`.`username` AS `username`, `e`.`image` AS `image`, `e`.`email` AS `email`, `e`.`mobile` AS `mobile`, `dep`.`department_name` AS `department`, `des`.`designation_name` AS `designation`, `r`.`role_name` AS `role`, `e`.`dob` AS `dob`, `e`.`address` AS `address`, `e`.`gender` AS `gender`, `m`.`name` AS `martial_status`, `e`.`joining_date` AS `joining_date`, `e`.`terminated_date` AS `terminated_date`, `e`.`basic_salary` AS `basic_salary`, `e`.`experience` AS `experience`, `s`.`status_name` AS `status` FROM (((((`employees` `e` join `departments` `dep` on(`e`.`department_id` = `dep`.`id`)) join `designation` `des` on(`e`.`designation_id` = `des`.`id`)) join `roles` `r` on(`e`.`role_id` = `r`.`id`)) join `martial_status` `m` on(`e`.`martial_status_id` = `m`.`id`)) join `status` `s` on(`e`.`status_id` = `s`.`id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_status`
--
ALTER TABLE `attendance_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_companies`
--
ALTER TABLE `client_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_goals`
--
ALTER TABLE `employee_goals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_tasks`
--
ALTER TABLE `employee_tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goal_status`
--
ALTER TABLE `goal_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goal_types`
--
ALTER TABLE `goal_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holiday`
--
ALTER TABLE `holiday`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_requests`
--
ALTER TABLE `leave_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_request_status`
--
ALTER TABLE `leave_request_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_type`
--
ALTER TABLE `leave_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `martial_status`
--
ALTER TABLE `martial_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payslips`
--
ALTER TABLE `payslips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payslip_details`
--
ALTER TABLE `payslip_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payslip_items`
--
ALTER TABLE `payslip_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_teams`
--
ALTER TABLE `project_teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provident_fund`
--
ALTER TABLE `provident_fund`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provident_type`
--
ALTER TABLE `provident_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total_leave_taken`
--
ALTER TABLE `total_leave_taken`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_lists`
--
ALTER TABLE `training_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_types`
--
ALTER TABLE `training_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `attendance_status`
--
ALTER TABLE `attendance_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `client_companies`
--
ALTER TABLE `client_companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employee_goals`
--
ALTER TABLE `employee_goals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee_tasks`
--
ALTER TABLE `employee_tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `goal_status`
--
ALTER TABLE `goal_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `goal_types`
--
ALTER TABLE `goal_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `holiday`
--
ALTER TABLE `holiday`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `leave_requests`
--
ALTER TABLE `leave_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `leave_request_status`
--
ALTER TABLE `leave_request_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `leave_type`
--
ALTER TABLE `leave_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `martial_status`
--
ALTER TABLE `martial_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payslips`
--
ALTER TABLE `payslips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payslip_details`
--
ALTER TABLE `payslip_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payslip_items`
--
ALTER TABLE `payslip_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_teams`
--
ALTER TABLE `project_teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `provident_fund`
--
ALTER TABLE `provident_fund`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `provident_type`
--
ALTER TABLE `provident_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `total_leave_taken`
--
ALTER TABLE `total_leave_taken`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `training_lists`
--
ALTER TABLE `training_lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `training_types`
--
ALTER TABLE `training_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
