-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th1 06, 2022 lúc 05:39 AM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhom2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

DROP TABLE IF EXISTS `bill`;
CREATE TABLE IF NOT EXISTS `bill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idsp` int(11) NOT NULL,
  `idkh` int(11) NOT NULL,
  `sl` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `idsp`, `idkh`, `sl`, `total`) VALUES
(1, 1, 2, 2, 60000000),
(2, 2, 2, 1, 40000000),
(3, 1, 2, 2, 40000000),
(4, 13, 3, 1, 43990000),
(5, 8, 3, 2, 75960000),
(15, 2, 3, 1, 12790000),
(14, 19, 3, 1, 7690000),
(12, 25, 3, 1, 28490000),
(13, 18, 3, 1, 3690000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manufactures`
--

DROP TABLE IF EXISTS `manufactures`;
CREATE TABLE IF NOT EXISTS `manufactures` (
  `manu_id` int(11) NOT NULL AUTO_INCREMENT,
  `manu_name` varchar(150) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`manu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Đang đổ dữ liệu cho bảng `manufactures`
--

INSERT INTO `manufactures` (`manu_id`, `manu_name`) VALUES
(1, 'Apple '),
(2, 'Oppo'),
(3, 'Samsung'),
(4, 'HP'),
(5, 'Asus');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `manu_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `feature` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `manu_id`, `type_id`, `price`, `image`, `description`, `feature`, `created_at`) VALUES
(1, 'Điện thoại iPhone 12 Pro Max 128GB', 1, 1, 31490000, 'iphone-12-pro-max-thumbv-780x433-1.jpg', 'không có!!!', 1, '2021-10-21 19:38:07'),
(2, 'Máy tính bảng Samsung Galaxy Tab S7 FE ', 3, 4, 12790000, 'samsung-galaxy-tab-s7-fe-green-600x600.jpg', 'Samsung chính thức trình làng mẫu máy tính bảng có tên Galaxy Tab S7 FE, máy trang bị cấu hình mạnh mẽ, màn hình giải trí siêu lớn và điểm ấn tượng nhất là viên pin siêu khủng được tích hợp bên trong, giúp tăng hiệu suất làm việc nhưng vẫn có tính di động cực cao.', 2, '2021-10-22 19:41:14'),
(3, 'Điện thoại OPPO Reno6 Pro 5G', 2, 1, 18000000, 'oppo-reno6-pro-blue-1-600x600.jpg', 'Hiệu năng cực mạnh mẽ với Snapdragon 870', 3, '2021-10-21 19:43:15'),
(4, 'Laptop Apple MacBook Air M1 2020 8GB/256GB/7-core GPU (MGN93SA/A)', 1, 2, 27990000, 'macbook-air-m1-2020-gold-600x600.jpg', 'Chip Apple M1 tốc độ xử lý nhanh gấp 3.5 lần thế hệ trước', 4, '2021-10-21 20:02:22'),
(5, 'Laptop HP Gaming VICTUS 16 e0175AX R5 5600H/8GB/512GB/4GB RTX3050/144Hz/Win10 (4R0U8PA)', 4, 2, 24000000, 'hp-gaming-victus-16-e0175ax-r5-5600h-8gb-600x600.jpg', 'Cho thao tác mượt mà ở mọi ứng dụng nhờ bộ vi xử lý tân tiến', 5, '2021-10-21 20:08:23'),
(10, 'Điện thoại iPhone 13 Pro 128GB', 1, 1, 30990000, 'iphone-13-pro-sierra-blue-600x600.jpg', 'Mỗi lần ra mắt phiên bản mới là mỗi lần iPhone chiếm sóng trên khắp các mặt trận và lần này cái tên khiến vô số người \"sục sôi\" là iPhone 13 Pro, chiếc điện thoại thông minh vẫn giữ nguyên thiết kế cao cấp, cụm 3 camera được nâng cấp, cấu hình mạnh mẽ cùng thời lượng pin lớn ấn tượng.', 1, '2021-10-18 19:38:07'),
(8, 'Điện thoại iPhone 11 128GB', 1, 1, 18990000, 'iphone-11-xanhla-600x600.jpg', 'Nâng cấp mạnh mẽ về cụm camera\r\nNăm nay với iPhone 11 thì Apple đã nâng cấp khá nhiều về camera nếu so sánh với chiếc iPhone Xr 128GB năm ngoái.', 1, '2021-10-22 19:38:07'),
(9, 'Điện thoại iPhone 13 Pro Max 128GB', 1, 1, 33990000, 'iphone-13-pro-max-sierra-blue-600x600.jpg', 'iPhone 13 Pro Max 128GB - siêu phẩm được mong chờ nhất ở nửa cuối năm 2021 đến từ Apple. Máy có thiết kế không mấy đột phá khi so với người tiền nhiệm, bên trong đây vẫn là một sản phẩm có màn hình siêu đẹp, tần số quét được nâng cấp lên 120 Hz mượt mà, cảm biến camera có kích thước lớn hơn, cùng hiệu năng mạnh mẽ với sức mạnh đến từ Apple A15 Bionic, sẵn sàng cùng bạn chinh phục mọi thử thách.', 1, '2021-10-14 19:38:07'),
(11, 'Điện thoại iPhone 12 64GB', 1, 1, 20490000, 'iphone-12-xanh-duong-new-2-600x600.jpg', 'Trong những tháng cuối năm 2020, Apple đã chính thức giới thiệu đến người dùng cũng như iFan thế hệ iPhone 12 series mới với hàng loạt tính năng bứt phá, thiết kế được lột xác hoàn toàn, hiệu năng đầy mạnh mẽ và một trong số đó chính là iPhone 12 64GB.', 1, '2021-10-11 19:38:07'),
(12, 'Apple Watch SE 40mm viền nhôm dây cao su', 1, 3, 8450000, 'se-40mm-vien-nhom-day-cao-su-hong-thumb-1-600x600.jpg', 'Thiết kế sang trọng, hiện đại, mang nét đặc trưng của Apple\r\nApple Watch SE 40mm viền nhôm dây cao su hồng có khung viền chắc chắn, thiết kế bo tròn 4 góc giúp thao tác vuốt chạm thoải mái hơn. Mặt kính cường lực Ion-X strengthened glass với kích thước 1.57 inch, hiển thị rõ ràng. Khung viền nhôm chắc chắn cùng dây đeo cao su có độ đàn hồi cao, êm ái, tạo cảm giác thoải mái khi đeo.', 1, '2021-10-19 19:38:07'),
(13, 'Điện thoại Samsung Galaxy Z Fold3 5G 512GB', 3, 1, 43990000, 'samsung-galaxy-z-fold-3-green-1-600x600.jpg', 'Galaxy Z Fold3 5G đánh dấu bước tiến mới của Samsung trong phân khúc điện thoại gập cao cấp khi được cải tiến về độ bền cùng những nâng cấp đáng giá về cấu hình hiệu năng, hứa hẹn sẽ mang đến trải nghiệm sử dụng đột phá cho người dùng.', 2, '2021-10-25 19:41:14'),
(14, 'Máy tính bảng Samsung Galaxy Tab S6 Lite', 3, 4, 9090000, 'samsung-galaxy-tab-s6-lite-600x600-2-600x600.jpg', 'Sau thành công của Galaxy Tab S6, Samsung tiếp tục chinh phục người dùng với Galaxy Tab S6 Lite có phân khúc giá rẻ hơn. Thiết bị vẫn hỗ trợ bút S Pen thần thánh, thiết kế kim loại cao cấp và màn hình, âm thanh giải trí đỉnh cao.', 2, '2021-10-22 19:41:14'),
(15, 'Bút cảm ứng Samsung S Pen Pro EJ-P5450 Đen', 3, 5, 3490000, 'but-cam-ung-samsung-s-pen-pro-ej-p5450-den-ava-600x600.jpg', 'Nhỏ gọn, sử dụng bền bỉ và đơn giản\r\nToàn thân bút có màu đen sang trọng, hình dạng và kích cỡ của bút cảm ứng Samsung S Pen Pro EJ-P5450 đen như bút chì hay bút mực thông thường, rất dễ dàng cho bạn làm quen và sử dụng. Đầu bút bằng cao su tự thu lại, tích hợp công nghệ giới hạn lực giúp viết tự nhiên, bảo vệ màn hình thiết bị và đầu hút tốt hơn. ', 2, '2021-10-12 19:41:14'),
(16, 'Điện thoại OPPO Reno5', 2, 1, 8100000, 'oppo-reno5-den-600x600-1-600x600.jpg', 'OPPO Reno5 là sự kết hợp đầy ấn tượng giữa hiệu năng và thiết kế, mang đến cho người dùng một chiếc điện thoại tích hợp nhiều công nghệ camera, sạc pin hàng đầu của OPPO trong một mức giá tầm trung.', 3, '2021-10-07 19:43:15'),
(17, 'Pin sạc dự phòng Polymer 10.000 mAh Type C PD QC3.0 VOOC OPPO PBV02', 2, 5, 1800000, 'oppo-vooc-30w-pbv02-1-600x600.jpg', 'Đặc điểm nổi bật\r\n\r\nDung lượng lớn 10.000 mAh, hiệu suất sạc 65%.\r\nTích hợp chuẩn sạc nhanh chuẩn VOOC 30W qua dòng điện thoại Oppo.\r\nSạc nhanh hơn qua công nghệ Qualcomm Quick Charge và Power Delivery trên cổng Type-C.\r\nThiết kế sang trọng, tinh tế, vỏ nhựa bền tốt.\r\nAn toàn khi dùng với lõi pin Polymer.\r\nNguồn vào cổng Type-C PD.\r\nTương thích với nhiều loại điện thoại và máy tính bảng với 2 nguồn ra (USB và Type-C).', 3, '2021-10-09 19:43:15'),
(18, 'Điện thoại OPPO A15', 2, 1, 3690000, 'oppo-a15-black-fix-600x600.jpg', 'OPPO hãng điện thoại luôn được người Việt tin dùng và lựa chọn, đã cho ra mắt mẫu OPPO A15 có thiết kế đẹp, cấu hình đủ dùng. Đây sẽ là mẫu điện thoại thông minh phù hợp cho mọi đối tượng người dùng đi cùng với mức giá vô cùng hợp lý.', 3, '2021-10-01 19:43:15'),
(19, 'Điện thoại OPPO A94', 2, 1, 7690000, 'oppo-a94-black-thumb-600x600-1-600x600.jpg', 'Mẫu smartphone tầm trung của OPPO - OPPO A94 đã được giới thiệu đến người dùng với nhiều cải tiến nổi trội về thiết kế, pin và camera cũng như kế thừa những điểm mạnh của OPPO A93.', 2, '2021-10-01 19:41:14'),
(21, 'Laptop HP 15s fq2558TU i7 1165G7/8GB/512GB/Win10 (46M26PA)', 4, 2, 19090000, 'hp-15s-fq2558tu-i7-1165g7-8gb-512gb-win10-600x600.jpg', 'Thanh lịch cùng laptop HP 15s fq2558TU i7 1165G7 (46M26PA) với cấu hình mạnh mẽ đến từ bộ vi xử lý Intel thế hệ 11, là người cộng sự lý tưởng, đồng hành cùng bạn trên mọi mặt trận từ công việc đến giải trí.', 5, '2021-10-19 20:08:23'),
(22, 'Laptop HP Omen 15 ek0078TX i7 10750H/16GB/1TB SSD/8GB', 4, 2, 55490000, 'hp-omen-15-ek0078tx-i7-26y68pa-600x600.jpg', 'HP Omen 15 ek0078TX i7 (26Y68PA) là chiếc laptop gaming mang trong mình sức mạnh siêu phàm nhờ sở hữu cấu hình gồm con chip Intel Core i7 mạnh mẽ và vi xử lý đồ họa cực mượt mà nhưng vẫn giữ ngoại hình tương đối mỏng nhẹ, đây chính là công cụ đắc lực, đồng hành cùng bạn trong mọi cuộc chiến.', 5, '2021-10-18 20:08:23'),
(23, 'Laptop HP Pavilion 15 eg0505TX i5 1135G7/8GB/512GB/2GB MX450/Win11 (46M03PA)', 4, 2, 20990000, 'hp-pavilion-15-eg0505tx-i5-1135g7-8gb-512gb-600x600.jpg', 'Mang trong mình sức mạnh vượt trội, laptop HP Pavilion 15 eg0505TX i5 1135G7 (46M03PA) sở hữu hệ điều hành Windows 11 tân tiến, cùng bạn hoàn thành mọi tác tác vụ cả trong công việc hay giải trí.', 5, '2021-10-06 20:08:23'),
(24, 'Laptop Asus ZenBook UX325EA i5 1135G7/8GB/512GB/OLED/Cáp/Túi/Win10 (KG363T)', 5, 2, 23790000, 'asus-zenbook-ux325ea-i5-kg363t-16-600x600.jpg', 'Chắc chắn hơn bao giờ hết nhờ độ bền chuẩn quân đội, laptop Asus Zenbook UX325EA (KG363T) sở hữu kiểu dáng tinh tế cùng hiệu năng tối ưu nhờ CPU Intel thế hệ 11, giúp bạn xử lý nhanh gọn và chính xác mọi tác vụ.', 7, '2021-10-03 03:51:44'),
(25, 'Laptop Asus TUF Gaming FX516PC i7 11370H/8GB/512GB/4GB RTX3050/144Hz/Win10 (HN001T)', 5, 2, 28490000, 'asus-tuf-gaming-fx516pc-i7-11370h-8gb-512gb-600x600.jpg', 'Asus TUF Gaming FX516PC i7 (HN001T) với thiết kế đầy cá tính, hiệu năng vượt trội khi sở hữu dòng chip Intel thế hệ 11 tiên tiến, cùng card đồ hoạ rời, đây sẽ là người bạn xứng tầm dành cho game thủ để bạn sẵn sàng tác chiến mọi lúc mọi nơi.', 7, '2021-10-05 03:51:44'),
(26, 'Laptop Asus ROG Zephyrus G14 Alan Walker GA401QEC R9 ', 5, 2, 44990000, 'asus-rog-zephyrus-gaming-g14-ga401qec-r9-k2064t-17-600x600.jpg', 'Cùng bạn đối đầu mọi thách thức trên chiến trường ảo nhờ bộ vi xử lý mạnh mẽ AMD và phong cách thiết kế độc đáo, khẳng định chất tôi riêng của siêu phẩm độc nhất vô nhị Asus ROG Zephyrus Gaming G14 Alan Walker (K2064T), hứa hẹn sẽ mang đến những trải nghiệm tuyệt hảo khó quên cho người dùng. Nếu là một fan của Alan Walker thì đây chính là sản phẩm bạn không thể bỏ lỡ.', 7, '2021-10-06 03:51:44'),
(27, 'Tai nghe chụp tai Gaming Asus TUF H3 Đen Đỏ', 5, 5, 891000, 'tai-nghe-chup-tai-gaming-asus-tuf-h3-den-do-avatar-1-600x600.jpg', 'Tai nghe chụp tai Gaming Asus TUF H3 có thiết kế sành điệu, phong cách, nhỏ gọn và tiện dụngVới thiết kế chụp tai cùng phần quai to, dày, Gaming Asus TUF H3 tông màu đen đỏ chủ đạo giúp cố định, hạn chế xê dịch khi bạn chuyển động. Logo TUF được làm nổi bật trên thiết kế vân xước làm tăng phần cá tính cho sản phẩm.Ngoài ra tai nghe chơi game có vòng đeo và cặp làm bằng chất liệu thép không gỉ bền bỉ, làm tăng thêm độ ổn định và tuổi thọ cho sản phẩm.', 7, '2021-10-07 03:51:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `protypes`
--

DROP TABLE IF EXISTS `protypes`;
CREATE TABLE IF NOT EXISTS `protypes` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Đang đổ dữ liệu cho bảng `protypes`
--

INSERT INTO `protypes` (`type_id`, `type_name`) VALUES
(1, 'điện thoại\r\n'),
(2, 'laptop'),
(3, 'đồng hồ thông minh'),
(4, 'taplet'),
(5, 'phụ kiện');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Diachi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `Name`, `Diachi`, `email`, `sodienthoai`, `role_id`, `password`) VALUES
(2, 'Thịnh', 'An Giang', 'thinhangiang@gmail.com', '0123456789', 0, '87ef067531ad5e77c15a8709c37953ef'),
(3, 'Võ Quốc Huy', 'ấp Giao Hòa B, xã Giao Thạnh, Thạnh Phú, Bến Tre', 'voquochuy3112@gmail.com', '0987654321', 1, 'b8dc042d8cf7deefb0ec6a264c930b02'),
(4, 'Thạch Thanh Bắc', 'ấp Gốc Chuối - xã Cây Đào - Cây Mận - Trái ỏi', 'motthaiibaa112233@mail.com', '0988623897', 1, 'd846be2831efbbd22122cd9a8d292520'),
(5, 'Nguyễn Văn A', 'Thôn cây ỏi', 'aaaaaaa@gmail.com', '0123654789', 1, '80c9ef0fb86369cd25f90af27ef53a9e');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
