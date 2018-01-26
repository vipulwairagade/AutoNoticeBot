--
-- Database: `vehicles`
--

CREATE DATABASE IF NOT EXISTS  `autobot`;


--
-- Table structure for table `vehicles`
--

CREATE TABLE IF NOT EXISTS `autobot`.`vehicles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_no` varchar(10) NOT NULL,
  `chassis_no` varchar(20) NOT NULL,
  `engine_no` varchar(20) NOT NULL,
  `fuel_type` varchar(50) NOT NULL,
  `maker_class` varchar(50) NOT NULL,
  `maker_model` varchar(50) NOT NULL,
  `reg_date` date NOT NULL,
  `reg_auth` varchar(5) NOT NULL,
  `aadhaar` int(12) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`aadhaar`) REFERENCES users(`aadhaar`)
) ENGINE=MyISAM;

