-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2017 at 06:05 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlbh`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `aid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apassword` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `astatus` tinyint(1) NOT NULL,
  `aemail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `aphone` int(12) NOT NULL,
  `adateofbirth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bid` int(11) NOT NULL,
  `baddress` text COLLATE utf8_unicode_ci NOT NULL,
  `btotalmoney` int(11) NOT NULL,
  `bcustomername` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bemail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bphone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bcreatedate` date NOT NULL,
  `bdeliverydate` date NOT NULL,
  `bstatus1` int(11) NOT NULL,
  `bstatus2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bid`, `baddress`, `btotalmoney`, `bcustomername`, `bemail`, `bphone`, `bcreatedate`, `bdeliverydate`, `bstatus1`, `bstatus2`) VALUES
(1, 'Hai Bà Trưng - Hà Nội', 103000, 'Duoc', 'dinhthiduoc100395@gmail.com', '0941934612', '2017-03-31', '2017-04-01', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `billdetail`
--

CREATE TABLE `billdetail` (
  `bdid` int(11) NOT NULL,
  `bdcount` int(11) NOT NULL,
  `bdunitprice` int(11) NOT NULL,
  `bdmoney` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `did` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(11) NOT NULL,
  `cname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`, `gid`) VALUES
(36, 'ÁO SÁT NÁCH', 57),
(37, 'ÁO THUN', 57),
(38, 'ÁO DÀI TAY', 57),
(39, 'SƠ MI', 57),
(40, 'ÁO LEN', 57),
(41, 'ÁO NỈ KHÔNG MŨ', 57),
(42, 'ÁO NỈ MŨ', 57),
(43, 'ÁO KHOÁC LEN', 57),
(44, 'ÁO JACKET', 57),
(45, 'QUẦN LEGGEING/TREGGING / JEGGING', 58),
(46, 'QUẦN VÁY', 58),
(47, 'QUẦN SHORTS', 58),
(48, 'QUẦN DÀI', 58),
(49, 'JEANS', 58),
(50, 'JOGGER', 58),
(51, 'VÁY/ĐẦM', 59),
(52, 'VÁY YẾM', 59),
(53, 'CHÂN VÁY', 59),
(54, 'JUMPSUIT', 59);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `coid` int(11) NOT NULL,
  `cocotent` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `codate` date NOT NULL,
  `pid` int(11) NOT NULL,
  `cuuser` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cuuser` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cuname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cuphone` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `cusex` tinyint(1) NOT NULL,
  `cudateofbirth` date NOT NULL,
  `cugmail` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(10) NOT NULL,
  `pname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pcomment` text COLLATE utf8_unicode_ci NOT NULL,
  `cid` int(11) NOT NULL,
  `pprice` int(10) NOT NULL,
  `pdescription` text COLLATE utf8_unicode_ci NOT NULL,
  `psold` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `pcomment`, `cid`, `pprice`, `pdescription`, `psold`) VALUES
(6, 'ÁO SÁT NÁCH BÒ SỮA NỮ.SỮA TƯƠI CARNY KITSCH.IN PATTERN.', '', 36, 349000, 'Sữa tươi - Carny Kitsch với nền tảng là graphic lấy cảm hứng từ các lễ hội chủa Châu Âu kết hợp với phong cách Sporty mang hơi thở thập niên 90 , tông màu tươi mới , dịu dàng mang lại cảm giác trẻ trung , hiện đại nhưng không kém phần mơ mộng, nổi loạn', 50),
(7, 'ÁO PHÔNG BÒ SỮA NỮ.SỮA TƯƠI CARNY KITSCH.CROP TOP.', '', 37, 349000, 'Xuát xứ : Thương hiệu Bò sữa', 30),
(8, 'ÁO PHÔNG BÒ SỮA NỮ.BASIC.CỔ TRÒN PHỐI PATCH.', '', 37, 249000, 'Xuất xứ: Thương hiệu Bò sữa', 500),
(9, 'ÁO PHÔNG BÒ SỮA NỮ.BASIC.CỔ TRÒN VẢI SẠN.', '', 37, 199000, 'Xuất xứ: Thương hiệu Bò sữa', 200),
(10, 'ÁO PHÔNG BÒ SỮA NỮ.SỮA ĐẶC SLOGAN.RỐI RẮM.', '', 37, 399000, 'Xuất xứ: Thương hiệu Bò sữa', 10),
(11, 'ÁO PHÔNG BÒ SỮA NỮ.SỮA ĐẶC SLOGAN.LƯƠNG TÂM.', '', 37, 399000, 'Xuất xứ: Thương hiệu Bò sữa', 0),
(12, 'ÁO PHÔNG BÒ SỮA NỮ.SỮA ĐẶC SLOGAN.TÍCH PHÂN.', '', 37, 399000, 'Xuất xứ: Thương hiệu Bò sữa', 60),
(13, 'ÁO PHÔNG BÒ SỮA NỮ.SỮA ĐẶC SLOGAN.TIỂU ĐƯỜNG.', '', 37, 399000, 'Xuất xứ: Thương hiệu Bò sữa', 100),
(14, 'ÁO PHÔNG BÒ SỮA NỮ.SỮA ĐẶC SLOGAN.YÊU NƯỚC.', '', 37, 399000, 'Xuất xứ: Thương hiệu Bò sữa', 200),
(15, 'ÁO PHÔNG BÒ SỮA NỮ.SỮA ĐẶC SLOGAN.SINH ĐẸP.', '', 37, 399000, 'Xuất xứ: Thương hiệu Bò sữa', 254),
(16, 'ÁO THUN DÀI TAY RAGLAN BÒ SỮA NỮ.SỮA ĐẶC LOGO.SKULL TSUNAMI.', '', 38, 224500, 'Xuất xứ: Thương hiệu Bò sữa', 324),
(17, 'ÁO THUN DÀI TAY BÒ SỮA NỮ.SỮA ĐẶC LOGO.SKULL CERAMIC.', '', 38, 224500, 'Xuất xứ: Thương hiệu Bò sữa', 24),
(18, 'ÁO THUN DÀI TAY BÒ SỮA NỮ.BASIC.TAY RAGLAN PHỐI MÀU', '', 38, 174500, 'Xuất xứ: Thương hiệu Bò sữa', 624),
(19, 'ÁO THUN DÀI TAY BÒ SỮA NỮ.BASIC.TAY RAGLAN PHỐI MÀU', '', 38, 174500, 'Xuất xứ: Thương hiệu Bò sữa', 125),
(20, 'QUẦN JEGGING JEANS BÒ SỮA NỮ.SUPER BASIC.DÁNG CƠ BẢN.', '', 45, 399000, 'Xuất xứ: Thương hiệu Bò sữa', 21),
(21, 'QUẦN JEGGING JEANS BÒ SỮA NỮ.SUPER BASIC.DÁNG CƠ BẢN.', '', 45, 399000, 'Xuất xứ: Thương hiệu Bò sữa', 341),
(22, 'QUẦN SHORTS BÒ SỮA NỮ.BASIC.DÁNG CƠ BẢN.', '', 47, 349, 'Xuất xứ: Thương hiệu Bò sữa', 521),
(23, 'VÁY HAI DÂY BÒ SỮA NỮ.SỮA TƯƠI CARNY KITSCH.IN PATTERN.', '', 51, 599000, 'Phong cách: Sporty\r\nChất liệu: Vải thô\r\nThiết kế: Cami dress\r\nBST: Sữa Tươi - Carny Kitsch với nền tảng là graphic lấy cảm hứng từ các lễ hộ của Châu Âu kết hợp với phong cách Sporty mang hơi thở thập niên 90, tông màu tươi mới, dịu nhẹ mang lại cảm giác trẻ trung, hiện đại nhưng cũng không kém phần mơ mộng và nổi loạn', 427),
(24, 'QUẦN YẾM BÒ SỮA NỮ. SỮA TƯƠI DENIM. THÊU GRAPHIC.', '', 52, 599000, 'Xuất xứ: Thương hiệu Bò sữa', 298),
(25, 'CHÂN VÁY BÒ SỮA NỮ.SỮA TƯƠI CARNY KITSCH.XẾP LY.', '', 53, 499000, 'Phong cách: Sporty\r\nChất liệu: Vải thô\r\nThiết kế: Tennis skirt\r\nBST: Sữa Tươi - Carny Kitsch với nền tảng là graphic lấy cảm hứng từ các lễ hộ của Châu Âu kết hợp với phong cách Sporty mang hơi thở thập niên 90, tông màu tươi mới, dịu nhẹ mang lại cảm giác trẻ trung, hiện đại nhưng cũng không kém phần mơ mộng và nổi loạn', 29),
(26, 'JUMPSUIT BÒ SỮA NỮ. SỮA TƯƠI DENIM. PHỐI DÂY TRANG TRÍ.', '', 54, 599000, 'Xuất xứ: Thương hiệu Bò sữa', 365);

-- --------------------------------------------------------

--
-- Table structure for table `productdetail`
--

CREATE TABLE `productdetail` (
  `did` int(11) NOT NULL,
  `dimage` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dcolor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dsize` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `dcount` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `ddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `productdetail`
--

INSERT INTO `productdetail` (`did`, `dimage`, `dcolor`, `dsize`, `dcount`, `pid`, `ddate`) VALUES
(36, 'aosatnach.jpg', 'Xanh dương', '0', 126, 6, '2017-04-04'),
(37, 'aothun2.jpg', 'trắng', '36', 34, 8, '2017-04-04'),
(38, 'aothun2_xanhduong.jpg', 'xanh dương', '37', 5, 8, '2017-04-04'),
(39, 'aothun2_doman.jpg', 'đỏ mận', 'M', 20, 8, '2017-04-04'),
(40, 'aothun3.jpg', 'xanh rêu', 'S', 30, 10, '2017-04-04'),
(41, 'aothun4.jpg', 'xanh da trời nhạt', 'M', 5, 11, '2017-04-05'),
(42, 'aothun5.jpg', 'xanh coban', 'S', 50, 12, '2017-04-05'),
(43, 'aothun6.jpg', 'đỏ', 'M', 4, 13, '2017-04-05'),
(44, 'aothun7.jpg', 'đen', 'L', 2, 14, '2017-04-04'),
(45, 'aothun8.jpg', 'trắng', 'L', 2, 15, '2017-04-05'),
(46, 'aothun8.jpg', 'trắng', 'S', 25, 15, '2017-04-05'),
(47, 'aodaitay1.jpg', 'mix', '', 0, 16, '0000-00-00'),
(49, 'aodaitay1.jpg', 'Mix', 'S', 20, 16, '2017-04-05'),
(50, 'aodaitay1.jpg', 'mix', 'M', 30, 16, '2017-04-05'),
(51, 'aodaitay2.jpg', 'đen', 'M', 16, 17, '2017-04-06'),
(52, 'aodaitay3_trang.jpg', 'trắng', 'M', 13, 18, '2017-04-05'),
(53, 'aodaitay3_do.jpg', 'đỏ', 'S', 10, 19, '2017-04-06'),
(58, 'quanlegging1_den.jpg', 'đen', '37', 13, 20, '2017-04-05'),
(59, 'quanlegging1_trangsua.jpg', 'trắng sữa', '38', 30, 21, '2017-04-05'),
(60, 'quanshort1_hong.jpg', 'hồng', 'S', 5, 22, '2017-04-06'),
(61, 'quanshort1_xanh.jpg', 'xanh', 'M', 21, 21, '2017-04-06'),
(62, 'vaydam.jpg', 'hồng', 'M', 30, 23, '2017-04-12'),
(63, 'yembo.jpg', 'xanh', 'S', 15, 24, '2017-04-06'),
(64, 'chanvay.jpg', 'hồng', '37', 20, 25, '2017-04-06'),
(65, 'jumpsuit.jpg', 'xanh', 'M', 35, 26, '2017-04-06');

-- --------------------------------------------------------

--
-- Table structure for table `productgroup`
--

CREATE TABLE `productgroup` (
  `gid` int(11) NOT NULL,
  `gname` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `productgroup`
--

INSERT INTO `productgroup` (`gid`, `gname`) VALUES
(57, 'Áo'),
(58, 'Quần'),
(59, 'Váy');

INSERT INTO `account` (`aid`, `apassword`, `astatus`, `aemail`, `aphone`, `adateofbirth`) VALUES ('admin', 'admin', '1', 'quangnguyen6295@gmail.com', '01635220904', '1995-07-08')
--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `billdetail`
--
ALTER TABLE `billdetail`
  ADD PRIMARY KEY (`bdid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`coid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cuuser`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `productdetail`
--
ALTER TABLE `productdetail`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `productgroup`
--
ALTER TABLE `productgroup`
  ADD PRIMARY KEY (`gid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `billdetail`
--
ALTER TABLE `billdetail`
  MODIFY `bdid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `coid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `productdetail`
--
ALTER TABLE `productdetail`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `productgroup`
--
ALTER TABLE `productgroup`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
