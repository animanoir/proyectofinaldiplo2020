-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 02:16 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idoctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `id_doctor` int(11) NOT NULL,
  `edad` int(100) NOT NULL,
  `telefono` int(11) NOT NULL,
  `domicilio` varchar(100) NOT NULL,
  `sangre` text NOT NULL,
  `alergias` varchar(100) NOT NULL,
  `habitacion` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pacientes`
--

INSERT INTO `pacientes` (`id`, `nombre`, `id_doctor`, `edad`, `telefono`, `domicilio`, `sangre`, `alergias`, `habitacion`) VALUES
(1, 'Guadalupe Salazar Slytherin Hernández', 1, 40, 442145789, '641  Hiney Road', 'a+', 'ninguna', 78),
(2, 'Ernesto Felipe Sanchez Sanchez', 2, 18, 441578489, '4658  Sun Valley Road', 'o+', 'paracetamol', 97),
(3, 'Dante Reyes Retana Garcia', 1, 87, 778414523, '410  Valley Lane', 'a+', 'ninguna', 45),
(4, 'Edgar Inquilino Rodartes Sutón', 2, 74, 444124158, '1793  Poplar Chase Lane', 'a-', 'ninguna', 21),
(5, 'Alejandro Luis Calzada Jasso', 2, 30, 44124856, 'Infierno #666', 'a+', 'ninguna', 36),
(6, 'yosy', 0, 14, 0, 'Gaby 78', 'a+', 'paracetamol', 5),
(7, 'Ulises', 2, 78, 0, 'Ningun Lugar', 'a+', 'no', 2),
(8, 'Oscar', 1, 45, 44741478, 'Nem 89', 'a+', 'no', 6),
(9, 'Alexis', 2, 78, 44145487, 'Casa 14', 'a+', 'ninguna', 56);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `tipo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `created_at`, `tipo`) VALUES
(1, 'drjose', 'drjose', '2020-09-29 00:25:51', 1),
(2, 'drandrea', 'drandrea', '2020-09-29 00:26:05', 1),
(3, 'admin1', 'admin1', '2020-09-29 18:56:39', 2),
(4, 'lab1', 'lab1', '2020-09-29 18:56:54', 3),
(5, 'enfermero', 'enfermero', '2020-09-29 21:32:22', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
