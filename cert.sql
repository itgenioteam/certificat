-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 20 2020 г., 23:59
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cert`
--

-- --------------------------------------------------------

--
-- Структура таблицы `languages`
--

CREATE TABLE `languages` (
  `id` int(2) NOT NULL,
  `title` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `languages`
--

INSERT INTO `languages` (`id`, `title`) VALUES
(1, 'русский'),
(2, 'english');

-- --------------------------------------------------------

--
-- Структура таблицы `logs`
--

CREATE TABLE `logs` (
  `id` int(10) NOT NULL,
  `studentName` varchar(50) NOT NULL,
  `generationDate` datetime NOT NULL,
  `idSubject` int(2) NOT NULL,
  `idTypeOfCert` int(2) NOT NULL,
  `idLang` int(2) NOT NULL,
  `countOfhours` int(50) NOT NULL,
  `mailToSent` varchar(50) DEFAULT NULL,
  `ipAddress` varchar(15) NOT NULL,
  `linktocert` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `language` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `subjects`
--

INSERT INTO `subjects` (`id`, `title`, `language`) VALUES
(1, 'Scratch', 1),
(2, 'Scratch', 2),
(3, 'Python', 1),
(4, 'Python', 2),
(5, 'Python:Pygame', 1),
(6, 'Python:Pygame', 2),
(7, 'Python:Flask', 1),
(8, 'Python:Flask', 2),
(9, 'GameMaker', 1),
(10, 'GameMaker', 2),
(11, 'Minecraft', 1),
(12, 'Minecraft', 2),
(13, 'Roblox', 1),
(14, 'Roblox', 2),
(15, 'Unity', 1),
(16, 'Unity', 2),
(17, 'HTML+CSS', 1),
(18, 'HTML+CSS', 2),
(19, 'JavaScript', 1),
(20, 'JavaScript', 2),
(21, 'Node.js', 1),
(22, 'Node.js', 2),
(23, 'C++', 1),
(24, 'C++', 2),
(25, 'C#', 1),
(26, 'C#', 2),
(27, 'Java', 1),
(28, 'Java', 2),
(29, 'Java:Android', 1),
(30, 'Java:Android', 2),
(31, 'Photoshop', 1),
(32, 'Photoshop', 2),
(33, 'Illustrator', 1),
(34, 'Illustrator', 2),
(35, '3D Tinkercad', 1),
(36, '3D Tinkercad', 2),
(37, '3D Sculptris', 1),
(38, '3D Sculptris', 2),
(39, 'Blender', 1),
(40, 'Blender', 2),
(41, 'Anime Studio', 1),
(42, 'Anime Studio', 2),
(43, 'AppInventor', 1),
(44, 'AppInventor', 2),
(45, 'ScratchJunior', 1),
(46, 'ScratchJunior', 2),
(47, '3D Zbrush', 1),
(48, '3D Zbrush', 2),
(49, 'Компьютерная грамотность', 1),
(50, 'Математика', 1),
(51, 'Анимация в After Effects', 1),
(52, 'Видеомонтаж в PremierePro', 1),
(53, 'Информационная безопасность', 1),
(54, 'Олимпиадные задачи', 1),
(55, 'Создание музыки', 1),
(56, 'РКИ', 1),
(57, 'Ментальная арифметика', 1),
(58, 'ОГЭ и ЕГЭ по информатике', 1),
(59, 'Figma и Tilda', 1),
(60, 'Программирование в Godot', 1),
(61, 'Шахматы', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `typesofcert`
--

CREATE TABLE `typesofcert` (
  `id` int(2) NOT NULL,
  `title` varchar(50) CHARACTER SET utf16 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `typesofcert`
--

INSERT INTO `typesofcert` (`id`, `title`) VALUES
(1, 'Окончание обучения'),
(2, 'Поздравительный сертификат');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `typesofcert`
--
ALTER TABLE `typesofcert`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT для таблицы `typesofcert`
--
ALTER TABLE `typesofcert`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
