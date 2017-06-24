use app;

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `actor`;
CREATE TABLE `actor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `birthdate` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `actor` (`id`, `lastname`, `firstname`, `birthdate`) VALUES
(1,	'bla',	'bal',	'0000-00-00'),
(2,	'blab',	'blub',	NULL),
(3,	'bal',	'sdf',	NULL);

DROP TABLE IF EXISTS `favourites`;
CREATE TABLE `favourites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_user` int(11) NOT NULL,
  `fk_series` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user` (`fk_user`),
  KEY `fk_series` (`fk_series`),
  CONSTRAINT `favourites_ibfk_1` FOREIGN KEY (`fk_user`) REFERENCES `user` (`id`),
  CONSTRAINT `favourites_ibfk_2` FOREIGN KEY (`fk_series`) REFERENCES `series` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `has_part_in`;
CREATE TABLE `has_part_in` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_actor` int(11) NOT NULL,
  `fk_series` int(11) NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_actor` (`fk_actor`),
  KEY `fk_series` (`fk_series`),
  CONSTRAINT `has_part_in_ibfk_1` FOREIGN KEY (`fk_actor`) REFERENCES `actor` (`id`),
  CONSTRAINT `has_part_in_ibfk_2` FOREIGN KEY (`fk_series`) REFERENCES `series` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `series`;
CREATE TABLE `series` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `seasons` int(11) NOT NULL,
  `episodes` int(11) NOT NULL,
  `summary` varchar(250) NOT NULL,
  `genre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `series` (`id`, `name`, `seasons`, `episodes`, `summary`, `genre`) VALUES
(1,	'Supernatural',	12,	254,	'Two Brothers hunting',	'Drama');

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `is_admin` int(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user` (`id`, `email`, `password`, `is_admin`) VALUES
(1,	'deborah.senn.89@outlook.com',	'Passw0rd!',	1),
(2,	'test@bla.bla',	'?gB??\\v???U?g?6#???E??x??F?',	0),
(3,	'test@qmail.com',	'pwpw',	0),
(4,	'q@q.com',	NULL,	0),
(5,	'x@x.xom',	NULL,	0),
(6,	'r@r.ch',	'$2y$10$ckByLmNockByLmNockByLejyEOOiqQQJmIvtMS2sr4WG5uod8BNwO',	0),
(7,	'e@e.ch',	'$2y$10$ZUBlLmNoZUBlLmNoZUBlLecdNb5h9lHsLYH0lUrLegXkffyTz0d/i',	0),
(8,	's@s.ch',	'$2y$10$c0BzLmNoc0BzLmNoc0BzLe21BVhklIRWWdarPSckdVpzYb3YG2In.',	1);

-- 2017-06-24 13:23:12

