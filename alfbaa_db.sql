-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 01, 2020 at 12:17 PM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alfbaa_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` int(10) UNSIGNED NOT NULL,
  `area` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `side` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caption` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `period` int(11) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `title`, `link`, `image_name`, `caption`, `period`, `type`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'اعلان 1', '<p>اعلان 1</p>', '5baa097211d7a.jpeg', '', 72, 0, 1, 0, '2018-09-25 13:10:04', '2018-09-25 13:10:04');

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(120) NOT NULL,
  `source` varchar(200) NOT NULL,
  `phone` int(20) NOT NULL,
  `governorate` varchar(50) NOT NULL,
  `whatsapp` int(20) NOT NULL,
  `type` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `name`, `email`, `source`, `phone`, `governorate`, `whatsapp`, `type`, `created_at`, `updated_at`) VALUES
(52, 'السعيد', 'super@admin.com', 'what', 543543, 'fdfdsfsd', 4575757, 'تطوع', '2020-03-01 09:50:38', '2020-03-01 09:50:38'),
(53, 'fateh', 'super@admin.com', 'what', 543543, 'agdsds', 2147483647, 'مبادرات', '2020-03-01 09:53:32', '2020-03-01 09:53:32'),
(54, 'fateh', 'super@admin.com', 'what', 543543, 'agdsds', 2147483647, 'مبادرات', '2020-03-01 09:54:32', '2020-03-01 09:54:32'),
(55, 'سليم كوشوفالي', 'saleem@gmail.com', 'what', 543543, 'how ', 2147483647, 'تطوع', '2020-03-01 10:02:24', '2020-03-01 10:02:24'),
(56, 'Azar', 'azar@gmail.com', 'WFP', 736627083, 'what should', 736588995, 'مبادرات', '2020-03-01 10:03:45', '2020-03-01 10:03:45'),
(57, 'محمد صالح ', 'capitano@mail.com', 'منظمة nrc', 73665982, 'Adden', 736659526, 'شراكة', '2020-03-01 10:31:47', '2020-03-01 10:31:47');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `type` tinyint(4) DEFAULT NULL,
  `parent` tinyint(4) DEFAULT NULL,
  `menushow` tinyint(4) DEFAULT NULL,
  `menuorder` tinyint(4) DEFAULT NULL,
  `homeshow` tinyint(4) DEFAULT NULL,
  `homeorder` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `type`, `parent`, `menushow`, `menuorder`, `homeshow`, `homeorder`, `created_at`, `updated_at`) VALUES
(1, 'اخبار', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'قصص النجاح', 0, NULL, NULL, 0, NULL, 0, NULL, '2019-11-08 19:58:41', '2019-11-25 22:25:58'),
(3, 'قبل التأسيس', 0, NULL, NULL, 0, NULL, 0, NULL, '2020-02-27 11:00:45', '2020-02-27 11:00:45');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `location` text COLLATE utf8_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `title`, `description`, `location`, `image_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Omron', '<p>هي عبارة عن شركة طبية توفر العديد من المنتجات في المجال الطبي وتوفر العديد من الأجهزه والأدوات الطبية الرائدة في المجال الطبي ... الخ الخ الخ.</p>', 'ِAden', '5d6cc5f6f389a.png', 0, '2019-09-01 06:57:29', '2019-09-02 07:37:37'),
(2, 'ACCU-CHEK', '<p>هي عبارة عن شركة طبية توفر العديد من المنتجات في المجال الطبي وتوفر العديد من الأجهزه والأدوات الطبية الرائدة في المجال الطبي ...الخ الخ الخ.</p>', 'Fateh Alrabeai', '5d6cc6d8ad1d0.png', 0, '2019-09-01 06:59:35', '2019-09-02 07:39:34'),
(3, 'Hlows', '<p>sdfdklnf ksdlnf jfldjf kdsfsd</p>', 'Vcaasss', '5d74ad8703d7b.png', 0, '2019-09-01 07:00:17', '2019-09-08 07:28:12'),
(4, 'Alrabeai', '<p>jkdsfhsdkhfjksdfhkjdsh</p>', 'aden', '5d74ad9f5853d.png', 0, '2019-09-01 07:05:34', '2019-09-08 07:28:34'),
(5, 'shrodraz', '<p><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', 'yemen', '5d7625d08f7bf.png', 0, '2019-09-09 10:14:03', '2019-09-09 10:14:03');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image_name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `course_content` text NOT NULL,
  `availability` tinyint(4) DEFAULT NULL,
  `course_time` varchar(100) DEFAULT NULL,
  `starting_date` date DEFAULT NULL,
  `trainer_name` varchar(200) DEFAULT NULL,
  `hours_no` varchar(100) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `image_name`, `description`, `course_content`, `availability`, `course_time`, `starting_date`, `trainer_name`, `hours_no`, `status`, `created_at`, `updated_at`) VALUES
(4, 'دورة محاسبية مكثفة', '5ddec7d34bc70.jpeg', '<p><span>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن</span></p>', '<p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع. ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق. هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>', 2, 'من الساعه 8 إلى 10', '2020-02-25', 'فتح الربيعي', '8 ساعات', 0, '2019-11-23 17:56:54', '2019-12-01 16:29:32'),
(5, 'دورة في إدارة الأعمال', '5dd9496d2e7d5.jpeg', '<p><span>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن</span></p>', '<p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع. ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق. هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>', 2, 'من الساعه 8 إلى 10 مساء', '2020-01-08', 'محمد علي', '24 ساعه', 0, '2019-11-23 18:02:54', '2019-12-01 16:30:05'),
(7, 'دورة تأهيل الخريجين 2019', '5dd9578c57395.jpeg', '<p><span>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن</span></p>', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.\nإذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.\nومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.\nهذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.', 2, 'من الساعه 9 إلى 11 صباحاً', '2019-11-20', 'فتح الربيعي', '10 ساعات', 0, '2019-11-23 19:01:39', '2019-11-23 19:01:39'),
(8, 'دورة محاسبية مكثفة', '5dde10151aeac.jpeg', '<p><span>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن</span></p>', '<p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع. ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق. هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>', 1, 'من الساعه 8 إلى 10', '2020-02-25', 'فتح الربيعي', NULL, 0, '2019-11-27 08:56:42', '2019-11-27 08:56:42'),
(9, 'how to cook food', '5de553f2283c9.jpeg', '<p>how to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook food</p>', '<p>how to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook foodhow to cook food</p>', 0, '8hourse ', '2019-12-18', 'Mohammed saleh', '7hours', 0, '2019-12-02 21:13:16', '2019-12-02 21:13:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `tags` text COLLATE utf8_unicode_ci NOT NULL,
  `caption` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `image_categories_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `link`, `content`, `tags`, `caption`, `status`, `image_categories_id`, `created_at`, `updated_at`) VALUES
