-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 16 2015 г., 20:27
-- Версия сервера: 5.6.21
-- Версия PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `ivan`
--

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE IF NOT EXISTS `books` (
`id` int(11) NOT NULL,
  `author_id` int(11) DEFAULT NULL,
  `title` text,
  `description` text
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `author_id`, `title`, `description`) VALUES
(1, 1, 'qwerty', 'werqwrqr'),
(3, 1, 'ÐœÐ°Ñ‚ÐµÐ¼Ð°Ñ‚Ð¸Ñ‡ÐµÑÐºÐ¸Ð¹ Ð°Ð½Ð°Ð»Ð¸Ð·, Ñ‚Ð¾Ð¼ â„– 1', 'Ð­Ñ‚Ð° ÐºÐ½Ð¸Ð³Ð° ÑÐ²Ð»ÑÐµÑ‚ÑÑ Ð¾Ð´Ð½Ð¾Ð¹ Ð¸Ð· ÑÐ°Ð¼Ñ‹Ñ… Ð»ÑƒÑ‡ÑˆÐ¸Ñ… Ð² ÑÐ²Ð¾ÐµÐ¹ ÑÑ„ÐµÑ€Ðµ. ÐÐ²Ñ‚Ð¾Ñ€ Ð¾Ñ‡ÐµÐ½ÑŒ Ð¿Ð¾Ð½ÑÑ‚Ð½Ð¾ Ð¸ Ð¿Ð¾Ð»Ð½Ð¾ Ð¾Ð¿Ð¸ÑÑ‹Ð²Ð°ÐµÑ‚ Ð¾ÑÐ½Ð¾Ð²Ð½Ñ‹Ðµ Ð¿Ð¾ÑÑ‚ÑƒÐ»Ð°Ñ‚Ñ‹ Ð¼Ð°Ñ‚ÐµÐ¼Ð°Ñ‚Ð¸Ñ‡ÐµÑÐºÐ¾Ð³Ð¾ Ð°Ð½Ð°Ð»Ð¸Ð·Ð°'),
(4, 1, 'Ð¡# 4.0 : ÐŸÐ¾Ð»Ð½Ð¾Ðµ Ñ€ÑƒÐºÐ¾Ð²Ð¾Ð´ÑÑ‚Ð²Ð¾', 'ÐŸÐ¾Ð»Ð½Ð¾Ðµ Ñ€ÑƒÐºÐ¾Ð²Ð¾Ð´ÑÑ‚Ð²Ð¾ Ð¿Ð¾ ÑÐ·Ñ‹ÐºÑƒ C# 4.0 Ð¾Ñ‚ "ÐºÐ½ÑÐ·Ñ" Ð¿Ñ€Ð¾Ð³Ñ€Ð°Ð¼Ð¼Ð¸Ñ€Ð¾Ð²Ð°Ð½Ð¸Ñ Ð“ÐµÑ€Ð±ÐµÑ€Ñ‚Ð° Ð¨Ð¸Ð»Ð´Ñ‚Ð°. ÐŸÐ¾ ÑƒÐ²ÐµÑ€ÐµÐ½Ð¸ÑŽ ÑÐ°Ð¼Ð¾Ð³Ð¾ Ð°Ð²Ñ‚Ð¾Ñ€Ð°, ÐºÐ½Ð¸Ð³Ð° ÑÐ²Ð»ÑÐµÑ‚ÑÑ ÑÐ°Ð¼Ð¾Ð´Ð¾ÑÑ‚Ð°Ñ‚Ð¾Ñ‡Ð½Ð¾Ð¹ Ð¸ Ð½Ðµ Ñ‚Ñ€ÐµÐ±ÑƒÐµÑ‚ Ð½Ð¸ÐºÐ°ÐºÐ¸Ñ… Ð·Ð½Ð°Ð½Ð¸Ð¹ Ð² Ð¿Ñ€Ð¾Ð³Ñ€Ð°Ð¼Ð¼Ð¸Ñ€Ð¾Ð²Ð°Ð½Ð¸Ð¸ Ð¾Ñ‚ Ñ‡Ð¸Ñ‚Ð°Ñ‚ÐµÐ»Ñ. ÐÑƒ Ð° Ð² ÑÐ»ÑƒÑ‡Ð°Ðµ ÐµÑÐ»Ð¸ C++, Java Ð¸Ð»Ð¸ ÐºÐ°ÐºÐ¾Ð¹-Ð»Ð¸Ð±Ð¾ Ð¸Ð½Ð¾Ð¹ ÑÐ·Ñ‹Ðº Ð¾Ð±ÑŠÐµÐºÑ‚Ð½Ð¾-Ð¾Ñ€Ð¸ÐµÐ½Ñ‚Ð¸Ñ€Ð¾Ð²Ð°Ð½Ð½Ð¾Ð³Ð¾ Ð¿Ñ€Ð¾Ð³Ñ€Ð°Ð¼Ð¼Ð¸Ñ€Ð¾Ð²Ð°Ð½Ð¸Ñ Ð’Ð°Ð¼ Ð·Ð½Ð°ÐºÐ¾Ð¼, Ñ‚Ð¾ Ð¿Ñ€Ð¾Ð´Ð²Ð¸Ð½ÑƒÑ‚ÑŒÑÑ Ð² Ð¸Ð·ÑƒÑ‡ÐµÐ½Ð¸Ð¸ C# Ð±Ð»Ð°Ð³Ð¾Ð´Ð°Ñ€Ñ ÑÑ‚Ð¾Ð¹ ÐºÐ½Ð¸Ð³Ðµ Ð±ÑƒÐ´ÐµÑ‚ Ð¿Ñ€Ð¾Ñ‰Ðµ Ð¿Ñ€Ð¾ÑÑ‚Ð¾Ð³Ð¾.'),
(5, 1, 'HTML Ð¸ CSS. Ð Ð°Ð·Ñ€Ð°Ð±Ð¾Ñ‚ÐºÐ° Ð¸ Ð´Ð¸Ð·Ð°Ð¹Ð½ Ð²ÐµÐ±-ÑÐ°Ð¹Ñ‚Ð¾Ð²', 'Ð­Ñ‚Ð° ÐºÐ½Ð¸Ð³Ð° â€“ ÑÐ°Ð¼Ñ‹Ð¹ Ð¿Ñ€Ð¾ÑÑ‚Ð¾Ð¹ Ð¸ Ð¸Ð½Ñ‚ÐµÑ€ÐµÑÐ½Ñ‹Ð¹ ÑÐ¿Ð¾ÑÐ¾Ð± Ð¸Ð·ÑƒÑ‡Ð¸Ñ‚ÑŒ HTML Ð¸ CSS. ÐÐµÐ·Ð°Ð²Ð¸ÑÐ¸Ð¼Ð¾ Ð¾Ñ‚ ÑÑ‚Ð¾ÑÑ‰ÐµÐ¹ Ð¿ÐµÑ€ÐµÐ´ Ð²Ð°Ð¼Ð¸ Ð·Ð°Ð´Ð°Ñ‡Ð¸: ÑÐ¿Ñ€Ð¾ÐµÐºÑ‚Ð¸Ñ€Ð¾Ð²Ð°Ñ‚ÑŒ Ð¸ Ñ€Ð°Ð·Ñ€Ð°Ð±Ð¾Ñ‚Ð°Ñ‚ÑŒ Ð²ÐµÐ±-ÑÐ°Ð¹Ñ‚ Ñ Ð½ÑƒÐ»Ñ Ð¸Ð»Ð¸ Ð¿Ð¾Ð»ÑƒÑ‡Ð¸Ñ‚ÑŒ Ð±Ð¾Ð»ÑŒÑˆÐµ ÐºÐ¾Ð½Ñ‚Ñ€Ð¾Ð»Ñ Ð½Ð°Ð´ ÑƒÐ¶Ðµ ÑÑƒÑ‰ÐµÑÑ‚Ð²ÑƒÑŽÑ‰Ð¸Ð¼ ÑÐ°Ð¹Ñ‚Ð¾Ð¼, ÑÑ‚Ð° ÐºÐ½Ð¸Ð³Ð° Ð¿Ð¾Ð¼Ð¾Ð¶ÐµÑ‚ Ð²Ð°Ð¼ ÑÐ¾Ð·Ð´Ð°Ñ‚ÑŒ Ð¿Ñ€Ð¸Ð²Ð»ÐµÐºÐ°Ñ‚ÐµÐ»ÑŒÐ½Ñ‹Ð¹, Ð´Ñ€ÑƒÐ¶ÐµÐ»ÑŽÐ±Ð½Ñ‹Ð¹ Ðº Ð¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»ÑŽ Ð²ÐµÐ±-ÐºÐ¾Ð½Ñ‚ÐµÐ½Ñ‚. ÐŸÑ€Ð¾ÑÑ‚Ð¾Ð¹ Ð²Ð¸Ð·ÑƒÐ°Ð»ÑŒÐ½Ñ‹Ð¹ ÑÐ¿Ð¾ÑÐ¾Ð± Ð¿Ð¾Ð´Ð°Ñ‡Ð¸ Ð¸Ð½Ñ„Ð¾Ñ€Ð¼Ð°Ñ†Ð¸Ð¸ Ñ Ð¿Ð¾Ð½ÑÑ‚Ð½Ñ‹Ð¼Ð¸ Ð¿Ñ€Ð¸Ð¼ÐµÑ€Ð°Ð¼Ð¸ Ð¸ Ð½ÐµÐ±Ð¾Ð»ÑŒÑˆÐ¸Ð¼ Ñ„Ñ€Ð°Ð³Ð¼ÐµÐ½Ñ‚Ð¾Ð¼ ÐºÐ¾Ð´Ð° Ð·Ð½Ð°ÐºÐ¾Ð¼Ð¸Ñ‚ Ñ Ð½Ð¾Ð²Ð¾Ð¹ Ñ‚ÐµÐ¼Ð¾Ð¹ Ð½Ð° ÐºÐ°Ð¶Ð´Ð¾Ð¹ ÑÑ‚Ñ€Ð°Ð½Ð¸Ñ†Ðµ. Ð’Ñ‹ Ð½Ð°Ð¹Ð´ÐµÑ‚Ðµ Ð¿Ñ€Ð°ÐºÑ‚Ð¸Ñ‡ÐµÑÐºÐ¸Ðµ ÑÐ¾Ð²ÐµÑ‚Ñ‹ Ð¾ Ñ‚Ð¾Ð¼, ÐºÐ°Ðº Ð¾Ñ€Ð³Ð°Ð½Ð¸Ð·Ð¾Ð²Ð°Ñ‚ÑŒ Ð¸ ÑÐ¿Ñ€Ð¾ÐµÐºÑ‚Ð¸Ñ€Ð¾Ð²Ð°Ñ‚ÑŒ ÑÑ‚Ñ€Ð°Ð½Ð¸Ñ†Ñ‹ Ð²Ð°ÑˆÐµÐ³Ð¾ ÑÐ°Ð¹Ñ‚Ð° Ð¸ Ð¿Ð¾ÑÐ»Ðµ Ð¿Ñ€Ð¾Ñ‡Ñ‚ÐµÐ½Ð¸Ñ ÐºÐ½Ð¸Ð³Ð¸ ÑÐ¼Ð¾Ð¶ÐµÑ‚Ðµ Ñ€Ð°Ð·Ñ€Ð°Ð±Ð¾Ñ‚Ð°Ñ‚ÑŒ ÑÐ²Ð¾Ð¹ Ð²ÐµÐ±-ÑÐ°Ð¹Ñ‚ Ð¿Ñ€Ð¾Ñ„ÐµÑÑÐ¸Ð¾Ð½Ð°Ð»ÑŒÐ½Ð¾Ð³Ð¾ Ð²Ð¸Ð´Ð° Ð¸ ÑƒÐ´Ð¾Ð±Ð½Ñ‹Ð¹ Ð² Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ð½Ð¸Ð¸.');

