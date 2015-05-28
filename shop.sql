-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 28 2015 г., 15:19
-- Версия сервера: 5.6.20
-- Версия PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `good`
--

CREATE TABLE IF NOT EXISTS `good` (
`Id` int(99) NOT NULL,
  `NameG` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `UserName` varchar(20) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `Login` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Photo1` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Photo2` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Photo3` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Photo4` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `City` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(10) NOT NULL,
  `Phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `OwnerId` int(99) NOT NULL,
  `Torf` varchar(6) NOT NULL,
  `Category` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DateOfAdd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `good`
--

INSERT INTO `good` (`Id`, `NameG`, `UserName`, `Login`, `Photo1`, `Photo2`, `Photo3`, `Photo4`, `City`, `Price`, `Phone`, `Comment`, `OwnerId`, `Torf`, `Category`, `DateOfAdd`) VALUES
(1, 'Apple', 'Zhambyl', 'zhambyl.samat@is.sdu.edu.kz', 'img/1.jpg', 'img/3D_Bulb_Photos_for_Dsktop_PC.jpg', '', '', '1', 20000000, '877777', 'Some text will be here...', 84, 'true', '1', '2015-05-26 16:51:08'),
(2, 'Apple2', 'Nazerke', 'nazerke.safina@gmail.com', 'img/3D_Grass_Wallpaper.jpg', 'img/3D_Pics_of_Stone_in_River_HD_Wallpapers.jpg', 'img/1.jpg', 'img/3D_Bulb_Photos_for_Dsktop_PC.jpg', '1', 10000, '87777', 'abcdefghjklmnopqrstuvwxyz...', 26, 'true', '1', '2015-05-26 17:03:40'),
(3, 'Apple3', 'Nazerke', 'nazerke.safina@gmail.com', 'img/3D_Bulb_Photos_for_Dsktop_PC.jpg', 'img/1.jpg', '', 'img/3D_Grass_Wallpaper.jpg', '2', 2000, '877777', 'asdfasdfasdf asdfasdfasdf ...', 26, 'true', '1', '2015-05-26 17:03:40'),
(4, 'Apple4', 'Shakhmardan', 'shakhmardan@mail.ru', 'img/1.jpg', 'img/3D_Bulb_Photos_for_Dsktop_PC.jpg', '', '', '1', 2000, '87777', 'asdf', 0, 'true', '1', '2015-05-26 17:05:00');

-- --------------------------------------------------------

--
-- Структура таблицы `message`
--

CREATE TABLE IF NOT EXISTS `message` (
`Id` int(99) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Userid` int(99) NOT NULL,
  `Message` text NOT NULL,
  `Friendid` int(99) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `message`
--

INSERT INTO `message` (`Id`, `Date`, `Userid`, `Message`, `Friendid`) VALUES
(3, '2015-05-26 16:54:59', 26, '18 000 000 kzt ...', 84),
(4, '2015-05-26 16:55:40', 84, 'Ok I agree ...', 26),
(5, '2015-05-26 16:58:11', 26, 'Good job ... ', 84),
(6, '2015-05-26 17:05:54', 84, 'asdfasdfadsf', 84);

-- --------------------------------------------------------

--
-- Структура таблицы `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
`Id` int(4) NOT NULL,
  `Email` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `Password` varchar(12) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DateOfRegistration` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Дамп данных таблицы `registration`
--

INSERT INTO `registration` (`Id`, `Email`, `Password`, `DateOfRegistration`) VALUES
(25, 'shakhmardan.samat@gmail.com', 'password123', '2015-05-01 04:28:43'),
(26, 'nazerke.safina@gmail.com', 'password123', '2015-05-01 04:28:43'),
(27, 'azamat.tugelbai@ce.sdu.edu.kz', 'password123', '2015-05-01 04:28:43'),
(28, 'nurdaulet.ongarov@ce.sdu.edu.k', 'password123', '2015-05-01 04:28:43'),
(29, 'admin', 'admin', '2015-05-01 04:28:43'),
(30, 'aiazan.amanova@gmail.com', 'password123', '2015-05-01 04:28:43'),
(31, 'rakhmet.zhanat@gmail.com', 'password123', '2015-05-01 04:28:43'),
(32, 'dilshod.tulemetov@is.sdu.edu.kz', 'password123', '2015-05-01 04:28:43'),
(38, 'nurbol.madenov@is.sdu.edu.kz', 'password123', '2015-05-01 11:11:12'),
(84, 'zhambyl.samat@is.sdu.edu.kz', 'password123', '2015-05-08 07:16:08'),
(86, 'samat@is.sdu.edu.kz', 'password123', '2015-05-15 13:06:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `good`
--
ALTER TABLE `good`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
 ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `good`
--
ALTER TABLE `good`
MODIFY `Id` int(99) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
MODIFY `Id` int(99) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
MODIFY `Id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=87;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