(78, '5e47e28fd63a1.jpeg', '', '', '', '', 0, 1, '2020-02-15 15:22:39', '2020-02-15 15:22:39'),
(79, '5e5b9d3e81473.jpeg', '', '', '', '', 0, 1, '2020-02-15 15:22:45', '2020-03-01 14:32:14'),
(80, '5e5b9d99a8834.jpeg', '', '', '', '', 0, 1, '2020-02-15 15:22:51', '2020-03-01 14:33:45'),
(81, '5e47e2a306f7e.jpeg', '', '', '', '', 0, 4, '2020-02-15 15:22:59', '2020-02-15 15:22:59'),
(82, '5e47e2a6cd30d.jpeg', '', '', '', '', 0, 4, '2020-02-15 15:23:02', '2020-02-15 15:23:02'),
(83, '5e47e2aa79f60.jpeg', '', '', '', '', 0, 4, '2020-02-15 15:23:06', '2020-02-15 15:23:06'),
(84, '5e5270ebb46c6.png', '', '', '', '', 0, 5, '2020-02-23 15:32:44', '2020-02-23 15:32:44'),
(85, '5e55065855ac3.jpeg', 'files/5e5505d8cb1a2.pdf', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.', '', 'مشروع مجتمعات تصنع السلام', 0, 5, '2020-02-25 11:40:54', '2020-02-25 14:34:48'),
(86, '5e564c7371fe9.jpeg', '', '', '', '', 0, 1, '2020-02-26 13:46:11', '2020-02-26 13:46:11'),
(88, '5e564f4ed2f3c.jpeg', '', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.', '', '', 0, 5, '2020-02-26 13:58:22', '2020-02-26 13:58:22'),
(89, '5e57687c98653.jpeg', NULL, '', '', '', 0, 0, '2020-02-27 09:58:04', '2020-02-27 09:58:04'),
(93, '5e5b94f97ab3e.png', '', '', '', '', 0, 3, '2020-03-01 13:56:57', '2020-03-01 13:56:57'),
(94, '5e5b94ff4ae12.png', '', '', '', '', 0, 3, '2020-03-01 13:57:03', '2020-03-01 13:57:03'),
(95, '5e5b950265941.png', '', '', '', '', 0, 3, '2020-03-01 13:57:06', '2020-03-01 13:57:06'),
(96, '5e5b951c64e25.png', '', '', '', '', 0, 3, '2020-03-01 13:57:32', '2020-03-01 13:57:32'),
(97, '5e5b975916b9f.png', '', '', '', '', 0, 3, '2020-03-01 14:07:05', '2020-03-01 14:07:05');

-- --------------------------------------------------------

--
-- Table structure for table `image_categories`
--

CREATE TABLE `image_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `image_categories`
--

INSERT INTO `image_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'صور السلايدر', 0, '2018-09-25 13:17:44', '2020-02-15 15:20:50'),
(3, 'الشركاء', 0, '2018-10-03 11:12:04', '2019-11-27 08:50:39'),
(4, 'صور المعرض', 0, '2018-10-03 11:12:04', '2018-10-03 11:12:04'),
(5, 'تقارير', 0, '2019-09-17 06:14:21', '2019-09-17 06:14:21');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `caption` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `duration` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `how_to_apply` text COLLATE utf8_unicode_ci,
  `user_id` tinyint(4) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `deadline`, `location`, `image_name`, `caption`, `content`, `duration`, `how_to_apply`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Shipping Assistant', '2018-09-28', 'عدن', '5ba9f78abd8a0.jpeg', '', '<p>The United Nations World Food Programme is the world\'s largest humanitarian agency fighting hunger worldwide.&nbsp; The mission of WFP is to help the world&nbsp;achieve Zero Hunger&nbsp;in our lifetimes.&nbsp; Every day, WFP works worldwide to ensure that no child goes to bed hungry and that the poorest and most vulnerable, particularly women and children, can access the nutritious food they need.</p>\r\n<p>ORGANIZATIONAL CONTEXT</p>\r\n<p>Job holders at this level are responsible for completion of a range of processes and activities requiring interpretation of standard guidelines/practices, and/or escalate more complex issues to the supervisor, if required. Job holders are able to recommend straightforward courses of action to staff, and may allocate tasks and support other staff.</p>\r\n<p>TERMS AND CONDITIONS</p>\r\n<p>The applicant should either be a Yemeni national or have a valid Yemeni Residence/work permit at the time of application.Only candidates who are short-listed will be contactedApplications must be submitted online (English language only)</p>\r\n<p>STANDARD MINIMUM QUALIFICATIONS</p>\r\n<p>Education:&nbsp;Completion of secondary school education. A post-secondary certificate in the related functional area is desirable.</p>\r\n<p>Language:&nbsp;Fluent (level C) English and Arabic in both oral and written communication</p>\r\n<p>Experience:&nbsp;Four or more years in shipping and logistics (food stock)</p>\r\n<p>DESIRED EXPERIENCES FOR ENTRY INTO THE ROLE</p>\r\n<p>&bull; Experience in the area of shipping, logistics or procurement.<br />&bull; Experience in analysing data and drafting reports.<br />&bull; Experience using and maintaining supply chain databases to monitor ongoing contracts, shipments, payments, pipeline information, insurance claims, and/or food stocks against set KPIs.<br />&bull; Experience in providing technical business support in corporate systems.<br />&bull; Experience in coordinating with COs and other supply chain actors to support ocean transport contracting and operations.</p>', 'سنة', NULL, 1, 0, '2018-09-25 11:53:34', '2018-09-25 11:53:34'),
(3, 'طويرق مأساة إنسان ! ', '2018-09-27', 'Multiple Cities2', '5baa0d21e78e9.png', '', '<p>سنة</p>', 'سنة', NULL, 1, 0, '2018-09-25 13:25:40', '2018-09-25 13:25:40'),
(4, ' نصائح بنقل \"العديد\" من قطر بسبب سياستها المعادية للمصالح الأميركية ', '2018-09-30', 'Multiple Cities2', '5baa101cdf0d2.jpeg', '', '<p>skmm</p>', 'سنة', NULL, 1, 0, '2018-09-25 13:39:32', '2018-09-25 13:39:32'),
(5, 'طويرق مأساة إنسان ! ', '2018-09-29', 'Multiple Cities2', '', '', '<p>dddd</p>', 'سنة', NULL, 1, 0, '2018-09-25 14:29:20', '2018-09-25 14:29:20'),
(6, 'طويرق مأساة إنسان ! ', '2018-09-29', 'Multiple Cities', '5baa1e02c9d75.png', '', '<p>sss</p>', 'سنة', NULL, 1, 0, '2018-09-25 14:38:10', '2018-09-25 14:38:10'),
(7, 'fdsfsdfds', '2019-02-01', 'aasdsafsf', '5d6ad550574f6.jpeg', '', '<p>fbxvxfvxvdvdx</p>', '3', NULL, 1, 0, '2019-08-31 20:15:39', '2019-08-31 20:15:39'),
(8, 'accountant', '2020-02-12', '', '', NULL, '', '', NULL, 1, 0, '2020-02-27 13:13:38', '2020-02-27 13:13:38');

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

