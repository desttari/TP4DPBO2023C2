-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 01, 2023 at 01:24 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tp_mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `id_negara` int NOT NULL,
  `join_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_negara` (`id_negara`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `email`, `phone`, `id_negara`, `join_date`) VALUES
(1, 'Areena', 'areena@gmail.com', '05412312344', 1, '2023-05-09 01:14:38'),
(2, 'Bob', 'bob@gmail.com', '05412345678', 2, '2023-05-10 02:30:00'),
(3, 'Catherine', 'catherine@gmail.com', '05498765432', 3, '2023-05-11 07:45:00'),
(4, 'David', 'david@gmail.com', '05455555555', 4, '2023-05-12 09:20:00'),
(5, 'Emma', 'emma@gmail.com', '05488888888', 5, '2023-05-13 03:10:00'),
(6, 'Fiona', 'fiona@gmail.com', '05477777777', 6, '2023-05-14 04:55:00'),
(7, 'George', 'george@gmail.com', '05499999999', 7, '2023-05-15 11:30:00'),
(8, 'Hannah', 'hannah@gmail.com', '05444444444', 8, '2023-05-16 06:20:00'),
(9, 'Isaac', 'isaac@gmail.com', '05466666666', 9, '2023-05-17 08:45:00'),
(10, 'Jessica', 'jessica@gmail.com', '05422222222', 10, '2023-05-18 10:10:00'),
(11, 'Kevin', 'kevin@gmail.com', '05412341234', 11, '2023-05-19 05:05:00'),
(12, 'Linda', 'linda@gmail.com', '05423452345', 12, '2023-05-20 02:50:00'),
(13, 'Michael', 'michael@gmail.com', '05488887777', 13, '2023-05-21 07:30:00'),
(14, 'Natalie', 'natalie@gmail.com', '05411112222', 14, '2023-05-22 09:55:00'),
(15, 'Oliver', 'oliver@gmail.com', '05433334444', 15, '2023-05-23 04:40:00'),
(16, 'Penelope', 'penelope@gmail.com', '05455556666', 16, '2023-05-24 12:25:00'),
(17, 'Quentin', 'quentin@gmail.com', '05477778888', 17, '2023-05-25 08:15:00'),
(18, 'Rachel', 'rachel@gmail.com', '05499990000', 18, '2023-05-26 10:40:00'),
(19, 'Samuel', 'samuel@gmail.com', '05422221111', 19, '2023-05-27 05:35:00'),
(20, 'Tiffany', 'tiffany@gmail.com', '05444442222', 20, '2023-05-28 02:20:00'),
(21, 'Uma', 'uma@gmail.com', '05466663333', 21, '2023-05-29 07:00:00'),
(22, 'Victor', 'victor@gmail.com', '05488884444', 22, '2023-05-30 09:25:00'),
(23, 'Wendy', 'wendy@gmail.com', '05411113333', 23, '2023-05-31 04:10:00'),
(24, 'Xavier', 'xavier@gmail.com', '05433332222', 24, '2023-06-01 11:55:00'),
(25, 'Yvonne', 'yvonne@gmail.com', '05455551111', 25, '2023-06-02 07:45:00'),
(26, 'Zane', 'zane@gmail.com', '05477770000', 26, '2023-06-03 10:10:00'),
(27, 'Alice', 'alice@gmail.com', '05412349999', 27, '2023-06-04 05:05:00'),
(28, 'Benjamin', 'benjamin@gmail.com', '05423440000', 28, '2023-06-05 02:50:00'),
(29, 'Charlotte', 'charlotte@gmail.com', '05488883333', 29, '2023-06-06 07:30:00'),
(30, 'Daniel', 'daniel@gmail.com', '05411118888', 30, '2023-06-07 09:55:00'),
(31, 'Elizabeth', 'elizabeth@gmail.com', '05433337777', 31, '2023-06-08 04:40:00'),
(32, 'Felix', 'felix@gmail.com', '05455554444', 32, '2023-06-09 12:25:00'),
(33, 'Grace', 'grace@gmail.com', '05477775555', 33, '2023-06-10 08:15:00'),
(34, 'Henry', 'henry@gmail.com', '05499994444', 34, '2023-06-11 10:40:00'),
(35, 'Isabella', 'isabella@gmail.com', '05422223333', 35, '2023-06-12 05:35:00'),
(36, 'Jacob', 'jacob@gmail.com', '05444441111', 36, '2023-06-13 02:20:00'),
(37, 'Kate', 'kate@gmail.com', '05466660000', 37, '2023-06-14 07:00:00'),
(38, 'Liam', 'liam@gmail.com', '05488889999', 38, '2023-06-15 09:25:00'),
(39, 'Mia', 'mia@gmail.com', '05411110000', 39, '2023-06-16 04:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `negara`
--

DROP TABLE IF EXISTS `negara`;
CREATE TABLE IF NOT EXISTS `negara` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `negara`
--

INSERT INTO `negara` (`id`, `name`) VALUES
(1, 'Venezuela'),
(2, 'Brazil'),
(3, 'Algeria'),
(4, 'Andorra'),
(5, 'Angola'),
(6, 'Antigua and Barbuda'),
(7, 'Argentina'),
(8, 'Indonesias'),
(9, 'Australia'),
(10, 'Austria'),
(11, 'America'),
(12, 'Armenia'),
(13, 'Bahamas'),
(14, 'Bahrain'),
(15, 'Bangladesh'),
(16, 'Barbados'),
(17, 'Belarus'),
(18, 'Belgium'),
(19, 'Belize'),
(20, 'Benin'),
(21, 'Bhutan'),
(22, 'Bolivia'),
(23, 'Bosnia and Herzegovina'),
(24, 'Botswana'),
(25, 'Brazil'),
(26, 'Brunei'),
(27, 'Bulgaria'),
(28, 'Burkina Faso'),
(29, 'Burundi'),
(30, 'Cabo Verde'),
(31, 'Cambodia'),
(32, 'Cameroon'),
(33, 'Canada'),
(34, 'Central African Republic'),
(35, 'Chad'),
(36, 'Chile'),
(37, 'China'),
(38, 'Colombia'),
(39, 'Comoros'),
(40, 'Congo (Congo-Brazzaville)'),
(41, 'Costa Rica'),
(42, 'Croatia'),
(43, 'Cuba'),
(44, 'Cyprus'),
(45, 'Czechia (Czech Republic)'),
(46, 'Democratic Republic of the Congo'),
(47, 'Denmark'),
(48, 'Djibouti'),
(49, 'Dominica'),
(50, 'Dominican Republic'),
(51, 'Ecuador'),
(52, 'Egypt'),
(53, 'El Salvador'),
(54, 'Equatorial Guinea'),
(55, 'Eritrea'),
(56, 'Estonia'),
(57, 'Eswatini (fmr. \"Swaziland\")'),
(58, 'Ethiopia'),
(59, 'Fiji'),
(60, 'Finland'),
(61, 'France'),
(62, 'Gabon'),
(63, 'Gambia'),
(64, 'Georgia'),
(65, 'Germany'),
(66, 'Ghana'),
(67, 'Greece'),
(68, 'Grenada'),
(69, 'Guatemala'),
(70, 'Guinea'),
(71, 'Guinea-Bissau'),
(72, 'Guyana'),
(73, 'Haiti'),
(74, 'Holy See'),
(75, 'Honduras'),
(76, 'Hungary'),
(77, 'Iceland'),
(78, 'India'),
(79, 'Indonesia'),
(80, 'Iran'),
(81, 'Iraq'),
(82, 'Ireland'),
(83, 'Israel'),
(84, 'Italy'),
(85, 'Jamaica'),
(86, 'Japan'),
(87, 'Jordan'),
(88, 'Kazakhstan'),
(89, 'Kenya');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_ibfk_1` FOREIGN KEY (`id_negara`) REFERENCES `negara` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
