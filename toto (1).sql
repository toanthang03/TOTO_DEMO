-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2024 at 03:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toto`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`id`, `name`, `product_id`, `created_at`, `updated_at`) VALUES
(3, 'Vòi chậu: TLG03303V1, TLG01304V1, TLG02304V1, TLG04304V1\r\nBộ thoát thải: VM5D417MTV\r\nỐng thải: THX1A-8 TVLF404', 8, NULL, NULL),
(4, 'Phụ kiện thoát thải HF4A118 \r\nNắp khóa nước HF6A178 \r\nBộ ốc cố định HF7A100U', 15, '2024-09-04 19:10:39', '2024-09-04 19:10:39'),
(5, 'Vòi chậu: TLG07303V (*), TLG08303V (*), TLG09303V (*), TLG10303V (*), TLG11303V (*) \r\nỐng thải: THX1A-8 TVLF404 \r\nBộ thoát thải: VM5D419MTV', 16, '2024-10-02 20:30:11', '2024-10-02 20:30:11'),
(7, '1 Bồn tắm: Có kèm theo bộ thoát nước, tay vịn và gối\r\n1 Gối\r\n4 Ống các tông\r\n1 Hướng dẫn lắp đặt bồn tắm\r\n1 Hướng dẫn sử dụng bồn tắm\r\n2 Dây buộc: Được sử dụng trong quá trình vận chuyển bồn tắm', 17, '2024-10-06 17:48:26', '2024-10-06 17:48:26');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brandname` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brandname`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Lavatories', 'https://vn.toto.com/wp-content/uploads/2023/11/xxlavatory-small-banner.jpgMic.P45r04PIis-1.webp.pagespeed.ic_.mpuUH6cqJ81-1.webp', NULL, NULL),
(2, 'Bathtubs', 'https://vn.toto.com/wp-content/uploads/2024/01/xxbathtub-small-banner_1.jpgMic.xYoMwbLcgd.webp.pagespeed.ic_.9_bc3uwb_7.webp', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoryname` varchar(255) NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryname`, `brand_id`, `created_at`, `updated_at`) VALUES
(1, 'GALALATO Lavatories', 1, NULL, NULL),
(2, 'Semi recessed lavatories', 1, NULL, NULL),
(3, 'Flotation Bathtub', 2, NULL, NULL),
(4, 'Massage Bathtubs', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fetures`
--

CREATE TABLE `fetures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fetures`
--

INSERT INTO `fetures` (`id`, `name`, `product_id`, `created_at`, `updated_at`) VALUES
(5, '• Viền chậu siêu mỏng 4mm\r\n• Chất liệu Linear Ceram siêu bền', 8, NULL, NULL),
(6, '• Bề mặt chống trơn trượt\r\n• Công nghệ mát – xa sục khí và mát -xa thủy lực', 10, NULL, NULL),
(7, '• Bề mặt chống trơn trượt\r\n• Massage sục khí', 11, NULL, NULL),
(8, '• Men sứ chống dính, chống bám bẩn CEFIONTECT', 15, '2024-09-04 19:10:39', '2024-09-04 19:10:39'),
(9, '• Viền chậu siêu mỏng 4mm \r\n• Chất liệu Linear Ceram siêu bền', 16, '2024-10-02 20:30:11', '2024-10-02 20:30:11'),
(10, '• Thiết kế độc đáo, sang trọng và tiện nghi\r\n• Chất liệu đá cẩm thạch nhân tạo GALALATO 4 lớp cao cấp\r\n• Bề mặt chống trơn trượt\r\n• Tay vịn mạ chrome', 17, '2024-10-06 17:48:26', '2024-10-06 17:48:26');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `product_id`, `created_at`, `updated_at`) VALUES
(3, 'https://vn.toto.com/contents/wp-content/uploads/2022/07/ban-ve-2d-cua-chau-lavabo-rua-mat-dat-ban-cao-cap-lt4716mtg17cmw.jpeg', 8, NULL, NULL),
(4, 'https://vn.toto.com/contents/wp-content/uploads/2022/07/anh-2d-cua-bon-tam-ngoc-trai-massage-cao-cap-ppyd1720hptep.jpeg', 10, NULL, NULL),
(5, 'https://vn.toto.com/contents/wp-content/uploads/2022/07/hinh-anh-2d-cua-bon-tam-nam-massage-cao-cap-ppyb1610rhptes.jpeg', 11, NULL, NULL),
(6, 'https://vn.toto.com/contents/wp-content/uploads/2022/07/ban-ve-2d-cua-chau-rua-mat-cao-cap-ban-am-ban-lt647csxw.jpeg', 15, '2024-09-04 19:10:39', '2024-09-04 19:10:39'),
(7, 'https://vn.toto.com/contents/wp-content/uploads/2022/07/ban-ve-2d-cua-chau-lavabo-rua-tay-dat-ban-lt4715mtg19cmw.jpeg', 16, '2024-10-02 20:30:11', '2024-10-02 20:30:11'),
(8, 'https://vn.toto.com/contents/wp-content/uploads/2022/07/anh-2d-cua-bon-tam-cao-cap-dat-san-neorest-pjy1886hpwmnegw.jpeg', 17, '2024-10-06 17:48:26', '2024-10-06 17:48:26');

