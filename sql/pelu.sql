-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: database:3306
-- Generation Time: Dec 20, 2021 at 05:10 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelu`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_event`
--

CREATE TABLE `detail_event` (
  `event_id` int NOT NULL,
  `line` int NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `details` varchar(500) DEFAULT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `detail_event`
--

INSERT INTO `detail_event` (`event_id`, `line`, `name`, `quantity`, `details`, `price`) VALUES
(1, 1, 'Caracterización completa', '10', '', 100),
(1, 2, 'Caracterización básica', '10', '', 100);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `details` varchar(300) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  `admin` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `surname`, `email`, `details`, `birthdate`, `password`, `active`, `admin`) VALUES
(1, 'Ana', 'Navarro', 'ana@pelu.com', 'Ana es la responsable del centro desde sus inicios. Es creativa y emprendedora, le encanta aportar nuevas ideas.', '2001-04-01', '$2y$10$bQ5bD/5TLCBAb4z2hZk8uOiU8Ztok1hSEg1bNlHjV563Hr/BQeAii', 0, 1),
(2, 'Marta', ' Martínez', 'martamartinez@pelu.com', 'Trabajadora salón', '1996-05-20', '$2y$10$Htuahwrbi9G94YKyEGdqKeSpH9t1yc2exyQgkc5poJem3CV3sUksq', 0, 0),
(3, 'Tamara', 'Pueyo', 'tamarapueyo@pelu.com', 'Empleada salon', '1996-05-20', '$2y$10$Fzxj5CKCK57nfHsLdBTUvOhS/eQJXBIhc9cAJik.2YW44CSMAKQo.', 0, 0),
(4, 'Adriana', 'Atienza', 'adrianaatienza@pelu.com', 'Dueña de Bellisima', '1996-05-20', '$2y$10$6rvOPokNa/CkcAbHCL2hRuj6Es0Cs96DczHKF.ENpYGQnT8pbCM76', 0, 0),
(5, 'Jorge', 'Puyol', 'jorgepuyol@pelu.com', 'Empleado eventos', '1996-05-20', '$2y$10$8I18/uW7MmUJVFdZE6qPl.EdO7QYYlDXU9Yzh2YVRANGo/Z91BGj.', 0, 0),
(6, 'Brandon', 'Garcia', 'brandongarcia@pelu.com', 'Empleado eventos', '1996-05-20', '$2y$10$gOBFCudCXAZi3bPR89.6DunsPgM3NyYLVSRdipYhdPEqKNerRA8US', 0, 0),
(7, 'Miguel', 'Fernandez', 'miguelfernandez@pelu.com', 'Empleado eventos', '1996-05-20', '$2y$10$tRqlm2.r2BL9KEPBhmg21eF.unthajybQSovAtV05/udVlIbZVWOu', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee_service`
--

CREATE TABLE `employee_service` (
  `employee_id` int NOT NULL,
  `service_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `employee_service`
--

INSERT INTO `employee_service` (`employee_id`, `service_id`) VALUES
(2, 5),
(3, 5),
(4, 5),
(5, 5),
(2, 7),
(2, 12),
(3, 12),
(2, 15),
(5, 15),
(4, 19),
(2, 20),
(2, 22),
(3, 22),
(4, 24),
(5, 26),
(2, 27),
(3, 29),
(4, 29);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `client` varchar(50) DEFAULT NULL,
  `details` varchar(500) DEFAULT NULL,
  `start_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name`, `client`, `details`, `start_date`) VALUES
(1, 'Maria Antonieta', 'Teatro las esquinas', '10 caracterizaciones para personajes prinicpales y 50 secundarios', '2021-09-04');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `details` varchar(500) DEFAULT NULL,
  `price` double NOT NULL,
  `time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `gender`, `details`, `price`, `time`) VALUES
(5, 'Corte pelo corto', 'hombre', 'Cortado de pelo corto(hombre)', 6, 15),
(6, 'Corte media melena', 'hombre', 'Corte para melena', 8, 20),
(7, 'Corte pelo largo', 'mujer', 'Corte pelo largo mujer', 10, 25),
(8, 'Tinte en pelo corto y medio', 'mujer', 'corte+tinte', 15, 35),
(9, 'Tinte en pelo largo', 'mujer', 'Tinte en pelo largo mujer', 18, 45),
(10, 'Tinte + decoloración ', 'mujer', 'Tinte + decoloración en pelo corto y medio ', 20, 45),
(11, 'Tinte + decoloración', 'mujer', 'Tinte + decoloración en pelo largo', 23, 50),
(12, 'Reflejos ', 'mujer', 'Reflejos pelo corto y medio', 15, 60),
(13, 'Reflejos', 'mujer', 'Reflejos pelo largo', 18, 65),
(14, 'Mechas', 'mujer', 'Mechas pelo corto y medio (plata, gorro o peine)', 20, 45),
(15, 'Mechas', 'mujer', 'Mechas pelo largo (plata, gorro o peine)', 23, 45),
(16, 'Tinte + mechas', 'mujer', 'Tinte + mechas pelo corto y medio', 30, 55),
(17, 'Tinte + mechas ', 'mujer', 'Tinte + mechas pelo largo', 33, 55),
(18, 'Permanente rizada o lisa', 'mujer', 'Permanente rizada o lisa en pelo corto y medio', 20, 45),
(19, 'Permanente rizada o lisa', 'mujer', 'Permanente rizada o lisa en pelo largo', 23, 50),
(20, 'Balayage ', 'mujer', 'Balayage en pelo corto y medio', 25, 40),
(21, 'Balayage ', 'mujer', 'Balayage en pelo largo', 30, 50),
(22, 'Lavado', 'mujer', 'Lavado de pelo', 5, 5),
(23, 'Peinado final', 'mujer', 'Peinado final', 5, 10),
(24, 'Hidratación/Reestructuración', 'mujer', 'Hidratación/Reestructuración pelo corto y medio', 10, 40),
(25, 'Hidratación/Reestructuración', 'mujer', 'Hidratación/Reestructuración en pelo largo', 13, 20),
(26, 'Semi-recogido', 'mujer', 'Semi-recogido en pelo corto o medio', 10, 20),
(27, 'Semi-recogido', 'mujer', 'Semi-recogido en pelo largo', 13, 20),
(28, 'Recogido', 'mujer', 'Recogido en pelo corto y medio', 13, 10),
(29, 'Recogido', 'mujer', 'Recogido en pelo largo', 18, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_event`
--
ALTER TABLE `detail_event`
  ADD PRIMARY KEY (`event_id`,`line`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `employee_service`
--
ALTER TABLE `employee_service`
  ADD PRIMARY KEY (`employee_id`,`service_id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_event`
--
ALTER TABLE `detail_event`
  ADD CONSTRAINT `detail_event_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`);

--
-- Constraints for table `employee_service`
--
ALTER TABLE `employee_service`
  ADD CONSTRAINT `employee_service_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`),
  ADD CONSTRAINT `employee_service_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;