-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Мар 25 2019 г., 20:46
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `mybd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tableofposts`
--

CREATE TABLE IF NOT EXISTS `tableofposts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `picture` varchar(150) DEFAULT NULL,
  `countp` int(2) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `kcal` int(5) DEFAULT NULL,
  `proteins` int(5) DEFAULT NULL,
  `fats` int(5) DEFAULT NULL,
  `carbo` int(5) DEFAULT NULL,
  `aboutb` varchar(250) DEFAULT NULL,
  `ingredients` varchar(500) NOT NULL,
  `instruction` varchar(1024) NOT NULL,
  `recommendation` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `tableofposts`
--

INSERT INTO `tableofposts` (`id`, `name`, `picture`, `countp`, `time`, `kcal`, `proteins`, `fats`, `carbo`, `aboutb`, `ingredients`, `instruction`, `recommendation`) VALUES
(2, 'Первый пост', NULL, 2, NULL, 5, 4, 3, 2, NULL, 'здесь описываются ингредиенты', 'здесь описывается инструкция', NULL),
(4, 'Второй пост', 'files/image.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'тут написано коротко о рецепте', 'а вот здесь будут ингредиенты', '', NULL),
(5, 'Третий пост', 'files/small_photo.jpg', 2, NULL, 5, 4, 3, 2, NULL, 'здесь описываются ингредиенты', 'здесь описывается инструкция', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
