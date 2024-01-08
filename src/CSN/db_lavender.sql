--
-- Cơ sở dữ liệu: `amthuctv`
--
DROP DATABASE IF EXISTS `lavender`;
CREATE DATABASE `lavender` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `lavender`;

CREATE TABLE `san_pham` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `ten_san_pham` varchar(255),
  `mo_ta` text,
  `gia_sp` float,
  `kich_co_sp` integer,
  `loai_san_pham` integer
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
CREATE TABLE `quyen` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `vaitro` varchar(255)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `nguoi_dung` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `ten_nguoi_dung` varchar(255),
  `email` varchar(255),
  `mat_khau` text,
  `quyen` integer
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `loai_sp` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `ten_loaisp` varchar(255),
  `mo_ta_loai` varchar(255)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `hinh_anh` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `ten_anh` varchar(255),
  `sp_id` integer
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `kich_co` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `ten_kich_co` varchar(255),
  `mo_ta_kc` varchar(255)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


ALTER TABLE `hinh_anh` ADD FOREIGN KEY (`sp_id`) REFERENCES `san_pham` (`id`);

ALTER TABLE `san_pham` ADD FOREIGN KEY (`kich_co_sp`) REFERENCES `kich_co` (`id`);

ALTER TABLE `san_pham` ADD FOREIGN KEY (`loai_san_pham`) REFERENCES `loai_sp` (`id`);

ALTER TABLE `nguoi_dung` ADD FOREIGN KEY (`quyen`) REFERENCES `quyen` (`id`);