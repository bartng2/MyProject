-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2023 at 07:12 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlyhssv`
--

-- --------------------------------------------------------

--
-- Table structure for table `chedouutien`
--

CREATE TABLE `chedouutien` (
  `id` int(11) NOT NULL,
  `MaSV` varchar(50) DEFAULT NULL,
  `Hoten` varchar(50) DEFAULT NULL,
  `Lop` varchar(50) DEFAULT NULL,
  `CheDoUuTien` varchar(50) DEFAULT NULL,
  `id_student` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chedouutien`
--

INSERT INTO `chedouutien` (`id`, `MaSV`, `Hoten`, `Lop`, `CheDoUuTien`, `id_student`) VALUES
(9, 'MS01', 'Nguyễn Hải Nam', '71HT21', NULL, 23),
(10, 'MS02', 'Trịnh Thị Thúy', '71HT21', NULL, 24),
(11, 'MS03', 'Nguyễn Xuân Thái', '71HT21', NULL, 25),
(12, 'MS04', 'Nguyễn Như Ngọc', '71CC22', NULL, 26),
(13, 'MS05', 'Trịnh Thị Tâm', '71CC22', NULL, 27),
(14, 'MS06', 'Đỗ Hùng Dũng', '71HT21', NULL, 28),
(15, '', '', '', NULL, 29);

-- --------------------------------------------------------

--
-- Table structure for table `khoa`
--

