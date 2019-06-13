-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 13 2019 г., 23:42
-- Версия сервера: 5.7.15
-- Версия PHP: 7.0.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `zad5_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES
(2, 'dllesso', 'ddd91@rambler.ru', '$2y$10$RcVHCwl1gsMKJyHHg0eAKOrdx0gAOLCCq0XJR0b5Ls.SznYTAGaBG'),
(3, 'dll', 'd91@rambler.ru', '$2y$10$rnV9C0lWGFWGttFY/y5wSOK1eehI6I.4wD1nSBcGxtDFctMsNLIGK'),
(4, 'Фея', 'Feya_au@yandex.ru', '$2y$10$oDd6O9ajRHXSPQA5d.WPyeB9bQu1WWH7xq0ZN8bs.1dR2yw4PXWoy'),
(5, 'Паштет', 'Pashtet@pashtet.com', '$2y$10$zTK/pod8fZHUFnaZhHBFhubkwXuPokLJqinmCQDbI8mAU/6uZEapC'),
(6, 'ДазДраПерма', 'DAZDRAPERMA@MAIL.ru', '$2y$10$jddktKR6m3oh.LrSlm66vu.vyVMOWIj8Ozkl.fc/IO0j5mY6cUI9O'),
(7, 'Pomerantsev', 'Pomerantsev@mail.ru', '$2y$10$6i01FVX10/iGN8k7jFkO7uwWP5v8QwQ6ftgQPd6RRwlb.DMY1sbQW'),
(8, 'u2', 'u2@googl.com', '$2y$10$PtpiLbmpnEuBaQjq9DWd1OJMVkudiMdpObWXRQ/8ZEq1KLEXRGc4C'),
(9, 'Molly', 'Molly@Molly.com', '$2y$10$vKKipz/YiVX08hKUE9L6NOLmKFErtPTo8ANK/OfA/HnnHuGeA8Nze'),
(10, 'федя', 'f@f.ru', '$2y$10$hJV2kteCGLjoR.D7ywVOFuyxvgzKRukqXjvVa76RuZ8XvRB6SE.z.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
