-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 02 2015 г., 22:15
-- Версия сервера: 5.6.17
-- Версия PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `fifa`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `entry_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`, `entry_id`) VALUES
(1, 'Anonims', 'In fact it’s always interesting to see what publishers consider the most important thing to mention on the back of the box, and with FIFA 16 it’s the women’s teams, a new training mode, and FIFA Ultimate Team Draft. Again, no mention of any gameplay improvements, except for a vague reference to ‘new ways to play’.', 0),
(2, 'Fifa_player', 'Playing FIFA 16 you find that there are no big changes, just minor improvements – and some minor regressions. The defensive game has received the most attention, with computer-controlled defenders now making a real effort to intercept passes and chase down meandering strikers. As a counter to this there’s also a new faster passing option, with the drawback that you can’t guarantee the receiver will be able to control it.\r\n\r\n', 0),
(41, 'Deniss', 'Reviewing FIFA 16 for PC is a tricky proposition. Sure, EA Canada has yet again laid out an all encompassing soccer smörgåsbord that boasts immaculate presentation and dizzying production values. Yet it''s hard to fight off the feeling this season''s effort feels more like a glorified DLC pack, rather than the full priced annual update you''d hope for.', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