CREATE TABLE `khoa` (
  `id` int(11) NOT NULL,
  `MaKhoa` varchar(50) DEFAULT NULL,
  `TenKhoa` varchar(50) DEFAULT NULL,
  `SoNganh` int(11) DEFAULT NULL,
  `SoLop` int(11) DEFAULT NULL,
  `SoSinhVien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lienhesv`
--

CREATE TABLE `lienhesv` (
  `id` int(11) NOT NULL,
  `MaSV` varchar(50) DEFAULT NULL,
  `Hoten` varchar(50) DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `QueQuan` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Sdt` varchar(50) DEFAULT NULL,
  `id_student` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lienhesv`
--

INSERT INTO `lienhesv` (`id`, `MaSV`, `Hoten`, `NgaySinh`, `QueQuan`, `Email`, `Sdt`, `id_student`) VALUES
(5, 'MS01', 'Nguyễn Hải Nam', NULL, NULL, NULL, NULL, 23),
(6, 'MS02', 'Trịnh Thị Thúy', NULL, NULL, NULL, NULL, 24),
(7, 'MS03', 'Nguyễn Xuân Thái', NULL, NULL, NULL, NULL, 25),
(8, 'MS04', 'Nguyễn Như Ngọc', NULL, NULL, NULL, NULL, 26),
(9, 'MS05', 'Trịnh Thị Tâm', NULL, NULL, NULL, NULL, 27),
(10, 'MS06', 'Đỗ Hùng Dũng', NULL, NULL, NULL, NULL, 28),
(11, '', '', NULL, NULL, NULL, NULL, 29);

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE `lop` (
  `id` int(11) NOT NULL,
  `MaLop` varchar(50) DEFAULT NULL,
  `TenLop` varchar(50) DEFAULT NULL,
  `MaNganh` varchar(50) DEFAULT NULL,
  `MaKhoa` varchar(50) DEFAULT NULL,
  `SoSinhVien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nganh`
--

CREATE TABLE `nganh` (
  `id` int(11) NOT NULL,
  `MaNganh` varchar(50) DEFAULT NULL,
  `TenNganh` varchar(50) DEFAULT NULL,
  `MaKhoa` varchar(50) DEFAULT NULL,
  `SoLop` int(11) DEFAULT NULL,
  `SoSinhVien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(11) NOT NULL,
  `MaUsers` varchar(50) DEFAULT NULL,
  `Hoten` varchar(50) DEFAULT NULL,
  `ChucVu` varchar(50) DEFAULT NULL,
  `QuyenHan` varchar(50) DEFAULT NULL,
  `Sdt` varchar(10) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Anh` varchar(255) DEFAULT NULL,
  `Gioitinh` varchar(3) DEFAULT NULL,
  `MatKhauDangNhap` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `MaUsers`, `Hoten`, `ChucVu`, `QuyenHan`, `Sdt`, `Email`, `Anh`, `Gioitinh`, `MatKhauDangNhap`) VALUES
(14, 'MS01', 'Nguyễn Xuân Thái', 'Quản trị hệ thống', 'ADMIN', '0368009154', 'admin@gmail.com', NULL, 'nam', '123'),
(17, 'MS0011', 'Nguyễn Hải Nam', '', 'USER1', '', '', 'cach-chup-anh-the-dep-e1664379835782_1.jpg', '', '');

--
-- Triggers `nguoidung`
--
DELIMITER $$
CREATE TRIGGER `add_account_trigger` AFTER INSERT ON `nguoidung` FOR EACH ROW BEGIN
    IF NEW.QuyenHan = 'ADMIN' THEN
        INSERT INTO taikhoanqt (MaDangNhap, MatKhauDangNhap) VALUES (NEW.MaUsers, NEW.MatKhauDangNhap);
    ELSEIF NEW.QuyenHan = 'USER1' THEN
        INSERT INTO taikhoanql (MaDangNhap, MatKhauDangNhap) VALUES (NEW.MaUsers, NEW.MatKhauDangNhap);
    ELSEIF NEW.QuyenHan = 'USER2' THEN
        INSERT INTO taikhoangv (MaDangNhap, MatKhauDangNhap) VALUES (NEW.MaUsers, NEW.MatKhauDangNhap);
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_account_trigger` AFTER UPDATE ON `nguoidung` FOR EACH ROW BEGIN
    IF NEW.QuyenHan = 'ADMIN' THEN
        UPDATE taikhoanqt SET MatKhauDangNhap = NEW.MatKhauDangNhap WHERE MaDangNhap = NEW.MaUsers;
    ELSEIF NEW.QuyenHan = 'USER1' THEN
        UPDATE taikhoanql SET MatKhauDangNhap = NEW.MatKhauDangNhap WHERE MaDangNhap = NEW.MaUsers;
    ELSEIF NEW.QuyenHan = 'USER2' THEN
        UPDATE taikhoangv SET MatKhauDangNhap = NEW.MatKhauDangNhap WHERE MaDangNhap = NEW.MaUsers;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `id` int(11) NOT NULL,
  `MaSV` varchar(50) DEFAULT NULL,
  `Hoten` varchar(50) DEFAULT NULL,
  `Lop` varchar(50) DEFAULT NULL,
  `NamNhapHoc` int(11) DEFAULT NULL,
  `Khoas` varchar(50) DEFAULT NULL,
  `Nganh` varchar(50) DEFAULT NULL,
  `Khoa` varchar(50) DEFAULT NULL,
  `NamTotNghiep` varchar(150) DEFAULT NULL,
  `TinhTrangHocTap` varchar(50) DEFAULT NULL,
  `Anh` varchar(255) NOT NULL,
  `Gioitinh` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`id`, `MaSV`, `Hoten`, `Lop`, `NamNhapHoc`, `Khoas`, `Nganh`, `Khoa`, `NamTotNghiep`, `TinhTrangHocTap`, `Anh`, `Gioitinh`) VALUES
(23, 'MS01', 'Nguyễn Hải Nam', '71HT21', 2020, '71', 'Hệ thống thông tin', 'Công nghệ thông tin', '', 'Đang theo học', 'Mau-anh-the-nam_4.jpg', 'Nam'),
(24, 'MS02', 'Trịnh Thị Thúy', '71HT21', 2020, '71', 'Hệ thống thông tin', 'Công nghệ thông tin', '', 'Đang theo học', '', 'Nữ'),
(25, 'MS03', 'Nguyễn Xuân Thái', '71HT21', 2020, '71', 'Hệ thống thông tin', 'Công nghệ thông tin', '', 'Đang theo học', '', 'Nam'),
(26, 'MS04', 'Nguyễn Như Ngọc', '71CC22', 2020, '71', 'Công nghệ giao thông', 'Giao thông', '', 'Đang theo học', '', 'Nữ'),
(27, 'MS05', 'Trịnh Thị Tâm', '71CC22', 2020, '71', 'Công nghệ giao thông', 'Giao thông', '', 'Đang theo học', '', 'Nữ'),
(28, 'MS06', 'Đỗ Hùng Dũng', '71HT21', 2020, '71', 'Hệ thống thông tin', 'Công nghệ thông tin', '', 'Đang theo học', '', 'Nam'),
(29, '', '', '', 0, '', '', '', '', '----', '', '---');

--
-- Triggers `sinhvien`
--
DELIMITER $$
CREATE TRIGGER `add_lh` AFTER INSERT ON `sinhvien` FOR EACH ROW BEGIN
    INSERT INTO `lienhesv` (id_student, MaSV, Hoten)
    VALUES (NEW.id, NEW.MaSV, NEW.Hoten);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `add_lienhe` AFTER INSERT ON `sinhvien` FOR EACH ROW BEGIN
    INSERT INTO `chedouutien` (id_student, MaSV, Hoten, Lop)
    VALUES (NEW.id, NEW.MaSV, NEW.Hoten, NEW.Lop);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `add_tn` AFTER INSERT ON `sinhvien` FOR EACH ROW BEGIN
    IF NEW.NamTotNghiep IS NOT NULL THEN
        INSERT INTO totnghiep (MaSV, Hoten, Lop, Khoa, Nganh, NamTotNghiep, id_student)
        VALUES (NEW.MaSV, NEW.Hoten, NEW.Lop, NEW.Khoa, NEW.Nganh, NEW.NamTotNghiep, NEW.id);
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `add_ttht` AFTER INSERT ON `sinhvien` FOR EACH ROW BEGIN
    INSERT INTO tthoctap (MaSV, Hoten, TinhTrangHocTap, id_student)
    VALUES (NEW.MaSV, NEW.Hoten, NEW.TinhTrangHocTap, NEW.id);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `taikhoangv`
--

CREATE TABLE `taikhoangv` (
  `id` int(11) NOT NULL,
  `MaDangNhap` varchar(50) DEFAULT NULL,
  `MatKhauDangNhap` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoangv`
--

INSERT INTO `taikhoangv` (`id`, `MaDangNhap`, `MatKhauDangNhap`) VALUES
(1, 'MS0011', '1');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoanql`
--

CREATE TABLE `taikhoanql` (
  `id` int(11) NOT NULL,
  `MaDangNhap` varchar(50) DEFAULT NULL,
  `MatKhauDangNhap` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoanql`
--

INSERT INTO `taikhoanql` (`id`, `MaDangNhap`, `MatKhauDangNhap`) VALUES
(2, 'MS0012', '112'),
(4, 'MS0011', '');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoanqt`
--

CREATE TABLE `taikhoanqt` (
  `id` int(11) NOT NULL,
  `MaDangNhap` varchar(50) DEFAULT NULL,
  `MatKhauDangNhap` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoanqt`
--

INSERT INTO `taikhoanqt` (`id`, `MaDangNhap`, `MatKhauDangNhap`) VALUES
(1, 'MS01', '123');

-- --------------------------------------------------------

--
-- Table structure for table `totnghiep`
--

CREATE TABLE `totnghiep` (
  `id` int(11) NOT NULL,
  `MaSV` varchar(50) DEFAULT NULL,
  `Hoten` varchar(50) DEFAULT NULL,
  `Lop` varchar(50) DEFAULT NULL,
  `Khoa` varchar(50) DEFAULT NULL,
  `Nganh` varchar(50) DEFAULT NULL,
  `NamTotNghiep` int(11) DEFAULT NULL,
  `XepLoaiTotNghiep` varchar(50) DEFAULT NULL,
  `id_student` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `totnghiep`
--

INSERT INTO `totnghiep` (`id`, `MaSV`, `Hoten`, `Lop`, `Khoa`, `Nganh`, `NamTotNghiep`, `XepLoaiTotNghiep`, `id_student`) VALUES
(5, 'MS01', 'Nguyễn Hải Nam', '71HT21', 'Công nghệ thông tin', 'Hệ thống thông tin', 0, NULL, 23),
(6, 'MS02', 'Trịnh Thị Thúy', '71HT21', 'Công nghệ thông tin', 'Hệ thống thông tin', 0, NULL, 24),
(7, 'MS03', 'Nguyễn Xuân Thái', '71HT21', 'Công nghệ thông tin', 'Hệ thống thông tin', 0, NULL, 25),
(8, 'MS04', 'Nguyễn Như Ngọc', '71CC22', 'Giao thông', 'Công nghệ giao thông', 0, NULL, 26),
(9, 'MS05', 'Trịnh Thị Tâm', '71CC22', 'Giao thông', 'Công nghệ giao thông', 0, NULL, 27),
(10, 'MS06', 'Đỗ Hùng Dũng', '71HT21', 'Công nghệ thông tin', 'Hệ thống thông tin', 0, NULL, 28),
(11, '', '', '', '', '', 0, NULL, 29);

-- --------------------------------------------------------

--
-- Table structure for table `tthoctap`
--

CREATE TABLE `tthoctap` (
  `id` int(11) NOT NULL,
  `MaSV` varchar(50) DEFAULT NULL,
  `Hoten` varchar(50) DEFAULT NULL,
  `Lop` varchar(50) DEFAULT NULL,
  `SoTinChi` int(11) DEFAULT NULL,
  `TinhTrangHocTap` varchar(50) DEFAULT NULL,
  `id_student` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tthoctap`
--

INSERT INTO `tthoctap` (`id`, `MaSV`, `Hoten`, `Lop`, `SoTinChi`, `TinhTrangHocTap`, `id_student`) VALUES
(5, 'MS01', 'Nguyễn Hải Nam', NULL, NULL, 'Đang theo học', 23),
(6, 'MS02', 'Trịnh Thị Thúy', NULL, NULL, 'Đang theo học', 24),
(7, 'MS03', 'Nguyễn Xuân Thái', NULL, NULL, 'Đang theo học', 25),
(8, 'MS04', 'Nguyễn Như Ngọc', NULL, NULL, 'Đang theo học', 26),
(9, 'MS05', 'Trịnh Thị Tâm', NULL, NULL, 'Đang theo học', 27),
(10, 'MS06', 'Đỗ Hùng Dũng', NULL, NULL, 'Đang theo học', 28),
(11, '', '', NULL, NULL, '----', 29);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chedouutien`
--
ALTER TABLE `chedouutien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_st_ut` (`id_student`);

--
-- Indexes for table `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lienhesv`
--
ALTER TABLE `lienhesv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_st_lh` (`id_student`);

--
-- Indexes for table `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nganh`
--
ALTER TABLE `nganh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taikhoangv`
--
ALTER TABLE `taikhoangv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taikhoanql`
--
ALTER TABLE `taikhoanql`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taikhoanqt`
--
ALTER TABLE `taikhoanqt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `totnghiep`
--
ALTER TABLE `totnghiep`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_st_tn` (`id_student`);

--
-- Indexes for table `tthoctap`
--
ALTER TABLE `tthoctap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_st_ht` (`id_student`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chedouutien`
--
ALTER TABLE `chedouutien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `lienhesv`
--
ALTER TABLE `lienhesv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `taikhoangv`
--
ALTER TABLE `taikhoangv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `taikhoanql`
--
ALTER TABLE `taikhoanql`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `taikhoanqt`
--
ALTER TABLE `taikhoanqt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `totnghiep`
--
ALTER TABLE `totnghiep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tthoctap`
--
ALTER TABLE `tthoctap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chedouutien`
--
ALTER TABLE `chedouutien`
  ADD CONSTRAINT `fk_st_ut` FOREIGN KEY (`id_student`) REFERENCES `sinhvien` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `lienhesv`
--
ALTER TABLE `lienhesv`
  ADD CONSTRAINT `fk_st_lh` FOREIGN KEY (`id_student`) REFERENCES `sinhvien` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `totnghiep`
--
ALTER TABLE `totnghiep`
  ADD CONSTRAINT `fk_st_tn` FOREIGN KEY (`id_student`) REFERENCES `sinhvien` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tthoctap`
--
ALTER TABLE `tthoctap`
  ADD CONSTRAINT `fk_st_ht` FOREIGN KEY (`id_student`) REFERENCES `sinhvien` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
