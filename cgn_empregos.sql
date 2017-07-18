-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE DATABASE "cgn_empregos" --------------------------
CREATE DATABASE IF NOT EXISTS `cgn_empregos` CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cgn_empregos`;
-- ---------------------------------------------------------


-- CREATE TABLE "usuarios" ---------------------------------
-- CREATE TABLE "usuarios" -------------------------------------
CREATE TABLE `usuarios` ( 
	`id` Int( 11 ) NOT NULL,
	`username` VarChar( 50 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`password` VarChar( 50 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`nivel` Enum( 'administrativo', 'normal' ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'nivel de usuarios no sistema administrativo, aceita apenas dois valores \'administrativo\' & \'normal\'',
	`status` Enum( 'ativo', 'inativo' ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'status dos usuarios administrativos, aceita apenas valores \'ativo\' & \'inativo\'' )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ENGINE = InnoDB;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- Dump data of "usuarios" ---------------------------------
INSERT INTO `usuarios`(`id`,`username`,`password`,`nivel`,`status`) VALUES ( '0', 'wwwjsw', '5669e289ef77fbd710ecf59cf823d0df', 'administrativo', 'ativo' );
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


