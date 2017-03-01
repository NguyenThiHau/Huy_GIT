-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2016 at 03:39 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banhang_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `MaBinhLuan` int(11) NOT NULL,
  `TenDangNhap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MaSanPham` int(11) NOT NULL,
  `NgayBinhLuan` date NOT NULL,
  `NoiDung` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`MaBinhLuan`, `TenDangNhap`, `MaSanPham`, `NgayBinhLuan`, `NoiDung`) VALUES
(1, 'boybeo68', 7, '2016-11-21', 'sdfsdfsdf'),
(2, 'xuananh', 3, '2016-11-21', 'chúc thầy 1 ngày vui vẻ');

-- --------------------------------------------------------

--
-- Table structure for table `ct_dondat`
--

CREATE TABLE `ct_dondat` (
  `MaDonDat` int(11) NOT NULL,
  `MaSanPham` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ct_dondat`
--

INSERT INTO `ct_dondat` (`MaDonDat`, `MaSanPham`, `SoLuong`) VALUES
(4, 1, 3),
(4, 3, 6),
(5, 14, 5),
(5, 27, 1);

-- --------------------------------------------------------

--
-- Table structure for table `danhgia`
--

CREATE TABLE `danhgia` (
  `MaSanPham` int(11) NOT NULL,
  `TenDangNhap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhgia`
--

INSERT INTO `danhgia` (`MaSanPham`, `TenDangNhap`, `NoiDung`) VALUES
(1, 'boybeo68', '5'),
(2, 'boybeo68', '4'),
(12, 'boybeo68', '1');

-- --------------------------------------------------------

--
-- Table structure for table `dondat`
--

CREATE TABLE `dondat` (
  `MaDonDat` int(11) NOT NULL,
  `TenDangNhap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MaNhanVien` int(11) NOT NULL,
  `TrangThai` text COLLATE utf8_unicode_ci NOT NULL,
  `NoiGiao` text COLLATE utf8_unicode_ci NOT NULL,
  `NgayDat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dondat`
--

INSERT INTO `dondat` (`MaDonDat`, `TenDangNhap`, `MaNhanVien`, `TrangThai`, `NoiGiao`, `NgayDat`) VALUES
(4, 'boybeo68', 1, '0', 'Bach Mai', '2016-11-14'),
(5, 'boybeo68', 1, '0', 'Bach Mai', '2016-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

CREATE TABLE `loaisp` (
  `MaLoaiSP` int(11) NOT NULL,
  `TenLoai` text COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`MaLoaiSP`, `TenLoai`, `MoTa`) VALUES
(1, 'Áo', ''),
(2, 'Mắt kính', ''),
(3, 'Giày', '');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNhanVien` int(11) NOT NULL,
  `HoTen` text COLLATE utf8_unicode_ci NOT NULL,
  `TenDangNhap` text COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` text COLLATE utf8_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` text COLLATE utf8_unicode_ci NOT NULL,
  `DienThoai` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MaNhanVien`, `HoTen`, `TenDangNhap`, `MatKhau`, `NgaySinh`, `GioiTinh`, `DienThoai`) VALUES
(1, 'admin', 'admin', '123', '2016-11-01', 'M', '01638592325');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSanPham` int(11) NOT NULL,
  `TenSanPham` text COLLATE utf8_unicode_ci NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `Anh` text COLLATE utf8_unicode_ci NOT NULL,
  `DonGia` decimal(10,0) NOT NULL,
  `ThongTin` text COLLATE utf8_unicode_ci NOT NULL,
  `TrangThai` text COLLATE utf8_unicode_ci NOT NULL,
  `MaLoaiSP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSanPham`, `TenSanPham`, `SoLuong`, `Anh`, `DonGia`, `ThongTin`, `TrangThai`, `MaLoaiSP`) VALUES
