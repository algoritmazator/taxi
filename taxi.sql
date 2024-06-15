-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 28 2024 г., 19:01
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `taxi`
--

-- --------------------------------------------------------

--
-- Структура таблицы `voditeli`
--

CREATE TABLE `voditeli` (
  `id` int NOT NULL,
  `city` varchar(30) DEFAULT NULL,
  `fullname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `voditeli`
--

INSERT INTO `voditeli` (`id`, `city`, `fullname`, `phone`) VALUES
(4, 'какой-то', 'дима лёха', '344431142'),
(5, 'какой-то', 'дима лёха', '344431142'),
(6, 'какой-то', 'дима лёха', '344431142'),
(7, 'какой-то', 'дима лёха', '344431142'),
(8, 'какой-то', 'дима лёха', '344431142'),
(9, 'какой-то', 'дима лёха', '344431142'),
(10, 'какой-то', 'дима лёха', '344431142'),
(11, 'какой-то', 'дима лёха', '344431142'),
(12, 'какой-то', 'дима лёха1', '1245767'),
(13, 'какой-то', 'дима лёха1', '1245767'),
(14, 'какой-то', 'дима лёха1', '1245767'),
(15, 'какой-то', 'дима лёха1', '1245767');

-- --------------------------------------------------------

--
-- Структура таблицы `zakaz`
--

CREATE TABLE `zakaz` (
  `id` int NOT NULL,
  `otkyda` varchar(100) DEFAULT NULL,
  `kyda` varchar(100) DEFAULT NULL,
  `tarif` varchar(20) DEFAULT NULL,
  `phone` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `zakaz`
--

INSERT INTO `zakaz` (`id`, `otkyda`, `kyda`, `tarif`, `phone`) VALUES
(1, '', 'работа', 'econom', '111111111'),
(2, '', 'работа', 'econom', '111111111'),
(3, '', 'работа', 'econom', '111111111'),
(4, '', 'работа', 'econom', '111111111'),
(5, '', 'работа', 'econom', '111111111'),
(6, '', 'работа2', 'bisnes', '1245767'),
(7, '', '', 'vibor_tarif', ''),
(8, '', '', 'vibor_tarif', ''),
(9, '', '', 'vibor_tarif', ''),
(10, '', '', 'vibor_tarif', ''),
(11, '', '', 'vibor_tarif', ''),
(12, '', '', 'vibor_tarif', ''),
(13, '', '', 'vibor_tarif', ''),
(14, '', '', 'vibor_tarif', ''),
(15, '', '', 'vibor_tarif', ''),
(16, '', '', 'vibor_tarif', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `voditeli`
--
ALTER TABLE `voditeli`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zakaz`
--
ALTER TABLE `zakaz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `voditeli`
--
ALTER TABLE `voditeli`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `zakaz`
--
ALTER TABLE `zakaz`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
