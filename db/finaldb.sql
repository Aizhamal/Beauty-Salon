-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Май 15 2016 г., 06:53
-- Версия сервера: 10.1.9-MariaDB
-- Версия PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `finaldb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `therapy`
--

CREATE TABLE `therapy` (
  `therapy_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `therapy`
--

INSERT INTO `therapy` (`therapy_id`, `name`, `description`, `image`) VALUES
(2, 'Ð’ÐÐÐÐ Ð¡ Ð›Ð•ÐŸÐ•Ð¡Ð¢ÐšÐÐœÐ˜ Ð ÐžÐ— Ð˜ Ð ÐžÐ—ÐžÐ’Ð«Ðœ ÐœÐÐ¡Ð›ÐžÐœ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'images/header-bg.jpg'),
(3, 'Lorem ipsum is very strange thing', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'images/page2-img3.jpg'),
(7, 'Something', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. ', 'images/page1-img2.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `login` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`user_id`, `name`, `surname`, `login`, `email`, `password`) VALUES
(1, 'admin', 'adminovich', 'admin', 'admin@gmail.com', 'admin123'),
(2, 'Aizhamal', 'Azamatovna', 'aizha01', 'aizha@gmail.com', 'qwerty'),
(3, 'user', 'second', 'user', 'user@gmail.com', 'qwerty'),
(4, 'qw', 'qw', 'qw', 'qw', 'qw'),
(5, 'Adam', 'Eva', 'adam', 'adam@gmail.com', 'qwerty');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `therapy`
--
ALTER TABLE `therapy`
  ADD PRIMARY KEY (`therapy_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `therapy`
--
ALTER TABLE `therapy`
  MODIFY `therapy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
