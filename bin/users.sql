--
-- Database: `users`
--

CREATE DATABASE IF NOT EXISTS  `autobot`;


--
-- Table structure for table `vehicles`
--
CREATE TABLE IF NOT EXISTS `autobot`.`users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aadhaar` int(12) NOT NULL,
  `name` varchar(60) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` DATE NOT NULL,
  `email` varchar(80) NOT NULL,
  `address` varchar(50) NOT NULL,
  `license_no` date NOT NULL,
  `reg_no` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;