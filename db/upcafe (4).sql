-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2021 at 09:49 PM
-- Server version: 10.4.18-MariaDB-log
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upcafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `name`, `title`, `page`, `created_at`, `updated_at`) VALUES
(1, '1630213600-33.jpg', NULL, '5', '2021-08-29 05:06:40', '2021-08-29 05:06:40'),
(2, '1630213612-932.jpg', NULL, '5', '2021-08-29 05:06:52', '2021-08-29 05:06:52'),
(3, '1630213630-184.jpg', NULL, '5', '2021-08-29 05:07:10', '2021-08-29 05:07:10'),
(4, '1630213646-993.jpg', NULL, '4', '2021-08-29 05:07:26', '2021-08-29 05:07:26'),
(5, '1630213660-512.jpg', NULL, '4', '2021-08-29 05:07:40', '2021-08-29 05:07:40'),
(6, '1630213888-99.jpg', 'BEST CATERING SERVICE', '1', '2021-08-29 05:11:28', '2021-08-29 05:11:28'),
(7, '1630213931-124.jpg', 'MOST DELICIOUS FOOD', '1', '2021-08-29 05:12:12', '2021-08-29 05:12:12'),
(8, '1630214088-43.jpg', 'BREAKFAST | LUNCH | DINNER | DRINKS', '2', '2021-08-29 05:14:48', '2021-08-29 05:14:48'),
(9, '1630214120-839.jpg', 'CREATING SWEET MEMORIES', '3', '2021-08-29 05:15:20', '2021-08-29 05:15:20'),
(11, '1630214667-501.jpg', NULL, '6', '2021-08-29 05:24:27', '2021-08-29 05:24:27'),
(12, '1630214675-354.jpg', NULL, '6', '2021-08-29 05:24:35', '2021-08-29 05:24:35'),
(13, '1630214685-780.jpg', NULL, '6', '2021-08-29 05:24:45', '2021-08-29 05:24:45'),
(14, '1630214695-348.jpg', NULL, '6', '2021-08-29 05:24:55', '2021-08-29 05:24:55'),
(15, '1630214702-242.jpg', NULL, '6', '2021-08-29 05:25:02', '2021-08-29 05:25:02'),
(16, '1630214710-804.jpg', NULL, '6', '2021-08-29 05:25:10', '2021-08-29 05:25:10'),
(17, '1630214718-399.jpg', NULL, '6', '2021-08-29 05:25:18', '2021-08-29 05:25:18'),
(18, '1630214729-375.jpg', NULL, '6', '2021-08-29 05:25:29', '2021-08-29 05:25:29');

-- --------------------------------------------------------

--
-- Table structure for table `cafe`
--

