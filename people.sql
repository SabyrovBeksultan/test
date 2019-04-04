-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Апр 04 2019 г., 16:37
-- Версия сервера: 5.5.25
-- Версия PHP: 5.2.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `example`
--

-- --------------------------------------------------------

--
-- Структура таблицы `people`
--

CREATE TABLE IF NOT EXISTS `people` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_human` varchar(250) NOT NULL,
  `comment_text` text NOT NULL,
  `date_mk` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=68 ;

--
-- Дамп данных таблицы `people`
--

INSERT INTO `people` (`id`, `name_human`, `comment_text`, `date_mk`) VALUES
(45, 'Sabyrov Beksultan', 'oofofo', '1549979057'),
(46, 'Satybekov Azamat', 'comments', '1549979474'),
(47, 'Sakiev Beknazar', 'Добавление комментария', '1549979517'),
(48, 'Kudashov Nurdolot', 'Add comments', '1549979542'),
(49, 'Pavlov Aleksei', 'Commentari', '1549979579'),
(50, 'Nikiforova Elena', 'Коммент кош', '1549979598'),
(51, 'Gaibulin Rustam', 'Написать коммент', '1549979633'),
(52, 'Kuzmin Alensandr', 'тест', '1549979704');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
