-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Сен 23 2016 г., 17:59
-- Версия сервера: 10.1.13-MariaDB
-- Версия PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `oopdz1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  `author` text CHARACTER SET utf8 NOT NULL,
  `mark` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`, `author`, `mark`) VALUES
(1, '??????????????????1', '??????????1', '', 0),
(2, 'title4', 'text4', 'author4', 4),
(3, 'загол5', 'текст5', 'авт5', 2),
(4, '??????????????????6', '??????????6', '??????????6', 5),
(5, '??????????????????7', '??????????7', '??????????7', 4),
(6, 'title6', 'text6', 'author6', 6),
(7, 'title7', 'text7', 'author7', 8),
(8, 'title8', 'text8', 'athor8', 8),
(9, 'title9', 'text9', 'author9', 9),
(10, 'заголовок10', 'текст10', 'автор10', 6),
(11, 'title10', 'text10', 'author10', 6),
(12, 'title11', 'text text text11', 'author11', 3),
(13, 'title12', 'text12', 'athor12', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL,
  `from_where` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `date`, `from_where`) VALUES
(1, 'nt1', 'n1', '2016-10-10', 'f1'),
(2, 'title2', 'news2', '2016-11-10', 'sourth2'),
(3, 'title3', 'text3', '2016-12-10', 'sourth3'),
(4, 'title4', 'text4', '0000-00-00', 'sourth4'),
(5, 'title4', 'text4', '0000-00-00', 'sourth4'),
(6, 'title5', 'text5', '0000-00-00', 's5'),
(7, 'title6', 'text6', '0000-00-00', 'sourth6'),
(8, 'title13', 'text134', '0000-00-00', 'sourth13'),
(9, 'nnnn', 'yuii', '0000-00-00', 'njkm'),
(10, 'title11', 'text11', '2016-12-15', 'sourth11'),
(11, 'title14', 'text14', '2016-12-15', 'sourth14');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL,
  `date_ak` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `title`, `text`, `date`, `date_ak`) VALUES
(1, '??????????????????1', '??????????1', '2016-12-10', '0000-00-00'),
(2, '??????????????????1', '??????????1', '2016-12-10', '0000-00-00'),
(3, 'title3', 'text3', '2016-12-08', '0000-00-00'),
(4, 'title4', 'text4', '2016-12-08', '0000-00-00'),
(5, 'title4', 'text4', '2016-12-08', '2016-09-21'),
(6, 'title5', 'text5', '2016-12-08', '0000-00-00'),
(7, '777', 'jjj', '0000-00-00', '0000-00-00'),
(8, 'ghyu', 'nhjj', '2016-12-11', '0000-00-00'),
(9, 'ghju', 'nnmm', '2016-12-12', '2016-09-21'),
(10, 'title7', 'text7', '2016-12-14', '2016-12-15'),
(11, 'title11', 'text11', '2016-12-14', '2016-12-16'),
(12, 'title12', 'text12', '2016-12-16', '2016-12-17'),
(13, 'title15', 'text15', '2016-12-15', '2016-12-14');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
