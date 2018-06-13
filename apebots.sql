-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-04-2018 a las 20:41:04
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `apebots`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `classrooms`
--

CREATE TABLE `classrooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `classrooms`
--

INSERT INTO `classrooms` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Primero A', 'Aula 101', '2018-04-11 21:26:15', '2018-04-11 21:26:15'),
(2, 'Primero B', 'Aula 102', '2018-04-11 21:26:15', '2018-04-11 21:26:15'),
(3, 'Segundo A', 'Aula 103', '2018-04-11 21:26:15', '2018-04-11 21:26:15'),
(4, 'Segundo B', 'Aula 104', '2018-04-11 21:26:15', '2018-04-11 21:26:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `classroom_user`
--

CREATE TABLE `classroom_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `classroom_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `classroom_user`
--

INSERT INTO `classroom_user` (`id`, `classroom_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 4, '2018-04-11 21:26:17', '2018-04-11 21:26:17'),
(2, 1, 5, '2018-04-11 21:26:17', '2018-04-11 21:26:17'),
(3, 1, 6, '2018-04-11 21:26:18', '2018-04-11 21:26:18'),
(4, 1, 7, '2018-04-11 21:26:18', '2018-04-11 21:26:18'),
(5, 1, 8, '2018-04-11 21:26:18', '2018-04-11 21:26:18'),
(6, 1, 9, '2018-04-11 21:26:19', '2018-04-11 21:26:19'),
(7, 1, 10, '2018-04-11 21:26:19', '2018-04-11 21:26:19'),
(8, 1, 11, '2018-04-11 21:26:20', '2018-04-11 21:26:20'),
(9, 1, 12, '2018-04-11 21:26:20', '2018-04-11 21:26:20'),
(10, 1, 13, '2018-04-11 21:26:20', '2018-04-11 21:26:20'),
(11, 2, 14, '2018-04-11 21:26:21', '2018-04-11 21:26:21'),
(12, 2, 15, '2018-04-11 21:26:21', '2018-04-11 21:26:21'),
(13, 2, 16, '2018-04-11 21:26:21', '2018-04-11 21:26:21'),
(14, 2, 17, '2018-04-11 21:26:22', '2018-04-11 21:26:22'),
(15, 2, 18, '2018-04-11 21:26:22', '2018-04-11 21:26:22'),
(16, 2, 19, '2018-04-11 21:26:22', '2018-04-11 21:26:22'),
(17, 2, 20, '2018-04-11 21:26:23', '2018-04-11 21:26:23'),
(18, 2, 21, '2018-04-11 21:26:23', '2018-04-11 21:26:23'),
(19, 2, 22, '2018-04-11 21:26:23', '2018-04-11 21:26:23'),
(20, 2, 23, '2018-04-11 21:26:24', '2018-04-11 21:26:24'),
(21, 3, 24, '2018-04-11 21:26:24', '2018-04-11 21:26:24'),
(22, 3, 25, '2018-04-11 21:26:24', '2018-04-11 21:26:24'),
(23, 3, 26, '2018-04-11 21:26:25', '2018-04-11 21:26:25'),
(24, 3, 27, '2018-04-11 21:26:25', '2018-04-11 21:26:25'),
(25, 3, 28, '2018-04-11 21:26:25', '2018-04-11 21:26:25'),
(26, 3, 29, '2018-04-11 21:26:26', '2018-04-11 21:26:26'),
(27, 3, 30, '2018-04-11 21:26:26', '2018-04-11 21:26:26'),
(28, 3, 31, '2018-04-11 21:26:26', '2018-04-11 21:26:26'),
(29, 3, 32, '2018-04-11 21:26:27', '2018-04-11 21:26:27'),
(30, 3, 33, '2018-04-11 21:26:27', '2018-04-11 21:26:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(20, '2018_04_04_011056_create_users_table', 1),
(21, '2018_04_04_011057_create_password_resets_table', 1),
(22, '2018_04_04_023457_create_roles_table', 1),
(23, '2018_04_04_023659_create_role_user_table', 1),
(24, '2018_04_07_050336_create_classrooms_table', 1),
(25, '2018_04_07_051100_create_classroom_user_table', 1),
(26, '2018_04_10_192908_create_monsters_table', 1),
(27, '2018_04_10_195633_create_monster_user_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monsters`
--

CREATE TABLE `monsters` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `monsters`
--

INSERT INTO `monsters` (`id`, `name`, `description`, `accion`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'pacocha.billie', 'Monster predator deMrs. Wanda Auer MD', '3', 4, '2018-04-11 21:26:17', '2018-04-11 22:16:21'),
(2, 'frederic.walter', 'Monster predator deMiss Pascale Stracke', '4', 5, '2018-04-11 21:26:17', '2018-04-11 22:26:15'),
(3, 'sarina.thompson', 'Monster predator deMr. Melany Ruecker', '0', 6, '2018-04-11 21:26:18', '2018-04-11 21:26:18'),
(4, 'gust50', 'Monster predator deLarissa Roberts', '1', 7, '2018-04-11 21:26:18', '2018-04-11 21:39:09'),
(5, 'temmerich', 'Monster predator deChelsey McLaughlin', '0', 8, '2018-04-11 21:26:19', '2018-04-11 21:26:19'),
(6, 'simonis.brandy', 'Monster predator deMs. Cathryn Barton', '0', 9, '2018-04-11 21:26:19', '2018-04-11 21:26:19'),
(7, 'kallie49', 'Monster predator deEliza Trantow', '0', 10, '2018-04-11 21:26:19', '2018-04-11 21:26:19'),
(8, 'dickens.viva', 'Monster predator deDelaney Russel V', '3', 11, '2018-04-11 21:26:20', '2018-04-11 22:12:27'),
(9, 'sean.brekke', 'Monster predator deMina Bauch', '0', 12, '2018-04-11 21:26:20', '2018-04-11 21:26:20'),
(10, 'annie.ferry', 'Monster predator deKeara Wehner', '0', 13, '2018-04-11 21:26:20', '2018-04-11 21:26:20'),
(11, 'greg57', 'Monster depredador deWinnifred Cole', '0', 14, '2018-04-11 21:26:21', '2018-04-11 21:26:21'),
(12, 'kmccullough', 'Monster depredador deAdeline Kassulke', '4', 15, '2018-04-11 21:26:21', '2018-04-11 22:13:03'),
(13, 'ukulas', 'Monster depredador deAlexys Dickens', '0', 16, '2018-04-11 21:26:21', '2018-04-11 21:26:21'),
(14, 'dangelo.oconnell', 'Monster depredador deWatson Farrell V', '0', 17, '2018-04-11 21:26:22', '2018-04-11 21:26:22'),
(15, 'kathryn50', 'Monster depredador deShanon Kirlin V', '0', 18, '2018-04-11 21:26:22', '2018-04-11 21:26:22'),
(16, 'roob.payton', 'Monster depredador deForest Robel', '0', 19, '2018-04-11 21:26:22', '2018-04-11 21:26:22'),
(17, 'stewart44', 'Monster depredador deLlewellyn Willms', '0', 20, '2018-04-11 21:26:23', '2018-04-11 21:26:23'),
(18, 'vmurphy', 'Monster depredador deProf. Santos Murphy', '0', 21, '2018-04-11 21:26:23', '2018-04-11 21:26:23'),
(19, 'adolphus.welch', 'Monster depredador deJairo Watsica', '0', 22, '2018-04-11 21:26:23', '2018-04-11 21:26:23'),
(20, 'vivienne90', 'Monster depredador deMakayla Stehr', '0', 23, '2018-04-11 21:26:24', '2018-04-11 21:26:24'),
(21, 'nbruen', 'Monster cariñositp deProf. Rose Bosco II', '0', 24, '2018-04-11 21:26:24', '2018-04-11 21:26:24'),
(22, 'romaguera.eve', 'Monster cariñositp deGeorge Dicki', '0', 25, '2018-04-11 21:26:24', '2018-04-11 21:26:24'),
(23, 'fleuschke', 'Monster cariñositp deMs. Alvena Grimes DDS', '0', 26, '2018-04-11 21:26:25', '2018-04-11 21:26:25'),
(24, 'audie48', 'Monster cariñositp deJerrod Wuckert', '0', 27, '2018-04-11 21:26:25', '2018-04-11 21:26:25'),
(25, 'gust.robel', 'Monster cariñositp deLottie Olson', '0', 28, '2018-04-11 21:26:25', '2018-04-11 21:26:25'),
(26, 'cartwright.reid', 'Monster cariñositp deLupe Ernser', '0', 29, '2018-04-11 21:26:26', '2018-04-11 21:26:26'),
(27, 'fanny.schmidt', 'Monster cariñositp deMr. Tyrique Padberg', '0', 30, '2018-04-11 21:26:26', '2018-04-11 21:26:26'),
(28, 'sunny96', 'Monster cariñositp deMr. Keshawn Abernathy III', '0', 31, '2018-04-11 21:26:26', '2018-04-11 21:26:26'),
(29, 'natalie.hintz', 'Monster cariñositp deErica Dach', '0', 32, '2018-04-11 21:26:27', '2018-04-11 21:26:27'),
(30, 'kemmer.shad', 'Monster cariñositp deMrs. Maci Rutherford', '0', 33, '2018-04-11 21:26:27', '2018-04-11 21:26:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monster_user`
--

CREATE TABLE `monster_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `monster_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `monster_user`
--

INSERT INTO `monster_user` (`id`, `monster_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 4, '2018-04-11 21:26:17', '2018-04-11 21:26:17'),
(2, 2, 5, '2018-04-11 21:26:18', '2018-04-11 21:26:18'),
(3, 3, 6, '2018-04-11 21:26:18', '2018-04-11 21:26:18'),
(4, 4, 7, '2018-04-11 21:26:18', '2018-04-11 21:26:18'),
(5, 5, 8, '2018-04-11 21:26:19', '2018-04-11 21:26:19'),
(6, 6, 9, '2018-04-11 21:26:19', '2018-04-11 21:26:19'),
(7, 7, 10, '2018-04-11 21:26:19', '2018-04-11 21:26:19'),
(8, 8, 11, '2018-04-11 21:26:20', '2018-04-11 21:26:20'),
(9, 9, 12, '2018-04-11 21:26:20', '2018-04-11 21:26:20'),
(10, 10, 13, '2018-04-11 21:26:20', '2018-04-11 21:26:20'),
(11, 11, 14, '2018-04-11 21:26:21', '2018-04-11 21:26:21'),
(12, 12, 15, '2018-04-11 21:26:21', '2018-04-11 21:26:21'),
(13, 13, 16, '2018-04-11 21:26:21', '2018-04-11 21:26:21'),
(14, 14, 17, '2018-04-11 21:26:22', '2018-04-11 21:26:22'),
(15, 15, 18, '2018-04-11 21:26:22', '2018-04-11 21:26:22'),
(16, 16, 19, '2018-04-11 21:26:23', '2018-04-11 21:26:23'),
(17, 17, 20, '2018-04-11 21:26:23', '2018-04-11 21:26:23'),
(18, 18, 21, '2018-04-11 21:26:23', '2018-04-11 21:26:23'),
(19, 19, 22, '2018-04-11 21:26:23', '2018-04-11 21:26:23'),
(20, 20, 23, '2018-04-11 21:26:24', '2018-04-11 21:26:24'),
(21, 21, 24, '2018-04-11 21:26:24', '2018-04-11 21:26:24'),
(22, 22, 25, '2018-04-11 21:26:24', '2018-04-11 21:26:24'),
(23, 23, 26, '2018-04-11 21:26:25', '2018-04-11 21:26:25'),
(24, 24, 27, '2018-04-11 21:26:25', '2018-04-11 21:26:25'),
(25, 25, 28, '2018-04-11 21:26:25', '2018-04-11 21:26:25'),
(26, 26, 29, '2018-04-11 21:26:26', '2018-04-11 21:26:26'),
(27, 27, 30, '2018-04-11 21:26:26', '2018-04-11 21:26:26'),
(28, 28, 31, '2018-04-11 21:26:26', '2018-04-11 21:26:26'),
(29, 29, 32, '2018-04-11 21:26:27', '2018-04-11 21:26:27'),
(30, 30, 33, '2018-04-11 21:26:27', '2018-04-11 21:26:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2018-04-11 21:26:15', '2018-04-11 21:26:15'),
(2, 'teacher', 'Profesor', '2018-04-11 21:26:15', '2018-04-11 21:26:15'),
(3, 'parent', 'Padre', '2018-04-11 21:26:15', '2018-04-11 21:26:15'),
(4, 'student', 'Estudiante', '2018-04-11 21:26:15', '2018-04-11 21:26:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2018-04-11 21:26:16', '2018-04-11 21:26:16'),
(2, 2, 2, '2018-04-11 21:26:16', '2018-04-11 21:26:16'),
(3, 3, 3, '2018-04-11 21:26:17', '2018-04-11 21:26:17'),
(4, 4, 4, '2018-04-11 21:26:17', '2018-04-11 21:26:17'),
(5, 4, 5, '2018-04-11 21:26:17', '2018-04-11 21:26:17'),
(6, 4, 6, '2018-04-11 21:26:18', '2018-04-11 21:26:18'),
(7, 4, 7, '2018-04-11 21:26:18', '2018-04-11 21:26:18'),
(8, 4, 8, '2018-04-11 21:26:18', '2018-04-11 21:26:18'),
(9, 4, 9, '2018-04-11 21:26:19', '2018-04-11 21:26:19'),
(10, 4, 10, '2018-04-11 21:26:19', '2018-04-11 21:26:19'),
(11, 4, 11, '2018-04-11 21:26:20', '2018-04-11 21:26:20'),
(12, 4, 12, '2018-04-11 21:26:20', '2018-04-11 21:26:20'),
(13, 4, 13, '2018-04-11 21:26:20', '2018-04-11 21:26:20'),
(14, 4, 14, '2018-04-11 21:26:21', '2018-04-11 21:26:21'),
(15, 4, 15, '2018-04-11 21:26:21', '2018-04-11 21:26:21'),
(16, 4, 16, '2018-04-11 21:26:21', '2018-04-11 21:26:21'),
(17, 4, 17, '2018-04-11 21:26:22', '2018-04-11 21:26:22'),
(18, 4, 18, '2018-04-11 21:26:22', '2018-04-11 21:26:22'),
(19, 4, 19, '2018-04-11 21:26:22', '2018-04-11 21:26:22'),
(20, 4, 20, '2018-04-11 21:26:23', '2018-04-11 21:26:23'),
(21, 4, 21, '2018-04-11 21:26:23', '2018-04-11 21:26:23'),
(22, 4, 22, '2018-04-11 21:26:23', '2018-04-11 21:26:23'),
(23, 4, 23, '2018-04-11 21:26:24', '2018-04-11 21:26:24'),
(24, 4, 24, '2018-04-11 21:26:24', '2018-04-11 21:26:24'),
(25, 4, 25, '2018-04-11 21:26:24', '2018-04-11 21:26:24'),
(26, 4, 26, '2018-04-11 21:26:25', '2018-04-11 21:26:25'),
(27, 4, 27, '2018-04-11 21:26:25', '2018-04-11 21:26:25'),
(28, 4, 28, '2018-04-11 21:26:25', '2018-04-11 21:26:25'),
(29, 4, 29, '2018-04-11 21:26:26', '2018-04-11 21:26:26'),
(30, 4, 30, '2018-04-11 21:26:26', '2018-04-11 21:26:26'),
(31, 4, 31, '2018-04-11 21:26:26', '2018-04-11 21:26:26'),
(32, 4, 32, '2018-04-11 21:26:27', '2018-04-11 21:26:27'),
(33, 4, 33, '2018-04-11 21:26:27', '2018-04-11 21:26:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin', 'admin@admin.com', '$2y$10$8gUF2VwHoLXmWxj.9Odxq.A54Xlkf9oLTCKfF4TQ1y7o162I8ljh6', NULL, '2018-04-11 21:26:16', '2018-04-11 21:26:16'),
(2, 'Proffesor', 'teacher', 'teacher@teacher.com', '$2y$10$ynHDNcQEwYOULC0ps8uRIOa1YrYRKzp3S99rnGKKGV/hD8ZqMtB9y', NULL, '2018-04-11 21:26:16', '2018-04-11 21:26:16'),
(3, 'Parents', 'parent', 'parent@parent.com', '$2y$10$ZrYktu6hWmf51vEp/H6A0.SMjhq/mARQuwD/d2MFmPljulhgTQJO.', NULL, '2018-04-11 21:26:17', '2018-04-11 21:26:17'),
(4, 'Mrs. Wanda Auer MD', 'pacocha.billie', 'earl19@example.net', '$2y$10$X/WJZY2bNCxYfP01/RWUiOIsnDKIgHYOdUGC9dV6LjCQFN7BGizzi', NULL, '2018-04-11 21:26:17', '2018-04-11 21:26:17'),
(5, 'Miss Pascale Stracke', 'frederic.walter', 'sschmidt@example.net', '$2y$10$ecl00aDoU2IegmyAp/QiYOHLw.0b8K.GIJbhdg5wITMtu50oRXSoa', NULL, '2018-04-11 21:26:17', '2018-04-11 21:26:17'),
(6, 'Mr. Melany Ruecker', 'sarina.thompson', 'justen22@example.net', '$2y$10$3biZi37kOGhwFi05lNrxU.rR9i3QBodetgXyGxvQQCBijO2zSps7y', NULL, '2018-04-11 21:26:18', '2018-04-11 21:26:18'),
(7, 'Larissa Roberts', 'gust50', 'loma73@example.net', '$2y$10$Uit7MgZ5p1JJ9Cu7XeM0CeJ58L2cj7DxAqRx15khR2GOFAr7Db3f6', NULL, '2018-04-11 21:26:18', '2018-04-11 21:26:18'),
(8, 'Chelsey McLaughlin', 'temmerich', 'crist.travon@example.org', '$2y$10$7KCgU492lxI5bKUZb19WjeBX4zYMJjP4fPo4n1dnbWo7Q8KfLN8ha', NULL, '2018-04-11 21:26:18', '2018-04-11 21:26:18'),
(9, 'Ms. Cathryn Barton', 'simonis.brandy', 'schultz.lavon@example.net', '$2y$10$GCcYL3uc6kX5MS10JiT5..6DmYLs5qj0lx/qUL25.FBU3ZotK2REm', NULL, '2018-04-11 21:26:19', '2018-04-11 21:26:19'),
(10, 'Eliza Trantow', 'kallie49', 'yost.heather@example.net', '$2y$10$X7COtXZxvApf7mDUFJR9S.CG0HK.gDe2E3SBZQXMkdwf6.X9CDFiS', NULL, '2018-04-11 21:26:19', '2018-04-11 21:26:19'),
(11, 'Delaney Russel V', 'dickens.viva', 'will.treutel@example.com', '$2y$10$uses.ykS.l/lo1gT.25e/OcFDawu5CFmfS1S2b3W6S3eYvWVJpAA.', NULL, '2018-04-11 21:26:20', '2018-04-11 21:26:20'),
(12, 'Mina Bauch', 'sean.brekke', 'coty96@example.com', '$2y$10$oK4JbD6Txa72SRbtYV.8jOUV0vim4JPTmoZ0sKPU28u4/itZe/8pW', NULL, '2018-04-11 21:26:20', '2018-04-11 21:26:20'),
(13, 'Keara Wehner', 'annie.ferry', 'everette.kozey@example.net', '$2y$10$8kXqVZIqusm1P/OxqsltUeS2WYKNHQw7AfIG.pJHE3/07FBWtU5RC', NULL, '2018-04-11 21:26:20', '2018-04-11 21:26:20'),
(14, 'Winnifred Cole', 'greg57', 'grady.adelle@example.net', '$2y$10$t/8rB4GH05r/7C7pmEGsKeuzLuevlVmoy5ecpTIK4SuDXwfgttQsu', NULL, '2018-04-11 21:26:21', '2018-04-11 21:26:21'),
(15, 'Adeline Kassulke', 'kmccullough', 'vwilliamson@example.com', '$2y$10$GgwKUToGBCoBQu1pt4yiw.pUSsadqTnDsbX8KqozZdH1q.mYtwbAa', NULL, '2018-04-11 21:26:21', '2018-04-11 21:26:21'),
(16, 'Alexys Dickens', 'ukulas', 'keith.fritsch@example.org', '$2y$10$RUpkwzNdgLUvhga7L7d1neuHxjCu9apOJnwc5R73W1taJh9NPA02e', NULL, '2018-04-11 21:26:21', '2018-04-11 21:26:21'),
(17, 'Watson Farrell V', 'dangelo.oconnell', 'block.wilfrid@example.net', '$2y$10$Mymr5mmRfW1XXL6SthwvKunp11OQDAUuqaZ1Jm43MrVrD6pRG4yFC', NULL, '2018-04-11 21:26:22', '2018-04-11 21:26:22'),
(18, 'Shanon Kirlin V', 'kathryn50', 'hhayes@example.org', '$2y$10$AdYIOX6Rry.jjYaHr.LPoud27bAVJGuYhssjY16RCyTXG.EN7o5pe', NULL, '2018-04-11 21:26:22', '2018-04-11 21:26:22'),
(19, 'Forest Robel', 'roob.payton', 'rau.presley@example.com', '$2y$10$zkm/znzBfHLJvtcLZ7DJSOswRHL7tX94x0f5oKCIXQkZg/NAXjdIq', NULL, '2018-04-11 21:26:22', '2018-04-11 21:26:22'),
(20, 'Llewellyn Willms', 'stewart44', 'pinkie.cronin@example.net', '$2y$10$kUKijFFtE30z4F8e7Xo5AOg3U2DMN423wlMiWLPU3qXwRb6oeBPd.', NULL, '2018-04-11 21:26:23', '2018-04-11 21:26:23'),
(21, 'Prof. Santos Murphy', 'vmurphy', 'meta14@example.org', '$2y$10$zmtodXBWvufMr4S.gr13NeChxOdCPBNP4/2SGzJrNjiN.8haFBjdW', NULL, '2018-04-11 21:26:23', '2018-04-11 21:26:23'),
(22, 'Jairo Watsica', 'adolphus.welch', 'wilderman.arlene@example.org', '$2y$10$UMrCG7XNh8swGGGhUSQj.u1m6Rcg4yrovKmvt7/bCkFDnPUlDKxQ6', NULL, '2018-04-11 21:26:23', '2018-04-11 21:26:23'),
(23, 'Makayla Stehr', 'vivienne90', 'dolly79@example.org', '$2y$10$RW0k5GiiYF7hdngrCoFhje/huq7dudJ9m.Wpw/.SUlR9Fc6On9Ey6', NULL, '2018-04-11 21:26:24', '2018-04-11 21:26:24'),
(24, 'Prof. Rose Bosco II', 'nbruen', 'nolan.lavern@example.com', '$2y$10$ETKC8mtcZrGc.yy.fwVYFOFtWsXPF5O6Fmi1xtYbQ1u.rAHz8Rs8S', NULL, '2018-04-11 21:26:24', '2018-04-11 21:26:24'),
(25, 'George Dicki', 'romaguera.eve', 'gmorar@example.net', '$2y$10$1KghG3yb8vbumglGxPlUZOeBOMgZjUBjT51Q7bltoxZaVLj7bILRW', NULL, '2018-04-11 21:26:24', '2018-04-11 21:26:24'),
(26, 'Ms. Alvena Grimes DDS', 'fleuschke', 'leora.schoen@example.com', '$2y$10$/MPWv5qUGOi/u9en.nx/ZOPkf4QQ2I8lBNAPRoo4wzMDVczbB/YTS', NULL, '2018-04-11 21:26:25', '2018-04-11 21:26:25'),
(27, 'Jerrod Wuckert', 'audie48', 'oemmerich@example.net', '$2y$10$DL5B0WeZzzSFNgGtrGnFWeFqQXWwxnbDPLtAoFM.FZiXdbAmWHpsC', NULL, '2018-04-11 21:26:25', '2018-04-11 21:26:25'),
(28, 'Lottie Olson', 'gust.robel', 'xmccullough@example.org', '$2y$10$BslnyjXaG48E9XUuhsFn9ef0zOHqMbEV9LhiO4RgSELXXLZPm0qfq', NULL, '2018-04-11 21:26:25', '2018-04-11 21:26:25'),
(29, 'Lupe Ernser', 'cartwright.reid', 'lubowitz.keenan@example.com', '$2y$10$C5KTgwY903Da1YFJ7tCEQeEIlqvUjw.91SsIWgLZy0gxm3maXa67u', NULL, '2018-04-11 21:26:26', '2018-04-11 21:26:26'),
(30, 'Mr. Tyrique Padberg', 'fanny.schmidt', 'ruecker.trey@example.com', '$2y$10$Hvdn.97T14aMNI02nJtChOXABsKv29IQhc/3zMUz0cCnB9T0uyaDi', NULL, '2018-04-11 21:26:26', '2018-04-11 21:26:26'),
(31, 'Mr. Keshawn Abernathy III', 'sunny96', 'deckow.justine@example.net', '$2y$10$Q11JvBhlYVxfsU4153Lci.AMM4o10mhn66qN4xAml6Ts6IRIiMHdW', NULL, '2018-04-11 21:26:26', '2018-04-11 21:26:26'),
(32, 'Erica Dach', 'natalie.hintz', 'hagenes.lea@example.com', '$2y$10$FKMSCDgVrrQFR9GOW58n1ufjqQ.dKhaD9hbSOS9QFG3gSfXUZYrbO', NULL, '2018-04-11 21:26:27', '2018-04-11 21:26:27'),
(33, 'Mrs. Maci Rutherford', 'kemmer.shad', 'ybernier@example.org', '$2y$10$6bHK..QIH2HOAZ7uAKk/POfyanm7OrUWN4bxcMFsxPn/IILAaGIMu', NULL, '2018-04-11 21:26:27', '2018-04-11 21:26:27');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `classrooms`
--
ALTER TABLE `classrooms`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `classroom_user`
--
ALTER TABLE `classroom_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `monsters`
--
ALTER TABLE `monsters`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `monster_user`
--
ALTER TABLE `monster_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `classrooms`
--
ALTER TABLE `classrooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `classroom_user`
--
ALTER TABLE `classroom_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `monsters`
--
ALTER TABLE `monsters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `monster_user`
--
ALTER TABLE `monster_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