-- --------------------------------------------------------

--
-- Структура таблицы `files`
--

CREATE TABLE IF NOT EXISTS `files` (
`id` int(11) NOT NULL,
  `path` text NOT NULL,
  `name` text NOT NULL,
  `link` text NOT NULL,
  `type` text NOT NULL,
  `page_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `files`
--

INSERT INTO `files` (`id`, `path`, `name`, `link`, `type`, `page_id`) VALUES
(1, 'C:\\xampp\\htdocs\\ivan\\app\\webroot\\files\\user_1\\8.jpg', '8.jpg', 'http://ivan/files/user_1\\8.jpg', 'attach', 1),
(2, 'C:\\xampp\\htdocs\\ivan\\app\\webroot\\files\\user_1\\end.jpg', 'end.jpg', 'http://ivan/files/user_1\\end.jpg', 'attach', 1),
(3, 'C:\\xampp\\htdocs\\ivan\\app\\webroot\\files\\user_1\\images.jpg', 'images.jpg', 'http://ivan/files/user_1\\images.jpg', 'attach', 1),
(4, 'C:\\xampp\\htdocs\\ivan\\app\\webroot\\files\\user_1\\8.jpg', '8.jpg', 'http://ivan/files/user_1/8.jpg', 'attach', 1),
(5, 'C:\\xampp\\htdocs\\ivan\\app\\webroot\\files\\user_1\\end.jpg', 'end.jpg', 'http://ivan/files/user_1/end.jpg', 'attach', 1),
(6, 'C:\\xampp\\htdocs\\ivan\\app\\webroot\\files\\user_1\\images.jpg', 'images.jpg', 'http://ivan/files/user_1/images.jpg', 'attach', 1),
(7, 'C:\\xampp\\htdocs\\ivan\\app\\webroot\\files\\user_1\\error_1.jpg', 'error_1.jpg', 'http://ivan/files/user_1/error_1.jpg', 'attach', 1),
(8, 'C:\\xampp\\htdocs\\ivan\\app\\webroot\\files\\user_1\\error-1.jpg', 'error-1.jpg', 'http://ivan/files/user_1/error-1.jpg', 'attach', 1),
(9, 'C:\\xampp\\htdocs\\ivan\\app\\webroot\\files\\user_1\\error_1.jpg', 'error_1.jpg', 'http://ivan/files/user_1/error_1.jpg', 'attach', 1),
(10, 'C:\\xampp\\htdocs\\ivan\\app\\webroot\\files\\user_1\\error-1.jpg', 'error-1.jpg', 'http://ivan/files/user_1/error-1.jpg', 'attach', 1),
(11, 'C:\\xampp\\htdocs\\ivan\\app\\webroot\\files\\user_1\\finish-learn.jpg', 'finish-learn.jpg', 'http://ivan/files/user_1/finish-learn.jpg', 'attach', 1),
(12, 'C:\\xampp\\htdocs\\ivan\\app\\webroot\\files\\user_1\\images.jpg', 'images.jpg', 'http://ivan/files/user_1/images.jpg', 'attach', 1),
(13, 'C:\\xampp\\htdocs\\ivan\\app\\webroot\\files\\user_1\\error-1.jpg', 'error-1.jpg', 'http://ivan/files/user_1/error-1.jpg', 'attach', 1),
(14, 'C:\\xampp\\htdocs\\ivan\\app\\webroot\\files\\user_1\\8.jpg', '8.jpg', 'http://ivan/files/user_1/8.jpg', 'attach', 1),
(15, 'C:\\xampp\\htdocs\\ivan\\app\\webroot\\files\\user_1\\end.jpg', 'end.jpg', 'http://ivan/files/user_1/end.jpg', 'attach', 1),
(16, 'C:\\xampp\\htdocs\\ivan\\app\\webroot\\files\\user_1\\error_1.jpg', 'error_1.jpg', 'http://ivan/files/user_1/error_1.jpg', 'attach', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `parts`
--

CREATE TABLE IF NOT EXISTS `parts` (
`id` int(11) NOT NULL,
  `book_id` int(11) DEFAULT NULL,
  `content` text,
  `number` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `parts`
--

INSERT INTO `parts` (`id`, `book_id`, `content`, `number`) VALUES
(1, 1, '<h1><strong>qwrttyertyertyertyery</strong><br data-mce-bogus="1"></h1><p><span style="text-decoration: underline;" data-mce-style="text-decoration: underline;"><strong>sfasfdasf</strong></span></p>', 1),
(2, 2, NULL, 1),
(3, 3, NULL, 1),
(4, 4, NULL, 1),
(5, 5, NULL, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
`id` int(11) NOT NULL,
  `part_id` int(11) DEFAULT NULL,
  `path` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `first_name` tinytext,
  `last_name` tinytext,
  `email` tinytext,
  `password` tinytext,
  `activity_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `activity_id`) VALUES
(1, NULL, NULL, 'artemko777@list.ru', 'a642a77abd7d4f51bf9226ceaf891fcbb5b299b8', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `files`
--
ALTER TABLE `files`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `parts`
--
ALTER TABLE `parts`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pictures`
--
ALTER TABLE `pictures`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `files`
--
ALTER TABLE `files`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблицы `parts`
--
ALTER TABLE `parts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `pictures`
--
ALTER TABLE `pictures`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
