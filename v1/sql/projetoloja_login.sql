CREATE DATABASE  IF NOT EXISTS `projetoloja`;
USE `projetoloja`;


--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `id_login` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY (`id_login`)
);

--
-- Dumping data for table `login`
--

INSERT INTO `login` VALUES (1,'marciofux','senha@123'),(2,'carol','senha@456');
