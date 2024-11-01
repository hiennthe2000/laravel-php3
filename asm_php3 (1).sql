-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th8 08, 2023 lúc 06:20 PM
-- Phiên bản máy phục vụ: 5.7.24
-- Phiên bản PHP: 8.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `asm_php3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 3, 1, '2023-08-08 04:14:29', '2023-08-08 04:14:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `summary`, `image`, `created_at`, `updated_at`) VALUES
(22, 'Ghế gỗ', 'Ghế gỗ tự nhiên, bền chắc và đẹp mắt, tạo cảm giác ấm cúng và gần gũi trong không gian nội thất. 2', 'uploads/1690199298_img_bg_4.jpg', '2023-07-24 04:48:18', '2023-08-02 18:38:32'),
(23, 'Tủ quần áo', 'Tủ quần áo thông minh, tiết kiệm không gian, chứa đựng gọn gàng và tổ chức tối ưu cho quần áo và phụ kiện', 'uploads/1690199651_img_bg_1.jpg', '2023-07-24 04:54:11', NULL),
(24, 'Loa bluetood', 'Loa Bluetooth di động, kết nối không dây, âm thanh sống động, tiện lợi mang theo và thưởng thức nhạc mọi lúc mọi nơi', 'uploads/1690199737_product-2.jpg', '2023-07-24 04:55:37', NULL),
(25, 'Tai nghe', 'Tai nghe di động, âm thanh chất lượng cao, cách âm tốt, kết nối thuận tiện, thưởng thức âm nhạc và cuộc gọi mọi lúc mọi nơi 1.', 'uploads/1690200002_product-5.jpg', '2023-07-24 05:00:02', '2023-07-29 16:15:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_09_020331_create_categories_table', 1),
(6, '2023_07_09_020432_create_posts_table', 1),
(7, '2023_07_09_020931_create_products_table', 1),
(8, '2023_07_09_020949_create_product_categories_table', 1),
(9, '2023_07_09_022247_create_orders_table', 2),
(10, '2023_07_09_023417_create_order_detail_table', 2),
(11, '2023_08_05_163946_add_role_to_users_table', 3),
(12, '2023_08_06_104116_create_carts_table', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `customer_name`, `customer_phone`, `customer_email`, `shipping_address`, `note`, `total`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'fsdfsdfwert4ttetw', '0987646865', 'hienntpc03211@fpt.edu.vn', 'Caan tho', 'gfhfdhd', NULL, NULL, NULL, NULL),
(2, 'yergfdfg', '0855435754', 'hienntpc03211@fpt.edu.vn', 'rtyrth', 'útwe', NULL, NULL, '2023-08-08 03:09:19', '2023-08-08 03:09:19'),
(3, 'tertrtrtr', '0987463728', 'hienntpc03211@fpt.edu.vn', 'fgdgd', 'eger', NULL, NULL, '2023-08-08 03:29:03', '2023-08-08 03:29:03'),
(4, 'tertrtrtr', '0987463728', 'hienntpc03211@fpt.edu.vn', 'fgdgd', 'eger', NULL, NULL, '2023-08-08 03:30:51', '2023-08-08 03:30:51'),
(5, 'tertrtrtr', '0987463728', 'hienntpc03211@fpt.edu.vn', 'fgdgd', 'eger', NULL, NULL, '2023-08-08 03:32:12', '2023-08-08 03:32:12'),
(6, 'tertrtrtr', '0987463728', 'hienntpc03211@fpt.edu.vn', 'fgdgd', 'eger', NULL, NULL, '2023-08-08 03:37:06', '2023-08-08 03:37:06'),
(7, 'tertrtrtr', '0987463728', 'hienntpc03211@fpt.edu.vn', 'fgdgd', 'eger', NULL, NULL, '2023-08-08 03:41:12', '2023-08-08 03:41:12'),
(8, 'fsfs', '0876464353', 'hienntpc03211@fpt.edu.vn', 'sfsf', 'ưerwer', NULL, NULL, '2023-08-08 03:42:09', '2023-08-08 03:42:09'),
(9, 'tẻtre', '7645344324', 'hienntpc03211@fpt.edu.vn', 'sfsf', 'ẻwrw', NULL, NULL, '2023-08-08 03:43:18', '2023-08-08 03:43:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 0, 500000, '2023-08-08 03:41:15', '2023-08-08 03:41:15'),
(2, 1, 2, 0, 500000, '2023-08-08 03:42:13', '2023-08-08 03:42:13'),
(3, 1, 2, 0, 500000, '2023-08-08 03:43:21', '2023-08-08 03:43:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contents` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `name`, `slug`, `contents`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(6, 'Cách chọn ghế gỗ ăn uống đẹp', 'cach-chon-ghe-go-an-uong-dep', 'Chất liệu gỗ: Chọn ghế làm từ gỗ chất lượng cao như gỗ sồi, gỗ hương, gỗ thông, v.v. để đảm bảo độ bền và đẹp mắt.Kiểu dáng và thiết kế: Chọn ghế có kiểu dáng phù hợp với không gian và phong cách nội thất của bạn.Kiểm tra kết cấu: Đảm bảo ghế có kết cấu vững chắc, không bị lệch hoặc lung lay.Tựa lưng và đệm ngồi: Chọn ghế có tựa lưng và đệm ngồi thoải mái, hỗ trợ lưng tốt.Hoàn thiện: Kiểm tra hoàn thiện của ghế, đảm bảo bề mặt mịn màng và không có lỗi nhiễu.Kích thước: Đo kích thước không gian để chọn ghế phù hợp và không làm cản trở lưu thông.Kiểm tra độ cân đối: Đảm bảo ghế không bị nghiêng hoặc không ổn định.Tiện ích và tính năng: Xem xét các tính năng bổ sung như ghế gấp gọn, có tay vịn, v.v. phù hợp với nhu cầu sử dụng.Tìm hiểu thương hiệu và đánh giá: Tìm hiểu về thương hiệu ghế và xem xét đánh giá của người dùng khác.Tầm giá: Đặt ngân sách phù hợp và tìm kiếm ghế gỗ trong phạm vi giá cả đó.', 'uploads/1690200244_product-1.jpg', 22, '2023-07-24 05:04:04', '2023-08-02 11:47:55'),
(7, 'Ghế đẹp nên chọn thế nào', 'ghe-dep-nen-chon-the-nao', 'Phong cách nội thất: Xem xét phong cách nội thất chung của không gian bạn định đặt ghế. Nếu không gian có thiên hướng hiện đại, bạn có thể chọn những mẫu ghế có đường nét đơn giản, sáng sủa, không quá cầu kỳ. Nếu phong cách là cổ điển, các mẫu ghế với chi tiết tinh tế và họa tiết đẹp có thể phù hợp hơn.Mục đích sử dụng: Xác định mục đích sử dụng của ghế. Bạn cần một ghế để ngồi ăn, làm việc, nghỉ ngơi hay chỉ để trang trí? Điều này sẽ giúp bạn chọn loại ghế có thiết kế và tính năng phù hợp với nhu cầu sử dụng.Chất liệu: Lựa chọn chất liệu phù hợp với không gian và phong cách. Ghế có thể làm từ gỗ, kim loại, nhựa, da, vải hoặc các chất liệu tổng hợp khác. Chọn chất liệu dễ dàng vệ sinh và bền bỉ để ghế giữ được vẻ đẹp lâu dài.Kích thước và tỷ lệ: Xem xét không gian mà bạn có thể dành cho ghế và điều chỉnh kích thước phù hợp. Điều quan trọng là ghế không quá to hoặc quá nhỏ so với không gian chung của căn phòng. Màu sắc: Chọn màu sắc phù hợp với bố cục màu sắc của không gian. Bạn có thể chọn ghế có màu tương phản để tạo điểm nhấn hoặc chọn ghế có màu tương tự với nội thất chung để tạo sự hòa hợp.Thoải mái: Quan trọng nhất, hãy thử ngồi trên ghế để đảm bảo thoải mái. Một ghế đẹp mà không thoải mái sẽ không mang lại sự hài lòng khi sử dụng.Hiệu quả giá cả: Cuối cùng, xem xét ngân sách của bạn và chọn ghế phù hợp với giá cả mà bạn sẵn lòng bỏ ra.Nếu có thể, nên ghé thăm các cửa hàng nội thất để xem trực tiếp và thử ngồi trên các mẫu ghế để có cái nhìn và cảm nhận tốt hơn. Nếu mua ghế trực tuyến, đọc kỹ thông tin sản phẩm và xem nhận xét của người dùng trước khi đưa ra quyết định.', 'uploads/1690200803_img_bg_2.jpg', 22, '2023-07-24 05:13:23', '2023-07-24 12:30:45'),
(8, 'Công dụng tủ quần áo', 'cong-dung-tu-quan-ao', 'Tủ quần áo là một đồ nội thất quan trọng trong phòng ngủ hoặc phòng riêng dùng để lưu trữ và sắp xếp quần áo, giày dép, phụ kiện và nhiều vật dụng cá nhân khác. Công dụng chính của tủ quần áo bao gồm:\r\n\r\n1. Lưu trữ quần áo và trang phục: Đây là công dụng chính của tủ quần áo. Tủ được thiết kế với các ngăn kéo, khoang treo và các kệ để giữ quần áo và trang phục gọn gàng, tránh nhà cửa trở nên lộn xộn.\r\n\r\n2. Bảo quản giày dép và phụ kiện: Ngoài quần áo, tủ quần áo còn cung cấp không gian để lưu trữ giày dép, túi xách, nón, thắt lưng và các phụ kiện khác. Điều này giúp giữ cho các vật dụng này ở một nơi tiện lợi và dễ tìm kiếm.\r\n\r\n3. Bảo vệ quần áo khỏi bụi bẩn và ẩm ướt: Tủ quần áo thường có cánh hoặc màn che để bảo vệ quần áo khỏi bụi bẩn và ẩm ướt. Điều này giúp bảo quản quần áo tốt hơn và kéo dài tuổi thọ của chúng.\r\n\r\n4. Tạo không gian ấm cúng và ngăn nắp: Tủ quần áo được thiết kế với các cánh tủ hoặc màn che, giúp tạo ra không gian ngăn nắp, ấm cúng và riêng tư trong phòng ngủ.\r\n\r\n5. Tăng tính thẩm mỹ cho không gian: Ngoài tính năng lưu trữ, tủ quần áo còn đóng vai trò quan trọng trong việc tăng tính thẩm mỹ và phong cách cho phòng ngủ hoặc không gian riêng.\r\n\r\n6. Tạo trật tự và sắp xếp thông minh: Nhờ tủ quần áo, bạn có thể sắp xếp quần áo và vật dụng cá nhân theo cách khoa học và thông minh, giúp bạn dễ dàng tìm kiếm và sử dụng chúng một cách hiệu quả.\r\n\r\nTóm lại, tủ quần áo là một món đồ nội thất không thể thiếu trong không gian ngủ, giúp bạn lưu trữ và bảo quản quần áo, giày dép và các vật dụng cá nhân một cách gọn gàng, sắp xếp và tiện lợi.', 'uploads/1690201038_product-4.jpg', 23, '2023-07-24 05:17:18', NULL),
(9, 'Cách chọn loa bluetood đẹp 2', 'cach-chon-loa-bluetood-dep-2', 'Khi chọn loa Bluetooth đẹp, bạn có thể xem xét các yếu tố sau đây để đảm bảo rằng loa không chỉ có thiết kế hấp dẫn mà còn đáp ứng được nhu cầu sử dụng của bạn:1. Thiết kế và vẻ ngoài: Chọn loa Bluetooth với thiết kế và vẻ ngoài phù hợp với phong cách và sở thích cá nhân của bạn. Có nhiều loại loa với các kiểu dáng và màu sắc khác nhau, từ loa tròn, hình hộp đến các loa có hình thù độc đáo. Hãy tìm loa có thiết kế thẩm mỹ và hài hòa với không gian sử dụng của bạn.2. Chất liệu: Chất liệu của loa cũng ảnh hưởng đến vẻ đẹp và cảm giác khi sử dụng. Loa Bluetooth có thể được làm từ các vật liệu như gỗ, kim loại, nhựa cao cấp, vải, da, hay một sự kết hợp của chúng. Chọn loa với chất liệu mà bạn cảm thấy hài lòng và phù hợp với không gian bố trí.3. Kích thước: Kích thước của loa cũng là một yếu tố quan trọng. Nếu bạn ưu tiên di động và linh hoạt, hãy chọn loa nhỏ gọn, dễ mang theo. Tuy nhiên, nếu bạn muốn loa đóng vai trò trang trí và tạo điểm nhấn trong không gian, thì có thể chọn loa lớn hơn với thiết kế ấn tượng.4. Hiệu suất âm thanh: Ngoài thiết kế, cũng cần xem xét hiệu suất âm thanh của loa. Tìm hiểu về công suất, chất lượng âm thanh và các tính năng âm thanh khác của loa để đảm bảo rằng nó đáp ứng yêu cầu của bạn về âm thanh chất lượng cao.5. Các tính năng và tiện ích: Loa Bluetooth ngày nay thường tích hợp nhiều tính năng hữu ích, chẳng hạn như kết nối không dây NFC, chống nước, sạc không dây, đèn LED, tích hợp trợ lý ảo và hỗ trợ kết nối nhiều thiết bị cùng lúc. Hãy chọn loa với các tính năng mà bạn cần và sẽ sử dụng thường xuyên.6. Đánh giá và đánh giá của người dùng: Trước khi mua loa Bluetooth, nên đọc các đánh giá và đánh giá của người dùng khác để biết thêm về chất lượng và hiệu suất của sản phẩm. Điều này giúp bạn có cái nhìn tổng quan về loa trước khi quyết định mua.Nhớ chọn loa Bluetooth từ các thương hiệu uy tín để đảm bảo chất lượng và hỗ trợ sau bán hàng tốt hơn.', 'uploads/1690201959_product-2.jpg', 24, '2023-07-24 05:32:39', '2023-08-02 11:51:09'),
(10, 'Cách chọn loa bluetood bền 3', 'cach-chon-loa-bluetood-ben-3', 'Để chọn loa Bluetooth bền, bạn nên xem xét và đánh giá các yếu tố sau:1. Chất liệu: Chọn loa Bluetooth được làm từ chất liệu chất lượng cao, chịu được va đập và mài mòn. Các loại chất liệu như kim loại, nhựa cứng, hoặc vải chắc chắn thường là lựa chọn tốt cho tính bền và độ bền cao.2. Khả năng chống nước và bụi: Loa Bluetooth có khả năng chống nước và bụi thường sẽ bền hơn trong điều kiện sử dụng khắc nghiệt, như khi mang ra ngoài trời hoặc sử dụng trong môi trường ẩm ướt.3. Đánh giá độ bền từ người dùng: Đọc đánh giá và đánh giá từ người dùng khác để biết về kinh nghiệm của họ với loa Bluetooth cụ thể mà bạn đang xem xét. Những người dùng đã sử dụng loa trong thời gian dài có thể cung cấp thông tin hữu ích về độ bền và hiệu suất của loa.4. Thương hiệu và đảm bảo: Chọn loa Bluetooth từ các thương hiệu uy tín và có chế độ bảo hành tốt. Thương hiệu có uy tín thường cam kết chất lượng và sẽ hỗ trợ bạn trong trường hợp có vấn đề về sản phẩm.5. Đánh giá chất lượng âm thanh: Một loa Bluetooth bền cần có chất lượng âm thanh tốt. Trước khi mua, thử loa để đảm bảo rằng âm thanh không bị rè, méo tiếng hay không rõ ràng.6. Tính năng bảo vệ: Một số loa Bluetooth đi kèm với các tính năng bảo vệ bổ sung như bảo vệ quá tải, quá nhiệt, hay bảo vệ chống va đập. Những tính năng này có thể giúp gia tăng độ bền và tuổi thọ của loa.7. Tích hợp phím bấm chắc chắn: Nếu loa có các phím bấm, hãy chắc chắn rằng chúng được thiết kế chắc chắn và bền. Phím bấm dễ bị hỏng có thể gây ra vấn đề trong quá trình sử dụng.8. Thời lượng pin: Điều này liên quan đến thời gian sử dụng của loa. Chọn loa có thời lượng pin lâu dài sẽ giúp bạn tránh tình trạng phải sạc liên tục và kéo dài tuổi thọ của pin.Tóm lại, để chọn loa Bluetooth bền, hãy xem xét chất liệu, tính năng bảo vệ, đánh giá chất lượng âm thanh và thời lượng pin. Kiểm tra đánh giá của người dùng và chọn loa từ các thương hiệu uy tín có chế độ bảo hành tốt.', 'uploads/1690202037_product-single-4.jpg', 24, '2023-07-24 05:33:57', '2023-08-02 11:51:22'),
(11, 'Cách chọn tai nghe 1', 'cach-chon-tai-nghe-1', 'Khi chọn tai nghe, bạn nên xem xét các yếu tố sau đây để đảm bảo rằng tai nghe phù hợp với nhu cầu và mong muốn cá nhân của bạn:1. Loại tai nghe: Có nhiều loại tai nghe khác nhau, bao gồm tai nghe in-ear, tai nghe on-ear, tai nghe over-ear và tai nghe true wireless. Loại tai nghe bạn chọn phụ thuộc vào sự thoải mái khi đeo, mục đích sử dụng (thể thao, nghe nhạc, chơi game, gọi điện, v.v.), và yêu cầu về chất lượng âm thanh.2. Chất lượng âm thanh: Chất lượng âm thanh là yếu tố quan trọng khi chọn tai nghe. Nếu bạn ưa thích âm bass mạnh, hãy chọn tai nghe có khả năng tái tạo âm bass tốt. Nếu bạn đòi hỏi âm thanh chi tiết và rõ ràng, tai nghe có dải tần số rộng và công nghệ âm thanh tốt sẽ là lựa chọn tốt.3. Khả năng cách âm và chống ồn: Nếu bạn muốn nghe nhạc hoặc cuộc gọi mà không bị ảnh hưởng bởi tiếng ồn bên ngoài, hãy chọn tai nghe có khả năng cách âm tốt hoặc chế độ chống ồn. Các tai nghe có tính năng này sẽ giúp bạn tập trung hơn và tận hưởng âm nhạc một cách tốt hơn.4. Thiết kế và kiểu dáng: Chọn tai nghe có thiết kế và kiểu dáng phù hợp với sở thích và phong cách của bạn. Nếu bạn muốn một kiểu dáng đơn giản và trang nhã, tai nghe có thiết kế đơn giản và màu sắc tối sẽ là lựa chọn tốt. Nếu bạn thích phong cách nổi bật, hãy chọn tai nghe với màu sắc và họa tiết ấn tượng.5. Khả năng kết nối: Đảm bảo rằng tai nghe có khả năng kết nối với thiết bị của bạn. Một số tai nghe sử dụng cổng 3.5mm hoặc USB-A, trong khi các tai nghe không dây sử dụng Bluetooth hoặc công nghệ kết nối không dây khác.6. Phạm vi kết nối và thời lượng pin: Nếu bạn chọn tai nghe không dây, hãy xem xét phạm vi kết nối Bluetooth và thời lượng pin. Tai nghe có phạm vi kết nối rộng và thời lượng pin lâu dài sẽ giúp bạn di chuyển thoải mái và sử dụng lâu hơn mà không cần sạc liên tục.7. Đánh giá từ người dùng: Đọc các đánh giá và đánh giá từ người dùng khác để biết thêm về chất lượng và hiệu suất của tai nghe. Đánh giá từ người dùng thường cung cấp thông tin thực tế và hữu ích về các tính năng và hiệu suất của tai nghe.8. Giá cả: Cuối cùng, hãy xem xét ngân sách của bạn và chọn tai nghe phù hợp với giá cả mà bạn sẵn lòng bỏ ra.Nhớ rằng, việc chọn tai nghe là một quyết định cá nhân và phụ thuộc vào nhu cầu sử dụng của bạn. Hãy thử nghe và so sánh nhiều loại tai nghe trước khi đưa ra quyết định.', 'uploads/1690202174_product-5.jpg', 25, '2023-07-24 05:36:14', '2023-07-29 09:37:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contents` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `sale_price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `contents`, `image`, `price`, `sale_price`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 'Ghế gỗ chất lượng cao', 'ghe-go-chat-luong-cao', 'Ergonomic, thoải mái, hỗ trợ lưng tốt, chất liệu chất lượng, chuyên nghiệp, thiết kế hiện đại.', 'uploads/1690282908_img_bg_4.jpg', 500000, 450000, 2, '2023-07-25 11:01:48', NULL),
(3, 'Ghế gỗ cây thông 1', 'ghe-go-cay-thong-1', 'Ergonomic, thoải mái, hỗ trợ lưng tốt, chất liệu chất lượng, chuyên nghiệp, thiết kế hiện đại.', 'uploads/1690282953_img_bg_2.jpg', 600000, 560000, 2, '2023-07-25 11:02:33', '2023-07-29 17:25:40'),
(4, 'Ghế nhựa dẻo', 'ghe-nhua-deo', 'Ergonomic, thoải mái, hỗ trợ lưng tốt, chất liệu chất lượng, chuyên nghiệp, thiết kế hiện đại.', 'uploads/1690282988_product-single-1.jpg', 500000, 340000, 3, '2023-07-25 11:03:08', NULL),
(6, 'Ghe nhua 2', 'ghe-nhua-2', 'San pham dep 2', 'hinh_the2', 210000, 199099, 4, '2023-08-07 02:32:52', '2023-08-07 02:32:52'),
(7, 'Ghe nhua 3', 'ghe-nhua-2', 'San pham dep 3', 'hinh_the2', 210000, 199099, 4, '2023-08-07 02:34:08', '2023-08-07 02:34:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contents` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `contents`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Ghế Gỗ', 'Đơn giản, cứng cáp, sang trọng, thoải mái, thiết kế tinh tế, độ bền cao.', 'uploads/1690277130_img_bg_2.jpg', '2023-07-25 09:25:30', NULL),
(3, 'Ghế nhựa', 'Nhẹ nhàng, bền bỉ, dễ vận chuyển, đa dạng màu sắc, tiện lợi, giá phải chăng.2', 'uploads/1690277198_product-1.jpg', '2023-07-25 09:26:38', '2023-07-29 16:53:37'),
(4, 'Ghế văn phòng', 'Ergonomic, thoải mái, hỗ trợ lưng tốt, chất liệu chất lượng, chuyên nghiệp, thiết kế hiện đại.', 'uploads/1690277242_product-single-5.jpg', '2023-07-25 09:27:22', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Admin', 'hienntpc03211@fpt.edu.vn', NULL, '$2y$10$VxMTwuMl3gw.4o8BSGURtOuoNjtiFoUlBKvxjA8ME10j2Zyenpcv6', 'oYjz9HUpVUIrupkdDjeS35hGUExSFxPAXq41abPis5P7AJQrqVE93QKhABL4', '2023-08-04 05:57:27', '2023-08-04 05:58:47', 'admin'),
(3, 'Nguyễn Thế Hiển', 'nguyenthehien25062000@gmail.com', NULL, '$2y$10$QMFBcMbx14hrAwfsam6XO.lzbUjI03TR4A9P/oMDa3MRZJfi8IWcC', NULL, '2023-08-05 12:47:11', '2023-08-05 13:15:43', 'user');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
