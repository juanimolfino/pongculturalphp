-- Adminer 4.7.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE TABLE `noticia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(80) NOT NULL,
  `subtitulo` varchar(140) NOT NULL,
  `contenido` text NOT NULL,
  `img_1` varchar(100) NOT NULL,
  `img_2` varchar(100) DEFAULT NULL,
  `fecha` datetime NOT NULL,
  `autor` int(10) unsigned NOT NULL,
  `seccion` int(10) unsigned NOT NULL,
  `activo` bit(1) NOT NULL,
  `vistos` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `titulo` (`titulo`,`img_1`),
  KEY `autores` (`autor`),
  KEY `secciones` (`seccion`),
  CONSTRAINT `autores` FOREIGN KEY (`autor`) REFERENCES `registro` (`id`),
  CONSTRAINT `secciones` FOREIGN KEY (`seccion`) REFERENCES `seccion` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- 2019-12-16 02:06:14