(1, 'Áo thun 1', 10, 'ao1.png', '150000', 'Thông tin sản phẩm áo thun 1', '', 1),
(2, 'Áo thun 2', 5, 'ao2.png', '300000', 'Thông tin sản phẩm áo thun 2', '', 1),
(3, 'Áo thun 3', 17, 'ao3.png', '250000', 'Thông tin sản phẩm áo thun 3', '', 1),
(4, 'Áo thun 4', 9, 'ao4.png', '200000', 'Thông tin sản phẩm áo thun 4', '', 1),
(5, 'Áo thun 5', 10, 'ao5.png', '165000', 'Thông tin sản phẩm áo thun 5', '', 1),
(6, 'Áo thun 6', 10, 'ao6.png', '90000', 'Thông tin sản phẩm áo thun 6', '', 1),
(7, 'Áo thun 7', 30, 'ao7.jpg', '20000', 'Thông tin sản phẩm áo thun 7', '', 1),
(8, 'Áo thun 8', 2, 'ao8.jpg', '300000', 'Thông tin sản phẩm áo thun 8', '', 1),
(9, 'Áo thun 9', 29, 'ao9.jpg', '159000', 'Thông tin sản phẩm áo thun 9', '', 1),
(10, 'Áo thun 10', 25, 'ao10.jpg', '150000', 'Thông tin sản phẩm áo thun 10', '', 1),
(12, 'Mắt kính 1', 5, 'kinh1.jpg', '300000', 'Thông tin sản phẩm mắt kính 1', '', 2),
(13, 'Mắt kính 2', 15, 'kinh2.jpg', '350000', 'Thông tin sản phẩm mắt kính 2', '', 2),
(14, 'Mắt kính 3', 20, 'kinh3.jpg', '200000', 'Thông tin sản phẩm mắt kính 3', '', 2),
(15, 'Mắt kính 4', 12, 'kinh4.jpg', '350000', 'Thông tin sản phẩm mắt kính 4', '', 2),
(16, 'Mắt kính 5', 30, 'kinh5.jpg', '355000', 'Thông tin sản phẩm mắt kính 5', '', 2),
(17, 'Mắt kính 6', 26, 'kinh2.jpg', '360000', 'Thông tin sản phẩm mắt kính 6', '', 2),
(18, 'Mắt kính 7', 15, 'kinh7.jpg', '170000', 'Thông tin sản phẩm mắt kính 7', '', 2),
(19, 'Mắt kính 8', 8, 'kinh8.jpg', '180000', 'Thông tin sản phẩm mắt kính 8', '', 2),
(20, 'Mắt kính 9', 19, 'kinh9.jpg', '290000', 'Thông tin sản phẩm mắt kính 9', '', 2),
(21, 'Mắt kính 10', 22, 'kinh10.jpg', '310000', 'Thông tin sản phẩm mắt kính 10', '', 2),
(22, 'Giày 1', 10, 'giay1.png', '1000000', 'Thông tin sản phẩm giày thể thao 1', '', 3),
(23, 'Giày 2', 5, 'giay5.png', '900000', 'Thông tin sản phẩm giày thể thao 2', '', 3),
(24, 'Giày 3', 12, 'giay3.png', '500000', 'Thông tin sản phẩm giày thể thao 3', '', 3),
(25, 'Giày 4', 24, 'giay4.png', '750000', 'Thông tin sản phẩm giày thể thao 4', '', 3),
(26, 'Giày 5', 30, 'giay5.png', '200000', 'Thông tin sản phẩm giày thể thao 5', '', 3),
(27, 'Giày 6', 26, 'giay6.png', '2000000', 'Thông tin sản phẩm giày thể thao 6', '', 3),
(28, 'Giày 7', 37, 'giay7.png', '600000', 'Thông tin sản phẩm giày thể thao 7', '', 3),
(29, 'Giày 8', 18, 'giay8.png', '1800000', 'Thông tin sản phẩm giày thể thao 8', '', 3),
(30, 'Giày 9', 29, 'giay9.png', '900000', 'Thông tin sản phẩm giày thể thao 9', '', 3),
(31, 'Giày 10', 8, 'giay10.png', '100000', 'Thông tin sản phẩm giày thể thao 10', '', 3),
(33, 'áo 15', 12, 'ao3.png', '300', 'áo test thêm', 'chưa giao', 1);

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE `thanhvien` (
  `TenDangNhap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` text COLLATE utf8_unicode_ci NOT NULL,
  `HoTen` text COLLATE utf8_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` text COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` text COLLATE utf8_unicode_ci NOT NULL,
  `DienThoai` text COLLATE utf8_unicode_ci NOT NULL,
  `Email` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`TenDangNhap`, `MatKhau`, `HoTen`, `NgaySinh`, `GioiTinh`, `DiaChi`, `DienThoai`, `Email`) VALUES
('boybeo68', 'lonpro68', 'nguyễn thạc tùng', '1995-08-06', 'M', 'Bach Mai', '01638592325', 'boybeo68@gmail.com'),
('xuananh', '123', 'nguyen xuan anh', '2011-06-05', 'F', 'mỹ đình', '090909090', 'sdfasdf@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`MaBinhLuan`),
  ADD KEY `TenDangNhap` (`TenDangNhap`),
  ADD KEY `MaSanPham` (`MaSanPham`);

--
-- Indexes for table `ct_dondat`
--
ALTER TABLE `ct_dondat`
  ADD PRIMARY KEY (`MaDonDat`,`MaSanPham`),
  ADD KEY `ctdondat_sanpham` (`MaSanPham`);

--
-- Indexes for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`MaSanPham`,`TenDangNhap`),
  ADD KEY `danhgia_thanhvien` (`TenDangNhap`);

--
-- Indexes for table `dondat`
--
ALTER TABLE `dondat`
  ADD PRIMARY KEY (`MaDonDat`),
  ADD KEY `TenDangNhap` (`TenDangNhap`),
  ADD KEY `MaNhanVien` (`MaNhanVien`);

--
-- Indexes for table `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`MaLoaiSP`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNhanVien`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSanPham`),
  ADD KEY `MaLoaiSP` (`MaLoaiSP`);

--
-- Indexes for table `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`TenDangNhap`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `MaBinhLuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dondat`
--
ALTER TABLE `dondat`
  MODIFY `MaDonDat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `MaLoaiSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MaNhanVien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_sanpham` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`),
  ADD CONSTRAINT `binhluan_thanhvien` FOREIGN KEY (`TenDangNhap`) REFERENCES `thanhvien` (`TenDangNhap`);

--
-- Constraints for table `ct_dondat`
--
ALTER TABLE `ct_dondat`
  ADD CONSTRAINT `ctdondat_dondat` FOREIGN KEY (`MaDonDat`) REFERENCES `dondat` (`MaDonDat`),
  ADD CONSTRAINT `ctdondat_sanpham` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`);

--
-- Constraints for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_sanpham` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`),
  ADD CONSTRAINT `danhgia_thanhvien` FOREIGN KEY (`TenDangNhap`) REFERENCES `thanhvien` (`TenDangNhap`);

--
-- Constraints for table `dondat`
--
ALTER TABLE `dondat`
  ADD CONSTRAINT `dondat_nhanvien` FOREIGN KEY (`MaNhanVien`) REFERENCES `nhanvien` (`MaNhanVien`),
  ADD CONSTRAINT `dondat_thanhvien` FOREIGN KEY (`TenDangNhap`) REFERENCES `thanhvien` (`TenDangNhap`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_loaisp` FOREIGN KEY (`MaLoaiSP`) REFERENCES `loaisp` (`MaLoaiSP`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
