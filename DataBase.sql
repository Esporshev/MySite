-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Ноя 23 2012 г., 17:48
-- Версия сервера: 5.5.25
-- Версия PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- База данных: `ssv_parket`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Images`
--

CREATE TABLE `Images` (
  `idImages` int(11) NOT NULL AUTO_INCREMENT,
  `Source` varchar(330) NOT NULL,
  PRIMARY KEY (`idImages`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `Images`
--

INSERT INTO `Images` (`idImages`, `Source`) VALUES
(1, '1');

-- --------------------------------------------------------

--
-- Структура таблицы `Pages`
--

CREATE TABLE `Pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lft` int(11) NOT NULL,
  `rgt` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `type` int(11) DEFAULT NULL,
  `name` varchar(330) DEFAULT NULL,
  `content` longtext,
  `title` varchar(330) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `Vendors_idVendors` int(11) NOT NULL,
  `Images_idImages` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lft` (`lft`,`rgt`,`level`),
  KEY `fk_Pages_Vendors_idx` (`Vendors_idVendors`),
  KEY `fk_Pages_Images1_idx` (`Images_idImages`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `Price`
--

CREATE TABLE `Price` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usluga` text,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`),
  KEY `id_3` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=20 ;

--
-- Дамп данных таблицы `Price`
--

INSERT INTO `Price` (`id`, `usluga`, `price`) VALUES
(1, NULL, NULL),
(2, 'Шлифовка', 1000),
(3, 'Шпатлевка', 1000),
(4, 'Шпатлевка2', 1000),
(5, 'Шпатлевка23', 1000),
(6, 'Шпатлевка234', 1000),
(7, 'уууу', 1000),
(8, 'ууууц', 1000),
(9, 'ууууцв', 1000),
(10, 'ууууцвк', 1000),
(11, 'ууууцвке', 1000),
(12, 'ууууцвке', 10003),
(13, 'ууууцвке', 100032),
(14, 'ууууцвке4', 100032),
(15, 'ууууцвке4у', 100032),
(16, 'ууууцвке4уы', 100032),
(17, 'ууууцвке4уыа', 100032),
(18, 'ууууцвке4уыаы', 100032),
(19, 'ууууцвке4уыаыв', 100032);

-- --------------------------------------------------------

--
-- Структура таблицы `Vendors`
--

CREATE TABLE `Vendors` (
  `idVendors` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(330) NOT NULL,
  `Country` varchar(330) DEFAULT NULL,
  PRIMARY KEY (`idVendors`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `Vendors`
--

INSERT INTO `Vendors` (`idVendors`, `Name`, `Country`) VALUES
(1, '1', '1');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Pages`
--
ALTER TABLE `Pages`
  ADD CONSTRAINT `fk_Pages_Images1` FOREIGN KEY (`Images_idImages`) REFERENCES `Images` (`idImages`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Pages_Vendors` FOREIGN KEY (`Vendors_idVendors`) REFERENCES `Vendors` (`idVendors`) ON DELETE NO ACTION ON UPDATE NO ACTION;