CREATE TABLE `cafe` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cafe`
--

INSERT INTO `cafe` (`id`, `file`, `created_at`, `updated_at`) VALUES
(4, '1630213706-32.jpg', '2021-08-29 05:08:26', '2021-08-29 05:08:26'),
(5, '1630213726-260.jpg', '2021-08-29 05:08:46', '2021-08-29 05:08:46'),
(6, '1630213735-644.jpg', '2021-08-29 05:08:55', '2021-08-29 05:08:55');

-- --------------------------------------------------------

--
-- Table structure for table `catering`
--

CREATE TABLE `catering` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `grandparent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `vegetarian` tinyint(1) DEFAULT NULL,
  `gluten` tinyint(1) DEFAULT NULL,
  `vegan` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catering`
--

INSERT INTO `catering` (`id`, `name`, `content`, `group`, `price`, `grandparent`, `parent`, `created_at`, `updated_at`, `vegetarian`, `gluten`, `vegan`) VALUES
(4, 'Option 1', '<ul><li>Assorted fruit danishes</li><li>Petite filled croissants w/ cheese omelette &amp; tomato relish</li><li>Nutty granola, fresh fruit &amp; yoghurt portions</li></ul>', 10, 15.5, 'breakfast', 1, '2021-08-29 03:20:46', '2021-09-08 23:15:05', 0, 0, 0),
(5, 'Option 2', '<ul><li>Medium croissants w/ bacon &amp; cheese omelette </li><li>Nutty granola &amp; yoghurt portions</li><li>Bagel w/ cream cheese &amp; strawberry jam</li><li>Kumara hash w/ salmon &amp; hollandaise </li><li>Fresh fruit platter</li></ul>', 10, 19.5, 'breakfast', 1, '2021-08-29 03:22:16', '2021-09-09 01:54:02', 0, 0, 0),
(6, 'BUFFET', '<ul><li>Fruit danishes </li><li>Lightly toasted croissants</li><li>Seasonal fruit platter </li><li>Sauteed mushrooms &amp; tomatoes </li><li>Pork sausages &amp; bacon</li><li>French toast</li></ul>', 20, 19.99, 'breakfast', 2, '2021-08-29 03:25:46', '2021-09-08 23:19:35', 0, 0, 0),
(7, 'Full Buffet Setup', NULL, NULL, 30.99, 'breakfast', 3, '2021-08-29 03:26:29', '2021-08-29 03:26:29', NULL, NULL, NULL),
(8, 'Serves In Disposable Foil Tray', NULL, NULL, 10.99, 'breakfast', 3, '2021-08-29 03:27:04', '2021-08-29 03:27:04', NULL, NULL, NULL),
(9, 'Tea / Coffee / Sugar / Milk', NULL, 20, 6.5, 'breakfast', 4, '2021-08-29 03:28:01', '2021-09-09 01:54:35', 0, 0, 0),
(10, 'App / Orange Juice / Water', NULL, 20, 5.5, 'breakfast', 4, '2021-08-29 03:28:26', '2021-09-09 01:54:55', 0, 0, 0),
(11, 'Petite eggs benedict w/ salmon or bacon', NULL, 0, 6.5, 'breakfast', 5, '2021-08-29 03:28:56', '2021-09-09 01:55:08', 0, 0, 0),
(12, 'Medium savoury muffins', NULL, 0, 3.5, 'breakfast', 5, '2021-08-29 03:29:10', '2021-09-09 01:52:34', 0, 0, 0),
(13, 'Medium sweet muffins', NULL, 0, 3.5, 'breakfast', 5, '2021-08-29 03:29:22', '2021-09-09 01:52:51', 0, 0, 0),
(14, 'Waffles portions w/ maple syrup on the side', NULL, 0, 4.5, 'breakfast', 5, '2021-08-29 03:29:34', '2021-09-09 01:53:10', 0, 0, 0),
(15, 'Petite bagels w/cream cheese & salmon', NULL, 0, 4.5, 'breakfast', 5, '2021-08-29 03:29:45', '2021-09-09 01:53:31', 0, 0, 0),
(16, 'Option 1', '<ul><li>Sweet muffins w/ banana, bran &amp; cinnamon OR Savoury muffins w/ tomato, spinach, onion &amp; feta</li><li>Seasonal fruit platter</li></ul>', 1, 8.5, 'tea', 1, '2021-08-29 03:54:43', '2021-09-09 01:59:34', 0, 0, 0),
(17, 'Option 2', '<ul><li>Vegetarian quiches w/ feta, olives, tomato &amp; spinach</li><li>Banana &amp; walnut loaf</li><li>Seasonal fruit platter</li></ul>', 1, 10.5, 'tea', 1, '2021-08-29 03:58:51', '2021-09-09 02:00:21', 0, 0, 0),
(18, 'Option 3', '<p>Smoke chicken, brie &amp; cranberry quiches Pork &amp; thyme sausage rolls Cinnamon rolls </p>', 1, 12.5, 'tea', 1, '2021-08-29 03:59:05', '2021-09-09 02:00:14', 0, 0, 0),
(20, 'Tea / Coffee / Sugar / Milk', NULL, NULL, 5.99, 'tea', 2, '2021-08-29 03:59:50', '2021-08-29 03:59:50', 0, 0, 0),
(21, 'Apple / Orange Juice / Water', NULL, NULL, 3.99, 'tea', 2, '2021-08-29 04:00:09', '2021-08-29 04:00:09', 0, 0, 0),
(22, 'Savoury muffins w/feta, spinach, tomato &  onion', NULL, 1, 0, 'tea', 3, '2021-08-29 04:00:45', '2021-09-09 02:02:28', 0, 0, 0),
(23, 'Filled croissants (vegan)', NULL, 1, 0, 'tea', 3, '2021-08-29 04:04:06', '2021-09-09 02:02:55', 1, 0, 0),
(24, 'Savoury pies (vegan)', NULL, 1, 0, 'tea', 3, '2021-08-29 04:04:18', '2021-09-09 02:03:40', 0, 0, 1),
(25, 'Sausage rolls (vegan)', NULL, 1, 0, 'tea', 3, '2021-08-29 04:04:25', '2021-09-09 02:04:06', 1, 0, 0),
(26, 'Feta, parmesan & cheese scones w/ butter', NULL, 0, 0, 'tea', 3, '2021-08-29 04:04:32', '2021-09-09 02:04:28', 0, 0, 0),
(27, 'Thyme & pork sausage rolls', NULL, NULL, NULL, 'tea', 3, '2021-08-29 04:04:51', '2021-09-09 02:04:50', 0, 0, 0),
(28, 'Beef meatballs on skewers (GF)', NULL, NULL, NULL, 'tea', 3, '2021-08-29 04:05:00', '2021-09-09 02:05:21', 0, 1, 0),
(29, 'Feta, spinach, red onion & tomato quiche (V)', NULL, NULL, NULL, 'tea', 3, '2021-08-29 04:05:07', '2021-09-09 02:05:38', 0, 0, 1),
(30, 'Smoke chicken, brie & cranberry quiche', NULL, NULL, NULL, 'tea', 3, '2021-08-29 04:05:17', '2021-09-09 02:05:49', 1, 0, 0),
(31, 'Berry & cream cheese muffins', NULL, NULL, NULL, 'tea', 4, '2021-08-29 04:05:43', '2021-09-09 02:08:38', 0, 0, 0),
(32, 'Apple & walnut bran muffins', NULL, NULL, NULL, 'tea', 4, '2021-08-29 04:06:03', '2021-09-09 02:08:46', 0, 0, 0),
(33, 'Fruit danishes (vegan)', NULL, NULL, NULL, 'tea', 4, '2021-08-29 04:06:10', '2021-09-09 02:10:35', 0, 0, 1),
(34, 'Orange & coconut loaf (GF)', NULL, NULL, NULL, 'tea', 4, '2021-08-29 04:06:17', '2021-09-09 02:10:28', 0, 1, 0),
(35, 'Lemon cake', NULL, NULL, NULL, 'tea', 4, '2021-08-29 04:06:24', '2021-09-09 02:09:13', 0, 0, 0),
(36, 'Coconut cream donut (vegan)', NULL, NULL, NULL, 'tea', 4, '2021-08-29 04:06:31', '2021-09-09 02:10:18', 0, 0, 1),
(37, 'Option 1', '<ul><li>Filled croissants w/ chicken, salad, brie &amp; cranberry</li><li>Vegetarian quiches w/ feta, spinach &amp; tomato</li><li>Chocolate brownies</li><li>Seasonal fruit platter</li></ul>', 1, 15.5, 'lunch', 1, '2021-08-29 04:12:48', '2021-09-09 02:13:52', 0, 0, 0),
(38, 'Option 2', '<ul><li>Whole sandwich w/ mam, salad, cheese &amp; beetroot relish</li><li>Mince &amp; cheese pies</li><li>Smoked chicken, brie &amp; cranberry quiches</li><li>Lemon cake</li><li>Seasonal fruit platter  </li></ul>', 1, 17.5, 'lunch', 1, '2021-08-29 04:13:06', '2021-09-09 02:14:47', 0, 0, 0),
(39, 'Option 3', '<ul><li>Cajun chicken, spinach, brie, tomato &amp; aioli panini’s</li><li>Mushroom cases </li><li>Salmon &amp; cream cheese quiches</li><li> Marinated beef meatballs on skewers</li><li> Caramel oat slice</li><li> Seasonal fruit platter</li></ul>', 20, 19.5, 'lunch', 1, '2021-08-29 04:13:22', '2021-09-09 02:15:37', 0, 0, 0),
(41, 'Caesar salad w/ aioli, croutons, cos, bacon, poached egg, parmesan & aioli', NULL, NULL, 4.5, 'lunch', 2, '2021-08-29 04:14:04', '2021-09-09 02:17:52', 0, 0, 0),
(42, 'Sesame beef salad w/ cucumber, capsicum,  carrot, daikon, cherry tomatoes & sesame  dressing', NULL, NULL, 4.5, 'lunch', 2, '2021-08-29 04:14:14', '2021-09-09 02:17:47', 0, 0, 0),
(43, 'Israeli couscous salad w/ roast pumpkin,  eggplant, courgette, capsicum & halloumi  w/tomato relish', NULL, NULL, 4.5, 'lunch', 2, '2021-08-29 04:14:36', '2021-09-09 02:17:40', 0, 0, 0),
(44, 'Tuna pasta salad – penne pasta, tuna,  spring onion, tomato & aioli', NULL, NULL, 4.5, 'lunch', 2, '2021-08-29 04:14:48', '2021-09-09 02:18:05', 0, 0, 0),
(45, 'Ham filled croissants – cucumber, tomato,  cos lettuce, cheddar cheese, seeded  mustard & aioli', NULL, NULL, NULL, 'lunch', 3, '2021-08-29 04:15:14', '2021-09-09 02:19:05', 0, 0, 0),
(46, 'Vegetarian fold over – egg plant, spinach,  mushrooms, tomato relish & cheese.', NULL, NULL, NULL, 'lunch', 3, '2021-08-29 04:15:24', '2021-09-09 02:19:19', 0, 0, 1),
(47, 'B.L.T whole grain sandwich w/ bacon,  lettuce tomato & aioli', NULL, NULL, NULL, 'lunch', 3, '2021-08-29 04:15:32', '2021-09-09 02:19:31', 0, 1, 0),
(48, 'Beef filled rolls w/ lettuce, brie, caramelised  onion, cucumber & tomato', NULL, NULL, NULL, 'lunch', 3, '2021-08-29 04:15:41', '2021-09-09 02:19:43', 0, 1, 1),
(49, 'Mushroom & bacon cases', NULL, NULL, NULL, 'lunch', 4, '2021-08-29 04:15:56', '2021-09-09 02:20:44', 0, 0, 0),
(50, 'Beef meatballs on skewers', NULL, NULL, NULL, 'lunch', 4, '2021-08-29 04:16:10', '2021-09-09 02:21:30', 0, 0, 0),
(51, 'Chicken kebabs (GF)', NULL, NULL, NULL, 'lunch', 4, '2021-08-29 04:16:18', '2021-09-09 02:21:45', 0, 1, 0),
(52, 'Feta, spinach, red onion & tomato quiche (V)', NULL, NULL, NULL, 'lunch', 4, '2021-08-29 04:16:24', '2021-09-09 02:21:57', 0, 0, 1),
(53, 'Zingy mini lemon Loaf', NULL, NULL, NULL, 'lunch', 5, '2021-08-29 04:16:34', '2021-09-09 02:24:36', 0, 0, 0),
(54, 'Chocolate & raspberry brownie', NULL, NULL, NULL, 'lunch', 5, '2021-08-29 04:16:42', '2021-09-09 02:24:46', 0, 0, 0),
(55, 'Cinnamon rolls', NULL, NULL, NULL, 'lunch', 5, '2021-08-29 04:16:50', '2021-09-09 02:24:54', 0, 0, 0),
(56, 'Caramel slice', NULL, NULL, NULL, 'lunch', 5, '2021-08-29 04:16:57', '2021-09-09 02:25:03', 0, 0, 0),
(57, 'Option 1', '<ul><li>1 carvery item</li><li>Butter &amp; herbed roasted potatoes</li><li>1 hot dish</li><li>2 salads</li><li>Gourmet bread rolls &amp; condiments</li><li>1 sweet item</li><li>Seasonal fruit salad or platter</li></ul>', 20, 29.5, 'dinner', 1, '2021-08-29 04:35:57', '2021-09-09 02:52:31', 0, 0, 0),
(58, 'Option 2', '<ul><li>2 carvery items</li><li>Marinated chicken nibbles</li><li>Butter &amp; herbed roasted potatoes</li><li>1 hot dish</li><li>2 salads</li><li>Gourmet bread rolls &amp; condiments</li><li>1 sweet item</li><li>Seasonal fruit salad or platter</li></ul>', 20, 39.5, 'dinner', 1, '2021-08-29 04:36:15', '2021-09-09 02:52:38', 0, 0, 0),
(59, 'Option 3', '<ul><li>2 carvery items </li><li>Marinated chicken nibbles</li><li> Butter &amp; herbed roasted potatoes</li><li> 2 hot dishes</li><li>3 salads</li><li> Gourmet bread rolls &amp; condiments</li><li> 1 sweet item </li><li> Seasonal fruit salad or platter</li></ul>', 20, 49.5, 'dinner', 1, '2021-08-29 04:36:32', '2021-09-09 02:40:22', 0, 0, 0),
(60, 'Option 4', '<ul><li>2 carvery items </li><li>Marinated chicken nibbles</li><li>Butter &amp; herbed roasted potatoes</li><li> 2 hot dish</li><li> 3 salad</li><li>Seafood dish</li><li> Gourmet bread rolls &amp; condiments</li><li> 2 sweet items</li><li> Seasonal fruit salad or platter</li></ul>', 20, 59.5, 'dinner', 1, '2021-08-29 04:36:47', '2021-09-09 02:41:20', 0, 0, 0),
(61, 'Beverage 1', NULL, NULL, 5.99, 'dinner', 2, '2021-08-29 04:37:08', '2021-08-29 04:37:08', 0, 0, 0),
(62, 'Beverage 2', NULL, NULL, 4.5, 'dinner', 2, '2021-08-29 04:37:19', '2021-08-29 04:37:19', 0, 0, 0),
(63, 'Full Buffet Setup', NULL, NULL, 10.5, 'dinner', 3, '2021-08-29 04:37:42', '2021-08-29 04:37:42', 0, 0, 0),
(64, 'Serves In Disposable Foil Tray', NULL, NULL, 5.5, 'dinner', 3, '2021-08-29 04:38:07', '2021-08-29 04:38:07', 0, 0, 0),
(65, 'Roast Pork w/apple sauce', NULL, NULL, NULL, 'dinner', 4, '2021-08-29 04:38:23', '2021-09-09 02:53:10', 0, 0, 0),
(66, 'Roast Beef w/ gravy', NULL, NULL, NULL, 'dinner', 4, '2021-08-29 04:38:30', '2021-09-09 02:53:30', 0, 0, 0),
(67, 'Roast Lamb w/ mint sauce', NULL, NULL, NULL, 'dinner', 4, '2021-08-29 04:38:36', '2021-09-09 02:53:39', 0, 0, 0),
(68, 'Roast chicken w/ rosemary, Garlic & honey', NULL, NULL, NULL, 'dinner', 4, '2021-08-29 04:38:43', '2021-09-09 02:53:46', 0, 0, 0),
(69, 'Chicken fried rice & vegetables', NULL, NULL, NULL, 'dinner', 5, '2021-08-29 04:38:54', '2021-09-09 02:54:06', 0, 0, 0),
(70, 'Vegetarian lasagne', NULL, NULL, NULL, 'dinner', 5, '2021-08-29 04:39:00', '2021-09-09 02:54:24', 0, 0, 0),
(71, 'Marinated beef meatballs', NULL, NULL, NULL, 'dinner', 5, '2021-08-29 04:39:06', '2021-09-09 02:54:31', 0, 0, 0),
(72, 'Creamy chicken, bacon & dijon mustard', NULL, NULL, NULL, 'dinner', 5, '2021-08-29 04:39:13', '2021-09-09 02:54:40', 0, 0, 0),
(73, 'Sesame glazed salmon fillet', NULL, NULL, NULL, 'dinner', 6, '2021-08-29 04:39:22', '2021-09-09 02:55:57', 0, 0, 0),
(74, 'Raw fish', NULL, NULL, NULL, 'dinner', 6, '2021-08-29 04:39:31', '2021-09-09 02:56:05', 0, 0, 0),
(75, 'Seafood chowder', NULL, NULL, NULL, 'dinner', 6, '2021-08-29 04:39:37', '2021-09-09 02:56:17', 0, 0, 0),
(76, 'Garlic king prawns', NULL, NULL, NULL, 'dinner', 6, '2021-08-29 04:39:45', '2021-09-09 02:56:24', 0, 0, 0),
(77, 'Traditional green salad', NULL, NULL, NULL, 'dinner', 7, '2021-08-29 04:39:54', '2021-09-09 02:57:49', 0, 0, 0),
(78, 'Greek salad', NULL, NULL, NULL, 'dinner', 7, '2021-08-29 04:40:01', '2021-09-09 02:57:56', 0, 0, 0),
(79, 'Tuna pasta salad', NULL, NULL, NULL, 'dinner', 7, '2021-08-29 04:40:07', '2021-09-09 02:58:13', 0, 0, 0),
(80, 'Potato salad', NULL, NULL, NULL, 'dinner', 7, '2021-08-29 04:40:13', '2021-09-09 02:58:21', 0, 0, 0),
(81, 'Chocolate brownie', NULL, NULL, NULL, 'dinner', 8, '2021-08-29 04:40:24', '2021-09-09 02:59:45', 0, 0, 0),
(82, 'Sweet Option 2', NULL, NULL, NULL, 'dinner', 8, '2021-08-29 04:40:31', '2021-08-29 04:40:31', 0, 0, 0),
(83, 'Sweet Option 3', NULL, NULL, NULL, 'dinner', 8, '2021-08-29 04:40:37', '2021-08-29 04:40:37', 0, 0, 0),
(84, 'Sweet Option 4', NULL, NULL, NULL, 'dinner', 8, '2021-08-29 04:40:42', '2021-08-29 04:40:42', 0, 0, 0),
(85, 'Option 4', '<p>Assorted club sandwiches Caramelised onion tart w/feta Mince &amp; cheese pies Assortment fruit danishes</p>', 1, 14.5, 'tea', 1, '2021-09-09 02:01:06', '2021-09-09 02:01:06', 0, 0, 0),
(86, 'Salmon, spinach & cream cheese quiches', NULL, NULL, NULL, 'tea', 3, '2021-09-09 02:06:01', '2021-09-09 02:06:01', 0, 0, 0),
(87, 'Vegetarian frittata w/ roast pumpkin, olive,  spinach, cheese, capsicum & carrots (GF/V)', NULL, NULL, NULL, 'tea', 3, '2021-09-09 02:06:23', '2021-09-09 02:06:23', 0, 1, 1),
(88, 'Mince & cheese pies', NULL, NULL, NULL, 'tea', 3, '2021-09-09 02:06:51', '2021-09-09 02:06:51', 0, 0, 0),
(89, 'Chicken pies', NULL, NULL, NULL, 'tea', 3, '2021-09-09 02:07:00', '2021-09-09 02:07:00', 0, 0, 0),
(90, 'Beef curry pies', NULL, NULL, NULL, 'tea', 3, '2021-09-09 02:07:08', '2021-09-09 02:07:08', 0, 0, 0),
(91, 'Palusami pies', NULL, NULL, NULL, 'tea', 3, '2021-09-09 02:07:16', '2021-09-09 02:07:16', 0, 0, 0),
(92, 'Spring rolls & samosas (V/HALAL)', '<p>Spring rolls &amp; samosas (V/HALAL)</p>', NULL, NULL, 'tea', 3, '2021-09-09 02:07:30', '2021-09-09 02:07:30', 0, 0, 0),
(93, 'Assortment of club sandwiches', NULL, NULL, NULL, 'tea', 3, '2021-09-09 02:07:40', '2021-09-09 02:07:40', 0, 0, 0),
(94, 'Chicken roll ups w/walnuts, celery, aioli &  cream cheese', NULL, NULL, NULL, 'tea', 3, '2021-09-09 02:07:49', '2021-09-09 02:07:49', 0, 0, 0),
(95, 'Mushroom cases (V)', NULL, NULL, NULL, 'tea', 3, '2021-09-09 02:08:05', '2021-09-09 02:08:05', 0, 0, 1),
(96, 'Muesli slice', NULL, NULL, NULL, 'tea', 4, '2021-09-09 02:09:34', '2021-09-09 02:09:34', 0, 0, 0),
(97, 'Cinnamon rolls', NULL, NULL, NULL, 'tea', 4, '2021-09-09 02:09:43', '2021-09-09 02:09:43', 0, 0, 0),
(98, 'Sweet slice (vegan)', NULL, NULL, NULL, 'tea', 4, '2021-09-09 02:09:51', '2021-09-09 02:09:58', 0, 0, 1),
(99, 'Banana & coconut loaf (vegan', NULL, NULL, NULL, 'tea', 4, '2021-09-09 02:10:09', '2021-09-09 02:10:09', 0, 0, 1),
(100, 'Date scones w/ butter', NULL, NULL, NULL, 'tea', 4, '2021-09-09 02:10:51', '2021-09-09 02:10:51', 0, 0, 0),
(101, 'Traditional afghans', NULL, NULL, NULL, 'tea', 4, '2021-09-09 02:11:00', '2021-09-09 02:11:00', 0, 0, 0),
(102, 'Banana & walnut loaf', NULL, NULL, NULL, 'tea', 4, '2021-09-09 02:11:08', '2021-09-09 02:11:08', 0, 0, 0),
(103, 'Ginger slice', NULL, NULL, NULL, 'tea', 4, '2021-09-09 02:11:15', '2021-09-09 02:11:15', 0, 0, 0),
(104, 'Caramel oat slice', NULL, NULL, NULL, 'tea', 4, '2021-09-09 02:11:26', '2021-09-09 02:11:26', 0, 0, 0),
(105, 'Raw vegetable salad w/ broccoli, green  beans, carrots, cherry tomatoes, cucumber,  toasted almonds, feta & citrus dressing.', NULL, NULL, 4.5, 'lunch', 2, '2021-09-09 02:18:18', '2021-09-09 02:18:18', 0, 0, 0),
(106, 'Salmon bagel w/ cream cheese, tomato,  pesto & cos lettuce', NULL, NULL, NULL, 'lunch', 3, '2021-09-09 02:20:00', '2021-09-09 02:20:00', 0, 0, 0),
(107, 'Chicken caesar wrap w/ cos lettuce,  parmesan, bacon, aioli & anchovies', NULL, NULL, NULL, 'lunch', 3, '2021-09-09 02:20:13', '2021-09-09 02:20:13', 0, 0, 0),
(108, 'Gluten free sandwich w/ ham, cheddar  cheese, tomato, cucumber, beetroot relish &  aioli', NULL, NULL, NULL, 'lunch', 3, '2021-09-09 02:20:28', '2021-09-09 02:20:28', 0, 0, 0),
(109, 'Smoke chicken, brie & cranberry quiche', NULL, NULL, NULL, 'lunch', 4, '2021-09-09 02:20:52', '2021-09-09 02:22:13', 0, 0, 0),
(110, 'Salmon, spinach & cream cheese quiches', NULL, NULL, NULL, 'lunch', 4, '2021-09-09 02:22:30', '2021-09-09 02:22:30', 0, 0, 0),
(111, 'Vegetarian frittata - Roast pumpkin, olive,  spinach, cheese, capsicum & carrots (GF/V)', NULL, NULL, NULL, 'lunch', 4, '2021-09-09 02:22:44', '2021-09-09 02:22:44', 0, 1, 1),
(112, 'Bacon & eggs pies', NULL, NULL, NULL, 'lunch', 4, '2021-09-09 02:22:55', '2021-09-09 02:22:55', 0, 0, 0),
(113, 'Mince & cheese pies', NULL, NULL, NULL, 'lunch', 4, '2021-09-09 02:23:13', '2021-09-09 02:23:13', 0, 0, 0),
(114, 'Chicken pies', NULL, NULL, NULL, 'lunch', 4, '2021-09-09 02:23:20', '2021-09-09 02:23:20', 0, 0, 0),
(115, 'Beef curry pies', NULL, NULL, NULL, 'lunch', 4, '2021-09-09 02:23:27', '2021-09-09 02:23:27', 0, 0, 0),
(116, 'Palusami pies', NULL, NULL, NULL, 'lunch', 4, '2021-09-09 02:23:34', '2021-09-09 02:23:34', 0, 0, 0),
(117, 'Zucchini fritters (GF/V', NULL, NULL, NULL, 'lunch', 4, '2021-09-09 02:23:44', '2021-09-09 02:23:44', 0, 1, 1),
(118, 'Spring rolls & samosas (V/HALAL', NULL, NULL, NULL, 'lunch', 4, '2021-09-09 02:23:56', '2021-09-09 02:24:11', 0, 0, 1),
(119, 'Ginger slice', NULL, NULL, NULL, 'lunch', 5, '2021-09-09 02:25:16', '2021-09-09 02:25:16', 0, 0, 0),
(120, 'Afghans', NULL, NULL, NULL, 'lunch', 5, '2021-09-09 02:25:23', '2021-09-09 02:25:23', 0, 0, 0),
(121, 'Orange loaf (GF)', NULL, NULL, NULL, 'lunch', 5, '2021-09-09 02:25:30', '2021-09-09 02:25:30', 0, 1, 0),
(122, 'Seasonal Fruit kebabs', NULL, NULL, NULL, 'lunch', 5, '2021-09-09 02:25:36', '2021-09-09 02:25:36', 0, 0, 0),
(123, 'Fruit danishes', NULL, NULL, NULL, 'lunch', 5, '2021-09-09 02:25:44', '2021-09-09 02:25:44', 0, 0, 0),
(124, 'Glazed ham off the bone w/ honey, ginger &  mustard', NULL, NULL, NULL, 'dinner', 4, '2021-09-09 02:53:55', '2021-09-09 02:53:55', 0, 0, 0),
(125, 'Beef masala curry', NULL, NULL, NULL, 'dinner', 5, '2021-09-09 02:54:53', '2021-09-09 02:54:53', 0, 0, 0),
(126, 'Seafood chowder', NULL, NULL, NULL, 'dinner', 5, '2021-09-09 02:55:01', '2021-09-09 02:55:01', 0, 0, 0),
(127, 'Israeli couscous with roast vegetables &  halloumi', NULL, NULL, NULL, 'dinner', 5, '2021-09-09 02:55:13', '2021-09-09 02:55:13', 0, 0, 0),
(128, 'Butter chicken curry & rice', NULL, NULL, NULL, 'dinner', 5, '2021-09-09 02:55:20', '2021-09-09 02:55:20', 0, 0, 0),
(129, 'Pork, herb & ricotta pasta', NULL, NULL, NULL, 'dinner', 5, '2021-09-09 02:55:30', '2021-09-09 02:55:30', 0, 0, 0),
(130, 'Fish curry & rice', NULL, NULL, NULL, 'dinner', 5, '2021-09-09 02:55:38', '2021-09-09 02:55:38', 0, 0, 0),
(131, 'Fresh oysters', NULL, NULL, NULL, 'dinner', 6, '2021-09-09 02:56:33', '2021-09-09 02:56:33', 0, 0, 0),
(132, 'Hawaiian Style Poke', NULL, NULL, NULL, 'dinner', 6, '2021-09-09 02:56:39', '2021-09-09 02:56:39', 0, 0, 0),
(133, 'Marinated calamari', NULL, NULL, NULL, 'dinner', 6, '2021-09-09 02:56:47', '2021-09-09 02:56:47', 0, 0, 0),
(134, 'Steamed mussels', NULL, NULL, NULL, 'dinner', 6, '2021-09-09 02:57:12', '2021-09-09 02:57:12', 0, 0, 0),
(135, 'Panko crumbed fish', NULL, NULL, NULL, 'dinner', 6, '2021-09-09 02:57:19', '2021-09-09 02:57:19', 0, 0, 0),
(136, 'Shrimp in seafood sauce', NULL, NULL, NULL, 'dinner', 6, '2021-09-09 02:57:26', '2021-09-09 02:57:26', 0, 0, 0),
(137, 'Coleslaw', NULL, NULL, NULL, 'dinner', 7, '2021-09-09 02:58:30', '2021-09-09 02:58:30', 0, 0, 0),
(138, 'Caesar salad', NULL, NULL, NULL, 'dinner', 7, '2021-09-09 02:58:36', '2021-09-09 02:58:36', 0, 0, 0),
(139, 'Pumpkin salad', NULL, NULL, NULL, 'dinner', 7, '2021-09-09 02:58:42', '2021-09-09 02:58:42', 0, 0, 0),
(140, 'Orzo pasta salad', NULL, NULL, NULL, 'dinner', 7, '2021-09-09 02:58:48', '2021-09-09 02:58:48', 0, 0, 0),
(141, 'Roast vegetable & couscous Salad', NULL, NULL, NULL, 'dinner', 7, '2021-09-09 02:58:54', '2021-09-09 02:58:54', 0, 0, 0),
(142, 'Balsamic pumpkin, beetroot & onion Salad', NULL, NULL, NULL, 'dinner', 7, '2021-09-09 02:59:00', '2021-09-09 02:59:00', 0, 0, 0),
(143, 'Turkey, quinoa & kale Salad', NULL, NULL, NULL, 'dinner', 7, '2021-09-09 02:59:05', '2021-09-09 02:59:05', 0, 0, 0),
(144, 'Pea, mango & avocado Salad', NULL, NULL, NULL, 'dinner', 7, '2021-09-09 02:59:11', '2021-09-09 02:59:11', 0, 0, 0),
(145, 'Zucchini, mushroom & spinach Salad', NULL, NULL, NULL, 'dinner', 7, '2021-09-09 02:59:17', '2021-09-09 02:59:17', 0, 0, 0),
(146, 'Beetroot & feta salad', NULL, NULL, NULL, 'dinner', 7, '2021-09-09 02:59:25', '2021-09-09 02:59:25', 0, 0, 0),
(147, 'Strawberry cheese cake', NULL, NULL, NULL, 'dinner', 8, '2021-09-09 02:59:51', '2021-09-09 02:59:51', 0, 0, 0),
(148, 'Pineapple pie', NULL, NULL, NULL, 'dinner', 8, '2021-09-09 02:59:57', '2021-09-09 02:59:57', 0, 0, 0),
(149, 'Carrot cake', NULL, NULL, NULL, 'dinner', 8, '2021-09-09 03:00:03', '2021-09-09 03:00:03', 0, 0, 0),
(150, 'Chocolate mud cake', NULL, NULL, NULL, 'dinner', 8, '2021-09-09 03:00:10', '2021-09-09 03:00:10', 0, 0, 0),
(151, 'Banoffee pie', NULL, NULL, NULL, 'dinner', 8, '2021-09-09 03:00:15', '2021-09-09 03:00:15', 0, 0, 0),
(152, 'Tropical trifle', NULL, NULL, NULL, 'dinner', 8, '2021-09-09 03:00:21', '2021-09-09 03:00:21', 0, 0, 0),
(153, 'Tiramisu', NULL, NULL, NULL, 'dinner', 8, '2021-09-09 03:00:29', '2021-09-09 03:00:29', 0, 0, 0),
(154, 'Apple crumble & cream', NULL, NULL, NULL, 'dinner', 8, '2021-09-09 03:00:35', '2021-09-09 03:00:35', 0, 0, 0),
(155, 'White chocolate & berry pinwheels', NULL, NULL, NULL, 'dinner', 8, '2021-09-09 03:00:40', '2021-09-09 03:00:40', 0, 0, 0),
(156, 'OPTION 1', '<ul><li>Beef chop suey (Sapasui)</li><li>Rice</li><li>Raw fish (Oka)</li><li>Chicken curry (Kalemoa)</li><li>Green bananas w/coconut cream (Fa’alifu fa’i)</li><li>Taro leaves &amp; coconut cream (Palusami)</li></ul>', 35, NULL, 'more', 1, '2021-09-29 09:19:48', '2021-10-01 10:22:15', 0, 0, 0),
(157, 'OPTION 2', '<ul><li>Beef chop suey (Sapasui)</li><li>Rice</li><li>Raw fish (Oka)</li><li>Chicken curry (Kalemoa)</li><li>Green bananas w/coconut cream (Fa’alifu fa’i)</li></ul>', 20, NULL, 'more', 1, '2021-09-29 21:27:48', '2021-10-01 10:22:27', 0, 0, 0),
(158, 'Served In Disposable Foil Trays Only OR', NULL, NULL, 29.5, 'more', 2, '2021-09-29 21:29:16', '2021-09-29 21:29:16', 0, 0, 0),
(159, 'Full Buffet Onsite Setup Only', NULL, NULL, 35, 'more', 2, '2021-09-29 21:29:39', '2021-09-29 21:29:39', 0, 0, 0),
(160, 'Takeaway Only, Individual Packaging Available', NULL, NULL, 29.5, 'more', 3, '2021-09-29 21:30:10', '2021-09-29 21:30:10', 0, 0, 0),
(161, 'Roast Pork', NULL, NULL, 6, 'more', 4, '2021-09-29 21:31:41', '2021-09-29 21:32:05', 0, 0, 0),
(162, 'Taro w/coconut cream (Fa’alifu kalo)', NULL, NULL, 6, 'more', 4, '2021-09-29 21:33:17', '2021-09-30 00:15:08', 0, 0, 0),
(163, 'Pork Bun (Keke Pua)', NULL, NULL, 6, 'more', 4, '2021-09-29 21:33:39', '2021-09-29 21:33:39', 0, 0, 0),
(164, 'Half Moon Pineapple Pie (Pailfala)', NULL, NULL, 6, 'more', 4, '2021-09-29 21:33:52', '2021-09-29 21:33:52', 0, 0, 0),
(165, 'LISA’S GRAZE', '<ul><li>An assortment of 4 crackers<br>Kumara &amp; pumpkin hummus, beetroot relish, basil pesto<br>Brie, feta, apricot cream cheese<br>Pickle onions, olives, gherkins<br>Cherry tomatoes, celery, carrots, cucumber<br>Salami, beef, ham, smoke chicken<br>Fresh fruit to garnish</li></ul>', NULL, -1, 'more', 5, '2021-09-30 00:10:12', '2021-09-30 00:10:12', 0, 0, 0),
(166, 'ATAHUA GRAZE', '<ul><li>Fried Bread <br>Creamed Paua Vol au vents<br>Raw fish<br>Mussell fritters <br>Chicken pies <br>Kumara rostis w/salmon <br>Steamed pudding cakes<br>Fresh fruit to garnish</li></ul>', NULL, -1, 'more', 5, '2021-09-30 00:23:52', '2021-09-30 00:23:52', 0, 0, 0),
(167, 'AULELI GRAZE', '<ul><li>Panikeke<br>Seafood Vol au vents<br>Oka<br>Palusami fritters w/salmon<br>Palusami pies<br>Crispy Taro &amp; salmon<br>Koko cakes<br>Fresh fruit to garnish</li></ul>', NULL, -1, 'more', 5, '2021-09-30 00:24:51', '2021-09-30 00:24:51', 0, 0, 0),
(168, 'OPTION 1', '<ul><li>Assorted club sandwiches<br>Assorted quiches<br>Sweet</li></ul><p> </p><p>4 Items per person</p>', 25, 10.5, 'more', 6, '2021-09-30 01:12:31', '2021-10-02 09:42:34', 0, 0, 0),
(169, 'OPTION 2', '<ul><li>Assorted club sandwiches<br>Assortment of quiches/savories<br>Sweet</li></ul>', 25, 12.5, 'more', 6, '2021-09-30 01:13:06', '2021-10-02 09:37:28', 0, 0, 0),
(170, 'OPTION 3', '<ul><li>Assorted club sandwiches<br>Assortment of quiches/savories<br>Sweet</li></ul>', 25, 14.5, 'more', 6, '2021-09-30 01:13:41', '2021-10-02 09:37:41', 0, 0, 0),
(171, 'HIGH TEA', '<ul><li>1 bottle 200ml of Veuve Du Vernay Brut (France)<br>1 of our selected tea range<br>Pork &amp; pumpkin croquette<br>Hot smoked salmon tartlet<br>Venetian tea sandwich<br>Egg &amp; caper sandwich<br>Coconut &amp; lime cupcakes<br>Raspberry mascarpone profito roles<br>Peanut &amp; chocolate cream praline<br>White chocolate truffles<br>Cheddar &amp; chive scones</li></ul>', 15, 55, 'more', 10, '2021-09-30 01:19:42', '2021-10-01 15:59:48', 0, 0, 0),
(172, 'Veuve Du Vernay (200ml bottle)', NULL, NULL, 12, 'more', 11, '2021-09-30 01:21:10', '2021-09-30 01:21:10', 0, 0, 0),
(173, 'Prosecco Bottle', NULL, NULL, 37, 'more', 11, '2021-09-30 01:22:40', '2021-09-30 01:22:40', 0, 0, 0),
(174, 'Moet Bottle', NULL, NULL, 95, 'more', 11, '2021-09-30 01:22:55', '2021-09-30 01:22:55', 0, 0, 0),
(175, 'Tea', NULL, NULL, 5, 'more', 11, '2021-09-30 01:23:11', '2021-09-30 01:23:11', 0, 0, 0),
(176, 'SWEET PLATTER', '<ul><li>Lemon Meringue Tarts <br>Chocolate brownie cheese cake<br>Strawberry tarts<br>Assorted truffles <br>Mango parcels</li></ul>', 10, 14.5, 'more', 12, '2021-09-30 01:30:37', '2021-09-30 01:30:37', 0, 0, 0),
(177, 'SAVOURY PLATTER', '<ul><li>Vegetarian Quiches <br>Smoke chicken brie and cranberry quiches <br>Mince &amp; Cheese pies <br>Thyme &amp; pork sausage rolls <br>Mushroom &amp; Bacon cases</li></ul>', 10, 15.5, 'more', 12, '2021-09-30 01:31:16', '2021-09-30 01:31:16', 0, 0, 0),
(178, 'ASIAN PLATTER', '<ul><li>Sushi (Assorted)<br>Wontons<br>Spring rolls/Samosas<br>Sesame beef sliders<br>Fresh spring rolls</li></ul>', 10, 17, 'more', 12, '2021-09-30 01:31:46', '2021-09-30 01:31:46', 0, 0, 0),
(179, 'COLD SAVOURY PLATTER', '<ul><li>Salmon tartate<br>Assorted club sandwiches<br>Caramelised onion tart <br>Chicken/mango &amp; avocado parcels<br>Filo parcels with feta, spinach &amp; mushrooms</li></ul>', 10, 16, 'more', 12, '2021-09-30 01:32:15', '2021-09-30 01:32:15', 0, 0, 0),
(180, 'SEAFOOD PLATTER', '<ul><li>Seafood cases<br>Crispy calamari &amp; smoke paprika mayo sliders<br>Salmon &amp; cream cheese quiches <br>Panko crumbed fish bites<br>Petite Tuna &amp; avocado Sushi</li></ul>', 10, 18.5, 'more', 12, '2021-09-30 01:32:58', '2021-09-30 01:32:58', 0, 0, 0),
(181, 'Crumbed chicken nibbles', NULL, 10, 8, 'more', 13, '2021-09-30 01:34:08', '2021-09-30 01:34:08', 0, 0, 0),
(182, 'Seafood mix', NULL, 10, 12, 'more', 13, '2021-09-30 01:34:30', '2021-09-30 01:34:30', 0, 0, 0),
(183, 'Caesar Salad', NULL, 10, 9, 'more', 13, '2021-09-30 01:34:46', '2021-09-30 01:34:46', 0, 0, 0),
(184, 'Sesame beef  salad', NULL, 10, 9.5, 'more', 13, '2021-09-30 01:35:20', '2021-09-30 01:35:20', 0, 0, 0),
(185, 'Raw veggie salad', NULL, 10, 7.5, 'more', 13, '2021-09-30 01:35:38', '2021-09-30 01:35:38', 0, 0, 0),
(186, 'Chicken salad', NULL, 10, 9, 'more', 13, '2021-09-30 01:35:54', '2021-09-30 01:35:54', 0, 0, 0),
(190, 'FINGER FOOD STYLE', '<ul><li>Medium Ham, brie &amp; cranberry filled croissants<br>Cinnamon Rolls<br>Granola portions with yoghurt &amp; berry compote<br>Fruit kebabs (kiwifruit, grapes, rockmelon, strawberry &amp; watermelon)</li></ul>', 10, 17.5, 'more', 14, '2021-09-30 08:53:09', '2021-09-30 08:53:09', 0, 0, 0),
(191, 'SWEET PLATTER', '<ul><li>Afghans<br>Xmas tarts<br>Chocolate dipped strawberries<br>Cherries<br>Brownies<br>Christmas themed cupcakes</li></ul>', 10, 15.5, 'more', 14, '2021-09-30 08:54:14', '2021-09-30 08:54:14', 0, 0, 0),
(192, 'MORNING TEA', '<ul><li>Feta, spinach, onion scones<br>Sultana Pinwheels<br>Fruit kebabs (kiwifruit, grapes, rockmelon, strawberry &amp; watermelon)</li></ul>', 10, 12.5, 'more', 14, '2021-09-30 08:54:43', '2021-09-30 08:54:43', 0, 0, 0),
(193, 'AFTERNOON TEA', '<ul><li>Smoke chicken, cranberry &amp; brie tarts<br>Caramelised onion, feta &amp; mushroom cases<br>Salmon bilinis w/cucumber, cream cheese &amp; dill<br>Asparagus wrap</li></ul>', 10, 14, 'more', 14, '2021-09-30 08:55:14', '2021-09-30 08:55:14', 0, 0, 0),
(194, 'LUNCH', '<ul><li>Ham off the bone, brie, cos, tomato, gherkin &amp; beetroot relish whole grain sandwiches.<br>Smoke chicken, brie &amp; cranberry quiche<br>Marinated beef meatballs<br>Christmas themed sweet platter (brownies, tarts, strawberries &amp; shortbread)</li></ul>', 10, 16.5, 'more', 14, '2021-09-30 08:56:05', '2021-09-30 08:56:05', 0, 0, 0),
(195, 'Pettie Bagels W/ Cream Cheese, Tomato Pesto & Spinach', NULL, NULL, 5.5, 'more', 15, '2021-09-30 08:56:29', '2021-09-30 08:56:29', 0, 0, 0),
(196, 'Specialty cookies', NULL, NULL, 5.5, 'more', 16, '2021-09-30 08:57:18', '2021-09-30 08:57:18', 0, 0, 0);

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_08_28_021818_create_banner_table', 2),
(6, '2021_08_28_043759_create_testimonial_table', 3),
(7, '2021_08_28_080435_create_cafe_table', 4),
(8, '2021_08_29_010933_create_site_table', 5),
(9, '2021_08_29_014632_create_catering_table', 6),
(10, '2021_08_29_033158_add_icons_to_catering_table', 7),
(17, '2021_09_22_025153_create_orders_table', 8),
(18, '2021_09_22_025210_create_order_details_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_type` enum('delivery','pick up') COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `apartment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_value` decimal(8,2) UNSIGNED DEFAULT NULL,
  `status` enum('pending','complete','declined','cancelled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `contact`, `order_type`, `date_time`, `apartment`, `street`, `city`, `postal_code`, `order_value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'jd@email.com', '9876541234', 'pick up', '2021-09-23 05:18:09', NULL, NULL, NULL, NULL, '57.48', 'pending', '2021-09-22 10:21:01', '2021-09-22 10:21:02'),
(2, 'Ernie Shields', 'your.email+faker99066@gmail.com', '971-671-1519', 'pick up', '2021-09-23 05:18:12', NULL, NULL, NULL, NULL, '17.50', 'pending', '2021-09-22 10:28:55', '2021-09-22 23:17:15'),
(3, 'Ethan Glover', 'your.email+faker62952@gmail.com', '096-567-6594', 'pick up', '2021-09-25 14:30:54', NULL, NULL, NULL, NULL, '16.49', 'complete', '2021-09-22 10:33:31', '2021-09-22 23:17:12'),
(4, 'Ahmad Lehner', 'your.email+faker49333@gmail.com', '983-413-2188', 'pick up', '2021-09-25 14:55:11', NULL, NULL, NULL, NULL, '61.98', 'declined', '2021-09-22 23:41:35', '2021-09-25 09:25:11'),
(5, 'Caitlyn Witting', 'your.email+faker57212@gmail.com', '782-393-3085', 'pick up', '2021-09-25 14:54:57', NULL, NULL, NULL, NULL, '15.50', 'complete', '2021-09-22 23:43:56', '2021-09-25 09:24:57'),
(6, 'Ethan Cassin', 'your.email+faker92209@gmail.com', '123-264-6708', 'delivery', '2021-09-23 05:17:14', '45/12', '136 Fanshawe St', 'Auckland', '1010', '24.00', 'pending', '2021-09-22 23:47:14', '2021-09-22 23:47:14'),
(9, 'Nico Kohler', 'your.email+faker33193@gmail.com', '422-998-7959', 'pick up', '2021-09-25 06:41:24', NULL, NULL, NULL, NULL, '64.48', 'pending', '2021-09-25 01:11:23', '2021-09-25 01:11:24'),
(10, 'Tracy Steuber', 'your.email+faker28649@gmail.com', '906-306-4916', 'pick up', '2021-09-25 06:44:35', NULL, NULL, NULL, NULL, '45.48', 'pending', '2021-09-25 01:14:35', '2021-09-25 01:14:35'),
(11, 'Dortha Hansen', 'your.email+faker70214@gmail.com', '244-955-2869', 'pick up', '2021-09-25 11:48:07', NULL, NULL, NULL, NULL, '63.48', 'pending', '2021-09-25 06:18:06', '2021-09-25 06:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `catering_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` smallint(5) UNSIGNED DEFAULT NULL,
  `price` decimal(8,2) UNSIGNED DEFAULT NULL,
  `grandparent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL,
  `vegetarian` tinyint(3) UNSIGNED DEFAULT NULL,
  `gluten` tinyint(3) UNSIGNED DEFAULT NULL,
  `vegan` tinyint(3) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `catering_id`, `name`, `content`, `quantity`, `price`, `grandparent`, `parent`, `vegetarian`, `gluten`, `vegan`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 'BUFFET', '<ul><li>Fruit danishes </li><li>Lightly toasted croissants</li><li>Seasonal fruit platter </li><li>Sauteed mushrooms &amp; tomatoes </li><li>Pork sausages &amp; bacon</li><li>French toast</li></ul>', 20, '19.99', 'breakfast', 2, 0, 0, 0, '2021-09-22 10:21:02', '2021-09-22 10:21:02'),
(2, 1, 7, 'Full Buffet Setup', NULL, NULL, '30.99', 'breakfast', 3, NULL, NULL, NULL, '2021-09-22 10:21:02', '2021-09-22 10:21:02'),
(3, 1, 9, 'Tea / Coffee / Sugar / Milk', NULL, 20, '6.50', 'breakfast', 4, 0, 0, 0, '2021-09-22 10:21:02', '2021-09-22 10:21:02'),
(4, 2, 38, 'Option 2', '<ul><li>Whole sandwich w/ mam, salad, cheese &amp; beetroot relish</li><li>Mince &amp; cheese pies</li><li>Smoked chicken, brie &amp; cranberry quiches</li><li>Lemon cake</li><li>Seasonal fruit platter  </li></ul>', 1, '17.50', 'lunch', 1, 0, 0, 0, '2021-09-22 10:28:55', '2021-09-22 10:28:55'),
(5, 2, 53, 'Zingy mini lemon Loaf', NULL, NULL, NULL, 'lunch', 5, 0, 0, 0, '2021-09-22 10:28:55', '2021-09-22 10:28:55'),
(6, 2, 54, 'Chocolate & raspberry brownie', NULL, NULL, NULL, 'lunch', 5, 0, 0, 0, '2021-09-22 10:28:55', '2021-09-22 10:28:55'),
(7, 3, 18, 'Option 3', '<p>Smoke chicken, brie &amp; cranberry quiches Pork &amp; thyme sausage rolls Cinnamon rolls </p>', 1, '12.50', 'tea', 1, 0, 0, 0, '2021-09-22 10:33:31', '2021-09-22 10:33:31'),
(8, 3, 21, 'Apple / Orange Juice / Water', NULL, NULL, '3.99', 'tea', 2, 0, 0, 0, '2021-09-22 10:33:31', '2021-09-22 10:33:31'),
(9, 3, 33, 'Fruit danishes (vegan)', NULL, NULL, NULL, 'tea', 4, 0, 0, 1, '2021-09-22 10:33:31', '2021-09-22 10:33:31'),
(10, 3, 99, 'Banana & coconut loaf (vegan', NULL, NULL, NULL, 'tea', 4, 0, 0, 1, '2021-09-22 10:33:31', '2021-09-22 10:33:31'),
(11, 4, 6, 'BUFFET', '<ul><li>Fruit danishes </li><li>Lightly toasted croissants</li><li>Seasonal fruit platter </li><li>Sauteed mushrooms &amp; tomatoes </li><li>Pork sausages &amp; bacon</li><li>French toast</li></ul>', 20, '19.99', 'breakfast', 2, 0, 0, 0, '2021-09-22 23:41:35', '2021-09-22 23:41:35'),
(12, 4, 7, 'Full Buffet Setup', NULL, NULL, '30.99', 'breakfast', 3, NULL, NULL, NULL, '2021-09-22 23:41:35', '2021-09-22 23:41:35'),
(13, 4, 15, 'Petite bagels w/cream cheese & salmon', NULL, 0, '4.50', 'breakfast', 5, 0, 0, 0, '2021-09-22 23:41:36', '2021-09-22 23:41:36'),
(14, 4, 9, 'Tea / Coffee / Sugar / Milk', NULL, 20, '6.50', 'breakfast', 4, 0, 0, 0, '2021-09-22 23:41:36', '2021-09-22 23:41:36'),
(15, 5, 4, 'Option 1', '<ul><li>Assorted fruit danishes</li><li>Petite filled croissants w/ cheese omelette &amp; tomato relish</li><li>Nutty granola, fresh fruit &amp; yoghurt portions</li></ul>', 10, '15.50', 'breakfast', 1, 0, 0, 0, '2021-09-22 23:43:56', '2021-09-22 23:43:56'),
(16, 6, 39, 'Option 3', '<ul><li>Cajun chicken, spinach, brie, tomato &amp; aioli panini’s</li><li>Mushroom cases </li><li>Salmon &amp; cream cheese quiches</li><li> Marinated beef meatballs on skewers</li><li> Caramel oat slice</li><li> Seasonal fruit platter</li></ul>', 20, '19.50', 'lunch', 1, 0, 0, 0, '2021-09-22 23:47:14', '2021-09-22 23:47:14'),
(17, 6, 44, 'Tuna pasta salad – penne pasta, tuna,  spring onion, tomato & aioli', NULL, NULL, '4.50', 'lunch', 2, 0, 0, 0, '2021-09-22 23:47:14', '2021-09-22 23:47:14'),
(18, 9, 6, 'BUFFET', '<ul><li>Fruit danishes </li><li>Lightly toasted croissants</li><li>Seasonal fruit platter </li><li>Sauteed mushrooms &amp; tomatoes </li><li>Pork sausages &amp; bacon</li><li>French toast</li></ul>', 25, '19.99', 'breakfast', 2, 0, 0, 0, '2021-09-25 01:11:24', '2021-09-25 01:11:24'),
(19, 9, 7, 'Full Buffet Setup', NULL, NULL, '30.99', 'breakfast', 3, NULL, NULL, NULL, '2021-09-25 01:11:24', '2021-09-25 01:11:24'),
(20, 9, 12, 'Medium savoury muffins', NULL, 0, '3.50', 'breakfast', 5, 0, 0, 0, '2021-09-25 01:11:24', '2021-09-25 01:11:24'),
(21, 9, 13, 'Medium sweet muffins', NULL, 0, '3.50', 'breakfast', 5, 0, 0, 0, '2021-09-25 01:11:24', '2021-09-25 01:11:24'),
(22, 9, 9, 'Tea / Coffee / Sugar / Milk', NULL, 60, '6.50', 'breakfast', 4, 0, 0, 0, '2021-09-25 01:11:24', '2021-09-25 01:11:24'),
(23, 10, 6, 'BUFFET', '<ul><li>Fruit danishes </li><li>Lightly toasted croissants</li><li>Seasonal fruit platter </li><li>Sauteed mushrooms &amp; tomatoes </li><li>Pork sausages &amp; bacon</li><li>French toast</li></ul>', 40, '19.99', 'breakfast', 2, 0, 0, 0, '2021-09-25 01:14:35', '2021-09-25 01:14:35'),
(24, 10, 8, 'Serves In Disposable Foil Tray', NULL, NULL, '10.99', 'breakfast', 3, NULL, NULL, NULL, '2021-09-25 01:14:35', '2021-09-25 01:14:35'),
(25, 10, 14, 'Waffles portions w/ maple syrup on the side', NULL, 0, '4.50', 'breakfast', 5, 0, 0, 0, '2021-09-25 01:14:35', '2021-09-25 01:14:35'),
(26, 10, 15, 'Petite bagels w/cream cheese & salmon', NULL, 0, '4.50', 'breakfast', 5, 0, 0, 0, '2021-09-25 01:14:35', '2021-09-25 01:14:35'),
(27, 10, 10, 'App / Orange Juice / Water', NULL, 100, '5.50', 'breakfast', 4, 0, 0, 0, '2021-09-25 01:14:35', '2021-09-25 01:14:35'),
(28, 11, 6, 'BUFFET', '<ul><li>Fruit danishes </li><li>Lightly toasted croissants</li><li>Seasonal fruit platter </li><li>Sauteed mushrooms &amp; tomatoes </li><li>Pork sausages &amp; bacon</li><li>French toast</li></ul>', 30, '19.99', 'breakfast', 2, 0, 0, 0, '2021-09-25 06:18:07', '2021-09-25 06:18:07'),
(29, 11, 7, 'Full Buffet Setup', NULL, NULL, '30.99', 'breakfast', 3, NULL, NULL, NULL, '2021-09-25 06:18:07', '2021-09-25 06:18:07'),
(30, 11, 12, 'Medium savoury muffins', NULL, 0, '3.50', 'breakfast', 5, 0, 0, 0, '2021-09-25 06:18:07', '2021-09-25 06:18:07'),
(31, 11, 13, 'Medium sweet muffins', NULL, 0, '3.50', 'breakfast', 5, 0, 0, 0, '2021-09-25 06:18:07', '2021-09-25 06:18:07'),
(32, 11, 10, 'App / Orange Juice / Water', NULL, 75, '5.50', 'breakfast', 4, 0, 0, 0, '2021-09-25 06:18:07', '2021-09-25 06:18:07');

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
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`id`, `contact`, `email`, `address`, `facebook`, `instagram`, `logo`, `created_at`, `updated_at`) VALUES
(1, '+123456789', 'admin@upcafe.com', 'Test address, test - 1010', 'facebook.com', 'instagram.com', 'logo.png', NULL, '2021-08-29 01:37:06');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Abhishek Honrao', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.', '2021-08-28 07:41:58', '2021-08-29 05:15:43'),
(3, 'Methew Fesili', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,', '2021-08-29 05:15:53', '2021-08-29 05:15:53'),
(4, 'Saia Mataele', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,', '2021-08-29 05:16:39', '2021-08-29 05:16:39'),
(5, 'Fred Taivairanga', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.', '2021-08-29 05:17:07', '2021-08-29 05:17:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Upcafe Admin', 'admin@upcafe.com', '2021-08-28 01:33:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xe8nZVGmLSvbpT3udYuKJvstMfbG4NcOZHxYgjD5zV9EwtLGe3lD3gWH6kt1', '2021-08-28 01:33:20', '2021-08-28 01:33:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cafe`
--
ALTER TABLE `cafe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catering`
--
ALTER TABLE `catering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_catering_id_foreign` (`catering_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
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
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cafe`
--
ALTER TABLE `cafe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `catering`
--
ALTER TABLE `catering`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_catering_id_foreign` FOREIGN KEY (`catering_id`) REFERENCES `catering` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
