CREATE DATABASE `candidate` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `candidate`;

CREATE TABLE `users` (
  `user_id` char(32) NOT NULL,
  `inserted` datetime NOT NULL,
  `firstname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `open_sessions` (
  `ip` char(15) NOT NULL,
  `started` datetime NOT NULL,
  PRIMARY KEY (`ip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

insert into candidate.users(user_id, inserted, firstname, lastname, phone) values ('a123', '2019-01-01 00:15:00', 'first1', 'last1', '123456789');