-- --------------------------------------------------------

--
-- Table structure for table `image_news`
--

CREATE TABLE `image_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `new_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_news`
--

INSERT INTO `image_news` (`id`, `image`, `new_id`, `created_at`, `updated_at`) VALUES
(1, 'https://vn.toto.com/wp-content/webp-express/webp-images/uploads/2024/08/LVKV_LW4716_ZL_MBLACK-2048x2048.jpg.webp', 3, NULL, NULL),
(2, 'https://vn.toto.com/wp-content/webp-express/webp-images/uploads/2024/08/LVKV_LW4716_ZL_MGREY_PC.jpg.webp', 3, NULL, NULL),
(3, 'https://vn.toto.com/wp-content/webp-express/webp-images/uploads/2024/08/LVKV_LW4716_ZL_MBEIGE-2048x2048.jpg.webp', 3, NULL, NULL),
(4, 'https://vn.toto.com/wp-content/webp-express/webp-images/uploads/2024/08/voi-chau-ma-mau-e1724213625859-1536x997.jpg.webp', 3, NULL, NULL),
(7, 'https://vn.toto.com/wp-content/webp-express/webp-images/uploads/2024/08/WL-S7-Casestudy03_main-1536x1272.jpg.webp', 4, NULL, NULL),
(8, 'https://vn.toto.com/wp-content/webp-express/webp-images/uploads/2024/08/CleanShot-2024-08-16-at-16.33.41@2x-1536x902.jpg.webp', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_08_29_031324_create_brands_table', 1),
(5, '2024_08_30_021022_create_categories_table', 1),
(6, '2024_08_30_021229_create_products_table', 1),
(7, '2024_08_30_024135_create_accessories_table', 1),
(8, '2024_08_30_025007_create_fetures_table', 1),
(9, '2024_08_30_025034_create_images_table', 1),
(10, '2024_08_30_025044_create_pdfs_table', 1),
(11, '2024_08_30_025056_create_techniques_table', 1),
(12, '2024_08_30_025109_create_technologies_table', 1),
(13, '2024_08_30_032321_update_price_column_in_products_table', 1),
(14, '2024_08_30_151544_create_news_table', 2),
(15, '2024_08_30_151701_create_image_news_table', 2),
(16, '2024_08_31_131633_add_datefor_news', 3),
(18, '2024_09_01_114416_create_add_image', 4),
(19, '2024_09_02_022217_add_collumn_users', 5);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `date`, `content`, `created_at`, `updated_at`) VALUES
(3, 'TOTO lần đầu ra mắt Bộ sưu tập chậu màu tại Việt Nam', 'https://vn.toto.com/wp-content/webp-express/webp-images/uploads/2024/08/Horizontal_for-catalog.jpg.webp', '2024-08-21', 'Tùy biến không gian thời thượng đậm chất cá nhân\r\nBộ sưu tập Chậu Màu hoàn toàn mới của TOTO được ra đời nhằm tạo nên một không gian sống đậm dấu ấn cá nhân của mỗi gia chủ. Đa dạng lựa chọn màu sắc: 4 tone màu chủ đạo – trắng, be, xám, và đen – dễ dàng kết hợp với nhiều phong cách khác nhau, trong đó:\r\n\r\nTrắng mờ: Một màu sắc toàn năng mang đến ấn tượng sáng sủa và nhẹ nhàng cho không gian, phù hợp với nhiều phong cách nội thất khác nhau.\r\nĐen mờ: Một màu sắc phổ biến phù hợp với mọi phong cách từ sang trọng đến bình dị. Kết cấu mờ tạo điểm nhấn vừa đủ cho không gian của bạn.\r\nBe mờ: Hài hòa với gỗ tự nhiên và vải, tạo nên không khí tự nhiên và thư giãn.\r\nXám mờ: Tinh tế với cảm giác hiện đại và đô thị, mang cảm giác ấm áp nhờ kết cấu mờ.\r\nNgoài ra, bề mặt men mờ nhẵn mịn, mang lại vẻ đẹp tinh tế, hiện đại, cùng những trải nghiệm chạm tay mới mẻ và thú vị.\r\n\r\nĐặc biệt, các sản phẩm đều áp dụng công nghệ Linear Ceram cao cấp với kiểu dáng mỏng thanh thoát chỉ 4mm nhưng lại cứng cáp và bền bỉ gấp 2 lần so với men sứ thường.\r\n\r\nCác lựa chọn chậu màu hiện áp dụng cho các dòng chậu: LT4706, LT4715, LT4716, LT4704.\r\n\r\n“Mix match” đa dạng với 8 lựa chọn sen vòi mạ màu\r\nVới 5 lựa chọn chậu màu: Trắng bóng, Trắng mờ, Be mờ, Xám mờ, Đen mờ cùng 8 lựa chọn sen vòi mạ màu: Chrome, Vàng Đồng mờ, Vàng Pháp mờ, Nikel mờ, Đen mờ, Vàng Đồng bóng, Vàng Pháp bóng, Nikel bóng, khách hàng có thể thỏa thích lựa chọn mix match tô điểm không gian phòng tắm sống động đầy màu sắc.', NULL, NULL),
(4, 'TOTO giới thiệu thế hệ nắp rửa điện tử WASHLET S7 mới', 'https://vn.toto.com/wp-content/webp-express/webp-images/uploads/2024/08/CUT3ch-768x575.jpg.webp', '2024-08-16', 'TOTO ra mắt thế hệ nắp rửa điện tử WASHLET S7 tiếp theo, tích hợp công nghệ hiện đại cùng thiết kế mới tối giản nhưng đầy sang trọng. Sản phẩm là dòng sản phẩm cao cấp nhất của TOTO và đã đạt sự hoàn hảo nhất trong các dòng WASHLET tính đến nay. \r\n\r\nSở hữu thiết kế tuyệt đẹp đến từng chi tiết, WASHLET S7 TCF47360GAA xứng danh là dòng nắp rửa điện tử “hoàn hảo” nhất của TOTO. WASHLET S7 TCF47360GAA được kiến tạo vô cùng tỉ mỉ, sở hữu những đường cong như mặt nước, nhằm mang đến sự kết hợp hài hòa và thống nhất với toàn bộ phần thân sứ của bàn cầu. Với thiết kế mỏng hơn 25% và vành bệ ngồi không viền, phiên bản này không chỉ nâng tầm trải nghiệm thư thái, mà còn hỗ trợ việc vệ sinh sản phẩm trở nên dễ dàng hơn bao giờ hết.\r\n\r\nNgoài ra, so với các dòng tiền nhiệm, WASHLET S7 TCF47360GAA có sự nâng cấp đáng kể về thiết kế của điều khiển cầm tay từ xa với màu trắng ngọc trai tinh tế cùng hệ thống phím chức năng dễ thao tác, dễ ghi nhớ cho người dùng, đặc biệt là trẻ em và người lớn tuổi.', '2024-09-04 20:12:26', '2024-09-04 20:12:26');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pdfs`
--

