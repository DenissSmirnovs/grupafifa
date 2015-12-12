-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 12 2015 г., 19:58
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=97 ;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`) VALUES
(54, 'Edd', 'In fact it’s always interesting to see what publishers consider the most important thing to mention on the back of the box, and with FIFA 16 it’s the women’s teams, a new training mode, and FIFA Ultimate Team Draft. Again, no mention of any gameplay improvements, except for a vague reference to ‘new ways to play’.\r\n\r\n'),
(55, 'Deniss', 'Playing FIFA 16 you find that there are no big changes, just minor improvements – and some minor regressions. The defensive game has received the most attention, with computer-controlled defenders now making a real effort to intercept passes and chase down meandering strikers. As a counter to this there’s also a new faster passing option, with the drawback that you can’t guarantee the receiver will be able to control it.\r\n\r\n'),
(56, 'Dmitrijs', 'The new ‘no touch dribbling’ allows you to press a shoulder button and immediately break away from the ball. This works fine, but giving it it’s own button feels clunky and less organic than PES’s approach to the same problem. Indeed, midfield action in general feels stodgy and fragmented, we assume because of complaints that FIFA 15 played too fast and arcade-like.\r\n'),
(57, 'Vladislavs', 'It’s not a bad game but it’s unquestionably the runner-up in this year’s title match. But that’s fine. That’s normally what it takes for a series like this to decide to pull its socks up and reshape itself from the ground up, instead of just tinkering around the edges of the problem. If EA now feel they have real competition then that’s only going to increase their efforts, and that can only be good for everyone.\r\n'),
(95, 'CrazyItaliano', 'Good game :-)'),
(96, 'Alberts', 'Not Like ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