CREATE TABLE `mails` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `source` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `governorate` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `whatsapp` int(11) DEFAULT NULL,
  `type` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mails`
--

INSERT INTO `mails` (`id`, `name`, `email`, `source`, `phone`, `governorate`, `whatsapp`, `type`, `ip`, `code`, `message`, `status`, `created_at`, `updated_at`) VALUES
(21, 'محمد صالح أحمد منى', 'what@mail.com', NULL, NULL, NULL, NULL, NULL, '', '', 'what the hell? ', 0, '2020-03-01 09:56:21', '2020-03-01 09:56:33'),
(22, 'what ', 'super@admin.com', NULL, NULL, NULL, NULL, NULL, '', '', 'sdsdfdsfds', 1, '2020-03-01 09:59:54', '2020-03-01 09:59:54'),
(23, 'hello', 'helo@mail.com', NULL, NULL, NULL, NULL, NULL, '', '', 'ssddsf dsfds fsd', 1, '2020-03-01 10:00:52', '2020-03-01 10:00:52'),
(24, 'anwer', 'fatehalrabeai@gmail.com', NULL, NULL, NULL, NULL, NULL, '', '', 'what should be there is something else', 0, '2020-03-01 10:26:46', '2020-03-01 10:27:42'),
(25, 'anwer', 'fatehalrabeai@gmail.com', NULL, NULL, NULL, NULL, NULL, '', '', 'what should be there is something else', 0, '2020-03-01 10:27:09', '2020-03-01 10:27:38'),
(26, 'سالم عوض صالخ', 'awad@mail.com', NULL, NULL, NULL, NULL, NULL, '', '', 'سالم عوض صاالح', 0, '2020-03-01 10:28:26', '2020-03-01 10:28:44'),
(27, 'fath=eh', 'super@admin.com', NULL, NULL, NULL, NULL, NULL, '', '', 'sdfsdfdsfds', 1, '2020-03-01 10:30:42', '2020-03-01 10:30:42'),
(28, 'fateh', 'super@admin.com', NULL, NULL, NULL, NULL, NULL, '', '', 'what is there ?', 0, '2020-03-01 10:35:02', '2020-03-01 10:35:17'),
(29, 'salma', 'salma@gmailc.o', NULL, NULL, NULL, NULL, NULL, '', '', 'salma is going home', 1, '2020-03-01 10:35:53', '2020-03-01 10:35:53');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `image_name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'سوسن محمد احمد', '5e481c80450ce.jpeg', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.', 0, '2020-02-15 19:32:03', '2020-02-15 19:32:03'),
(2, 'محمد سمير محمد', '5e481d707ba71.jpeg', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.', 0, '2020-02-15 19:35:14', '2020-02-15 19:35:14'),
(3, 'سوسن محمد احمد', '5e481c80450ce.jpeg', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.', 0, '2020-02-15 19:32:03', '2020-02-15 19:32:03'),
(4, 'محمد سمير محمد', '5e481d707ba71.jpeg', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.', 0, '2020-02-15 19:35:14', '2020-02-15 19:35:14');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_06_25_021242_create_posts_table', 1),
('2016_06_25_021242_create_programs_table', 1),
('2016_06_25_021242_create_works_table', 1),
('2016_06_25_192327_create_categories_table', 1),
('2016_07_18_125505_entrust_setup_tables', 1),
('2016_08_06_124848_create_images_table', 2),
('2016_08_07_094628_create_pages_table', 2),
('2016_08_07_223542_create_image_categories_table', 2),
('2016_08_08_082346_create_videos_table', 2),
('2016_08_08_195011_create_video_categories_table', 2),
('2016_08_24_065638_create_settings_table', 2),
('2016_08_25_082535_create_user_logs_table', 2),
('2016_08_26_224145_create_tasks_table', 2),
('2016_08_31_133721_create_mails_table', 2),
('2016_12_07_082320_create_advertisements_table', 2),
('2016_12_07_082320_create_announcements_table', 2),
('2016_12_07_082320_create_jobs_table', 2),
('2016_12_07_082320_create_tenders_table', 2),
('2016_12_11_163645_create_pdfs_table', 2),
('2016_12_28_172651_create_uploads_table', 2),
('2017_01_23_115718_create__table', 2),
('2017_01_23_124357_create_polls_options_table', 2),
('2017_01_25_111721_create_polls_voting_table', 2),
('2019_08_29_104426_create_companies_table', 3),
('2019_08_19_000000_create_failed_jobs_table', 4),
('2019_09_30_161456_create_projects_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'من نحن', '<p><span>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</span><br class=\"line-break\" /><span>إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</span></p>', 0, NULL, '2019-11-22 10:32:35'),
(2, 'الأهداف', '<p><span>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</span><br class=\"line-break\" /><span>إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة&nbsp;</span></p>', 0, '2018-10-10 12:44:30', '2020-02-15 18:50:11'),
(3, 'الرسالة', '<p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع. ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع&nbsp;</p>', 0, '2018-10-10 12:50:08', '2020-02-15 18:45:18'),
(4, 'الرؤية', '<div>\r\n<div>\r\n<div>\r\n<div>\r\n<p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.<br />ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.<br />هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div></div>\r\n</div>\r\n<div>\r\n<div>\r\n<div></div>\r\n</div>\r\n</div>', 0, '2018-10-10 12:51:18', '2018-10-10 12:51:18'),
(5, 'القيم', '<p><span>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</span><br class=\"line-break\" /><span>إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</span></p>', 0, '2020-02-15 18:42:00', '2020-02-15 18:42:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pdfs`
--

CREATE TABLE `pdfs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caption` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'posts.create', 'posts.create', '', '2016-06-26 00:00:00', '2016-08-28 12:00:42'),
(2, 'posts.edit', 'posts.edit', '', '2016-06-26 00:00:00', '2016-08-27 01:09:34'),
(3, 'posts.index', 'posts.index', 'posts.index\r\n', '2016-06-26 00:00:00', NULL),
(4, 'categories.create', 'categories.create', '', '2016-06-26 00:00:00', NULL),
(5, 'categories.edit', 'categories.edit', '', '2016-06-26 00:00:00', NULL),
(6, 'categories.index', 'categories.index', '', '2016-06-26 00:00:00', NULL),
(7, 'imagecategories.create', 'imagecategories.create', '', '2016-06-26 00:00:00', NULL),
(8, 'imagecategories.edit', 'imagecategories.edit', '', '2016-06-26 00:00:00', NULL),
(9, 'imagecategories.index', 'imagecategories.index', '', '2016-06-26 00:00:00', NULL),
(10, 'images.create', 'images.create', '', '2016-06-26 00:00:00', NULL),
(11, 'images.edit', 'images.edit', '', '2016-06-26 00:00:00', NULL),
(12, 'images.index', 'images.index', '', '2016-06-26 00:00:00', NULL),
(13, 'pages.create', 'pages.create', '', '2016-06-26 00:00:00', NULL),
(14, 'pages.edit', 'pages.edit', '', '2016-06-26 00:00:00', NULL),
(15, 'pages.index', 'pages.index', '', '2016-06-26 00:00:00', NULL),
(16, 'roles.create', 'roles.create', '', '2016-06-26 00:00:00', NULL),
(17, 'roles.edit', 'roles.edit', '', '2016-06-26 00:00:00', NULL),
(18, 'roles.index', 'roles.index', '', '2016-06-26 00:00:00', NULL),
(19, 'users.create', 'users.create', '', '2016-06-26 00:00:00', NULL),
(20, 'users.edit', 'users.edit', '', '2016-06-26 00:00:00', NULL),
(21, 'users.index', 'users.index', '', '2016-06-26 00:00:00', NULL),
(22, 'videocategories.create', 'videocategories.create', '', '2016-06-26 00:00:00', NULL),
(23, 'videocategories.edit', 'videocategories.edit', '', '2016-06-26 00:00:00', NULL),
(24, 'videocategories.index', 'videocategories.index', '', '2016-06-26 00:00:00', NULL),
(25, 'videos.create', 'videos.create', '', '2016-06-26 00:00:00', NULL),
(26, 'videos.edit', 'videos.edit', '', '2016-06-26 00:00:00', NULL),
(27, 'videos.index', 'videos.index', '', '2016-06-26 00:00:00', NULL),
(28, 'tasks.create', 'tasks.create', '', '2016-06-26 00:00:00', NULL),
(29, 'tasks.edit', 'tasks.edit', '', '2016-06-26 00:00:00', NULL),
(30, 'tasks.index', 'tasks.index', '', '2016-06-26 00:00:00', NULL),
(31, 'userlogs.index', 'userlogs.index', '', '2016-06-26 00:00:00', NULL),
(32, 'settings.index', 'settings.index', '', '2016-06-26 00:00:00', NULL),
(33, 'controlpanel.index', 'controlpanel.index', '', '2016-06-26 00:00:00', NULL),
(34, 'permissions.create', 'permissions.create', '', '2016-06-26 00:00:00', NULL),
(35, 'permissions.edit', 'permissions.edit', '', '2016-06-26 00:00:00', NULL),
(36, 'permissions.index', 'permissions.index', '', '2016-06-26 00:00:00', NULL),
(37, 'trash.index', 'trash.index', '', '2016-06-26 00:00:00', NULL),
(38, 'posts.destroy', 'posts.destroy', '', '2016-06-26 00:00:00', '2016-08-28 12:00:42'),
(39, 'images.destroy', 'images.destroy', '', '2016-06-26 00:00:00', NULL),
(40, 'videos.destroy', 'videos.destroy', '', '2016-06-26 00:00:00', NULL),
(41, 'categories.destroy', 'categories.destroy', '', '2016-06-26 00:00:00', NULL),
(42, 'imagecategories.destroy', 'imagecategories.destroy', '', '2016-06-26 00:00:00', NULL),
(43, 'pages.destroy', 'pages.destroy', '', '2016-06-26 00:00:00', NULL),
(44, 'roles.destroy', 'roles.destroy', '', '2016-06-26 00:00:00', NULL),
(45, 'tasks.destroy', 'tasks.destroy', '', '2016-06-26 00:00:00', NULL),
(46, 'users.destroy', 'users.destroy', '', '2016-06-26 00:00:00', NULL),
(47, 'videocategories.destroy', 'videocategories.destroy', '', '2016-06-26 00:00:00', NULL),
(48, 'mail.index', 'mail.index', '', '2016-06-26 00:00:00', NULL),
(49, 'mail.show', 'mail.show', '', '2016-06-26 00:00:00', NULL),
(50, 'settings.create', 'settings.create', '', '2016-06-26 00:00:00', NULL),
(51, 'settings.edit', 'settings.edit', '', '2016-06-26 00:00:00', NULL),
(52, 'tasks.widget', 'tasks.widget', '', '2016-06-26 00:00:00', NULL),
(56, 'writres.create', 'writres.create', '', '2016-06-26 00:00:00', NULL),
(59, 'writers.destroy', 'writers.destroy', '', '2016-06-26 00:00:00', NULL),
(62, 'writers.index', 'writers.index', '', '2016-06-26 00:00:00', NULL),
(64, 'writers.edit', 'writers.edit', '', '2016-06-26 00:00:00', '2016-08-27 01:09:34'),
(65, 'writers.create', 'writers.create', '', '2016-06-26 00:00:00', NULL),
(67, 'articles.create', 'articles.create', '', '2016-06-26 00:00:00', NULL),
(68, 'articles.edit', 'articles.edit', '', '2016-06-26 00:00:00', '2016-08-27 01:09:34'),
(69, 'articles.index', 'articles.index', '', '2016-06-26 00:00:00', NULL),
(70, 'articles.destroy', 'articles.destroy', '', '2016-06-26 00:00:00', NULL),
(71, 'announcements.create', 'announcements.create', '', '2016-06-26 00:00:00', '2016-08-28 12:00:42'),
(72, 'announcements.edit', 'announcements.edit', '', '2016-06-26 00:00:00', '2016-08-27 01:09:34'),
(73, 'announcements.index', 'announcements.index', 'posts.index\r\n', '2016-06-26 00:00:00', NULL),
(74, 'announcements.destroy', 'announcements.destroy', '', '2016-06-26 00:00:00', NULL),
(75, 'advertisements.destroy', 'advertisements.destroy', '', '2016-06-25 21:00:00', NULL),
(76, 'advertisements.index', 'advertisements.index', '', '2016-06-25 21:00:00', NULL),
(77, 'advertisements.edit', 'advertisements.edit', '', '2016-06-25 21:00:00', '2016-08-26 22:09:34'),
(78, 'advertisements.create', 'advertisements.create', '', '2016-06-25 21:00:00', '2016-08-28 09:00:42'),
(79, 'programs.index', 'programs.index', NULL, NULL, NULL),
(80, 'programs.create', 'programs.create', NULL, NULL, NULL),
(81, 'programs.edit', 'programs.edit', NULL, NULL, NULL),
(82, 'programs.destroy', 'programs.destroy', NULL, NULL, NULL),
(83, 'polls.index', 'polls.index', 'polls.index\r\n', '2016-06-26 00:00:00', NULL),
(84, 'polls.create', 'polls.create', 'polls.index\r\n', '2016-06-26 00:00:00', NULL),
(85, 'polls.edit', 'polls.edit', 'polls.edit\r\n', '2016-06-26 00:00:00', NULL),
(86, 'polls.show', 'polls.show', 'polls.show', '2016-06-26 00:00:00', NULL),
(87, 'posts.show', 'posts.show', '', '2016-06-26 00:00:00', '2016-08-28 12:00:42'),
(88, 'tenders.index', 'tenders.index', NULL, NULL, NULL),
(89, 'tenders.show', 'tenders.show', NULL, NULL, NULL),
(90, 'tenders.store', 'tenders.store', NULL, NULL, NULL),
(91, 'tenders.edit', 'tenders.edit', NULL, NULL, NULL),
(92, 'tenders.destroy', 'tenders.destroy', NULL, NULL, NULL),
(93, 'jobs.index', 'jobs.index', NULL, NULL, NULL),
(94, 'jobs.show', 'jobs.show', NULL, NULL, NULL),
(95, 'jobs.store', 'jobs.store', NULL, NULL, NULL),
(96, 'jobs.edit', 'jobs.edit', NULL, NULL, NULL),
(97, 'jobs.destroy', 'jobs.destroy', NULL, NULL, NULL),
(98, 'tenders.create', 'tenders.create', NULL, NULL, NULL),
(99, 'jobs.create', 'jobs.create', NULL, NULL, NULL),
(100, 'uploadfiles.index', 'uploadfiles.index', NULL, NULL, NULL),
(101, 'uploadfiles.show', 'uploadfiles.show', NULL, NULL, NULL),
(102, 'uploadfiles.store', 'uploadfiles.store', NULL, NULL, NULL),
(103, 'uploadfiles.edit', 'uploadfiles.edit', NULL, NULL, NULL),
(104, 'uploadfiles.destroy', 'uploadfiles.destroy', NULL, NULL, NULL),
(105, 'uploadfiles.create', 'uploadfiles.create', NULL, NULL, NULL),
(106, 'works.index', 'works.index', NULL, NULL, NULL),
(107, 'works.create', 'works.create', NULL, NULL, NULL),
(108, 'works.edit', 'works.edit', NULL, NULL, NULL),
(109, 'works.destroy', 'works.destroy', NULL, NULL, NULL),
(110, 'productcategories.create', 'productcategories.create', '', '2016-06-26 00:00:00', NULL),
(111, 'productcategories.edit', 'productcategories.edit', '', '2016-06-26 00:00:00', NULL),
(112, 'productcategories.index', 'productcategories.index', '', '2016-06-26 00:00:00', NULL),
(113, 'products.create', 'products.create', '', '2016-06-26 00:00:00', NULL),
(114, 'products.edit', 'products.edit', '', '2016-06-26 00:00:00', NULL),
(115, 'products.index', 'products.index', '', '2016-06-26 00:00:00', NULL),
(116, 'products.destroy', 'products.destroy', '', '2016-06-26 00:00:00', '2016-08-28 12:00:42'),
(117, 'companies.create', 'companies.create', NULL, NULL, NULL),
(118, 'companies.edit', 'companies.edit', NULL, NULL, NULL),
(119, 'companies.index', 'companies.index', NULL, NULL, NULL),
(120, 'companies.destroy', 'companies.destroy', NULL, NULL, NULL),
(121, 'projects.edit', 'projects.edit', 'projects.index', NULL, NULL),
(122, 'projects.save', 'projects.save', 'projects.pupdate', NULL, NULL),
(123, 'courses.create', 'courses.create', 'إضافة دورات', NULL, NULL),
(124, 'courses.edit', 'courses.edit', 'تعديل الدورة', '2018-09-23 03:00:00', '2018-09-25 18:02:15'),
(125, 'courses.show', 'courses.show', 'عرض تفاصيل الدورة', NULL, NULL),
(126, 'courses.index', 'courses.index', 'عرض كافة الدورات', NULL, NULL),
(127, 'courses.destroy', 'courses.destroy', 'courses.destroy', NULL, NULL),
(128, 'applicants.index', 'applicants.index', 'كل المتقدمين', NULL, NULL),
(129, 'applicants.show', 'applicants.show', 'تفاصيل المتقدم', NULL, NULL),
(130, 'applicants.export', 'applicants.export', 'إستخراج ملف اكسل', NULL, NULL),
(131, 'groups.index', 'groups.index', NULL, NULL, NULL),
(132, 'groups.create', 'groups.create', NULL, NULL, NULL),
(133, 'groups.store', 'groups.store', NULL, NULL, NULL),
(134, 'groups.edit', 'groups.edit', NULL, NULL, NULL),
(135, 'groups.update', 'groups.update', NULL, NULL, NULL),
(136, 'groups.destroy', 'groups.destroy', NULL, NULL, NULL),
(137, 'groups.export', 'groups.export', 'groups.export', NULL, NULL),
(138, 'members.create', 'members.create', 'members.create', NULL, NULL),
(139, 'members.edit', 'members.edit', 'members.edit', NULL, NULL),
(140, 'members.store', 'members.store', 'members.store', NULL, NULL),
(141, 'members.update', 'members.update', 'members.update', NULL, NULL),
(142, 'members.destroy', 'members.destroy', 'members.destroy', NULL, NULL),
(143, 'members.index', 'members.index', 'members.index', NULL, NULL),
(144, 'applicants.destroy', 'applicants.destroy', 'applicants.destroy', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(56, 1),
(59, 1),
(62, 1),
(64, 1),
(65, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(91, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(98, 1),
(99, 1),
(100, 1),
(101, 1),
(102, 1),
(103, 1),
(104, 1),
(105, 1),
(106, 1),
(107, 1),
(108, 1),
(109, 1),
(110, 1),
(111, 1),
(112, 1),
(113, 1),
(114, 1),
(115, 1),
(116, 1),
(117, 1),
(118, 1),
(119, 1),
(120, 1),
(121, 1),
(122, 1),
(123, 1),
(124, 1),
(125, 1),
(126, 1),
(127, 1),
(128, 1),
(129, 1),
(130, 1),
(131, 1),
(132, 1),
(133, 1),
(134, 1),
(135, 1),
(136, 1),
(137, 1),
(138, 1),
(139, 1),
(140, 1),
(141, 1),
(142, 1),
(143, 1),
(1, 2),
(2, 2),
(3, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(23, 2),
(24, 2),
(25, 2),
(26, 2),
(27, 2),
(33, 2),
(38, 2),
(39, 2),
(40, 2),
(42, 2),
(47, 2),
(67, 2),
(68, 2),
(69, 2),
(70, 2),
(79, 2),
(81, 2),
(82, 2),
(87, 2),
(100, 2),
(101, 2),
(102, 2),
(103, 2),
(104, 2),
(105, 2),
(123, 2),
(124, 2),
(125, 2),
(126, 2),
(127, 2),
(128, 2),
(129, 2),
(130, 2),
(131, 2),
(132, 2),
(133, 2),
(134, 2),
(135, 2),
(136, 2),
(137, 2);

-- --------------------------------------------------------

--
-- Table structure for table `polls_options`
--

CREATE TABLE `polls_options` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `poll_question_id` int(11) NOT NULL,
  `votes` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `polls_questions`
--

CREATE TABLE `polls_questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `maxCheck` int(11) NOT NULL DEFAULT '1',
  `isClosed` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `polls_voting`
--

CREATE TABLE `polls_voting` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `poll_option_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `source` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tags` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caption` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `date` date DEFAULT NULL,
  `type` tinyint(4) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `importance` tinyint(4) NOT NULL,
  `comments_status` tinyint(4) DEFAULT NULL,
  `user_id` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `source`, `tags`, `count`, `image_name`, `caption`, `status`, `date`, `type`, `category_id`, `importance`, `comments_status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'النزاعات المسلحة عدوة للحضارة ', '<p>أقام مركز منظمة بيل، وبالتعاون مع منظمة &ldquo;إنقاذ الطفل &ndash; Save the Children&rdquo; جلسة توعوية اجتماعية، في مركز المنظمة بمخيم عين عيسى، وذلك يوم الاثنين، 25 حزيران/ يونيو 2018. وبدأت الجلسة بتقسيم الحضور إلى مجموعتين، جاءت الأولى من 70 طفل، وتناولت حقوق الطفل والمسؤوليات التي تقع على عاتق الأسرة والمجتمع وكذلك الحكومات ومنظمات المجتمع المدني التي تتوجب عليهم ضمان حماية هذه الحقوق.</p>', '', '', 145, '5e48208f00498.jpeg', '', 0, '0000-00-00', 1, 1, 1, NULL, 1, '2019-11-27 22:51:31', '2020-02-26 09:54:21'),
(2, 'المشاريع الجاري تنفيذها', '<p>أقام مركز منظمة بيل، وبالتعاون مع منظمة &ldquo;إنقاذ الطفل &ndash; Save the Children&rdquo; جلسة توعوية اجتماعية، في مركز المنظمة بمخيم عين عيسى، وذلك يوم الاثنين، 25 حزيران/ يونيو 2018. وبدأت الجلسة بتقسيم الحضور إلى مجموعتين، جاءت الأولى من 70 طفل، وتناولت حقوق الطفل والمسؤوليات التي تقع على عاتق الأسرة والمجتمع وكذلك الحكومات ومنظمات المجتمع المدني التي تتوجب عليهم ضمان حماية هذه الحقوق.</p>', '', NULL, 59, '5e48207612059.jpeg', '', 0, '0000-00-00', NULL, 1, 1, NULL, 1, '2018-09-25 12:56:39', '2020-03-01 15:01:09'),
(3, 'إعطاء دورة تنمية لنهظة الشباب', '<p><span>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</span><br class=\"line-break\" /><span>إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</span></p>', '', NULL, 3, '5e577d0ce8d8d.png', '', 0, '0000-00-00', NULL, 1, 1, NULL, 1, '2019-11-20 10:42:18', '2020-02-27 11:25:51'),
(4, 'هذا النص هو مثال لنص يمكن أن يستبدل', '<p><span>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</span><br class=\"line-break\" /><span>إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</span></p>', '', NULL, 37, '5e482014a4765.jpeg', '', 0, '2020-02-18', NULL, 1, 1, NULL, 1, '2019-11-27 22:24:56', '2020-03-01 15:02:02'),
(5, 'هذا النص هو مثال لنص يمكن أن يستبدل', '<p><span>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</span><br class=\"line-break\" /><span>إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</span><br class=\"line-break\" /><span>ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.</span><br class=\"line-break\" /><span>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</span></p>\r\n<div id=\"testimage\"><img width=\"100%\" src=\"/photos/5e57687c98653.jpeg\" /></div>', '', NULL, NULL, '5e57682ec69ad.png', '', 0, '2020-02-27', NULL, 2, 1, NULL, 1, '2020-02-27 09:58:15', '2020-02-27 09:58:15');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(252) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `warranty` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `other_images` text COLLATE utf8_unicode_ci,
  `caption` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `discount` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `user_id` tinyint(4) NOT NULL,
  `product_categories_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `content`, `warranty`, `image_name`, `other_images`, `caption`, `discount`, `status`, `user_id`, `product_categories_id`, `company_id`, `created_at`, `updated_at`) VALUES
(1, 'ملمع أسنان 1teeth plaque remover', '113.99', '<div>\r\n<div>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</div>\r\n</div>\r\n<p>إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.<br />ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.<br />هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>', '1عام', '5bd589020ab1f.jpeg', '<div></div>\r\n<div><img src=\"/photos/5bd576d92da1c.jpeg\" />\r\n<div><img src=\"/photos/5bd576f51bde4.jpeg\" /></div>\r\n</div>', 'ملمع أسنان1', '', 0, 1, 1, 1, '2018-09-30 10:44:58', '2018-10-28 10:01:45'),
(2, 'ملمع أسنان teeth plaque remover', '13.99', '<div>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.<br />ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.<br />هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.<br />\r\n<div></div>\r\n</div>', 'عام', '5bd58921c72f7.jpeg', '<div><img src=\"/photos/5bd57679e006d.jpeg\" />\r\n<div><img src=\"/photos/5bd5768b2d7b3.jpeg\" /></div>\r\n</div>', 'ملمع أسنان', '', 0, 1, 1, 2, '2018-09-30 11:34:36', '2018-10-28 10:02:15'),
(3, 'جهاز ضغط رقمي', '10', '<p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أتولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>\r\n<p>إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>\r\n<p>ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>', 'ستة أشهر', '5bd58940d5c53.jpeg', '<div><img src=\"/photos/5bd58f723c61b.jpeg\" />\r\n<div><img src=\"/photos/5bd58f841a508.jpeg\" /></div>\r\n</div>', 'جهاز ضغط رقمي', '50% خصم من شراء الجملة', 0, 1, 2, 1, '2018-09-30 15:01:36', '2018-10-29 08:40:13'),
(4, 'الأفلام الوثائقية والتغطية الإعلامية', '56565', '<p>m,n,nsdmfndsf</p>', '25456', '5d74aeff1e2c0.jpeg', '<p>,sdmnflkdsfnksd</p>', '', '545', 0, 1, 1, 1, '2019-09-02 05:31:00', '2019-09-08 07:34:47'),
(5, 'الفرقة الأولى مدرع', '50000', '<p><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', 'ثلاث سنوات', '5d760c71c0cbd.jpeg', '', '', '50%', 2, 1, 1, 0, '2019-09-09 08:27:16', '2019-09-09 13:48:28'),
(6, 'جهاز لكشف الأسنان الخ الخ', '20000', '<p><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', 'سنتين', '5d760ede5748e.jpeg', '', '', '10%', 0, 1, 1, 0, '2019-09-09 08:36:43', '2019-09-09 08:36:43'),
(7, 'الأفلام الوثائقية والتغطية الإعلامية', '56000', '<p><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', '3 سنوات', '5d760f64a8018.jpeg', '', '', '20%', 0, 1, 1, 0, '2019-09-09 08:38:29', '2019-09-09 08:38:29');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'أدوات طب اﻷسنان', 0, '2018-09-30 10:41:01', '2018-09-30 10:41:01'),
(2, 'أدوات طب عام', 0, '2018-09-30 14:59:26', '2018-09-30 14:59:26'),
(3, 'مستلزمات طبية', 0, '2019-03-26 11:42:41', '2019-03-26 11:42:41');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `areas` text COLLATE utf8_unicode_ci,
  `budget` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `total_beneficiaries` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `caption` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `name`, `content`, `image_name`, `areas`, `budget`, `total_beneficiaries`, `caption`, `status`, `created_at`, `updated_at`) VALUES
(1, 'المياه والإصحاح البيئي', '<p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع. ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق. هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>', '5e4507de561ae.png', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع. ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق. هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.', 'من الساعه 8 إلى 10', 'فتح الربيعي', '8 ساعات', 0, '2019-09-15 09:49:43', '2020-02-13 11:25:05'),
(2, 'Protection and Education', '<p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع. ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق. هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>', '5e4507c9bc0ae.png', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع. ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق. هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.', 'من الساعه 8 إلى 10', 'فتح الربيعي', '8 ساعات', 0, '2019-09-15 09:48:54', '2020-02-13 11:24:45'),
(3, 'Health and Food', '<p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع. ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق. هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>', '5e4507b660738.png', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع. ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق. هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.', 'من الساعه 8 إلى 10', 'فتح الربيعي', '8 ساعات', 0, '2019-09-15 09:47:50', '2020-02-13 11:24:25');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `applicants_num` int(11) NOT NULL,
  `trainees_num` int(11) NOT NULL,
  `centers_num` int(11) NOT NULL,
  `courses_no` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `applicants_num`, `trainees_num`, `centers_num`, `courses_no`, `created_at`, `updated_at`) VALUES
(1, 70000, 60, 510, 200, NULL, '2019-11-29 20:11:40');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, NULL, NULL),
(2, 'Editor', 'محرر', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(4, 1),
(6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`key`, `value`) VALUES
('1ea8673ba78b3f9e8cf4f0d95eaf28df', 's:0:\"\";'),
('244c3847e3669d30fd5f23b506740572', 's:0:\"\";'),
('29ce2530000851935a40607dd6e27934', 's:0:\"\";'),
('40b9e561f04ce3e232b6f320ea1f0170', 's:0:\"\";'),
('54f845e47b62da5152e3be99c72d7de8', 's:41:\"مؤسسة ألف باء التنموية\";'),
('58a85a64c371e4a10d964fb5efdc675c', 's:0:\"\";'),
('81d422a4af572baa8653ac6a395edeac', 's:0:\"\";'),
('af53571ea50b6e4a24e8d531e558a592', 's:0:\"\";'),
('b836b6bba505a9c17b0b81c84f66f0a0', 's:0:\"\";'),
('ca8275a2ad000bc2fef937ff3c47ba63', 's:0:\"\";'),
('d41ec1aefb59d276889a88d604d3c2cc', 's:0:\"\";'),
('e5621024bbe15f7d922411d0a3bbed80', 's:0:\"\";'),
('ec3f227025f666fb27f3e77d148b05d2', 's:0:\"\";'),
('ee8f01e4d7bb6948c7583e7e88629281', 's:0:\"\";');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desc` text COLLATE utf8_unicode_ci NOT NULL,
  `state` tinyint(4) NOT NULL,
  `priprity` tinyint(4) NOT NULL,
  `user` int(10) UNSIGNED NOT NULL,
  `fromuser` int(10) UNSIGNED NOT NULL,
  `deadline` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tenders`
--

CREATE TABLE `tenders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caption` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tenders`
--

INSERT INTO `tenders` (`id`, `title`, `deadline`, `location`, `image_name`, `caption`, `content`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Provision of Offices Stationary Supplies (تزويد أدوات مكتبية)2', '2018-11-30', 'Multiple Cities2', '5ba9f6953ece6.jpeg', '', '<p>The tender will be conducted using ACTED standard bidding documents, open to all qualified suppliers and service providers, can be downloaded on Yemen HR&nbsp;<a href=\"https://yemenhr.com/tenders\" target=\"_blank\" rel=\"noopener\">https://yemenhr.com/tenders</a></p>\r\n<p>The Bidding Documents&nbsp;(in English)&nbsp;may be collected free of charge by all interested bidders at the following address(es):</p>\r\n<p>ACTED Post office in YEMEN&nbsp;HADDAH STREET, P.O. 16070, SANA&rsquo;A, YEMEN</p>\r\n<p>Potential bidders are encouraged to consult the Yemen HR website regularly for potential modification to the present tender and/or the bidding documents.</p>\r\n<p>All bids must be submitted before&nbsp;on 07-10-2018 at 11:00AM &nbsp;at the address( mentioned above in a sealed envelope Late Bids will be automatically rejected.</p>\r\n<p>ACTED will not be responsible for any costs or expenses incurred by the Bidders in connection with the preparation and submission of their bids to ACTED.</p>\r\n<p>A tender opening session will take place&nbsp;on 08-10-2018 at 10:30AM&nbsp;in the Al-Bustan Hotel in &nbsp;SANA&rsquo;A, YEMEN The presence of bidders&rsquo; representative is allowed. For all inquiries regarding this tender, please contact the ACTED representative office not later than&nbsp;07-10-2018 at&nbsp;working hours&nbsp;by telephone (+967 716504730) or by E-mail at&nbsp;<a href=\"mailto:yemen.tender@acted.org\" target=\"_blank\" rel=\"noopener\">yemen.tender@acted.org</a>, Cctender@acted.org.</p>\r\n<p>Note: ACTED&nbsp;adopts a&nbsp;zero-tolerance approach towards corruption and is committed to respecting the highest standards in terms of efficiency, responsibility and transparency in its activities. In particular, ACTED has adopted a participatory approach to promote and ensure transparency within the organization and has set up a Transparency focal point (Transparency Team supervised by the Director of Audit and Transparency) via a specific e-mail address. As such, if you witness or suspect any unlawful, improper or unethical act or business practices (such as soliciting, accepting or attempting to provide or accept any kickback) during the tendering process, please contact the following phone number&nbsp;(+967 716504730)&nbsp;and/or send an e-mail to<a href=\"mailto:transparency@acted.org\" target=\"_blank\" rel=\"noopener\">transparency@acted.org</a></p>\r\n<p>&nbsp; لتنزيل جميع وثائق المناقصة يرجى الضغط على اللينك&nbsp; والملف المرفق&nbsp;على يمين الصفحة</p>\r\n<p>تقوم وكالة التعاون الفني والتنمية اكتد المنفذة لمشروع \"نهج متعدد القطاعات لتقديم المساعدة الطارئة في اليمن\" بدعوة موردي معدات السلامة لتقديم عروض لكل دفعه مذكورة في الجدول ادناه:</p>\r\n<p>222</p>', 1, 0, '2018-09-25 11:22:47', '2018-09-25 11:49:29');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `name`, `status`, `link`, `created_at`, `updated_at`) VALUES
(1, 'الأفلام الوثائقية والتغطية الإعلامية', 0, '5db53b514a8dc.docx', '2019-10-27 09:38:09', '2019-10-27 09:38:09'),
(2, '', 0, '5e5505d8cb1a2.pdf', '2020-02-25 14:32:40', '2020-02-25 14:32:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, 'youit', 'muadshibani@gmail.com', '$2y$10$NPeLL3xiuwixfeJ1AqSLE.e5D/UtP75POMg18JciT/wQqzkco0DuK', 'GD944vz55WZFPBHcbc7iCwqBlocLJIJjppBTUuquw4xQIBLqBHZ11g6wdeZ5', NULL, NULL, 0),
(4, 'Alaa', 'alaa@gmail.com', '$2y$10$Ftn1dmezkxezIr6MTyhKUusD.zV/uuvlS4WAt8KJD2hCRMbTVj8si', 'xMQPcKyXURLk6ISxu5mFHEbLA8Iude5iUY29fpr7JrRF0xrreMgYNWr6TblA', '2019-10-27 09:43:06', '2019-10-27 09:43:06', 0),
(6, 'Fateh', 'fatehalrabeai@gmail.com', '$2y$10$XWwdFVwlH9zkKeQyvbeeLesD.ykWToIUaAFinHPxz95408QLzCNnq', NULL, '2020-02-13 10:53:08', '2020-02-13 10:53:08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_logs`
--

CREATE TABLE `user_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user` int(11) NOT NULL,
  `event` text COLLATE utf8_unicode_ci NOT NULL,
  `desc` text COLLATE utf8_unicode_ci NOT NULL,
  `extra` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `videoURL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `videoID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caption` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `video_categories_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `videoURL`, `videoID`, `title`, `image_name`, `caption`, `count`, `status`, `video_categories_id`, `created_at`, `updated_at`) VALUES
(1, 'https://www.youtube.com/watch?v=4pbxnwpgenk', '4pbxnwpgenk', 'Save Time with My Rapid Web Development Process', 'https://i.ytimg.com/vi/4pbxnwpgenk/hqdefault.jpg', '', 0, 0, 1, '2019-11-23 15:02:54', '2019-11-23 15:02:54'),
(2, 'https://www.youtube.com/watch?v=TPfJL8wfJBA', 'TPfJL8wfJBA', 'Give Your Desktop a Modern and Beautiful Look Today', 'https://i.ytimg.com/vi/TPfJL8wfJBA/hqdefault.jpg', '', 0, 0, 1, '2019-11-23 15:03:28', '2019-11-23 15:03:28'),
(4, 'https://www.youtube.com/watch?v=E7-EQFuuQMQ', 'E7-EQFuuQMQ', 'Blurry Desktop - Make Windows Look Better', 'https://i.ytimg.com/vi/E7-EQFuuQMQ/hqdefault.jpg', '', 0, 0, 1, '2019-11-23 15:05:09', '2019-11-23 15:05:09'),
(5, 'https://www.youtube.com/watch?v=hg0I29BrFR8', 'hg0I29BrFR8', '2 Digital Artists use the same stock images! (photoshop)', 'https://i.ytimg.com/vi/hg0I29BrFR8/hqdefault.jpg', '', 0, 0, 1, '2019-11-23 15:06:57', '2019-11-23 15:06:57'),
(6, 'https://www.youtube.com/watch?v=bUZbPlAZz1c', 'bUZbPlAZz1c', 'Top 5 Best FREE ANTIVIRUS Software (2019)', 'https://i.ytimg.com/vi/bUZbPlAZz1c/hqdefault.jpg', '', 0, 0, 1, '2019-11-23 16:44:48', '2019-11-23 16:44:48'),
(7, 'https://www.youtube.com/watch?v=bUZbPlAZz1c', 'bUZbPlAZz1c', 'Top 5 Best FREE ANTIVIRUS Software (2019)', 'https://i.ytimg.com/vi/bUZbPlAZz1c/hqdefault.jpg', '', 0, 0, 1, '2019-11-23 19:39:03', '2019-11-23 19:39:03');

-- --------------------------------------------------------

--
-- Table structure for table `video_categories`
--

CREATE TABLE `video_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `video_categories`
--

INSERT INTO `video_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'فيديو', 0, NULL, NULL),
(2, 'فيديو', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caption` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `program_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `name`, `content`, `image_name`, `caption`, `program_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'بيع مستلزمات طبية و صناعة مطهرات طبية و تجهيز العيادات', '<p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.<br />ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.<br />هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>', '5e560b9fa6b07.jpeg', 'بيع مستلزمات طبية و صناعة مطهرات طبية و تجهيز العيادات', 1, 0, '2018-10-03 10:26:01', '2020-02-26 09:09:38'),
(2, 'تجارة و استيراد المعدات الطبية و غير الطبية للمستشفيات', '<p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.<br />ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.<br />هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>', '5e560b7918855.jpeg', 'تجارة و استيراد المعدات الطبية و غير الطبية للمستشفيات', 1, 0, '2018-10-03 10:29:06', '2020-02-26 09:08:59'),
(3, 'عمل المؤسسة في مجال بيع و تورد المعدات الطبية', '<p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br />إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.<br />ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.<br />هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>', '5e560a18a3579.jpeg', 'عمل المؤسسة في مجال بيع و تورد المعدات الطبية', 1, 0, '2018-10-03 10:31:13', '2020-02-26 09:04:42'),
(4, 'مشروع العيادات الثابته', '<p>دشنت المؤسسة الطبية الميدانية و بدعم من المنظمة الالمانية جلارا و رعاية وزارة الصحة العامة و السكان ، الورشة التنشيطية للعمال الصحيين لتقوية فعالية مكافحة مرض السل في محافظة الضالع و ذلك ضمن برنامج دعم و تعزيز و تقوية النظم العلاجية و الوقائية لمرض السل و الجذام بحضور الدكتور محسن البهلي نائب مدير مكتب الصحة العامة و السكان بمحافظة الضالع و الدكتور نجيب فارع منسق البرنامج الوطني لمكافحة السل بالمحافظة.</p>\r\n<p>و في افتتاح الورشة اكد الدكتور محسن البهلي على اهمية هذه الورشة مثمنا الجهود الذي تبذلها المؤسسة الطبية الميدانية و منظمة جلارا في دعم القطاع الصحي بالمحافظة مشيرا بان تاهيل الكوادر الصحية و نشر التوعية في المجتمع سيساهم في التخفيف من انتشار مرض السل و يساعد على القضاءه عليه.</p>', '5e56017d704f6.jpeg', '', 1, 0, '2019-09-23 08:33:41', '2020-02-26 08:26:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_categories`
--
ALTER TABLE `image_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mails`
--
ALTER TABLE `mails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pdfs`
--
ALTER TABLE `pdfs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `polls_options`
--
ALTER TABLE `polls_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `polls_questions`
--
ALTER TABLE `polls_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `polls_voting`
--
ALTER TABLE `polls_voting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenders`
--
ALTER TABLE `tenders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_logs`
--
ALTER TABLE `user_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_categories`
--
ALTER TABLE `video_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `image_categories`
--
ALTER TABLE `image_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mails`
--
ALTER TABLE `mails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pdfs`
--
ALTER TABLE `pdfs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `polls_options`
--
ALTER TABLE `polls_options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `polls_questions`
--
ALTER TABLE `polls_questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `polls_voting`
--
ALTER TABLE `polls_voting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tenders`
--
ALTER TABLE `tenders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_logs`
--
ALTER TABLE `user_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `video_categories`
--
ALTER TABLE `video_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