CREATE TABLE `pdfs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(255) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_id`, `productname`, `price`, `image`, `description`, `category_id`, `brand_id`, `created_at`, `updated_at`) VALUES
(8, 'LT4716MTG17', 'Chậu đặt bàn vành mỏng Linear Ceram', 35315000.00, '1727925455.png', 'Kích thước lỗ bắt vòi: Ø35 mm\r\nCó lỗ xả tràn\r\nLỗ bắt vòi trên bàn\r\nMen CEFIONTECT', 1, 1, NULL, '2024-10-02 20:17:35'),
(9, 'LT533R', 'Chậu bán âm bàn', 2288000.00, 'LT533R.png', NULL, 2, 1, NULL, NULL),
(10, 'PPYD1720HPTE', 'Bồn tắm ngọc trai massage', 431100000.00, 'PPYD1720HPTE.png', '1. Mô tả chi tiết bồn tắm ngọc trai massage cao cấp PPYD1720HPTEP\r\nBồn tắm ngọc trai PPYD1720HPTEP được biết đến là loại bồn tắm cao cấp hàng đầu với thiết kế tròn. Màu trắng ngọc trai quyến rũ và sành điệu. Sản phẩm được trang bị tích hợp massage sục khí và massage thủy lực. Loại bồn tắm này mang đến cảm giác dễ chịu, thư thái cho người dùng. Ngoài ra, sản phẩm còn chống trơn trượt, dung tích lớn và có kèm bộ gối đầu khi nằm vô cùng tiện nghi khi sử dụng. Hiện sản phẩm đang rất được săn đón trên thị trường.\r\n\r\n2. Tính năng công nghệ của bồn tắm ngọc trai massage cao cấp PPYD1720HPTEP\r\nBề mặt bồn tắm ngọc trai PPYD1720HPTEP có chống trơn trượt, vì vậy trong quá trình sử dụng có thể giúp bạn hạn chế tối đa việc té ngã, đảm bảo an toàn với mọi thành viên trong nhà.\r\nĐược tích hợp massage sục khí và massage thủy lực, giúp bạn giải tỏa mệt mỏi và căng thẳng sau một ngày làm việc vất vả.\r\nCó kèm bộ gối đầu khi nằm, bạn có thể ngâm bồn thoải mái, thư giãn để giảm stress.\r\nMàu sắc trắng ngọc trai vừa sang trọng, vừa thể hiện cá tính và đẳng cấp của chủ nhân.\r\nDung tích lớn 452 lít, thoải mái với gia đình đông thành viên và có nhiều trẻ em.', 4, 2, NULL, NULL),
(11, 'PPYB1610RHPTE', 'Bồn tắm nằm massage', 156700000.00, 'PPYB1610RHPTE.png', 'Tính năng nổi bật của bồn tắm nằm massage cao cấp PPYB1610RHPTES\r\nThiết kế tinh tế, đa chức năng\r\nBề mặt gia cố khả năng bám dính khi đặt chân vào\r\nDễ lắp đặt, tiện lợi khi sử dụng\r\nTrang bị hệ thống mát xa sục khí\r\n', 4, 2, NULL, NULL),
(12, 'PJYD2200PWE', 'Bồn tắm không gian đặt sàn', 500790000.00, '1725343797.png', 'Sản phẩm bồn tắm nổi không gian PJYD2200PWEGW là một trong nhiều bồn tắm Galalato được chính TOTO thiết kế, sản xuất và phân phối ra thị trường.\r\n\r\nĐây là một trong số ít bồn tắm có thiết kế độc đáo, mô phỏng tư thế nằm nghỉ ngơi của các phi hành gia. Kèm theo là hàng loạt công nghệ hiện đại và cao cấp độc quyền như tính năng mát-xa Hydrohands và tính năng tạo ánh sáng dễ chịu, thư thái từ đèn Led được tích hợp sẵn,…\r\n\r\nVới sản phẩm bồn tắm nổi không gian PJYD2200PWEGW, TOTO tin rằng sẽ đem lại trải nghiệm tắm khác biệt với các dòng sản phẩm khác trên thị trường. Đồng thời giúp không gian phòng tắm nhà bạn trở nên sang trọng hơn và thể hiện được đẳng cấp của gia chủ.\r\n\r\nTính năng nổi bật\r\nSỡ hữu thiết kế tiện nghi nhưng vẫn giữ được sự sang trọng và tcao cấp\r\nCông nghệ thiết kế Zero Dimension mô phỏng theo tư thế phi hành gia đang nghỉ ngơi ngoài không gian\r\nCông nghệ mát-xa Hydrohands giúp người dùng thoải mái tuyệt đối\r\nMát-xa bọt khí và mát-xa thủy lực\r\nCó bộ gối đầu bằng chất liệu Silicon, có thể linh hoạt di chuyển\r\nTích hợp đèn Led ánh sáng dễ chịu', 3, 2, '2024-09-02 23:09:57', '2024-09-02 23:09:57'),
(15, 'LT647CS', 'Chậu rửa mặt cao cấp bán âm bàn LT647CSXW', 4300000.00, '1725501933.png', 'Kích thước lỗ bắt vòi: Ø35 mm\r\nCó lỗ xả tràn\r\nLỗ bắt vòi trên chậu\r\nThiết kế thanh lịch, bền bỉ trong thời gian dài', 2, 1, '2024-09-04 19:05:33', '2024-09-04 21:26:43'),
(16, 'LT4715MTG19', 'Chậu lavabo rửa tay đặt bàn LT4715MTG19CMW', 32155000.00, '1727924942.png', 'Kích thước lỗ bắt vòi: Ø35 mm\r\nCó lỗ xả tràn\r\nLỗ bắt vòi trên bàn\r\nThiết kế tăng vẻ cao cấp cho phòng tắm', 1, 1, '2024-10-02 20:09:02', '2024-10-02 20:09:02'),
(17, 'PJY1886HPWMNE', 'Bồn tắm đặt sàn NEOREST', 213447000.00, '1728261892.png', '1. Mô tả chi tiết Bồn tắm đặt sàn Bồn tắm đặt sàn NEOREST PJY1886HPWMNEGW\r\nBồn tắm đặt sàn NEOREST PJY1886HPWMNEGW vô cùng nổi bật với thiết kế độc đáo nhưng không kém phần sang trọng. Chất liệu đá cẩm thạch nhân tạo GALALATO cao cấp giúp sản phẩm vừa có tính thẩm mỹ cao lại vừa bền bỉ trong suốt quá trình sử dụng.\r\n\r\nBồn rửa có gam màu trắng sáng bóng bẩy và giúp không gian phòng tắm thêm sạch sẽ. Bề mặt bồn được thiết kế riêng để có khả năng chống trơn trượt hiệu quả. Ngoài ra sản phẩm cũng có phần tay vịn mạ chrome rất thời trang phối hợp cùng phụ kiện thoát nước độc đáo.\r\n\r\n2. Tính năng công nghệ Bồn tắm đặt sàn Bồn tắm đặt sàn NEOREST PJY1886HPWMNEGW\r\nBồn tắm đặt sàn PJY1886HPWMNEGW có thiết kế độc đáo, sang trọng rất phù hợp để bố trí tại nhiều phong cách phòng tắm khác nhau và giúp nâng cấp tính thẩm mỹ cho không gian ngôi nhà.\r\nSản phẩm làm bằng đá cẩm thạch nhân tạo GALALATO 4 lớp nên có độ bền cao, bề mặt trắng sáng đẹp mãi với thời gian.\r\nBồn rửa có bề mặt chống trơn trượt nên rất an toàn cho người sử dụng và đặc biệt phù hợp với gia đình có người già hay trẻ nhỏ.\r\nBồn tắm sử dụng tay vịn mạ chrome có độ sáng bóng bẩy giúp cho sản phẩm thêm phần sang trọng và thanh lịch.\r\nKích thước bồn tắm được thiết kế phù hợp để mang lại cảm giác thoải mái, tiện nghi khi sử dụng.', 3, 2, '2024-10-06 17:44:52', '2024-10-06 17:44:52');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('oYKGM2XQ259t99sJ6s6QO1tjMMuJpU9auVd6RyT4', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoia0tsNXJZTE90MFhCTDR0WE96cWx6RkZLS3dPMHVvN2R4aUxiMHF0SCI7czo2OiJsb2NhbGUiO3M6MjoiZW4iO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMzOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvcHJvZHVjdHMvMTciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1728263109);

