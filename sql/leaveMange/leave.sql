
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
(7, 'unpaid leave', 0, '2024-11-27 15:02:46', '2024-11-28 18:06:50'),
(8, 'Other leaves', 15, '2024-11-27 15:03:08', '2024-11-27 15:03:08');

-- --------------------------------------------------------
