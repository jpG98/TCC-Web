/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE IF NOT EXISTS `valeacess` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;
USE `valeacess`;

CREATE TABLE IF NOT EXISTS `avaliacao` (
  `avalia_visual` int(1) DEFAULT NULL,
  `avalia_fisica` int(1) DEFAULT NULL,
  `avalia_auditiva` int(1) DEFAULT NULL,
  `avalia_id` int(11) NOT NULL AUTO_INCREMENT,
  `feedback` text DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`avalia_id`),
  KEY `usuario_id` (`usuario_id`),
  CONSTRAINT `usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE IF NOT EXISTS `comercio` (
  `cnpj` varchar(18) DEFAULT NULL,
  `comercio_id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) DEFAULT NULL,
  `cidade` varchar(250) DEFAULT NULL,
  `rua` varchar(250) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `categoria` varchar(250) DEFAULT NULL,
  `imagemp` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`comercio_id`),
  UNIQUE KEY `cnpj` (`cnpj`),
  KEY `nome` (`nome`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE IF NOT EXISTS `denuncia` (
  `avalia_visual_d` int(1) DEFAULT NULL,
  `avalia_fisica_d` int(1) DEFAULT NULL,
  `avalia_auditiva_d` int(1) DEFAULT NULL,
  `denuncia_id` int(11) NOT NULL AUTO_INCREMENT,
  `imagem_d` blob DEFAULT NULL,
  `feedback` text DEFAULT NULL,
  `usuario_id_d` int(11) DEFAULT NULL,
  `comercio_id_d` int(11) DEFAULT NULL,
  PRIMARY KEY (`denuncia_id`),
  KEY `usuario_id_d` (`usuario_id_d`),
  KEY `comercio_id` (`comercio_id_d`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE IF NOT EXISTS `usuario` (
  `cpf` varchar(14) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `deficiencia` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `usuario_foto` varchar(100) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`usuario_id`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