-- --------------------------------------------------------

--
-- Table structure for table `techniques`
--

CREATE TABLE `techniques` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `material` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `capacity` varchar(255) DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `techniques`
--

INSERT INTO `techniques` (`id`, `size`, `color`, `material`, `weight`, `capacity`, `product_id`, `created_at`, `updated_at`) VALUES
(4, 'L380 x W600 x H137 mm', 'Trắng mờ', NULL, NULL, NULL, 8, NULL, NULL),
(5, 'L430 x W430 x H177 mm', 'Trắng', NULL, NULL, NULL, 9, NULL, NULL),
(6, '1700D x 1700W x 600H mm', 'Trắng ngọc trai', 'Đá cẩm thạch nhân tạo acrylic “Ngọc trai”', NULL, '452 (L)', 10, NULL, NULL),
(7, ' 810D x1600W x680H mm', ' 810D x1600W x680H mm', 'Đá cẩm thạch nhân tạo acrylic “Ngọc trai”', NULL, '179 (L)', 11, NULL, NULL),
(8, '2200W x 1050D x 780H mm', 'Trắng', 'GALALATO', '140 kg', '293L', 12, '2024-09-03 01:25:37', '2024-09-03 01:25:37'),
(9, 'L420 x W520 x H159 (mm)', 'Trắng', 'Men sứ', NULL, NULL, 15, '2024-09-04 19:06:39', '2024-09-04 19:06:39'),
(13, 'L380 x W500 x H137 mm', 'Trắng mờ', NULL, NULL, NULL, 16, '2024-10-02 20:30:11', '2024-10-02 20:30:11'),
(15, '1800Wx 950D x 600H mm', 'Trắng bóng', 'Đá cẩm thạch nhân tạo', NULL, '307 (L)', 17, '2024-10-06 17:48:26', '2024-10-06 17:48:26');

