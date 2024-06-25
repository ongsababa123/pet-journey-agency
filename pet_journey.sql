-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2024 at 11:55 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet_journey`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_home`
--

CREATE TABLE `about_home` (
  `id_about_home` int(11) NOT NULL,
  `detail` text NOT NULL,
  `path_video` varchar(100) NOT NULL,
  `language` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_home`
--

INSERT INTO `about_home` (`id_about_home`, `detail`, `path_video`, `language`) VALUES
(1, 'เราเข้าใจถึงความรักและความผูกพันระหว่างสัตว์เลี้ยงกับ เจ้าของ ซึ่งในปัจจุบันสัตว์เลี้ยงเสมือนสมาชิกในครอบครัว ด้วยเหตุนี้ทีมงานของเราจึงก่อตั้ง Pet Journey Agency ขึ้นมา เพื่อทำให้การนำเข้า-ส่งออกสัตว์เลี้ยงเป็นเรื่องง่าย และสะดวกมากขึ้น ไม่ว่าจะเป็นการพาน้องหมาน้องแมวไปยัง ต่างประเทศหรือกลับมาประเทศไทยสำหรับเจ้าของที่ต้องการ ให้สัตว์เลี้ยงเดินทางไปด้วย', 'test3.mp4', 'th'),
(2, 'At Pet Journey Agency, we specialize in the professional import and export of pets. Whether you want to transport your beloved pet abroad or are looking to welcome a new pet into your family, we have the expertise and experience to make every step of the process easy and safe.', 'TEST.mp4', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `about_page`
--

CREATE TABLE `about_page` (
  `id_about_page` int(11) NOT NULL,
  `detail_page` longtext NOT NULL,
  `image_page_path` varchar(255) NOT NULL,
  `language` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_page`
--

INSERT INTO `about_page` (`id_about_page`, `detail_page`, `image_page_path`, `language`) VALUES
(1, '<div style=\"text-align: center;\"><span style=\"font-size: 1rem;\">ฟasdasdsadasd<font color=\"#000000\"><span style=\"background-color: rgb(255, 255, 0);\">asdasdasdasd</span></font>ฟกหฟก<b>ฟหกหฟ</b></span></div>', 'download.png', 'th'),
(2, '<div>Pet Journey Agency recognizes the importance of the bond and love between pets and their owners. In today\'s world, pets are akin to family members or even children for many people. Our team established Pet Journey Agency to make it easier and more convenient to import and export dogs and cats internationally, and to bring them back to Thailand for those who wish to travel with their beloved pets or relocate them.</div><div><br></div><div>We offer a range of comprehensive services, including blood tests, global travel preparations with documentation for both export and import into Thailand, as well as other countries. We provide pet passports or travel documents that bring smiles to owners\' faces when they see them. Additionally, we collaborate with professionals in various fields:</div><div><br></div><div>- Veterinary hospitals/clinics: Such as the reputable ABC Clinic</div><div>- Pet-friendly hotels: Such as ABC Hotel</div><div>- Accommodations specifically for pets: Named ABC</div><div><br></div><div>All of these services are available throughout Bangkok and its suburbs to serve everyone\'s needs.</div>', 'Screenshot 2024-05-28 102400.png', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `open_time` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(100) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `facebook_name` varchar(255) DEFAULT NULL,
  `instragram_link` varchar(255) DEFAULT NULL,
  `instragram_name` varchar(255) DEFAULT NULL,
  `line_link` varchar(255) DEFAULT NULL,
  `line_name` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `logo_image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `open_time`, `email`, `phone_number`, `facebook_link`, `facebook_name`, `instragram_link`, `instragram_name`, `line_link`, `line_name`, `whatsapp`, `logo_image_path`) VALUES
(1, 'จันทร์ถึงเสาร์ 8:30 - 18:00 หยุดทุกวันอาทิตย์', 'petjourney.agency@gmail.com', ' 088-657-3909', 'https://www.facebook.com/petjourney.agency', 'Pet Journey Agency - นำเข้าส่งออกสัตว์เลี้ยง', '', '', 'https://page.line.me/petjourney', '@petjourney', '0816155644', 'logo_pet_journey.png');

-- --------------------------------------------------------

--
-- Table structure for table `cover_page_data`
--

CREATE TABLE `cover_page_data` (
  `id_cover` int(11) NOT NULL,
  `name_image` varchar(255) NOT NULL,
  `path_image` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `language` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cover_page_data`
--

INSERT INTO `cover_page_data` (`id_cover`, `name_image`, `path_image`, `status`, `language`) VALUES
(1, 'test', '1718852655_a63efd68162eb44ab452.jpg', 0, 'en'),
(3, 'sadasd', 'download.png', 1, 'en');

-- --------------------------------------------------------

--
-- Table structure for table `more_about_pet`
--

CREATE TABLE `more_about_pet` (
  `id_more_about_pet` int(11) NOT NULL,
  `topic_name` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `image_path` varchar(100) NOT NULL,
  `language` varchar(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `more_about_pet`
--

INSERT INTO `more_about_pet` (`id_more_about_pet`, `topic_name`, `detail`, `image_path`, `language`, `status`) VALUES
(2, 'ความรักที่ไม่ต้องการคำพูด', 'แมวตัวน้อยที่บ้านไม่เคยพูดอะไรแต่การนั่งเฝ้าข้างๆ เวลาฉันรู้สึกเศร้าก็เพียงพอแล้วที่จะทำให้ใจอุ่นขึ้น  ความรักจากแมวนั้นไม่ต้องการคำพูด แค่การสัมผัส นุ่มนวลและการมองตาเราด้วยสายตาที่เต็มไปด้วย ความหวังดีก็เพียงพอแล้วที่จะรู้สึกว่ามีใครสักคน อยู่เคียงข้างเ', 'golden_.jpg', 'th', 1);

-- --------------------------------------------------------

--
-- Table structure for table `partner_data`
--

CREATE TABLE `partner_data` (
  `id_partner` int(11) NOT NULL,
  `name_partner` varchar(255) NOT NULL,
  `type_partner` int(11) NOT NULL,
  `logo_partner_path` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partner_data`
--

INSERT INTO `partner_data` (`id_partner`, `name_partner`, `type_partner`, `logo_partner_path`, `status`) VALUES
(2, 'xxxxx', 1, 'avatar3.png', 1),
(3, 'etert', 2, 'avatar6.png', 0),
(4, 'xxxxx', 3, 'avatar4.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `performance_team_data`
--

CREATE TABLE `performance_team_data` (
  `id_team` int(11) NOT NULL,
  `image_path` varchar(100) NOT NULL,
  `color_bg` varchar(100) NOT NULL,
  `color_text` varchar(100) NOT NULL,
  `detail_th` varchar(100) NOT NULL,
  `detail_en` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `type_show` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `performance_team_data`
--

INSERT INTO `performance_team_data` (`id_team`, `image_path`, `color_bg`, `color_text`, `detail_th`, `detail_en`, `status`, `type_show`) VALUES
(1, 'footer.png', '#ffb629', '#ffffff', 'ปปปปปปปปปป', 'asdasdasdasdasd', 1, 3),
(2, 'contact_pic.png', '#3b3935', '#bb0c0c', 'ไไไไไไฟหกฟหกฟหกฟหกฟห', 'xxxxฟหกฟหกฟหกฟหก', 1, 3),
(3, 'pexels-christian-heitz-842711.jpg', '#ffb629', '#ffffff', 'asdasd', 'sadasd', 1, 1),
(4, '1719306250_62e95d2521e30f4fecea.png', '#ffb629', '#ffffff', 'ฟหกหฟก', 'asdasd', 1, 1),
(5, 'paypal2.png', '#ffb629', '#ffffff', 'ฟหกหฟก', 'asdasd', 1, 1),
(6, '3bb43251e9f3f81e96cfa0d2aabb1564.jpg', '#ffb629', '#ffffff', 'ฟหกหฟกหฟ', 'asdasd', 1, 1),
(7, 'golden_.jpg', '#FFB629', '#ffffff', 'ฟหก', 'asdasd', 1, 1),
(8, 'photo2.png', '#FFB629', '#ffffff', 'ผปแปผแ', 'asdasd', 1, 1),
(9, 'logo-pet.png', '#FFB629', '#ffffff', 'ๆไำไๆำ', 'asdasd', 1, 1),
(10, 'boxed-bg.png', '#FFB629', '#ffffff', 'ฟหกหฟก', 'asdasd', 1, 1),
(11, 'dog1.png', '#FFB629', '#ffffff', 'ปผแผปแผปแผป', 'asdasd', 1, 1),
(12, 'bfb9c2b7-da69-4203-87ac-a85bfe1d90bd.jpg', '#ffb629', '#ffffff', 'ฟหกหฟกหฟ', 'asdasd', 1, 1),
(13, 'download.png', '#ffb629', '#ffffff', 'ฟหกหฟกหฟ', 'asdasd', 1, 1),
(14, 'mastercard.png', '#ffb629', '#ffffff', 'หฟกฟหก', 'asdasd', 1, 1),
(15, 'final-1.jpg', '#ffb629', '#ffffff', 'asdasฟหกฟหกหฟ', 'asdasd', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `id_quotation` int(11) NOT NULL COMMENT 'รหัสไอดี',
  `name_last` varchar(255) NOT NULL COMMENT 'ชื่อ - นามสกุล',
  `email` varchar(255) NOT NULL COMMENT 'อีเมล์',
  `phone_number` varchar(100) NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `travel_date` date NOT NULL COMMENT 'วันเดินทาง',
  `country_of_origin` varchar(100) NOT NULL COMMENT 'ประเทศต้นทาง',
  `destination_country` varchar(100) NOT NULL COMMENT 'ประเทศปลายทาง',
  `travel_type` varchar(100) NOT NULL COMMENT 'ประเภทการเดินทาง',
  `transport_format` varchar(100) NOT NULL COMMENT 'รูปแบบขนส่งสัตว์เลี้ยง',
  `service` varchar(100) NOT NULL COMMENT 'ประเภทการเดินทาง array ,',
  `animal_type` varchar(100) NOT NULL COMMENT 'ชนิดสัตว์',
  `breed` varchar(100) NOT NULL COMMENT 'สายพันธุ์',
  `age` varchar(100) NOT NULL COMMENT 'อายุ',
  `weight` varchar(100) NOT NULL COMMENT 'น้ำหนัก',
  `note` varchar(255) NOT NULL COMMENT 'หมายเหตุ',
  `status` int(11) NOT NULL COMMENT 'สถานะ \r\n1-อ่านแล้ว\r\n0- ยังไม่ได้อ่าน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review_data`
--

CREATE TABLE `review_data` (
  `id_review` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `detail_comment_th` varchar(255) NOT NULL,
  `detail_comment_en` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review_data`
--

INSERT INTO `review_data` (`id_review`, `image_path`, `detail_comment_th`, `detail_comment_en`, `status`) VALUES
(2, 'golden_.jpg', 'asdasdasasdasdasdasdasdasdas', 'ฟหกฟหกฟหกฟห', 0);

-- --------------------------------------------------------

--
-- Table structure for table `service_content`
--

CREATE TABLE `service_content` (
  `id_service_content` int(11) NOT NULL,
  `id_service_header` int(11) NOT NULL,
  `content` longtext NOT NULL,
  `language` varchar(10) NOT NULL,
  `id_partner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_content`
--

INSERT INTO `service_content` (`id_service_content`, `id_service_header`, `content`, `language`, `id_partner`) VALUES
(1, 2, 'ฟหกฟหกหฟกหฟ', 'th', 1),
(2, 2, 'asdsadasdasdsad', 'en', 0);

-- --------------------------------------------------------

--
-- Table structure for table `service_content_buy_sale`
--

CREATE TABLE `service_content_buy_sale` (
  `id_service_content_buy_sale` int(11) NOT NULL COMMENT 'รหัสคอนเท้นเซอร์วิส',
  `id_service_header` int(11) NOT NULL COMMENT 'รหัสเซอร์วิส',
  `image_path` varchar(100) NOT NULL COMMENT 'ไฟล์ภาพ',
  `name_pet` varchar(100) NOT NULL COMMENT 'ชื่อสัตว์',
  `breed` varchar(100) NOT NULL COMMENT 'พันธ์',
  `gender` varchar(100) NOT NULL COMMENT 'เพศ',
  `age` varchar(100) NOT NULL COMMENT 'อายุ',
  `color` varchar(100) NOT NULL COMMENT 'สีขน',
  `characteristics` varchar(100) NOT NULL COMMENT 'ลักษณะนิสัย',
  `vaccination_history` varchar(255) NOT NULL COMMENT 'ประวัติการฉีดวัคซีน',
  `price` varchar(100) NOT NULL COMMENT 'ราคา',
  `status` int(11) NOT NULL COMMENT 'สถานะ',
  `language` varchar(10) NOT NULL COMMENT 'ประเภทภาษา',
  `create_date` date NOT NULL COMMENT 'วันที่ลง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_content_buy_sale`
--

INSERT INTO `service_content_buy_sale` (`id_service_content_buy_sale`, `id_service_header`, `image_path`, `name_pet`, `breed`, `gender`, `age`, `color`, `characteristics`, `vaccination_history`, `price`, `status`, `language`, `create_date`) VALUES
(3, 1, 'avatar.png', 'sadasd', 'asdsad', 'male', 'sadsad', 'sadsad', 'sadsad', 'asdsada', '1', 1, 'th', '2024-06-22');

-- --------------------------------------------------------

--
-- Table structure for table `service_header`
--

CREATE TABLE `service_header` (
  `id_service_header` int(11) NOT NULL,
  `header_service_name_th` varchar(100) NOT NULL,
  `header_service_name_en` varchar(100) NOT NULL,
  `image_path` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_header`
--

INSERT INTO `service_header` (`id_service_header`, `header_service_name_th`, `header_service_name_en`, `image_path`, `status`) VALUES
(1, 'นำเข้าและส่งออกสัตว์เลี้ยง', 'Import and export of pets', 'avatar4.png', 1),
(2, 'บริการตรวจเลือดสัตว์เลี้ยง', 'Pet blood testing service', '1719211120_ce667b790b7aa9794325.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `veterinary_team`
--

CREATE TABLE `veterinary_team` (
  `id_team` int(11) NOT NULL,
  `name_last_name_th` varchar(255) NOT NULL,
  `name_last_name_en` varchar(255) NOT NULL,
  `position_th` varchar(255) NOT NULL,
  `position_en` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `veterinary_team`
--

INSERT INTO `veterinary_team` (`id_team`, `name_last_name_th`, `name_last_name_en`, `position_th`, `position_en`, `image_path`, `status`) VALUES
(1, 'หมออนุชา ตรีวิจิตร', 'Dr. Anucha Triwijit', 'สัตวแพทย์ทั่วไป', 'General veterinarian', 'avatar5.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_home`
--
ALTER TABLE `about_home`
  ADD PRIMARY KEY (`id_about_home`);

--
-- Indexes for table `about_page`
--
ALTER TABLE `about_page`
  ADD PRIMARY KEY (`id_about_page`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `cover_page_data`
--
ALTER TABLE `cover_page_data`
  ADD PRIMARY KEY (`id_cover`);

--
-- Indexes for table `more_about_pet`
--
ALTER TABLE `more_about_pet`
  ADD PRIMARY KEY (`id_more_about_pet`);

--
-- Indexes for table `partner_data`
--
ALTER TABLE `partner_data`
  ADD PRIMARY KEY (`id_partner`);

--
-- Indexes for table `performance_team_data`
--
ALTER TABLE `performance_team_data`
  ADD PRIMARY KEY (`id_team`);

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation`
  ADD PRIMARY KEY (`id_quotation`);

--
-- Indexes for table `review_data`
--
ALTER TABLE `review_data`
  ADD PRIMARY KEY (`id_review`);

--
-- Indexes for table `service_content`
--
ALTER TABLE `service_content`
  ADD PRIMARY KEY (`id_service_content`);

--
-- Indexes for table `service_content_buy_sale`
--
ALTER TABLE `service_content_buy_sale`
  ADD PRIMARY KEY (`id_service_content_buy_sale`);

--
-- Indexes for table `service_header`
--
ALTER TABLE `service_header`
  ADD PRIMARY KEY (`id_service_header`);

--
-- Indexes for table `veterinary_team`
--
ALTER TABLE `veterinary_team`
  ADD PRIMARY KEY (`id_team`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_home`
--
ALTER TABLE `about_home`
  MODIFY `id_about_home` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `about_page`
--
ALTER TABLE `about_page`
  MODIFY `id_about_page` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cover_page_data`
--
ALTER TABLE `cover_page_data`
  MODIFY `id_cover` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `more_about_pet`
--
ALTER TABLE `more_about_pet`
  MODIFY `id_more_about_pet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `partner_data`
--
ALTER TABLE `partner_data`
  MODIFY `id_partner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `performance_team_data`
--
ALTER TABLE `performance_team_data`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `quotation`
--
ALTER TABLE `quotation`
  MODIFY `id_quotation` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสไอดี', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `review_data`
--
ALTER TABLE `review_data`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service_content`
--
ALTER TABLE `service_content`
  MODIFY `id_service_content` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service_content_buy_sale`
--
ALTER TABLE `service_content_buy_sale`
  MODIFY `id_service_content_buy_sale` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสคอนเท้นเซอร์วิส', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_header`
--
ALTER TABLE `service_header`
  MODIFY `id_service_header` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `veterinary_team`
--
ALTER TABLE `veterinary_team`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
