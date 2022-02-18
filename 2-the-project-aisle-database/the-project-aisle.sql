-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2021 at 03:07 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the-project-aisle`
--

-- --------------------------------------------------------

--
-- Table structure for table `context_data`
--

CREATE TABLE `context_data` (
  `auto_id` int(11) NOT NULL,
  `context` varchar(10000) NOT NULL,
  `description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `context_data`
--

INSERT INTO `context_data` (`auto_id`, `context`, `description`) VALUES
(10, 'Gender', '[NULL]'),
(11, 'LGBT', '[NULL]'),
(12, 'Color', '[NULL]'),
(13, 'religion', '[NULL]');

-- --------------------------------------------------------

--
-- Table structure for table `knowledgebase`
--

CREATE TABLE `knowledgebase` (
  `auto_id` int(200) NOT NULL,
  `keyword` mediumtext NOT NULL,
  `context_tags` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `language` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `knowledgebase`
--

INSERT INTO `knowledgebase` (`auto_id`, `keyword`, `context_tags`, `description`, `language`) VALUES
(15, 'ලොක්කො', '[\"Gender\",\"LGBT\"]', '[NULL]', 'Sinhala'),
(16, 'ගෙදර', '[\"Gender\",\"religion\"]', '[NULL]', 'Sinhala'),
(17, 'ගියෙ', '[\"LGBT\"]', '[NULL]', 'Sinhala');

-- --------------------------------------------------------

--
-- Table structure for table `processed_data`
--

CREATE TABLE `processed_data` (
  `auto_id` int(200) NOT NULL,
  `account_id` varchar(10000) NOT NULL,
  `target_data` mediumtext NOT NULL,
  `hate_keywords` mediumtext NOT NULL,
  `analyzed_date` date NOT NULL,
  `analyzed_time` varchar(100) NOT NULL,
  `processed_type` varchar(100) NOT NULL,
  `result` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `processed_data`
--

INSERT INTO `processed_data` (`auto_id`, `account_id`, `target_data`, `hate_keywords`, `analyzed_date`, `analyzed_time`, `processed_type`, `result`) VALUES
(73, '', 'Project Files', '[]', '2021-11-11', '18:34:57', '[TEXT-DATA]', '[NON-HATE]'),
(74, 'Lella Hutan', 'අනිත්', '[]', '2021-11-11', '18:35:38', '[TEXT-DATA]', '[NON-HATE]'),
(75, 'Lella Hutan', 'අනිත්', '[]', '2021-11-11', '18:35:39', '[TEXT-DATA]', '[NON-HATE]'),
(76, 'Lella Hutan', 'අනිත් ලොක්කො පාරෙ රංඩුත් වෙලා ගෙදර ගියෙ 😂', '[ලොක්කො, ගෙදර, ගියෙ]', '2021-11-11', '18:39:56', '[TEXT-DATA]', '[HATE]'),
(77, 'Lella Hutan', 'අනිත් ලොක්කො පාරෙ රංඩුත් වෙලා ගෙදර ගියෙ 😂', '[ලොක්කො, ගෙදර, ගියෙ]', '2021-11-11', '18:40:03', '[TEXT-DATA]', '[HATE]'),
(78, 'Lella Hutan', 'ගුරුවරු අස්සට උඹලෑ තාත්තා ගියේ මොකද ? උන් බනින්නේ බොලෑ තාත්තට', '[]', '2021-11-11', '18:40:47', '[TEXT-DATA]', '[NON-HATE]'),
(79, 'Lella Hutan', 'අනිත් ලොක්කො පාරෙ රංඩුත් වෙලා ගෙදර ගියෙ 😂', '[ලොක්කො, ගෙදර, ගියෙ]', '2021-11-11', '18:40:55', '[TEXT-DATA]', '[HATE]'),
(80, 'Lella Hutan', 'ලොක්කො', '[ලොක්කො]', '2021-11-11', '18:42:01', '[TEXT-DATA]', '[HATE]'),
(81, 'Lella Hutan', 'ලොක්කො', '[ලොක්කො]', '2021-11-11', '18:42:08', '[TEXT-DATA]', '[HATE]'),
(82, 'Lella Hutan', 'ireactsr', '[]', '2021-11-11', '18:46:57', '[TEXT-DATA]', '[NON-HATE]');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `auto_id` int(200) NOT NULL,
  `social_media` varchar(1000) NOT NULL,
  `account_name` varchar(1000) NOT NULL,
  `account_type` varchar(1000) NOT NULL,
  `url` mediumtext NOT NULL,
  `network_size` varchar(100) NOT NULL,
  `main_user_name` varchar(1000) NOT NULL,
  `language` varchar(1000) NOT NULL,
  `remarks` mediumtext NOT NULL,
  `number_of_time_tested` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`auto_id`, `social_media`, `account_name`, `account_type`, `url`, `network_size`, `main_user_name`, `language`, `remarks`, `number_of_time_tested`) VALUES
(1, 'Facebook', 'Lella Hutan', 'Page', 'https://www.facebook.com/lellahutanpage/', '501232', '[NULL]', 'Sinhala', '[NULL]', '0'),
(2, 'Facebook', 'Gangster Rathne', 'Page', 'https://www.facebook.com/Gangsterrathne/', '\r\n382833', '[NULL]', 'Sinhala', '[NULL]', '0'),
(3, 'Facebook', 'Buwa', 'Page', 'https://www.facebook.com/buwaSL/', '\r\n152914', '[NULL]', 'Sinhala', '[NULL]', '0'),
(4, 'Facebook', 'Sampath Athukorala', 'Page', 'https://www.facebook.com/sampathathukoralaofficialpage/', '\r\n119145', '[NULL]', 'Sinhala', '[NULL]', '0'),
(5, 'Twitter', 'Sampath Athukorala', 'Page', 'https://www.facebook.com/sampathathukoralaofficialpage/', '\r\n119145', '[NULL]', 'Sinhala', '[NULL]', '0'),
(6, 'Twitter', 'Sampath Athukorala', 'Page', 'https://www.facebook.com/sampathathukoralaofficialpage/', '\r\n119145', '[NULL]', 'Sinhala', '[NULL]', '0'),
(7, 'Twitter', 'Page', 'Page', 'https://www.facebook.com/sampathathukoralaofficialpage/', '11914', '[NULL]', 'Sinhala', '[NULL]', '0'),
(9, 'Facebook', 'Sri Lankan Blood - 1', 'Page', 'https://www.facebook.com/SriLankanBlood1/', '31158', '[NULL]', 'Sinhala', '[NULL]', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `auto_id` int(200) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`auto_id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$4SrAzmWiQDktwbqCu4h6uuahPXvncyK8GVYcYVi5lQAaAs1kti/wS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `context_data`
--
ALTER TABLE `context_data`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `knowledgebase`
--
ALTER TABLE `knowledgebase`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `processed_data`
--
ALTER TABLE `processed_data`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`auto_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `context_data`
--
ALTER TABLE `context_data`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `knowledgebase`
--
ALTER TABLE `knowledgebase`
  MODIFY `auto_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `processed_data`
--
ALTER TABLE `processed_data`
  MODIFY `auto_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `auto_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `auto_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
