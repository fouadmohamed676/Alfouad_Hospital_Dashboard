-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2023 at 05:14 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testrel`
--

-- --------------------------------------------------------

--
-- Table structure for table `clinics`
--

CREATE TABLE `clinics` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `local_id` int(11) NOT NULL DEFAULT 1,
  `phone` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clinics`
--

INSERT INTO `clinics` (`id`, `name`, `local_id`, `phone`, `status`) VALUES
(1, 'مجمع  فتح الرحمن البشير', 2, '0222177458', 1),
(2, 'مجمع الرحمه الخيري', 2, '0914445256', 0),
(3, 'مجمع البشير الطبي', 2, '0999555214', 1),
(4, 'مجمع الرحمه الطبي', 1, '0123451423', 1),
(5, 'عيادة الشفاء', 3, '0141252236', 0),
(6, 'عيادة الوالدين', 1, '0911112354', 1),
(7, 'عيادة الفؤاد', 2, '0914452563', 1);

-- --------------------------------------------------------

--
-- Table structure for table `clinic_docotrs`
--

CREATE TABLE `clinic_docotrs` (
  `id` int(11) NOT NULL,
  `clinic_id` int(10) NOT NULL,
  `doctor_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clinic_docotrs`
--

INSERT INTO `clinic_docotrs` (`id`, `clinic_id`, `doctor_id`) VALUES
(1, 1, 12),
(2, 1, 3),
(3, 3, 2),
(4, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `docotrs`
--

CREATE TABLE `docotrs` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `barth_date` date DEFAULT NULL,
  `hospital_id` int(10) UNSIGNED DEFAULT NULL,
  `phone` varchar(70) NOT NULL,
  `email` varchar(60) NOT NULL,
  `gender_id` varchar(15) NOT NULL,
  `local_id` int(11) NOT NULL DEFAULT 1,
  `specialization_id` varchar(50) DEFAULT NULL,
  `clinic_id` int(11) DEFAULT NULL,
  `nationality_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `status` int(10) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `docotrs`
--

INSERT INTO `docotrs` (`id`, `name`, `title`, `barth_date`, `hospital_id`, `phone`, `email`, `gender_id`, `local_id`, `specialization_id`, `clinic_id`, `nationality_id`, `status`) VALUES
(1, 'علي حسن', 'الخرطوم', '2023-07-12', 2, '0995685105', 'al11@gmail.com', '1', 1, '4', 1, 2, 1),
(3, 'محمد علي', 'بحري', '2022-12-01', 4, '01227773326', 'd14@gmail.com', '1', 3, '3', 2, 2, 1),
(4, 'فؤاد محمد', 'امدرمان', '2023-07-06', 4, '09923140567', 'foody@gmail.com', '1', 1, '5', 3, 2, 1),
(5, 'سمر عثمان', 'الخرطوم', '2023-04-03', 5, '099944333', 'samar@gmail.com', '2', 1, '2', 1, 2, 1),
(7, 'حسام الطيب', 'الخرطوم', '2022-02-08', 6, '0999221445', 'hussam@gmail.com', '2', 1, '2', 2, 2, 0),
(10, 'التقي عبدالله', 'بحري', '2022-05-04', 5, '0111152468', 'Tgaay@gmail.com', '1', 1, '4', 1, 1, 1),
(11, 'عثمان الامين', 'الخرطوم', '2023-07-12', 6, '0111425847', 'oman1232@gmail.com', '1', 2, '3', 3, 1, 1),
(12, 'رانيا عثمان احمد', 'الصحافه', '1994-04-21', NULL, '099993338', 'rania@gmail.com', '2', 1, '4', 4, 1, 1),
(13, 'الامين حسن الامين', 'الخرطوم', '2023-07-27', NULL, '0914452563', 'ahmed1122@gmail.com', '1', 1, '4', 5, 1, 1),
(14, 'لطيب حلمي', 'السمله', '1995-06-01', NULL, '0912344432', 'tyb@gamil.com', '1', 1, '3', 4, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_duty`
--

CREATE TABLE `doctor_duty` (
  `id` int(11) NOT NULL,
  `doctor_id` int(10) UNSIGNED NOT NULL,
  `time_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_duty`
--

INSERT INTO `doctor_duty` (`id`, `doctor_id`, `time_id`, `created_at`) VALUES
(1, 1, 2, '2023-07-28 17:22:08'),
(2, 12, 3, '2023-07-28 17:22:08'),
(3, 12, 1, '2023-07-28 17:22:31'),
(4, 4, 3, '2023-07-28 17:22:31'),
(5, 12, 1, '2023-07-28 17:45:11'),
(6, 5, 3, '2023-07-28 17:45:11'),
(7, 13, 2, '2023-10-08 15:20:58'),
(8, 13, 3, '2023-10-08 15:20:58'),
(9, 13, 6, '2023-10-08 15:20:58'),
(10, 12, 5, '2023-10-08 15:29:47'),
(11, 12, 6, '2023-10-08 15:29:47'),
(12, 12, 8, '2023-10-08 15:29:47'),
(13, 14, 1, '2023-10-09 13:17:33'),
(14, 14, 2, '2023-10-09 13:17:33'),
(15, 14, 5, '2023-10-09 13:17:33'),
(16, 14, 7, '2023-10-09 13:17:33');

-- --------------------------------------------------------

--
-- Table structure for table `duty`
--

CREATE TABLE `duty` (
  `id` int(11) NOT NULL,
  `doctor_id` int(5) NOT NULL,
  `day_id` int(5) NOT NULL,
  `status` int(10) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `duty`
--

INSERT INTO `duty` (`id`, `doctor_id`, `day_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 7, 4, 1, '2023-07-08 19:31:17', '2023-07-09 18:24:54'),
(2, 4, 3, 0, '2023-07-08 19:58:12', '2023-07-16 20:57:09'),
(3, 7, 2, 1, '2023-07-08 20:02:07', '2023-07-08 20:02:07'),
(4, 4, 5, 0, '2023-07-08 20:08:54', '2023-07-10 10:17:37'),
(5, 3, 5, 1, '2023-07-08 20:12:55', '2023-07-08 20:12:55'),
(6, 5, 5, 1, '2023-07-08 20:14:17', '2023-07-08 22:16:22'),
(7, 11, 7, 1, '2023-07-08 20:19:25', '2023-07-08 20:19:25'),
(8, 5, 3, 1, '2023-07-09 18:09:29', '2023-07-15 17:14:27'),
(9, 10, 4, 1, '2023-07-10 07:52:35', '2023-07-10 07:52:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forwords`
--

CREATE TABLE `forwords` (
  `id` int(11) NOT NULL,
  `file_number` int(10) UNSIGNED NOT NULL,
  `pation_id` int(10) UNSIGNED NOT NULL,
  `doctor_id` int(10) UNSIGNED NOT NULL,
  `Splize_hos_from` int(11) NOT NULL,
  `Splize_hos_to` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forwords`
--

INSERT INTO `forwords` (`id`, `file_number`, `pation_id`, `doctor_id`, `Splize_hos_from`, `Splize_hos_to`, `created_at`, `updated_at`) VALUES
(1, 223, 1, 1, 4, 5, '2023-07-08 20:33:27', '2023-07-11 21:52:04'),
(2, 150, 1, 3, 4, 6, '2023-07-11 19:54:09', '2023-07-11 19:54:09'),
(3, 150, 1, 3, 4, 6, '2023-07-11 19:54:57', '2023-07-11 19:54:57'),
(4, 441, 1, 5, 5, 7, '2023-07-11 19:58:40', '2023-07-11 19:58:40'),
(5, 445, 3, 3, 5, 1, '2023-07-15 10:56:53', '2023-07-15 10:56:53'),
(6, 520, 1, 5, 5, 7, '2023-07-16 19:50:05', '2023-07-16 19:50:05'),
(7, 121, 1, 4, 2, 8, '2023-10-09 11:26:13', '2023-10-09 11:26:13'),
(8, 78, 5, 14, 6, 7, '2023-10-09 11:46:10', '2023-10-09 11:46:10');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `name`) VALUES
(1, 'ذكر'),
(2, 'انثى');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(10) NOT NULL,
  `dis` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `specialization_id` int(10) UNSIGNED DEFAULT NULL,
  `phone` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `local_id` int(10) UNSIGNED NOT NULL DEFAULT 2,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `dis`, `address`, `specialization_id`, `phone`, `status`, `local_id`, `is_deleted`) VALUES
(1, 'مستشفي الجودة', 'الصبابي', 2, '0912310102', 0, 2, 0),
(2, 'مشتشفي احمد قاسم', 'شارع الحوادث', 2, '0912310102', 0, 3, 0),
(3, 'مستشفي السلاح الطبي', 'الصحافة', 1, '0912310102', 1, 1, 0),
(4, 'مستشفى الخرطوم التعليمي', 'الدوحه', 8, '0912310102', 0, 3, 0),
(5, 'مستشفى الروضة', 'امدرمان', 5, '0912310102', 1, 3, 0),
(6, 'مستشفى الفؤاد التخصصي', 'الطائف', 6, '0912310102', 1, 2, 0),
(7, 'مستشفى الراهبات', 'الموردة', 3, '0912310102', 1, 3, 0),
(8, 'مستشفى الوالدين التخصيي', 'شارع الوادي', 8, '0912223485', 1, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hospital_doctors`
--

CREATE TABLE `hospital_doctors` (
  `id` int(11) NOT NULL,
  `doctor_id` int(10) UNSIGNED NOT NULL,
  `hospital_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital_doctors`
--

INSERT INTO `hospital_doctors` (`id`, `doctor_id`, `hospital_id`, `created_at`) VALUES
(1, 1, 2, '2023-07-28 14:33:36'),
(2, 3, 4, '2023-07-28 14:33:36'),
(3, 4, 2, '2023-07-28 14:34:33'),
(4, 4, 1, '2023-07-28 14:34:33'),
(5, 4, 4, '2023-10-08 18:49:16'),
(6, 4, 5, '2023-10-08 18:49:16'),
(7, 4, 6, '2023-10-08 18:49:16'),
(8, 4, 7, '2023-10-08 18:49:16'),
(9, 3, 2, '2023-10-08 19:35:48'),
(10, 5, 2, '2023-10-08 19:35:48'),
(11, 10, 2, '2023-10-08 19:35:48'),
(12, 11, 2, '2023-10-08 19:35:48'),
(13, 12, 2, '2023-10-08 19:35:48'),
(14, 13, 2, '2023-10-08 19:35:48'),
(15, 1, 6, '2023-10-09 13:15:11'),
(16, 3, 6, '2023-10-09 13:15:11'),
(17, 5, 6, '2023-10-09 13:15:11'),
(18, 7, 6, '2023-10-09 13:15:11'),
(19, 10, 6, '2023-10-09 13:15:11'),
(20, 11, 6, '2023-10-09 13:15:11'),
(21, 12, 6, '2023-10-09 13:15:11'),
(22, 13, 6, '2023-10-09 13:15:11'),
(23, 1, 8, '2023-10-15 10:49:23'),
(24, 5, 8, '2023-10-15 10:49:23'),
(25, 10, 8, '2023-10-15 10:49:23'),
(26, 12, 8, '2023-10-15 10:49:23'),
(27, 13, 8, '2023-10-15 10:49:23'),
(28, 14, 8, '2023-10-15 10:49:23'),
(29, 12, 3, '2023-10-15 12:09:25'),
(30, 12, 5, '2023-10-15 12:09:25'),
(31, 12, 7, '2023-10-15 12:09:25'),
(32, 12, 1, '2023-10-15 12:11:23');

-- --------------------------------------------------------

--
-- Table structure for table `local`
--

CREATE TABLE `local` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `local`
--

INSERT INTO `local` (`id`, `name`) VALUES
(1, 'الخرطوم'),
(2, 'بحري'),
(3, 'امدرمان');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nationality`
--

CREATE TABLE `nationality` (
  `id` int(10) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nationality`
--

INSERT INTO `nationality` (`id`, `name`) VALUES
(1, 'سوداني'),
(2, 'أجنبي');

-- --------------------------------------------------------

--
-- Table structure for table `nurses`
--

CREATE TABLE `nurses` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(60) NOT NULL,
  `nationality_id` int(11) NOT NULL DEFAULT 1 COMMENT '1->sudanees 2->otherCountry',
  `gender_id` tinyint(4) NOT NULL,
  `title` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `hospital_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nurses`
--

INSERT INTO `nurses` (`id`, `name`, `email`, `phone`, `nationality_id`, `gender_id`, `title`, `status`, `hospital_id`) VALUES
(1, 'احمد فتح الله', 'ahmed1132@gmail.com', '09111142587', 1, 1, 'الخرطوم', 1, 1),
(2, 'حسن السر عمر', 'hassasn8890@gmail.com', '09111222536', 1, 1, 'الكلاكلة', 1, 5),
(3, 'عبدالله احمد حسن', 'abdallha5060@gmail.com', '0111142587', 1, 1, 'الصحافه', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pation`
--

CREATE TABLE `pation` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(70) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sick` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `doctor_id` int(10) UNSIGNED NOT NULL,
  `hospital_id` int(10) UNSIGNED NOT NULL,
  `nationality_id` int(11) NOT NULL DEFAULT 1,
  `local_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pation`
--

INSERT INTO `pation` (`id`, `name`, `phone`, `email`, `sick`, `status`, `doctor_id`, `hospital_id`, `nationality_id`, `local_id`, `created_at`, `updated_at`) VALUES
(1, 'خالد عبدالله', '0912036658', 'omer@gmail.com', 'سكري', 1, 3, 1, 1, 2, '2023-05-07 22:00:00', '2023-07-12 09:53:09'),
(3, 'الامين حسن الامين', '0914425897', 'amin13325@gmail.com', 'ضغط دم', 1, 3, 3, 1, 2, '2023-07-15 10:56:02', '2023-07-15 15:54:42'),
(4, 'علي حسن', '012521425', 'hassasn8890@gmail.com', 'ملاريا', 0, 7, 1, 2, 1, '2023-07-15 10:58:19', '2023-07-16 21:14:28'),
(5, 'الحسن النزير', '0999922234', 'hassan@gamil.com', 'صداع مزمن', 1, 14, 3, 1, 3, '2023-10-09 11:45:32', '2023-10-09 11:45:32');

-- --------------------------------------------------------

--
-- Table structure for table `pation_sicks`
--

CREATE TABLE `pation_sicks` (
  `id` int(11) NOT NULL,
  `pation_id` int(11) NOT NULL,
  `sick_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pation_sicks`
--

INSERT INTO `pation_sicks` (`id`, `pation_id`, `sick_id`) VALUES
(1, 1, 2),
(2, 3, 2),
(3, 3, 1),
(4, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE `pharmacy` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `time_work` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`id`, `name`, `title`, `phone`, `status`, `time_work`) VALUES
(1, 'صيدلية محمد سعيد', 'امدرمان ابوسعد', '012322123', 1, 'كل ايام الاسبوع'),
(2, 'صيدلية علياء', 'الخرطوم شارع الحوادث', '0112221425', 1, '24 ساعة'),
(3, 'صيدلية الدرة', 'امدرمان الملاذمين', '0999993312', 0, 'كل يوم عدا الجمعة'),
(4, 'صيدلية الرعاية الشاملة', 'امدرمان الملاذمين', '0999993312', 1, 'كل يوم عدا الجمعة'),
(5, 'صيدلية مستشفى الفؤاد', 'الصحافه', '0911155587', 1, 'خميس و احد'),
(6, 'الجديدة', 'بحري', '0124444514', 0, 'كل يوم'),
(7, 'الغذاء والصحه', 'الجريف غرب', '0915552354', 1, 'سبت'),
(8, 'الغذاء والصحه', 'الجريف غرب', '0915552354', 1, 'سبت'),
(9, 'صيدلية السماح المركزية', 'سنار شارع الدكاترة', '092333433', 1, 'كل يوم'),
(10, 'الفؤاد الجديده', ' الجديده', '0912333343', 1, ' كل ايام الاسبوع'),
(11, 'الفؤاد الجديده', ' الجديده', '0912333343', 1, ' كل ايام الاسبوع'),
(12, 'Glide HD', ' Glide', '0912333343', 1, ' كل ايام الاسبوع'),
(13, 'alslam', 'ssss', '99999886', 1, 'كل يوم');

-- --------------------------------------------------------

--
-- Table structure for table `sick`
--

CREATE TABLE `sick` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sick`
--

INSERT INTO `sick` (`id`, `name`) VALUES
(1, 'ضغط دم خفيف'),
(2, 'سكري'),
(3, 'التهاب'),
(4, 'حمي'),
(5, 'صداع'),
(6, 'غضروف'),
(7, 'ألم مفاصل'),
(8, 'Romatoed');

-- --------------------------------------------------------

--
-- Table structure for table `specialization`
--

CREATE TABLE `specialization` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specialization`
--

INSERT INTO `specialization` (`id`, `name`) VALUES
(1, 'طبيب'),
(2, 'أخصائي باطنية'),
(3, 'نائب أخصائي'),
(4, 'عمليات صغيرة'),
(5, 'ممرض'),
(6, 'قابلة'),
(7, 'صيدلي');

-- --------------------------------------------------------

--
-- Table structure for table `specializationhospital`
--

CREATE TABLE `specializationhospital` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specializationhospital`
--

INSERT INTO `specializationhospital` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'عظام', '2023-05-12 12:47:22', '2023-07-08 15:43:43'),
(2, 'اطفال', '2023-05-12 12:47:22', '2023-05-12 12:47:22'),
(3, 'النساء والتوليد', '2023-05-13 16:59:32', '2023-05-13 17:10:19'),
(4, 'انف وأذن وحنجره', '2023-05-14 19:28:19', '2023-05-14 19:28:19'),
(5, 'عمومي', '2023-05-20 17:00:08', '2023-05-20 17:00:08'),
(6, 'المخ والاعصاب', '2023-07-03 09:14:31', '2023-07-03 09:15:26'),
(7, 'طوارئ', '2023-07-08 19:16:56', '2023-07-08 19:16:56'),
(8, 'باطنية', '2023-07-15 17:12:58', '2023-07-15 17:12:58');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `is_deleted` int(11) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `title`, `email`, `phone`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'عبدالله سليمان', 'الخرطوم', 'Abdallha@gmail.com', '0123433320', 1, '2023-07-24 17:45:26', '2023-07-24 17:45:26'),
(2, 'سماح السر', 'الخرطوم', 'smah123@gmail.com', '0992143332', 1, '2023-07-24 17:45:26', '2023-07-24 17:45:26'),
(3, 'عمر الطيب', 'بحري', 'omer123@gmail.com', '0999956451', 1, '2023-07-24 17:45:26', '2023-07-24 17:45:26'),
(4, 'حسن احمد', 'الجريف غرب', 'hssan5040@gmail.com', '0914525899', 1, '2023-07-24 17:45:26', '2023-07-24 17:45:26'),
(5, 'محمد احمد', 'الصحافه', 'mohamed526@gamil.com', '0142566687', 1, '2023-07-24 17:45:26', '2023-07-24 17:45:26'),
(6, 'سعد علي', 'بحري', 'sad@gmail.com', '0125251463', 0, '2023-07-24 17:45:26', '2023-07-24 17:45:26');

-- --------------------------------------------------------

--
-- Table structure for table `staff_pharmacy`
--

CREATE TABLE `staff_pharmacy` (
  `id` int(11) NOT NULL,
  `staff_id` int(10) UNSIGNED NOT NULL,
  `pharmacy_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_pharmacy`
--

INSERT INTO `staff_pharmacy` (`id`, `staff_id`, `pharmacy_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2023-07-21 16:52:02', '2023-07-21 17:01:51'),
(2, 1, 2, '2023-07-21 16:52:02', '2023-07-21 18:10:59'),
(3, 3, 2, '2023-07-21 16:52:02', '2023-07-21 17:53:30'),
(4, 4, 6, '2023-07-21 20:03:05', '2023-07-22 11:30:41'),
(5, 6, 5, '2023-07-21 20:03:05', '2023-07-22 11:30:36'),
(6, 2, 6, '2023-07-21 20:03:15', '2023-07-22 11:26:21'),
(7, 1, 4, '2023-07-22 11:27:57', '2023-07-24 18:24:52'),
(8, 6, 5, '2023-07-22 11:27:57', '2023-07-22 11:27:57'),
(9, 3, 3, '2023-07-24 19:15:16', '2023-07-24 19:15:16'),
(10, 1, 11, '2023-10-07 01:18:46', '2023-10-07 01:18:46'),
(11, 3, 11, '2023-10-07 01:18:46', '2023-10-07 01:18:46'),
(12, 4, 11, '2023-10-07 01:18:46', '2023-10-07 01:18:46'),
(13, 1, 12, '2023-10-07 01:19:35', '2023-10-07 01:19:35'),
(14, 3, 12, '2023-10-07 01:19:35', '2023-10-07 01:19:35'),
(15, 4, 12, '2023-10-07 01:19:35', '2023-10-07 01:19:35'),
(16, 2, 12, '2023-10-07 04:09:45', '2023-10-07 04:09:45'),
(17, 2, 13, '2023-10-07 04:10:10', '2023-10-07 04:10:10'),
(18, 4, 13, '2023-10-07 04:10:10', '2023-10-07 04:10:10'),
(19, 1, 1, '2023-10-07 04:14:11', '2023-10-07 04:14:11'),
(20, 1, 13, '2023-10-07 04:19:13', '2023-10-07 04:19:13'),
(21, 3, 13, '2023-10-07 04:19:13', '2023-10-07 04:19:13'),
(22, 6, 6, '2023-10-07 15:38:51', '2023-10-07 15:38:51'),
(23, 3, 1, '2023-10-08 17:17:03', '2023-10-08 17:17:03'),
(24, 4, 1, '2023-10-08 17:17:03', '2023-10-08 17:17:03'),
(25, 5, 1, '2023-10-08 17:17:03', '2023-10-08 17:17:03'),
(26, 6, 1, '2023-10-08 17:17:03', '2023-10-08 17:17:03'),
(27, 2, 5, '2023-10-08 18:32:46', '2023-10-08 18:32:46'),
(28, 3, 5, '2023-10-08 18:32:46', '2023-10-08 18:32:46'),
(29, 4, 5, '2023-10-08 18:32:46', '2023-10-08 18:32:46'),
(30, 2, 8, '2023-10-15 12:28:38', '2023-10-15 12:28:38'),
(31, 3, 8, '2023-10-15 12:28:38', '2023-10-15 12:28:38'),
(32, 5, 8, '2023-10-15 12:28:38', '2023-10-15 12:28:38'),
(33, 6, 8, '2023-10-15 12:28:38', '2023-10-15 12:28:38'),
(34, 1, 3, '2023-10-20 15:10:26', '2023-10-20 15:10:26'),
(35, 2, 3, '2023-10-20 15:10:26', '2023-10-20 15:10:26'),
(36, 4, 3, '2023-10-20 15:10:26', '2023-10-20 15:10:26'),
(37, 5, 3, '2023-10-20 15:10:26', '2023-10-20 15:10:26'),
(38, 6, 3, '2023-10-20 15:10:26', '2023-10-20 15:10:26');

-- --------------------------------------------------------

--
-- Table structure for table `time_work`
--

CREATE TABLE `time_work` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time_work`
--

INSERT INTO `time_work` (`id`, `name`) VALUES
(1, 'السبت'),
(2, 'الاحد'),
(3, 'الاثنين'),
(4, 'كل ايام الاسبوع\r\n'),
(5, 'الثلاثاء'),
(6, 'الاربعاء'),
(7, 'الخميس'),
(8, 'الجمعه');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Fouad Mohamed', 'fouad@gmail.com', '', '2023-10-03 07:18:53', 'd0970714757783e6cf17b26fb8e2298f', '149b2f72402672b563c064f7d04d5e97', '2023-10-03 07:18:53', NULL),
(2, '', '', '', '2023-10-05 08:01:46', 'd41d8cd98f00b204e9800998ecf8427e', 'd74ebb7591e8d04a93c0909535dca05a', '2023-10-05 08:01:46', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clinics`
--
ALTER TABLE `clinics`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `loca_id` (`id`) USING BTREE;

--
-- Indexes for table `clinic_docotrs`
--
ALTER TABLE `clinic_docotrs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `docotrs`
--
ALTER TABLE `docotrs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_duty`
--
ALTER TABLE `doctor_duty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `duty`
--
ALTER TABLE `duty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `forwords`
--
ALTER TABLE `forwords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_doctors`
--
ALTER TABLE `hospital_doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nationality`
--
ALTER TABLE `nationality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nurses`
--
ALTER TABLE `nurses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pation`
--
ALTER TABLE `pation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pation_sicks`
--
ALTER TABLE `pation_sicks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sick`
--
ALTER TABLE `sick`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialization`
--
ALTER TABLE `specialization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specializationhospital`
--
ALTER TABLE `specializationhospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_pharmacy`
--
ALTER TABLE `staff_pharmacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_work`
--
ALTER TABLE `time_work`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clinics`
--
ALTER TABLE `clinics`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `clinic_docotrs`
--
ALTER TABLE `clinic_docotrs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `docotrs`
--
ALTER TABLE `docotrs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `doctor_duty`
--
ALTER TABLE `doctor_duty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `duty`
--
ALTER TABLE `duty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forwords`
--
ALTER TABLE `forwords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hospital_doctors`
--
ALTER TABLE `hospital_doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `local`
--
ALTER TABLE `local`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nationality`
--
ALTER TABLE `nationality`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nurses`
--
ALTER TABLE `nurses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pation`
--
ALTER TABLE `pation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pation_sicks`
--
ALTER TABLE `pation_sicks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pharmacy`
--
ALTER TABLE `pharmacy`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sick`
--
ALTER TABLE `sick`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `specialization`
--
ALTER TABLE `specialization`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `specializationhospital`
--
ALTER TABLE `specializationhospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staff_pharmacy`
--
ALTER TABLE `staff_pharmacy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `time_work`
--
ALTER TABLE `time_work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
