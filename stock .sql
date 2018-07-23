-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 23 2018 г., 08:46
-- Версия сервера: 5.6.38
-- Версия PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `stock`
--

-- --------------------------------------------------------

--
-- Структура таблицы `active_user`
--

CREATE TABLE `active_user` (
  `id` int(11) NOT NULL,
  `users` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `active_user`
--

INSERT INTO `active_user` (`id`, `users`) VALUES
(54, 'jin');

-- --------------------------------------------------------

--
-- Структура таблицы `cars_transmission`
--

CREATE TABLE `cars_transmission` (
  `id` int(11) NOT NULL,
  `transmission` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cars_transmission`
--

INSERT INTO `cars_transmission` (`id`, `transmission`) VALUES
(1, 'Бесступенчатая трансмиссия(вариатор)'),
(2, 'Автоматическая трансмиссия(АКПП)'),
(3, 'Механическая трансмиссия(МКПП)'),
(4, 'Роботизированная трансмиссия(КПП)');

-- --------------------------------------------------------

--
-- Структура таблицы `class_car`
--

CREATE TABLE `class_car` (
  `id` int(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `class_car`
--

INSERT INTO `class_car` (`id`, `class`, `description`, `price`) VALUES
(1, 'A', 'миниавто (длина не более 3,6 м., ширина не более 1,6 м.)\r\n', 10),
(2, 'B', 'маленькие авто (длина не более 3,9 м., ширина не более 1,7 м.)\r\n', 20),
(3, 'C', 'средние авто (длина не более 4,3 м., ширина не более 1,8 м.)\r\n\r\n', 30),
(4, 'D', 'большие легковушки для семьи (длина не более 4,6 м., ширина не более 1,8 м.)\r\n\r\n', 40),
(5, 'E', 'авто бизнес-класса (длина не более 4,6 м., ширина не более 1,8 м.)\r\n\r\n', 50),
(6, 'F', 'авто представительского класса (длина более 5 м.)\r\n', 70),
(7, 'L', 'комфортные минивены\r\n\r\n', 80),
(8, 'J', 'кроссоверы, SUV\r\n', 90);

-- --------------------------------------------------------

--
-- Структура таблицы `color_car`
--

CREATE TABLE `color_car` (
  `id` int(11) NOT NULL,
  `color_name` varchar(255) NOT NULL,
  `color_img` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `color_car`
--

INSERT INTO `color_car` (`id`, `color_name`, `color_img`) VALUES
(1, 'Белый', 'http://auto/images/car_color/car-white.svg'),
(2, 'Черный', 'http://auto/images/car_color/car-black.svg'),
(3, 'Красный', 'http://auto/images/car_color/car-red.svg'),
(4, 'Зеленый', 'http://auto/images/car_color/car-green.svg'),
(5, 'Желтый', 'http://auto/images/car_color/car-yellow.svg'),
(6, 'Синий', 'http://auto/images/car_color/car-blue.svg');

-- --------------------------------------------------------

--
-- Структура таблицы `force_amount`
--

CREATE TABLE `force_amount` (
  `id` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `force_amount`
--

INSERT INTO `force_amount` (`id`, `amount`) VALUES
(1, '1.2'),
(2, '1.5'),
(3, '1.6'),
(4, '1.8'),
(5, '2.0'),
(6, '2.4'),
(7, '3.0'),
(8, '3.5');

-- --------------------------------------------------------

--
-- Структура таблицы `itemList`
--

CREATE TABLE `itemList` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL DEFAULT '#',
  `position_id` int(11) NOT NULL,
  `visible` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `itemList`
--

INSERT INTO `itemList` (`id`, `name`, `link`, `position_id`, `visible`) VALUES
(1, 'Авто', '/auto', 1, 0),
(2, 'Регион', '/region', 2, 0),
(3, 'Стоимость авто', '/price', 3, 0),
(4, 'Расчет заказа', '/calculate', 4, 0),
(5, 'Авторизироваться', '/authorization', 5, 1),
(6, 'Зарегистрироваться', '/registration', 6, 1),
(13, 'Выход с ЛК', '/exit', 7, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `labels_auto`
--

CREATE TABLE `labels_auto` (
  `id` int(11) NOT NULL,
  `car_brand` varchar(255) NOT NULL,
  `link_img` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `labels_auto`
--

INSERT INTO `labels_auto` (`id`, `car_brand`, `link_img`) VALUES
(1, 'BMW', 'http://auto/images/bmw.svg'),
(2, 'TESLA', 'http://auto/images/tesla.svg'),
(3, 'LEXUS', 'http://auto/images/lexus.svg'),
(4, 'VOLVO', 'http://auto/images/volvo.svg'),
(5, 'CHEVROLET', 'http://auto/images/chevrolet.svg');

-- --------------------------------------------------------

--
-- Структура таблицы `list_characteristic_car`
--

CREATE TABLE `list_characteristic_car` (
  `id` int(11) NOT NULL,
  `label` varchar(255) DEFAULT NULL,
  `transmission` varchar(255) DEFAULT NULL,
  `engine` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `visible` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `list_characteristic_car`
--

INSERT INTO `list_characteristic_car` (`id`, `label`, `transmission`, `engine`, `class`, `color`, `visible`) VALUES
(1, 'TESLA', 'Бесступенчатая трансмиссия(вариатор)', '3.5', 'L', 'Желтый', '1'),
(2, 'TESLA', 'Бесступенчатая трансмиссия(вариатор)', '3.5', 'L', 'Желтый', '1'),
(3, 'TESLA', 'Бесступенчатая трансмиссия(вариатор)', '3.5', 'L', 'Желтый', '1'),
(4, 'LEXUS', 'Механическая трансмиссия(МКПП)', '1.8', 'L', 'Красный', '0'),
(5, 'LEXUS', 'Механическая трансмиссия(МКПП)', '1.8', 'L', 'Красный', '0'),
(6, 'LEXUS', 'Механическая трансмиссия(МКПП)', '1.8', 'L', 'Красный', '0'),
(7, 'LEXUS', 'Механическая трансмиссия(МКПП)', '1.8', 'L', 'Красный', '0'),
(8, 'LEXUS', 'Механическая трансмиссия(МКПП)', '1.8', 'L', 'Красный', '0'),
(9, 'LEXUS', 'Механическая трансмиссия(МКПП)', '1.5', 'L', 'Черный', '1'),
(10, 'LEXUS', 'Автоматическая трансмиссия(АКПП)', '1.2', 'L', 'Черный', '1'),
(11, 'LEXUS', 'Автоматическая трансмиссия(АКПП)', '1.2', 'L', 'Черный', '1'),
(12, 'LEXUS', 'Автоматическая трансмиссия(АКПП)', '1.2', 'L', 'Черный', '1'),
(13, 'LEXUS', 'Автоматическая трансмиссия(АКПП)', '1.2', 'L', 'Черный', '1'),
(14, 'LEXUS', 'Автоматическая трансмиссия(АКПП)', '1.6', 'J', 'Красный', '1'),
(15, 'VOLVO', 'Автоматическая трансмиссия(АКПП)', '1.5', 'L', 'Красный', '1'),
(16, 'VOLVO', 'Автоматическая трансмиссия(АКПП)', '1.5', 'J', 'Черный', '1'),
(17, 'LEXUS', 'Автоматическая трансмиссия(АКПП)', '1.2', 'J', 'Зеленый', '1'),
(18, 'VOLVO', 'Автоматическая трансмиссия(АКПП)', '1.5', 'J', 'Черный', '1'),
(19, 'VOLVO', 'Автоматическая трансмиссия(АКПП)', '1.5', 'J', 'Черный', '1'),
(20, 'LEXUS', 'Бесступенчатая трансмиссия(вариатор)', '1.2', 'J', 'Красный', '1'),
(21, 'LEXUS', 'Автоматическая трансмиссия(АКПП)', '1.6', 'L', 'Черный', '0'),
(22, 'LEXUS', 'Автоматическая трансмиссия(АКПП)', '1.6', 'L', 'Черный', '0'),
(23, 'LEXUS', 'Автоматическая трансмиссия(АКПП)', '1.6', 'L', 'Черный', '0'),
(24, 'LEXUS', 'Автоматическая трансмиссия(АКПП)', '1.6', 'L', 'Черный', '0'),
(25, 'LEXUS', 'Автоматическая трансмиссия(АКПП)', '1.6', 'L', 'Черный', '0'),
(26, 'LEXUS', 'Автоматическая трансмиссия(АКПП)', '1.6', 'L', 'Черный', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `price_cars`
--

CREATE TABLE `price_cars` (
  `id` int(11) NOT NULL,
  `model_car` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `price_cars`
--

INSERT INTO `price_cars` (`id`, `model_car`, `price`) VALUES
(1, 'BMW', 60),
(2, 'LEXUS', 90),
(3, 'TESLA', 100),
(4, 'SHEVROLET', 40),
(5, 'VOLVO', 50);

-- --------------------------------------------------------

--
-- Структура таблицы `price_regions`
--

CREATE TABLE `price_regions` (
  `id` int(11) NOT NULL,
  `n_region` varchar(255) NOT NULL,
  `price_region` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `price_regions`
--

INSERT INTO `price_regions` (`id`, `n_region`, `price_region`) VALUES
(1, 'Вінницька', 30),
(2, 'Волинська', 40),
(3, 'Дніпропетровська', 60),
(4, 'Донецька', 80),
(5, 'Житомирська', 55),
(6, 'Закарпатська', 80),
(7, 'Запорізька', 100),
(8, 'Івано-Франківська', 40),
(9, 'Київська', 120),
(10, 'Кіровоградська', 50),
(11, 'Луганська', 25),
(12, 'Львівська', 75),
(13, 'Миколаївська', 90),
(14, 'Одеська', 25),
(15, 'Полтавська', 34),
(16, 'Рівненська', 55),
(17, 'Сумська', 66),
(18, 'Тернопільська', 77),
(19, 'Харківська', 24),
(20, 'Херсонська', 55),
(21, 'Хмельницька', 60),
(22, 'Черкаська', 100),
(23, 'Чернівецька', 140),
(24, 'Чернігівська', 150);

-- --------------------------------------------------------

--
-- Структура таблицы `regions`
--

CREATE TABLE `regions` (
  `id` int(11) NOT NULL,
  `region` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `regions`
--

INSERT INTO `regions` (`id`, `region`) VALUES
(1, 'Запорізька');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `email`) VALUES
(89, 'bohota', '$2y$10$K4UiZpr1lNwaMWBt2TM5muwQlnjc7N4RTCpDnrFYZwZBjJONZ5nde', 'bohota81@gmai.com'),
(90, 'bohota', '', ''),
(91, 'bohota', '', ''),
(92, 'nik', '$2y$10$NvYwzHjb/BXPANYJ3k5u/OWb4oPw4YDByo5hIDI5AjvKAb0HuQWcm', 'bdffd@dfdgf.jkk'),
(93, 'gom', '$2y$10$gXGrVXWI.kNgKnJ2q7dhAuaLcC8YRIgyKCZe4kbWFEO3P5MICB8iW', 'vbdbghdfg@fsdhgf.tyiuy'),
(94, 'bohy', '$2y$10$VGQ1h4pKXSa29nVfw92XB.p/1Hg97Cm4j5LivU4sQvcwld0h5Kfru', 'fsgdf@dhfgh.ghjghj'),
(95, 'vik', '$2y$10$wS3D3H5E0bcSB0VEPKBpmefvU2uxkfjwt0up5qOq2VmbFB8XpL44C', 'sgsdfg@sfdshsdgh.fghfg'),
(96, 'cina', '$2y$10$zDI7TLg8NIfN3a1bOv2wWuKAn6AqAx0DMj4XC8wjnubDJxrqk0KjC', 'bdf@gsdf.jgh'),
(97, 'figo', '$2y$10$K4QvYqx1d8qYqdFeqw6wluqlUw.Pn6/9FnoyKdFjN8DN4p9bUqesW', 'dsfsdf@dhdfg.jklhk'),
(98, 'jin', '$2y$10$gySoJ8qH4a.5.iWocjx3FOP0w..3m2iukz9LvY1xZSQrWoK8pYyxC', 'banka@gmail.com');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `active_user`
--
ALTER TABLE `active_user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cars_transmission`
--
ALTER TABLE `cars_transmission`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `class_car`
--
ALTER TABLE `class_car`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `color_car`
--
ALTER TABLE `color_car`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `force_amount`
--
ALTER TABLE `force_amount`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `itemList`
--
ALTER TABLE `itemList`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `labels_auto`
--
ALTER TABLE `labels_auto`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `list_characteristic_car`
--
ALTER TABLE `list_characteristic_car`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `price_cars`
--
ALTER TABLE `price_cars`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `price_regions`
--
ALTER TABLE `price_regions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `active_user`
--
ALTER TABLE `active_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT для таблицы `cars_transmission`
--
ALTER TABLE `cars_transmission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `class_car`
--
ALTER TABLE `class_car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `color_car`
--
ALTER TABLE `color_car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `force_amount`
--
ALTER TABLE `force_amount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `itemList`
--
ALTER TABLE `itemList`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `labels_auto`
--
ALTER TABLE `labels_auto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `list_characteristic_car`
--
ALTER TABLE `list_characteristic_car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `price_cars`
--
ALTER TABLE `price_cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `price_regions`
--
ALTER TABLE `price_regions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
