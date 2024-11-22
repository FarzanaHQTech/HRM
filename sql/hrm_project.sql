
--
-- Database: `hrm_project`
--

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
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `marital_status_id` int(11) DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `experience` varchar(100) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `image`, `department_id`, `designation_id`, `role_id`, `date_of_birth`, `address`, `gender`, `marital_status_id`, `joining_date`, `experience`, `status_id`, `company_id`, `created_at`, `updated_at`) VALUES
(1, 'Farzana', 'Akter', NULL, 1, 1, 1, '1999-11-13', 'Shat Moshjid Road, Dhaka-1207', 'Female', 1, '2024-08-01', '0 year,10 month', 1, 1, '2024-11-21 13:05:48', '2024-11-21 13:05:48'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2024-11-21 13:05:48', '2024-11-21 13:05:48');

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
(1, 'Admin', NULL, '2024-11-20 19:21:32'),
(2, 'Super admin', NULL, '2024-11-20 19:21:32'),
(3, 'Employee', NULL, '2024-11-20 19:21:32'),
(4, 'Manager', NULL, '2024-11-20 19:21:32'),
(5, 'Client', NULL, '2024-11-20 20:58:04');

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
(1, 'Admin', 1, 'Farzana Akter', 'admin123', 'admin@gmail.com', NULL, '1284721', 0, '01983724722', 1, NULL, NULL, '2024-11-20 15:08:00'),
(2, 'Hasan', 1, 'Hasan Khan', 'admin123', 'hasan@gamil.com', NULL, '12334', 10, '01928137343', 1, NULL, '123', '2024-11-21 13:13:50'),
(3, 'Rita Khanom', 3, NULL, 'rita1234', 'rita@gmail.com', NULL, '1234', 0, '01789327811', 2, NULL, NULL, '2024-11-21 13:12:31');