-- --------------------------------------------------------

--
-- Table structure for table `technologies`
--

CREATE TABLE `technologies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hoàng Văn Chiến', 'chienvan1203@gmail.com', '0987654321', 'user', NULL, '$2y$12$HKQzRCgvjzIfyBzlxj73/.4otaedZqPQBlL1/hNo/D1wVBkH9lKX2', NULL, '2024-09-01 19:48:34', '2024-09-01 19:48:34'),
(2, 'Toàn Thắng', 'thang300403@gmail.com', '0123456789', 'admin', NULL, '$2y$12$Hwi1XolIN0SzxJnK.TjlceQoFlR2yMnDXONHcFJiuDG8JpyBIdZP2', NULL, '2024-09-01 19:50:49', '2024-09-01 19:50:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accessories_product_id_foreign` (`product_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fetures`
--
ALTER TABLE `fetures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fetures_product_id_foreign` (`product_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_product_id_foreign` (`product_id`);

--
-- Indexes for table `image_news`
--
ALTER TABLE `image_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_news_new_id_foreign` (`new_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pdfs`
--
ALTER TABLE `pdfs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pdfs_product_id_foreign` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_product_id_unique` (`product_id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `techniques`
--
ALTER TABLE `techniques`
  ADD PRIMARY KEY (`id`),
  ADD KEY `techniques_product_id_foreign` (`product_id`);

--
-- Indexes for table `technologies`
--
ALTER TABLE `technologies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `technologies_product_id_foreign` (`product_id`);

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
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fetures`
--
ALTER TABLE `fetures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `image_news`
--
ALTER TABLE `image_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pdfs`
--
ALTER TABLE `pdfs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `techniques`
--
ALTER TABLE `techniques`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `technologies`
--
ALTER TABLE `technologies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accessories`
--
ALTER TABLE `accessories`
  ADD CONSTRAINT `accessories_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fetures`
--
ALTER TABLE `fetures`
  ADD CONSTRAINT `fetures_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `image_news`
--
ALTER TABLE `image_news`
  ADD CONSTRAINT `image_news_new_id_foreign` FOREIGN KEY (`new_id`) REFERENCES `news` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pdfs`
--
ALTER TABLE `pdfs`
  ADD CONSTRAINT `pdfs_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `techniques`
--
ALTER TABLE `techniques`
  ADD CONSTRAINT `techniques_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `technologies`
--
ALTER TABLE `technologies`
  ADD CONSTRAINT `technologies_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
