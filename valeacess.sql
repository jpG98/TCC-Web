-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.32-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para valeacess
CREATE DATABASE IF NOT EXISTS `valeacess` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;
USE `valeacess`;

-- Copiando estrutura para tabela valeacess.avaliacao
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

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela valeacess.comercio
CREATE TABLE IF NOT EXISTS `comercio` (
  `cnpj` varchar(18) DEFAULT NULL,
  `comercio_id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) DEFAULT NULL,
  `cidade` varchar(250) DEFAULT NULL,
  `rua` varchar(250) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `categoria` varchar(250) DEFAULT NULL,
  `imagemp` blob DEFAULT NULL,
  PRIMARY KEY (`comercio_id`),
  UNIQUE KEY `cnpj` (`cnpj`),
  KEY `nome` (`nome`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela valeacess.denuncia
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

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela valeacess.usuario
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

-- Exportação de dados foi desmarcado.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
