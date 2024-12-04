-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 04, 2024 lúc 06:18 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `du_an_1_mvc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bai_viet`
--

CREATE TABLE `bai_viet` (
  `id` int(225) NOT NULL,
  `tieu_de` varchar(255) NOT NULL,
  `mo_ta_ngan` varchar(255) DEFAULT NULL,
  `hinh_anh` varchar(255) DEFAULT NULL,
  `noi_dung` text DEFAULT NULL,
  `ngay_dang` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bai_viet`
--

INSERT INTO `bai_viet` (`id`, `tieu_de`, `mo_ta_ngan`, `hinh_anh`, `noi_dung`, `ngay_dang`) VALUES
(1, 'Laptop ASUS ROG Strix G15 – Laptop Gaming Hiệu Suất Cao\n', 'ASUS ROG Strix G15 là laptop gaming với Ryzen 9, RTX 3070, màn 300Hz, và tản nhiệt tốt...', 'assets/Client/images/article/Laptop-ASUS-ROG-Strix-G15.jpg', '<h1>Giới thiệu ASUS ROG Strix G15</h1>\r\n        <p><span class=\"highlight\">ASUS ROG Strix G15</span> là một trong những laptop gaming mạnh mẽ và tối ưu nhất của ASUS, được thiết kế đặc biệt cho game thủ cần hiệu năng cao và tính di động linh hoạt. Máy trang bị bộ vi xử lý <strong>AMD Ryzen 9 5900HX</strong>, kết hợp với card đồ họa <strong>NVIDIA GeForce RTX 3070</strong>, mang lại khả năng xử lý mạnh mẽ, đảm bảo trải nghiệm đồ họa mượt mà và tốc độ khung hình cao cho các tựa game nặng.</p>\r\n        \r\n        <p>Màn hình 15.6 inch Full HD với tần số quét 300Hz giảm thiểu hiện tượng xé hình, giúp từng khung hình trở nên sống động và mượt mà, lý tưởng cho những game hành động nhịp độ nhanh. Bên cạnh đó, Strix G15 có hệ thống tản nhiệt tiên tiến với quạt <strong>Arc Flow</strong> và các ống dẫn nhiệt chuyên dụng, giúp giữ máy luôn ở nhiệt độ ổn định dù chơi game liên tục.</p>\r\n\r\n        <p>Thiết kế máy đậm chất gaming, mạnh mẽ với hệ thống đèn LED RGB tùy chỉnh trên bàn phím, đồng thời có pin dung lượng lớn và công nghệ sạc nhanh, mang lại sự linh hoạt khi di chuyển. Với cổng kết nối đa dạng, Strix G15 dễ dàng tích hợp với các phụ kiện hoặc màn hình ngoài, giúp tăng cường trải nghiệm chơi game của người dùng.</p>\r\n\r\n        <p>Với ASUS ROG Strix G15, game thủ hoàn toàn yên tâm tận hưởng những tựa game yêu thích mà không phải lo lắng về hiệu suất hay độ mượt của hình ảnh, trong một thiết kế đẹp mắt và tiện dụng.</p>', '2024-11-12 05:25:11'),
(2, 'Laptop Văn Phòng: Sự Lựa Chọn Hoàn Hảo Cho Năng Suất Làm Việc', 'Laptop văn phòng là dòng máy tính xách tay được thiết kế tối ưu cho công việc văn phòng, đáp ứng các nhu cầu xử lý tác vụ thường ngày...', 'assets/Client/images/article/Dell-Latitude-5420.jpg', 'Laptop văn phòng là dòng máy tính xách tay được thiết kế tối ưu cho công việc văn phòng, đáp ứng các nhu cầu xử lý tác vụ thường ngày như soạn thảo văn bản, quản lý bảng tính, làm báo cáo, và tham gia họp trực tuyến. Những mẫu laptop này tập trung vào hiệu suất bền bỉ, sự tiện lợi, và các tính năng bảo mật, giúp người dùng làm việc hiệu quả, an toàn và dễ dàng di chuyển.\n\nMột trong những mẫu laptop văn phòng nổi bật là Dell Latitude 5420. Máy sở hữu bộ vi xử lý Intel Core i5 thế hệ 11, RAM 8GB, và ổ cứng SSD 256GB, đủ mạnh để xử lý nhanh chóng các tác vụ văn phòng và chạy mượt các phần mềm phổ biến như Microsoft Office hay Google Workspace. Màn hình 14 inch Full HD chống chói giúp người dùng làm việc thoải mái trong thời gian dài mà không gây mỏi mắt, đồng thời máy cũng có kích thước nhỏ gọn, dễ dàng mang theo khi di chuyển.\n\nLaptop văn phòng thường có thiết kế đơn giản nhưng trang nhã, phù hợp cho môi trường làm việc chuyên nghiệp. Một số dòng máy như Dell Latitude hay HP ProBook còn được trang bị các tính năng bảo mật cao cấp như cảm biến vân tay, camera nhận diện khuôn mặt và các giải pháp bảo mật của hãng, giúp bảo vệ dữ liệu quan trọng của người dùng.\n\nVới thời lượng pin tốt, laptop văn phòng có thể hoạt động liên tục suốt cả ngày, phù hợp với nhu cầu làm việc linh hoạt. Khả năng kết nối đa dạng với cổng USB, HDMI, và cổng mạng LAN giúp máy dễ dàng kết nối với các thiết bị văn phòng khác, tối ưu cho các cuộc họp và thuyết trình.\n\nDòng laptop văn phòng là một lựa chọn hoàn hảo cho những ai cần một thiết bị làm việc bền bỉ, bảo mật, và thuận tiện. Với hiệu suất ổn định và thiết kế tinh tế, laptop văn phòng mang đến cho người dùng sự an tâm và tập trung tối đa vào công việc.', '2024-11-12 05:31:05'),
(3, 'Laptop Dành Cho Học Sinh, Sinh Viên – Người Bạn Đồng Hành Đáng Tin Cậy Cho Học Tập', 'Laptop cho học sinh, sinh viên là dòng máy tính xách tay hướng đến nhu cầu học tập, ghi chú, làm bài tập, và giải trí cơ bản...', 'assets/Client/images/article/Acer-Aspire 5.jpg', 'Laptop cho học sinh, sinh viên là dòng máy tính xách tay hướng đến nhu cầu học tập, ghi chú, làm bài tập, và giải trí cơ bản. Những chiếc laptop này thường tập trung vào sự tiện dụng, khả năng xử lý ổn định, pin bền, và mức giá hợp lý, giúp học sinh và sinh viên có được trải nghiệm học tập tốt nhất mà không cần đầu tư quá cao.\n\nMột mẫu laptop phù hợp cho học sinh, sinh viên là Acer Aspire 5. Máy trang bị bộ vi xử lý Intel Core i3 thế hệ 11 hoặc AMD Ryzen 3, RAM 8GB và ổ cứng SSD 256GB, đảm bảo khả năng chạy mượt mà các phần mềm văn phòng phổ biến như Microsoft Word, Excel, và Google Docs. Màn hình 15.6 inch Full HD giúp hình ảnh hiển thị rõ nét, bảo vệ mắt khi sử dụng lâu, đặc biệt hữu ích trong các buổi học trực tuyến.\n\nThiết kế của Acer Aspire 5 đơn giản nhưng thanh lịch, mỏng nhẹ và dễ dàng mang theo, phù hợp với nhu cầu học tập linh hoạt tại giảng đường, thư viện hoặc ở nhà. Thời lượng pin dài lên đến 8 tiếng giúp máy hoạt động liên tục trong ngày mà không cần sạc quá thường xuyên, đáp ứng tốt các buổi học kéo dài.\n\nLaptop cho học sinh, sinh viên thường có cổng kết nối phong phú, bao gồm cổng USB, HDMI và jack tai nghe, cho phép kết nối nhanh chóng với các thiết bị ngoại vi như máy chiếu hoặc chuột không dây. Ngoài ra, một số mẫu còn hỗ trợ tính năng bảo mật cơ bản như khóa mã hóa, bảo vệ quyền riêng tư và dữ liệu của người dùng.\n\nVới chi phí hợp lý và hiệu năng đủ mạnh cho học tập, laptop học sinh, sinh viên như Acer Aspire 5 là người bạn đồng hành đáng tin cậy giúp học tập hiệu quả và thuận tiện. Dòng máy này không chỉ phục vụ tốt nhu cầu học tập mà còn hỗ trợ giải trí nhẹ nhàng, như xem phim, nghe nhạc sau giờ học căng thẳng, mang lại sự cân bằng lý tưởng giữa công việc và thư giãn.', '2024-11-12 05:31:05'),
(4, 'MacBook Cho Học Sinh, Sinh Viên – Sự Lựa Chọn Cao Cấp Cho Nhu Cầu Học Tập Và Sáng Tạo\r\n\r\n', 'MacBook, sản phẩm nổi bật của Apple, từ lâu đã trở thành biểu tượng của sự sang trọng và hiệu suất mạnh mẽ...', 'assets/Client/images/article/macbook-air-1.jpg', 'MacBook, sản phẩm nổi bật của Apple, từ lâu đã trở thành biểu tượng của sự sang trọng và hiệu suất mạnh mẽ. Mặc dù có giá thành cao hơn so với nhiều mẫu laptop khác, nhưng đối với học sinh, sinh viên, MacBook vẫn là sự lựa chọn tuyệt vời nếu bạn đang tìm kiếm một chiếc máy tính xách tay có thiết kế tinh tế, hiệu năng ổn định, và tính năng bảo mật vượt trội.\r\n\r\nMột trong những mẫu MacBook phù hợp với học sinh, sinh viên là MacBook Air M1. Được trang bị vi xử lý Apple M1, MacBook Air mang lại hiệu suất cực kỳ ấn tượng trong một thiết kế mỏng nhẹ. Việc sử dụng chip M1 không chỉ giúp máy vận hành mượt mà mà còn tiết kiệm năng lượng, cho phép thời lượng pin kéo dài lên đến 15-18 giờ, lý tưởng cho những buổi học kéo dài hoặc khi làm bài tập xuyên suốt cả ngày.\r\n\r\nMàn hình Retina 13.3 inch với độ phân giải cao mang đến hình ảnh sắc nét, sống động, giúp việc học tập, nghiên cứu tài liệu hay xem video trở nên thú vị và dễ chịu hơn. MacBook Air M1 có thể chạy mượt các phần mềm văn phòng như Microsoft Office, Google Docs, và các công cụ học tập khác, giúp bạn xử lý nhanh chóng các công việc học tập mà không gặp phải tình trạng giật lag.\r\n\r\nBên cạnh đó, MacBook Air còn nổi bật với khả năng bảo mật mạnh mẽ nhờ vào chip bảo mật Apple T2, giúp bảo vệ dữ liệu cá nhân, bảo mật các tài khoản và thông tin nhạy cảm của sinh viên. Các tính năng như nhận diện vân tay Touch ID cũng là một điểm cộng cho MacBook Air, giúp mở khóa nhanh chóng và an toàn.\r\n\r\nVới thiết kế mỏng nhẹ và chỉ nặng khoảng 1.29 kg, MacBook Air rất dễ dàng mang theo khi di chuyển giữa lớp học, thư viện hay quán cà phê. Sản phẩm cũng trang bị các cổng kết nối cơ bản như 2 cổng Thunderbolt và giắc tai nghe, phù hợp với các nhu cầu học tập và giải trí thông thường.\r\n\r\nMặc dù có giá cao hơn các laptop truyền thống, nhưng MacBook Air M1 vẫn là lựa chọn sáng suốt cho học sinh, sinh viên mong muốn đầu tư vào một chiếc laptop bền bỉ, hiệu suất cao và có thể sử dụng lâu dài trong suốt quá trình học tập và phát triển sự nghiệp. Sự kết hợp giữa hiệu suất vượt trội, thiết kế đẳng cấp và thời lượng pin ấn tượng làm cho MacBook Air M1 trở thành người bạn đồng hành lý tưởng cho các bạn trẻ yêu thích sự sáng tạo và học tập hiệu quả.', '2024-11-12 05:31:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_dh`
--

CREATE TABLE `chi_tiet_dh` (
  `id` int(225) NOT NULL,
  `id_don_hang` int(225) DEFAULT NULL,
  `id_san_pham` int(225) DEFAULT NULL,
  `sl_san_pham` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_dh`
--

INSERT INTO `chi_tiet_dh` (`id`, `id_don_hang`, `id_san_pham`, `sl_san_pham`) VALUES
(48, 63, 1, 3),
(49, 63, 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_gia`
--

CREATE TABLE `danh_gia` (
  `id` int(225) NOT NULL,
  `id_user` int(225) DEFAULT NULL,
  `id_san_pham` int(225) DEFAULT NULL,
  `so_sao` int(11) DEFAULT NULL CHECK (`so_sao` between 1 and 5),
  `noi_dung` text DEFAULT NULL,
  `thoi_gian` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id` int(225) NOT NULL,
  `ten_danh_muc` varchar(255) NOT NULL,
  `hinh_anh` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`id`, `ten_danh_muc`, `hinh_anh`) VALUES
(1, 'MACBOOK', 'assets/Client/images/brands/apple.jpg'),
(2, 'LENOVO', 'assets/Client/images/brands/lenovo.jpg'),
(3, 'ACER', 'assets/Client/images/brands/acer.jpg'),
(4, 'HP', 'assets/Client/images/brands/hp.jpg'),
(5, 'MSI', 'assets/Client/images/brands/MSI.jpg'),
(6, 'DELL', 'assets/Client/images/brands/dell.jpg'),
(10, 'video', 'assets/Admin/images/categories/hinh_anh_8.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc_small`
--

CREATE TABLE `danh_muc_small` (
  `id` int(225) NOT NULL,
  `ten_danh_muc` varchar(255) NOT NULL,
  `id_danh_muc` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc_small`
--

INSERT INTO `danh_muc_small` (`id`, `ten_danh_muc`, `id_danh_muc`) VALUES
(1, 'Macbook Air 13 inch', 1),
(2, 'Macbook Air 15 inch', 1),
(3, 'Macbook Pro 13 inch', 1),
(4, 'Macbook Pro 14 inch', 1),
(5, 'Macbook Pro 15 inch', 1),
(6, 'Macbook Pro 16 inch', 1),
(7, 'Lenovo Gaming', 2),
(8, 'Lenovo ThinkPad', 2),
(9, 'Lenovo Ideapad', 2),
(18, 'Acer Swift', 3),
(19, 'Acer Nitro', 3),
(20, 'Acer Aspire Gamingg', 3),
(21, 'HP cơ bản', 4),
(22, 'HP Pavilion', 4),
(23, 'HP ProBook', 4),
(24, 'MSI Gaming', 5),
(25, 'MSI Modem', 5),
(26, 'Dell XPS', 6),
(27, 'Dell Inspiron', 6),
(31, 'videooooo', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dia_chi`
--

CREATE TABLE `dia_chi` (
  `id` int(225) NOT NULL,
  `ho_va_ten` varchar(50) NOT NULL,
  `so_dien_thoai` int(15) NOT NULL,
  `chi_tiet_dia_chi` varchar(255) NOT NULL,
  `id_user` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `dia_chi`
--

INSERT INTO `dia_chi` (`id`, `ho_va_ten`, `so_dien_thoai`, `chi_tiet_dia_chi`, `id_user`) VALUES
(67, 'Dương đây', 2147483647, 'ngnknkdkdkn', 2),
(68, 'Tùng Dương', 838982992, '246 Đông vệ Thanh hóa', 2),
(69, 'Đào Tùng Dương', 2147483647, 'ndndndndnkw dbdjs cac sa ca s', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang`
--

CREATE TABLE `don_hang` (
  `id` int(225) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tong_tien` decimal(20,0) DEFAULT NULL,
  `trang_thai` int(225) DEFAULT NULL,
  `thoi_gian` date NOT NULL DEFAULT current_timestamp(),
  `ghi_chu` varchar(255) DEFAULT NULL,
  `id_thanh_toan` int(225) NOT NULL,
  `id_dia_chi` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `don_hang`
--

INSERT INTO `don_hang` (`id`, `id_user`, `tong_tien`, `trang_thai`, `thoi_gian`, `ghi_chu`, `id_thanh_toan`, `id_dia_chi`) VALUES
(63, 2, 88200000, 4, '2024-12-02', 'sfdfdffdfd', 1, 69);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gio_hang`
--

CREATE TABLE `gio_hang` (
  `id` int(225) NOT NULL,
  `id_user` int(225) DEFAULT NULL,
  `id_san_pham` int(225) DEFAULT NULL,
  `so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `gio_hang`
--

INSERT INTO `gio_hang` (`id`, `id_user`, `id_san_pham`, `so_luong`) VALUES
(5, 3, 2, 1),
(32, 1, 1, 1),
(43, 2, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinh_anh`
--

CREATE TABLE `hinh_anh` (
  `id` int(225) NOT NULL,
  `hinh_anh_1` varchar(255) NOT NULL,
  `hinh_anh_2` varchar(255) NOT NULL,
  `hinh_anh_3` varchar(255) DEFAULT NULL,
  `hinh_anh_4` varchar(255) DEFAULT NULL,
  `id_san_pham` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hinh_anh`
--

INSERT INTO `hinh_anh` (`id`, `hinh_anh_1`, `hinh_anh_2`, `hinh_anh_3`, `hinh_anh_4`, `id_san_pham`) VALUES
(1, 'assets/Client/images/products/product_macbook_1.png', 'assets/Client/images/products/product_macbook_1_1.png', 'assets/Client/images/products/product_macbook_1_2.png', 'assets/Client/images/products/product_macbook_1_3.png', 1),
(2, 'assets/Client/images/products/Laptop_gaming_lenovo_1.png', 'assets/Client/images/products/Laptop_gaming_lenovo_1_1.jpg', 'assets/Client/images/products/Laptop_gaming_lenovo_1_2.jpg', 'assets/Client/images/products/Laptop_gaming_lenovo_1_3.jpg', 2),
(3, 'assets/Client/images/products/Dell-Latitude-5420.jpg', 'assets/Client/images/products/Dell-Latitude-5420-2.jpg', 'assets/Client/images/products/Dell-Latitude-5420-3.jpg', 'assets/Client/images/products/Dell-Latitude-5420-4.jpg', 3),
(4, 'assets/Client/images/products/Acer-Aspire 5.jpg', 'assets/Client/images/products/Acer-Aspire 5-2.jpg', 'assets/Client/images/products/Acer-Aspire 5-4.jpg', 'assets/Client/images/products/Acer-Aspire 5-3.jpg', 4),
(18, 'assets/Client/images/products/674df4d4d1d58_hinh_anh_8.png', '', NULL, NULL, 19);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pt_thanh_toan`
--

CREATE TABLE `pt_thanh_toan` (
  `id` int(225) NOT NULL,
  `phuong_thuc` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `pt_thanh_toan`
--

INSERT INTO `pt_thanh_toan` (`id`, `phuong_thuc`) VALUES
(1, 'Thanh toán khi nhận hàng'),
(2, 'Thanh toán chuyển khoản');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(225) NOT NULL,
  `ma_san_pham` varchar(50) NOT NULL,
  `ten_san_pham` varchar(255) NOT NULL,
  `mo_ta` text DEFAULT NULL,
  `gia_san_pham` decimal(10,0) NOT NULL,
  `so_luong` int(225) DEFAULT NULL,
  `luot_xem` int(225) DEFAULT NULL,
  `khuyen_mai` int(11) DEFAULT 0,
  `ngay_them` date NOT NULL DEFAULT current_timestamp(),
  `id_DM_small` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `ma_san_pham`, `ten_san_pham`, `mo_ta`, `gia_san_pham`, `so_luong`, `luot_xem`, `khuyen_mai`, `ngay_them`, `id_DM_small`) VALUES
(1, 'SP001', 'Macbook Air 13 M2 2024 8CPU/8GPU/16GB/256GB', '<h3>Thông tin sản phẩm</h3>\n    <hr>\n\n    <div class=\"section\">\n        <h5>Bộ xử lý</h5>\n        <p class=\"item\"><strong>Hãng CPU:</strong> Apple</p>\n        <p class=\"item\"><strong>Công nghệ CPU:</strong> M2</p>\n        <p class=\"item\"><strong>Loại CPU:</strong> 8 - Core</p>\n        <p class=\"item\"><strong>Tốc độ CPU tối thiểu:</strong> 2.3 GHz</p>\n    </div>\n    <hr>\n\n    <div class=\"section\">\n        <h5>RAM</h5>\n        <p class=\"item\"><strong>Dung lượng RAM:</strong> 16 GB</p>\n        <p class=\"item\"><strong>Loại RAM:</strong> LPDDR4</p>\n        <p class=\"item\"><strong>Số RAM onboard:</strong> 1</p>\n        <p class=\"item\"><strong>Hỗ trợ RAM tối đa:</strong> 16 GB</p>\n    </div>\n    <hr>\n\n    <div class=\"section\">\n        <h5>Lưu trữ</h5>\n        <p class=\"item\"><strong>Kiểu ổ cứng:</strong> SSD</p>\n        <p class=\"item\"><strong>Loại SSD:</strong> Hãng không công bố</p>\n        <p class=\"item\"><strong>Dung lượng:</strong> 256 GB</p>\n    </div>\n    <hr>\n\n    <div class=\"section\">\n        <h5>Màn hình</h5>\n        <p class=\"item\"><strong>Kích thước màn hình:</strong> 13.6 inch</p>\n        <p class=\"item\"><strong>Công nghệ màn hình:</strong> Retina</p>\n        <p class=\"item\"><strong>Độ phân giải:</strong> 2560 x 1644 Pixels</p>\n        <p class=\"item\"><strong>Tần số quét:</strong> 60 Hz</p>\n        <p class=\"item\"><strong>Tấm nền:</strong> IPS</p>\n    </div>\n    <hr> \n\n    <div class=\"section\">\n        <h5>Giao tiếp và kết nối</h5>\n        <p class=\"item\"><strong>Cổng giao tiếp:</strong> 2 Type C</p>\n        <p class=\"item\"><strong>Wifi:</strong> 802.11 ax</p>\n        <p class=\"item\"><strong>Bluetooth:</strong> v5.0</p>\n        <p class=\"item\"><strong>Webcam:</strong> Full HD Webcam (1080p)</p>\n    </div>\n    <hr> \n\n    <div class=\"section\">\n        <h5>Hệ điều hành</h5>\n        <p class=\"item\"><strong>OS:</strong> macOS</p>\n        <p class=\"item\"><strong>Version:</strong> Ventura</p>\n    </div>\n    <hr> \n\n    <div class=\"section\">\n        <h5>Bảo mật</h5>\n        <p class=\"item\"><strong>Bảo mật:</strong> Mở khóa vân tay</p>\n    </div>\n    <hr>\n\n    <div class=\"section\">\n        <h5>Bàn phím & TouchPad</h5>\n        <p class=\"item\"><strong>Kiểu bàn phím:</strong> English International Backlit Keyboard</p>\n        <p class=\"item\"><strong>Bàn phím số:</strong> Không</p>\n        <p class=\"item\"><strong>Đèn bàn phím:</strong> LED</p>\n        <p class=\"item\"><strong>TouchPad:</strong> Multi-touch touchpad</p>\n    </div>\n    <hr> \n\n    <div class=\"section\">\n        <h5>Thông tin pin & sạc</h5>\n        <p class=\"item\"><strong>Loại PIN:</strong> Lithium polymer</p>\n        <p class=\"item\"><strong>Dung lượng pin:</strong> 22 Giờ</p>\n        <p class=\"item\"><strong>Power Supply:</strong> 70 W</p>\n    </div>\n    <hr>\n\n    <div class=\"section\">\n        <h5>Phụ kiện trong hộp</h5>\n        <p class=\"item\"><strong>Phụ kiện:</strong> Adapter, Dây cáp sạc</p>\n    </div>\n    <hr> \n\n    <div class=\"section\">\n        <h5>Thiết kế & Trọng lượng</h5>\n        <p class=\"item\"><strong>Kích thước:</strong> 30.41 x 21.5 x 1.13 cm</p>\n        <p class=\"item\"><strong>Trọng lượng sản phẩm:</strong> 1.24 kg</p>\n        <p class=\"item\"><strong>Chất liệu:</strong> Vỏ: Kim loại</p>\n    </div>\n    <hr>\n\n    <div class=\"section\">\n        <h5>Thông tin hàng hóa</h5>\n        <p class=\"item\"><strong>P/N:</strong> MC7U4SA/A</p>\n        <p class=\"item\"><strong>Xuất xứ:</strong> Trung Quốc</p>\n        <p class=\"item\"><strong>Thời điểm ra mắt:</strong> 2024</p>\n        <p class=\"item\"><strong>Thời gian bảo hành (tháng):</strong> 12</p>\n        <p class=\"item\"><strong>Hướng dẫn bảo quản:</strong> Để nơi khô ráo, nhẹ tay, dễ vỡ.</p>\n        <p class=\"item\"><strong>Hướng dẫn sử dụng:</strong> Xem trong sách hướng dẫn sử dụng</p>\n        <p class=\"item\"><strong>Màu sắc:</strong> Xám</p>\n    </div>', 24000000, 20, 2147483647, 20, '2024-11-15', 1),
(2, 'SP002', 'Laptop Lenovo Gaming LOQ 15IAX9 i5 12450HX/AI/24GB/512GB/15.', '<h3>Thông tin sản phẩm</h3> <hr>\n\n    <div class=\"section\">\n        <h5>Bộ xử lý</h5>\n        <p class=\"item\"><strong>Hãng CPU:</strong> Intel</p>\n        <p class=\"item\"><strong>Công nghệ CPU:</strong> Core i5</p>\n        <p class=\"item\"><strong>Loại CPU:</strong> 12450HX</p>\n        <p class=\"item\"><strong>Tốc độ tối đa:</strong> 4.4 GHz</p>\n        <p class=\"item\"><strong>Số nhân:</strong> 8</p>\n        <p class=\"item\"><strong>Số luồng:</strong> 12</p>\n    </div><hr>\n\n    <div class=\"section\">\n        <h5>Đồ họa</h5>\n        <p class=\"item\"><strong>Hãng (Card rời):</strong> NVIDIA</p>\n        <p class=\"item\"><strong>Model (Card rời):</strong> Geforce RTX 2050</p>\n        <p class=\"item\"><strong>Tên đầy đủ (Card rời):</strong> NVIDIA GeForce RTX 2050 4GB GDDR6</p>\n        <p class=\"item\"><strong>Bộ nhớ:</strong> 4 GB</p>\n        <p class=\"item\"><strong>Hiệu suất AI (TOPS):</strong> 104</p>\n    </div><hr>\n\n    <div class=\"section\">\n        <h5>RAM</h5>\n        <p class=\"item\"><strong>Dung lượng RAM:</strong> 24 GB (2 thanh 12GB)</p>\n        <p class=\"item\"><strong>Loại RAM:</strong> DDR5</p>\n        <p class=\"item\"><strong>Tốc độ RAM:</strong> 4800 MHz</p>\n        <p class=\"item\"><strong>Số khe cắm rời:</strong> 2</p>\n        <p class=\"item\"><strong>Hỗ trợ RAM tối đa:</strong> 32 GB</p>\n    </div><hr>\n\n    <div class=\"section\">\n        <h5>Lưu trữ</h5>\n        <p class=\"item\"><strong>Kiểu ổ cứng:</strong> SSD</p>\n        <p class=\"item\"><strong>Loại SSD:</strong> 1 M2. PCIe</p>\n        <p class=\"item\"><strong>Dung lượng:</strong> 512 GB</p>\n        <p class=\"item\"><strong>Chuẩn M2:</strong> 2242</p>\n    </div><hr>\n\n    <div class=\"section\">\n        <h5>Màn hình</h5>\n        <p class=\"item\"><strong>Kích thước màn hình:</strong> 15.6 inch</p>\n        <p class=\"item\"><strong>Công nghệ màn hình:</strong> IPS FHD</p>\n        <p class=\"item\"><strong>Độ phân giải:</strong> 1920 x 1080 Pixels</p>\n        <p class=\"item\"><strong>Loại màn hình:</strong> Màn hình phẳng</p>\n        <p class=\"item\"><strong>Tần số quét:</strong> 144 Hz</p>\n        <p class=\"item\"><strong>Tấm nền:</strong> IPS</p>\n        <p class=\"item\"><strong>Độ sáng:</strong> 300 nits</p>\n        <p class=\"item\"><strong>Độ phủ màu:</strong> 100% sRGB</p>\n    </div><hr>\n\n    <div class=\"section\">\n        <h5>Giao tiếp và kết nối</h5>\n        <p class=\"item\"><strong>Cổng giao tiếp:</strong></p>\n        <ul class=\"item\">\n            <li>3 USB 3.2 Gen 1 Type-A</li>\n            <li>1 USB 3.2 Gen 2 Type-C</li>\n            <li>1 HDMI 2.1</li>\n            <li>1 Jack 3.5 mm</li>\n            <li>1 RJ45 Gigabit Ethernet</li>\n            <li>1 Power connector</li>\n        </ul>\n        <p class=\"item\"><strong>Wifi:</strong> Wifi 6</p>\n        <p class=\"item\"><strong>Bluetooth:</strong> v5.2</p>\n        <p class=\"item\"><strong>Webcam:</strong> HD Webcam (720p Webcam)</p>\n    </div><hr>\n\n    <div class=\"section\">\n        <h5>Hệ điều hành</h5>\n        <p class=\"item\"><strong>OS:</strong> Windows</p>\n        <p class=\"item\"><strong>Version:</strong> Windows 11 Home Single Language</p>\n    </div><hr>\n\n    <div class=\"section\">\n        <h5>Bảo mật</h5>\n        <p class=\"item\"><strong>Bảo mật:</strong> Mật khẩu</p>\n    </div><hr>\n\n    <div class=\"section\">\n        <h5>Bàn phím & TouchPad</h5>\n        <p class=\"item\"><strong>Kiểu bàn phím:</strong> English International Backlit Keyboard</p>\n        <p class=\"item\"><strong>Bàn phím số:</strong> Có (NumberPad)</p>\n        <p class=\"item\"><strong>Đèn bàn phím:</strong> LED</p>\n        <p class=\"item\"><strong>Màu đèn LED:</strong> Trắng</p>\n        <p class=\"item\"><strong>TouchPad:</strong> Multi-touch touchpad</p>\n    </div><hr>\n\n    <div class=\"section\">\n        <h5>Thông tin pin & sạc</h5>\n        <p class=\"item\"><strong>Dung lượng pin:</strong> 60 Wh</p>\n        <p class=\"item\"><strong>Power Supply:</strong> 135 W</p>\n    </div><hr>\n\n    <div class=\"section\">\n        <h5>Phụ kiện trong hộp</h5>\n        <p class=\"item\"><strong>Phụ kiện:</strong> Bộ sạc điện</p>\n    </div><hr>\n\n    <div class=\"section\">\n        <h5>Thiết kế & Trọng lượng</h5>\n        <p class=\"item\"><strong>Kích thước:</strong> 359.86 x 258.7 x 21.9-23.9 mm</p>\n        <p class=\"item\"><strong>Trọng lượng sản phẩm:</strong> 2.38 kg</p>\n        <p class=\"item\"><strong>Chất liệu:</strong> Nhựa ABS</p>\n    </div><hr>\n\n    <div class=\"section\">\n        <h5>Thông tin hàng hóa</h5>\n        <p class=\"item\"><strong>P/N:</strong> 83GS00DBVN</p>\n        <p class=\"item\"><strong>Xuất xứ:</strong> Trung Quốc</p>\n        <p class=\"item\"><strong>Thời điểm ra mắt:</strong> 04/2024</p>\n        <p class=\"item\"><strong>Thời gian bảo hành (tháng):</strong> 24</p>\n        <p class=\"item\"><strong>Hướng dẫn bảo quản:</strong> Để nơi khô ráo, nhẹ tay, dễ vỡ.</p>\n        <p class=\"item\"><strong>Hướng dẫn sử dụng:</strong> Xem trong sách hướng dẫn sử dụng</p>\n        <p class=\"item\"><strong>Màu sắc:</strong> Xám</p>\n    </div><hr>\n', 34000000, 45, 29, 10, '2024-11-15', 7),
(3, 'SP003', 'Dell Latitude 5420 | i5-1145G7, RAM 8GB, SSD 256GB, 14.0\" FHD IPS )', '<h3>Thông tin sản phẩm</h3>\n<hr>\n<div class=\"section\">\n    <h5>Bộ xử lý</h5>\n    <p class=\"item\"><strong>Hãng CPU:</strong> Intel</p>\n    <p class=\"item\"><strong>Công nghệ CPU:</strong> Core i5</p>\n    <p class=\"item\"><strong>Loại CPU:</strong> Intel Core i5-1135G7</p>\n    <p class=\"item\"><strong>Tốc độ tối đa:</strong> 4.2 GHz</p>\n    <p class=\"item\"><strong>Số nhân:</strong> 4</p>\n    <p class=\"item\"><strong>Số luồng:</strong> 8</p>\n</div><hr>\n\n<div class=\"section\">\n    <h5>Đồ họa</h5>\n    <p class=\"item\"><strong>Hãng (Card tích hợp):</strong> Intel</p>\n    <p class=\"item\"><strong>Model (Card tích hợp):</strong> Intel Iris Xe Graphics</p>\n    <p class=\"item\"><strong>Bộ nhớ đồ họa:</strong> Chia sẻ với bộ nhớ hệ thống</p>\n</div><hr>\n\n<div class=\"section\">\n    <h5>RAM</h5>\n    <p class=\"item\"><strong>Dung lượng RAM:</strong> 8 GB (có thể nâng cấp lên 16 GB)</p>\n    <p class=\"item\"><strong>Loại RAM:</strong> DDR4</p>\n    <p class=\"item\"><strong>Tốc độ RAM:</strong> 3200 MHz</p>\n    <p class=\"item\"><strong>Số khe cắm rời:</strong> 2</p>\n    <p class=\"item\"><strong>Hỗ trợ RAM tối đa:</strong> 32 GB</p>\n</div><hr>\n\n<div class=\"section\">\n    <h5>Lưu trữ</h5>\n    <p class=\"item\"><strong>Kiểu ổ cứng:</strong> SSD</p>\n    <p class=\"item\"><strong>Dung lượng:</strong> 256 GB (có thể nâng cấp lên 512 GB hoặc 1 TB)</p>\n</div><hr>\n\n<div class=\"section\">\n    <h5>Màn hình</h5>\n    <p class=\"item\"><strong>Kích thước màn hình:</strong> 14 inch</p>\n    <p class=\"item\"><strong>Công nghệ màn hình:</strong> Anti-glare FHD</p>\n    <p class=\"item\"><strong>Độ phân giải:</strong> 1920 x 1080 Pixels</p>\n    <p class=\"item\"><strong>Loại màn hình:</strong> Màn hình phẳng</p>\n    <p class=\"item\"><strong>Tấm nền:</strong> IPS</p>\n    <p class=\"item\"><strong>Độ sáng:</strong> 250 nits</p>\n    <p class=\"item\"><strong>Độ phủ màu:</strong> 45% NTSC</p>\n</div><hr>\n\n<div class=\"section\">\n    <h5>Giao tiếp và kết nối</h5>\n    <p class=\"item\"><strong>Cổng giao tiếp:</strong></p>\n    <ul class=\"item\">\n        <li>2 x USB 3.2 Gen 1 Type-A</li>\n        <li>1 x USB 3.2 Gen 2 Type-C</li>\n        <li>1 x HDMI 2.0</li>\n        <li>1 x RJ45 Ethernet</li>\n        <li>1 x Jack 3.5 mm</li>\n        <li>1 x SD Card Reader</li>\n        <li>1 x Thunderbolt 4 (USB-C)</li>\n    </ul>\n    <p class=\"item\"><strong>Wifi:</strong> Wifi 6</p>\n    <p class=\"item\"><strong>Bluetooth:</strong> Bluetooth 5.1</p>\n    <p class=\"item\"><strong>Webcam:</strong> 720p HD Webcam</p>\n</div><hr>\n\n<div class=\"section\">\n    <h5>Hệ điều hành</h5>\n    <p class=\"item\"><strong>OS:</strong> Windows</p>\n    <p class=\"item\"><strong>Version:</strong> Windows 11 Pro</p>\n</div><hr>\n\n<div class=\"section\">\n    <h5>Bảo mật</h5>\n    <p class=\"item\"><strong>Bảo mật:</strong> Mật khẩu, vân tay, nhận diện khuôn mặt</p>\n</div><hr>\n\n<div class=\"section\">\n    <h5>Bàn phím & TouchPad</h5>\n    <p class=\"item\"><strong>Kiểu bàn phím:</strong> Backlit Keyboard</p>\n    <p class=\"item\"><strong>Bàn phím số:</strong> Không có</p>\n    <p class=\"item\"><strong>Đèn bàn phím:</strong> Có đèn nền bàn phím</p>\n    <p class=\"item\"><strong>TouchPad:</strong> Multi-touch touchpad</p>\n</div><hr>\n\n<div class=\"section\">\n    <h5>Thông tin pin & sạc</h5>\n    <p class=\"item\"><strong>Dung lượng pin:</strong> 54 Wh</p>\n    <p class=\"item\"><strong>Thời gian sử dụng:</strong> Lên đến 12 giờ</p>\n    <p class=\"item\"><strong>Power Supply:</strong> 65W AC Adapter</p>\n</div><hr>\n\n<div class=\"section\">\n    <h5>Phụ kiện trong hộp</h5>\n    <p class=\"item\"><strong>Phụ kiện:</strong> Bộ sạc điện</p>\n</div><hr>\n\n<div class=\"section\">\n    <h5>Thiết kế & Trọng lượng</h5>\n    <p class=\"item\"><strong>Kích thước:</strong> 319.4 x 219.7 x 20.8 mm</p>\n    <p class=\"item\"><strong>Trọng lượng sản phẩm:</strong> 1.41 kg</p>\n    <p class=\"item\"><strong>Chất liệu:</strong> Vỏ nhựa và hợp kim nhôm</p>\n</div><hr>\n\n<div class=\"section\">\n    <h5>Thông tin hàng hóa</h5>\n    <p class=\"item\"><strong>P/N:</strong> 7VXM4</p>\n    <p class=\"item\"><strong>Xuất xứ:</strong> Trung Quốc</p>\n    <p class=\"item\"><strong>Thời điểm ra mắt:</strong> 04/2021</p>\n    <p class=\"item\"><strong>Thời gian bảo hành (tháng):</strong> 24</p>\n    <p class=\"item\"><strong>Hướng dẫn bảo quản:</strong> Để nơi khô ráo, tránh nhiệt độ cao và độ ẩm.</p>\n    <p class=\"item\"><strong>Hướng dẫn sử dụng:</strong> Xem trong sách hướng dẫn sử dụng</p>\n    <p class=\"item\"><strong>Màu sắc:</strong> Đen</p>\n</div><hr>\n', 10000000, 68, 8556, 30, '2024-11-15', 26),
(4, 'SP004', 'Acer Gaming Aspire 5 A515-58GM-53CM i5 13420H', '<h3>Thông tin sản phẩm</h3>\r\n<hr>\r\n<div class=\"section\">\r\n    <h5>Bộ xử lý</h5>\r\n    <p class=\"item\"><strong>Hãng CPU:</strong> Intel</p>\r\n    <p class=\"item\"><strong>Công nghệ CPU:</strong> Core i5</p>\r\n    <p class=\"item\"><strong>Loại CPU:</strong> Intel Core i5-1135G7</p>\r\n    <p class=\"item\"><strong>Tốc độ tối đa:</strong> 4.2 GHz</p>\r\n    <p class=\"item\"><strong>Số nhân:</strong> 4</p>\r\n    <p class=\"item\"><strong>Số luồng:</strong> 8</p>\r\n</div><hr>\r\n\r\n<div class=\"section\">\r\n    <h5>Đồ họa</h5>\r\n    <p class=\"item\"><strong>Hãng (Card tích hợp):</strong> Intel</p>\r\n    <p class=\"item\"><strong>Model (Card tích hợp):</strong> Intel Iris Xe Graphics</p>\r\n    <p class=\"item\"><strong>Bộ nhớ đồ họa:</strong> Chia sẻ với bộ nhớ hệ thống</p>\r\n</div><hr>\r\n\r\n<div class=\"section\">\r\n    <h5>RAM</h5>\r\n    <p class=\"item\"><strong>Dung lượng RAM:</strong> 8 GB (có thể nâng cấp lên 16 GB)</p>\r\n    <p class=\"item\"><strong>Loại RAM:</strong> DDR4</p>\r\n    <p class=\"item\"><strong>Tốc độ RAM:</strong> 2666 MHz</p>\r\n    <p class=\"item\"><strong>Số khe cắm rời:</strong> 2</p>\r\n    <p class=\"item\"><strong>Hỗ trợ RAM tối đa:</strong> 32 GB</p>\r\n</div><hr>\r\n\r\n<div class=\"section\">\r\n    <h5>Lưu trữ</h5>\r\n    <p class=\"item\"><strong>Kiểu ổ cứng:</strong> SSD</p>\r\n    <p class=\"item\"><strong>Dung lượng:</strong> 512 GB</p>\r\n</div><hr>\r\n\r\n<div class=\"section\">\r\n    <h5>Màn hình</h5>\r\n    <p class=\"item\"><strong>Kích thước màn hình:</strong> 15.6 inch</p>\r\n    <p class=\"item\"><strong>Công nghệ màn hình:</strong> Full HD IPS</p>\r\n    <p class=\"item\"><strong>Độ phân giải:</strong> 1920 x 1080 Pixels</p>\r\n    <p class=\"item\"><strong>Loại màn hình:</strong> Màn hình phẳng</p>\r\n    <p class=\"item\"><strong>Tấm nền:</strong> IPS</p>\r\n    <p class=\"item\"><strong>Độ sáng:</strong> 250 nits</p>\r\n    <p class=\"item\"><strong>Độ phủ màu:</strong> 45% NTSC</p>\r\n</div><hr>\r\n\r\n<div class=\"section\">\r\n    <h5>Giao tiếp và kết nối</h5>\r\n    <p class=\"item\"><strong>Cổng giao tiếp:</strong></p>\r\n    <ul class=\"item\">\r\n        <li>2 x USB 3.2 Gen 1 Type-A</li>\r\n        <li>1 x USB 3.2 Gen 1 Type-C</li>\r\n        <li>1 x HDMI 2.0</li>\r\n        <li>1 x RJ45 Ethernet</li>\r\n        <li>1 x Jack 3.5 mm</li>\r\n        <li>1 x SD Card Reader</li>\r\n    </ul>\r\n    <p class=\"item\"><strong>Wifi:</strong> Wifi 6</p>\r\n    <p class=\"item\"><strong>Bluetooth:</strong> Bluetooth 5.0</p>\r\n    <p class=\"item\"><strong>Webcam:</strong> 720p HD Webcam</p>\r\n</div><hr>\r\n\r\n<div class=\"section\">\r\n    <h5>Hệ điều hành</h5>\r\n    <p class=\"item\"><strong>OS:</strong> Windows</p>\r\n    <p class=\"item\"><strong>Version:</strong> Windows 11 Home</p>\r\n</div><hr>\r\n\r\n<div class=\"section\">\r\n    <h5>Bảo mật</h5>\r\n    <p class=\"item\"><strong>Bảo mật:</strong> Mật khẩu</p>\r\n</div><hr>\r\n\r\n<div class=\"section\">\r\n    <h5>Bàn phím & TouchPad</h5>\r\n    <p class=\"item\"><strong>Kiểu bàn phím:</strong> Bàn phím Backlit</p>\r\n    <p class=\"item\"><strong>Bàn phím số:</strong> Có (NumberPad)</p>\r\n    <p class=\"item\"><strong>Đèn bàn phím:</strong> Có đèn nền bàn phím</p>\r\n    <p class=\"item\"><strong>TouchPad:</strong> Multi-touch touchpad</p>\r\n</div><hr>\r\n\r\n<div class=\"section\">\r\n    <h5>Thông tin pin & sạc</h5>\r\n    <p class=\"item\"><strong>Dung lượng pin:</strong> 48 Wh</p>\r\n    <p class=\"item\"><strong>Thời gian sử dụng:</strong> Lên đến 10 giờ</p>\r\n    <p class=\"item\"><strong>Power Supply:</strong> 65W AC Adapter</p>\r\n</div><hr>\r\n\r\n<div class=\"section\">\r\n    <h5>Phụ kiện trong hộp</h5>\r\n    <p class=\"item\"><strong>Phụ kiện:</strong> Bộ sạc điện</p>\r\n</div><hr>\r\n\r\n<div class=\"section\">\r\n    <h5>Thiết kế & Trọng lượng</h5>\r\n    <p class=\"item\"><strong>Kích thước:</strong> 363.4 x 254.5 x 19.9 mm</p>\r\n    <p class=\"item\"><strong>Trọng lượng sản phẩm:</strong> 1.65 kg</p>\r\n    <p class=\"item\"><strong>Chất liệu:</strong> Nhựa và hợp kim nhôm</p>\r\n</div><hr>\r\n\r\n<div class=\"section\">\r\n    <h5>Thông tin hàng hóa</h5>\r\n    <p class=\"item\"><strong>P/N:</strong> NX.A3QSV.001</p>\r\n    <p class=\"item\"><strong>Xuất xứ:</strong> Trung Quốc</p>\r\n    <p class=\"item\"><strong>Thời điểm ra mắt:</strong> 2021</p>\r\n    <p class=\"item\"><strong>Thời gian bảo hành (tháng):</strong> 24</p>\r\n    <p class=\"item\"><strong>Hướng dẫn bảo quản:</strong> Để nơi khô ráo, tránh nhiệt độ cao và độ ẩm.</p>\r\n    <p class=\"item\"><strong>Hướng dẫn sử dụng:</strong> Xem trong sách hướng dẫn sử dụng</p>\r\n    <p class=\"item\"><strong>Màu sắc:</strong> Xám</p>\r\n</div><hr>\r\n', 15900000, 40, 98, 10, '2024-11-15', 20),
(19, 'sp00028', 'laptop dell', 'sxz', 232332322, 1, NULL, 12, '2024-12-03', 31);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trang_thai_dh`
--

CREATE TABLE `trang_thai_dh` (
  `id` int(225) NOT NULL,
  `trang_thai` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `trang_thai_dh`
--

INSERT INTO `trang_thai_dh` (`id`, `trang_thai`) VALUES
(1, 'Đang Chờ xét duyệt'),
(2, 'Đang xử lý'),
(3, 'Đang vận chuyển'),
(4, 'Đã vận chuyển'),
(5, 'Đã hủy'),
(6, 'Đã trả hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(225) NOT NULL,
  `ten_user` varchar(255) NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `so_dien_thoai` varchar(20) DEFAULT NULL,
  `hinh_anh` varchar(225) NOT NULL,
  `vai_tro` tinytext DEFAULT NULL,
  `thoi_gian_tao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `ten_user`, `mat_khau`, `email`, `so_dien_thoai`, `hinh_anh`, `vai_tro`, `thoi_gian_tao`) VALUES
(1, 'Tùng Dương', '12345678', 'duongdtpa00914@gmail.com', '0123456789', 'assets/Admin/images/user/banthan.jpg', 'client', '2024-11-10 07:04:13'),
(2, 'adminnn', 'admin12345', 'admin8386@gmail.com', '0987654321', 'assets/Admin/images/user/3.png', 'admin', '2024-11-10 08:42:37'),
(3, 'Tùng Dươngggg', '12345', 'duongdtpa009134@gmail.com', '01234456789', 'assets/Admin/images/user/tải xuống (1).jpg', 'client', '2024-11-13 02:58:24'),
(18, 'Dương Tùng', '123', 'duongdtpa00194@gmail.com', '88828822222', '', 'client', '2024-12-02 13:26:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `yeu_thich`
--

CREATE TABLE `yeu_thich` (
  `id` int(225) NOT NULL,
  `id_user` int(225) DEFAULT NULL,
  `id_san_pham` int(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `yeu_thich`
--

INSERT INTO `yeu_thich` (`id`, `id_user`, `id_san_pham`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chi_tiet_dh`
--
ALTER TABLE `chi_tiet_dh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_don_hang` (`id_don_hang`),
  ADD KEY `id_san_pham` (`id_san_pham`);

--
-- Chỉ mục cho bảng `danh_gia`
--
ALTER TABLE `danh_gia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_san_pham` (`id_san_pham`);

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danh_muc_small`
--
ALTER TABLE `danh_muc_small`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_danh_muc` (`id_danh_muc`);

--
-- Chỉ mục cho bảng `dia_chi`
--
ALTER TABLE `dia_chi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `don_hang_ttfk_1` (`id_thanh_toan`),
  ADD KEY `trang_thai_ttfk_1` (`trang_thai`),
  ADD KEY `id_dia_chi` (`id_dia_chi`);

--
-- Chỉ mục cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_san_pham` (`id_san_pham`);

--
-- Chỉ mục cho bảng `hinh_anh`
--
ALTER TABLE `hinh_anh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_san_pham` (`id_san_pham`);

--
-- Chỉ mục cho bảng `pt_thanh_toan`
--
ALTER TABLE `pt_thanh_toan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_DM_small` (`id_DM_small`);

--
-- Chỉ mục cho bảng `trang_thai_dh`
--
ALTER TABLE `trang_thai_dh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `so_dien_thoai` (`so_dien_thoai`);

--
-- Chỉ mục cho bảng `yeu_thich`
--
ALTER TABLE `yeu_thich`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_san_pham` (`id_san_pham`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_dh`
--
ALTER TABLE `chi_tiet_dh`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `danh_gia`
--
ALTER TABLE `danh_gia`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `danh_muc_small`
--
ALTER TABLE `danh_muc_small`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `dia_chi`
--
ALTER TABLE `dia_chi`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `hinh_anh`
--
ALTER TABLE `hinh_anh`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `pt_thanh_toan`
--
ALTER TABLE `pt_thanh_toan`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `trang_thai_dh`
--
ALTER TABLE `trang_thai_dh`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `yeu_thich`
--
ALTER TABLE `yeu_thich`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chi_tiet_dh`
--
ALTER TABLE `chi_tiet_dh`
  ADD CONSTRAINT `chi_tiet_dh_ibfk_1` FOREIGN KEY (`id_don_hang`) REFERENCES `don_hang` (`id`),
  ADD CONSTRAINT `chi_tiet_dh_ibfk_2` FOREIGN KEY (`id_san_pham`) REFERENCES `san_pham` (`id`);

--
-- Các ràng buộc cho bảng `danh_gia`
--
ALTER TABLE `danh_gia`
  ADD CONSTRAINT `danh_gia_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `danh_gia_ibfk_2` FOREIGN KEY (`id_san_pham`) REFERENCES `san_pham` (`id`);

--
-- Các ràng buộc cho bảng `danh_muc_small`
--
ALTER TABLE `danh_muc_small`
  ADD CONSTRAINT `danh_muc_small_ibfk_1` FOREIGN KEY (`id_danh_muc`) REFERENCES `danh_muc` (`id`);

--
-- Các ràng buộc cho bảng `dia_chi`
--
ALTER TABLE `dia_chi`
  ADD CONSTRAINT `dia_chi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD CONSTRAINT `dia_chi_dcfk_1` FOREIGN KEY (`id_dia_chi`) REFERENCES `dia_chi` (`id`),
  ADD CONSTRAINT `don_hang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `don_hang_ttfk_1` FOREIGN KEY (`id_thanh_toan`) REFERENCES `pt_thanh_toan` (`id`),
  ADD CONSTRAINT `trang_thai_ttfk_1` FOREIGN KEY (`trang_thai`) REFERENCES `trang_thai_dh` (`id`);

--
-- Các ràng buộc cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD CONSTRAINT `gio_hang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `gio_hang_ibfk_2` FOREIGN KEY (`id_san_pham`) REFERENCES `san_pham` (`id`);

--
-- Các ràng buộc cho bảng `hinh_anh`
--
ALTER TABLE `hinh_anh`
  ADD CONSTRAINT `hinh_anh_ibfk_1` FOREIGN KEY (`id_san_pham`) REFERENCES `san_pham` (`id`);

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`id_DM_small`) REFERENCES `danh_muc_small` (`id`);

--
-- Các ràng buộc cho bảng `yeu_thich`
--
ALTER TABLE `yeu_thich`
  ADD CONSTRAINT `yeu_thich_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `yeu_thich_ibfk_2` FOREIGN KEY (`id_san_pham`) REFERENCES `san_pham` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
