
CREATE TABLE `board_members` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `member` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `members3` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `email` varchar(64) NOT NULL UNIQUE KEY,
  `name` varchar(64) NOT NULL,
  `birthdate` varchar(16) DEFAULT NULL,
  `address` varchar(64) DEFAULT NULL,
  `zipcode` varchar(8) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `active_member` tinyint(1) NOT NULL DEFAULT '1',
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `motorcycles` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `owner` int(11) NOT NULL,
  `make` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `notes` text NOT NULL,
  `picture` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

