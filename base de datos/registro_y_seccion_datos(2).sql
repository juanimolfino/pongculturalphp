-- Adminer 4.7.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

INSERT INTO `registro` (`id`, `nombre`, `mail`, `pass`, `activo`, `admin`) VALUES
(15,	'juanimolfino',	'juanymolfino@hotmail.com',	'$2y$10$2DTExzPr6E50WNsQ3FxJn.8Wgt9z2elFrc9Ym0PbZXJDmo5V6ik4.',	CONV('1', 2, 10) + 0,	CONV('1', 2, 10) + 0),
(23,	'Malena Del Rio',	'maledelrio.17@hotmail.com',	'$2y$10$gHEx2/9.KoGnN2N7XBLxgui38viYQv.Yv4GO7NzpVxj.HJdx9y.N6',	CONV('1', 2, 10) + 0,	CONV('0', 2, 10) + 0),
(24,	'Ramones',	'lucianocisneros@hotmail.com',	'$2y$10$DYZ7lYiOgoi1OVJQKsM9K.3nlo2mrgbk0ohu4I6Gvg9FUwzIWlIVy',	CONV('0', 2, 10) + 0,	CONV('0', 2, 10) + 0),
(25,	'anastasio',	'anastasio@gmail.com',	'$2y$10$f9t2FXYH30L/VBye3A8GbuGiAXioqcPm57Ffe8Hh4ZPVXqfxllwnq',	CONV('0', 2, 10) + 0,	CONV('1', 2, 10) + 0),
(26,	'Lara',	'larita@gmail.com',	'$2y$10$CSJ.Cy1qTjRtm7a7jds5l.XJk5nYzX2rBmtR0qd2DYuv14jI7ed0O',	CONV('1', 2, 10) + 0,	CONV('0', 2, 10) + 0),
(27,	'Ramon',	'ramon@gmail.com',	'$2y$10$TKjbEGoSVypekG5gbanRGehnPLgEEtGH.trgffcYALLGg5XA/hv9u',	CONV('0', 2, 10) + 0,	CONV('0', 2, 10) + 0),
(28,	'administrador',	'admin@gmail.com',	'$2y$10$JmxOlOuMYgE4.IognXIZOu4TA2/E2IxKymGR2vyNIZm1oMk9LEFGy',	CONV('0', 2, 10) + 0,	CONV('1', 2, 10) + 0),
(29,	'Jorge Veri',	'veri@gmail.com',	'$2y$10$mO566uRV4nXTZmbN2m5is.qIUi4Cbo/Xd6iSJAu/tf3heZmKRTwqa',	CONV('0', 2, 10) + 0,	CONV('0', 2, 10) + 0),
(30,	'Juan I. Molfino',	'jimolfino@sodimac.com.ar',	'$2y$10$o3gaQ2c4rynIdoBh2z3V0uwDhauDuwwM0TgPHIrtN88IYaSZ7CWDe',	CONV('1', 2, 10) + 0,	CONV('0', 2, 10) + 0),
(31,	'Laritaaa',	'lara@hotmail.com',	'$2y$10$aJIgNkPkY3iZx8r4IVsQOe84GjogB/pY.Xcue8Y0wbDjLHNQALg.W',	CONV('1', 2, 10) + 0,	CONV('0', 2, 10) + 0),
(32,	'juani carga',	'juanicarga@gmail.com',	'$2y$10$mRHAr4WafzV6b9io0u6wWuFjc8Hz1bvNfXagy2Iich2DOa.2hc9za',	CONV('1', 2, 10) + 0,	CONV('0', 2, 10) + 0),
(33,	'Literatura',	'literatura@gmail.com',	'$2y$10$gJDjwoU49b5idxC17H92Re7ND3a9CYkT8j7BonSGx3/FCf5Cnj0hW',	CONV('1', 2, 10) + 0,	CONV('0', 2, 10) + 0);

INSERT INTO `seccion` (`id`, `nombre`, `activo`) VALUES
(1,	'Fotografía',	CONV('1', 2, 10) + 0),
(2,	'Literatura',	CONV('1', 2, 10) + 0),
(3,	'Música',	CONV('1', 2, 10) + 0);

-- 2019-12-16 02:05:53
