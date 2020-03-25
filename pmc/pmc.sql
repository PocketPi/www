
CREATE TABLE `board_members` (
  `board_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `memeber_id` int(11) NOT NULL,
  `board_email` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `members` (
  `memeber_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `email` varchar(64) NOT NULL UNIQUE KEY,
  `firstname` varchar(64) NOT NULL,
  `surname` varchar(64) NOT NULL,
  `birthdate` varchar(16) DEFAULT NULL,
  `address` varchar(64) DEFAULT NULL,
  `zipcode` varchar(8) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `active_member` tinyint(1) NOT NULL DEFAULT '1',
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `motorcycles` (
  `mc_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `memeber_id` int(11) NOT NULL,
  `make` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `notes` text NOT NULL,
  `picture` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

