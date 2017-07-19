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


-- CREATE TABLE "cards" ------------------------------------
-- CREATE TABLE "cards" ----------------------------------------
CREATE TABLE `cards` ( 
	`id` Int( 200 ) AUTO_INCREMENT NOT NULL,
	`is_ad` TinyInt( 1 ) NULL,
	`facebook` Int( 200 ) NOT NULL,
	`tipo` Enum( 'servico', 'vaga' ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`beneficios_clt` TinyInt( 1 ) NOT NULL,
	`beneficios_diaria` TinyInt( 1 ) NOT NULL,
	`beneficios_odonto` TinyInt( 1 ) NOT NULL,
	`beneficios_vida` TinyInt( 1 ) NOT NULL,
	`beneficios_alimentacao` TinyInt( 1 ) NOT NULL,
	`beneficios_saude` TinyInt( 1 ) NOT NULL,
	`beneficios_comissao` TinyInt( 1 ) NOT NULL,
	`beneficios_vt` TinyInt( 1 ) NOT NULL,
	`numero` VarChar( 11 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`cor` VarChar( 6 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`cargo` VarChar( 40 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "usuarios" ---------------------------------
-- CREATE TABLE "usuarios" -------------------------------------
CREATE TABLE `usuarios` ( 
	`id` Int( 200 ) AUTO_INCREMENT NOT NULL,
	`username` VarChar( 50 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`password` VarChar( 50 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`nivel` Enum( 'administrativo', 'normal' ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'nivel de usuarios no sistema administrativo, aceita apenas dois valores \'administrativo\' & \'normal\'',
	`status` Enum( 'ativo', 'inativo' ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'status dos usuarios administrativos, aceita apenas valores \'ativo\' & \'inativo\'',
	CONSTRAINT `id` UNIQUE( `id` ) )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ENGINE = InnoDB
AUTO_INCREMENT = 2;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "usuarios_facebook" ------------------------
-- CREATE TABLE "usuarios_facebook" ----------------------------
CREATE TABLE `usuarios_facebook` ( 
	`id` Int( 200 ) AUTO_INCREMENT NOT NULL,
	`fb_id` BigInt( 64 ) NOT NULL,
	`fb_name` VarChar( 60 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- Dump data of "cards" ------------------------------------
-- ---------------------------------------------------------


-- Dump data of "usuarios" ---------------------------------
INSERT INTO `usuarios`(`id`,`username`,`password`,`nivel`,`status`) VALUES ( '1', 'wwwjsw', '5669e289ef77fbd710ecf59cf823d0df', 'administrativo', 'ativo' );
-- ---------------------------------------------------------


-- Dump data of "usuarios_facebook" ------------------------
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


