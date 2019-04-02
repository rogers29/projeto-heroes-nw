-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Abr-2019 às 14:26
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto_nw`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `heroes`
--

CREATE TABLE `heroes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` enum('Mago','Sarcedote','Lutador','Arqueiro','Cavaleiro','Espadachin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `expertise` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `life` int(11) NOT NULL,
  `defense` int(11) NOT NULL,
  `damage` int(11) NOT NULL,
  `attack_speed` double NOT NULL,
  `move_speed` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `heroes`
--

INSERT INTO `heroes` (`id`, `name`, `class`, `expertise`, `life`, `defense`, `damage`, `attack_speed`, `move_speed`, `created_at`, `updated_at`) VALUES
(1, 'Steven', 'Mago', 'Magia Branca', 2900, 200, 340, 1.3, 320, '2019-04-01 21:49:44', '2019-04-01 21:49:44'),
(2, 'Mona', 'Sarcedote', 'Cura, Magia Branca', 3100, 200, 180, 1.3, 330, '2019-04-01 21:50:47', '2019-04-01 21:50:47'),
(3, 'Morgan', 'Lutador', 'Tanker', 6000, 360, 130, 1.1, 300, '2019-04-01 21:51:58', '2019-04-01 21:51:58'),
(4, 'Rank', 'Mago', 'Invocação', 2500, 220, 300, 1.2, 330, '2019-04-01 21:52:49', '2019-04-01 21:52:49'),
(5, 'Braian', 'Arqueiro', 'Ataque à distância', 2400, 190, 330, 1.8, 320, '2019-04-01 21:53:58', '2019-04-01 21:53:58'),
(6, 'Lariel', 'Cavaleiro', 'Matador de Chefes, Antitanque', 3800, 250, 280, 1.5, 365, '2019-04-01 21:55:20', '2019-04-01 21:55:20'),
(7, 'Maycon', 'Cavaleiro', 'Matador de Chefes', 3400, 260, 290, 1.4, 365, '2019-04-01 21:59:56', '2019-04-01 21:59:56'),
(8, 'Rock', 'Lutador', 'Tanker', 5600, 400, 150, 1, 300, '2019-04-01 22:00:45', '2019-04-01 22:00:45'),
(9, 'Rakan', 'Espadachin', 'Antitanque', 300, 250, 400, 1.5, 325, '2019-04-01 22:01:35', '2019-04-01 22:01:35'),
(10, 'Grutar', 'Cavaleiro', 'Ataque em Área', 3700, 240, 190, 1.4, 345, '2019-04-01 22:02:37', '2019-04-01 22:02:37');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2019_04_01_000335_create_heroes_table', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `heroes`
--
ALTER TABLE `heroes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `heroes`
--
ALTER TABLE `heroes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
