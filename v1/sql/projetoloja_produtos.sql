CREATE DATABASE  IF NOT EXISTS `projetoloja`;
USE `projetoloja`;


--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;

CREATE TABLE `produtos` (
  `idprodutos` int(11) NOT NULL AUTO_INCREMENT,
  `nome_produto` varchar(45) NOT NULL,
  `qtd_estoque` int(11) NOT NULL,
  `preco_unitario` decimal(7,2) DEFAULT NULL,
  `tamanho` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idprodutos`)
);

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` VALUES (1,'Notebook',10,2500.00,'15\"');