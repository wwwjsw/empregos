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
	`beneficios_clt` TinyInt( 1 ) NULL,
	`beneficios_diaria` TinyInt( 1 ) NULL,
	`beneficios_odonto` TinyInt( 1 ) NULL,
	`beneficios_vida` TinyInt( 1 ) NULL,
	`beneficios_alimentacao` TinyInt( 1 ) NULL,
	`beneficios_saude` TinyInt( 1 ) NULL,
	`beneficios_comissao` TinyInt( 1 ) NULL,
	`beneficios_vt` TinyInt( 1 ) NULL,
	`numero` VarChar( 17 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`cor` VarChar( 12 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`cargo` VarChar( 40 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`block` TinyInt( 1 ) NOT NULL DEFAULT '0',
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 16;
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
	`id_f` Int( 200 ) AUTO_INCREMENT NOT NULL,
	`fb_id` BigInt( 64 ) NOT NULL,
	`fb_name` VarChar( 60 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	PRIMARY KEY ( `id_f` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 4;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- Dump data of "cards" ------------------------------------
INSERT INTO `cards`(`id`,`is_ad`,`facebook`,`tipo`,`beneficios_clt`,`beneficios_diaria`,`beneficios_odonto`,`beneficios_vida`,`beneficios_alimentacao`,`beneficios_saude`,`beneficios_comissao`,`beneficios_vt`,`numero`,`cor`,`cargo`,`block`) VALUES ( '7', '0', '3', 'servico', '0', '0', '0', '0', '0', '0', '0', '0', '(45) 00000 - 0000', 'blue-grey', 'gerente de loja', '0' );
INSERT INTO `cards`(`id`,`is_ad`,`facebook`,`tipo`,`beneficios_clt`,`beneficios_diaria`,`beneficios_odonto`,`beneficios_vida`,`beneficios_alimentacao`,`beneficios_saude`,`beneficios_comissao`,`beneficios_vt`,`numero`,`cor`,`cargo`,`block`) VALUES ( '8', '0', '3', 'servico', '1', '1', '1', '1', '1', '1', '1', '1', '(45) 00000 - 0000', 'grey', 'administrativo', '0' );
INSERT INTO `cards`(`id`,`is_ad`,`facebook`,`tipo`,`beneficios_clt`,`beneficios_diaria`,`beneficios_odonto`,`beneficios_vida`,`beneficios_alimentacao`,`beneficios_saude`,`beneficios_comissao`,`beneficios_vt`,`numero`,`cor`,`cargo`,`block`) VALUES ( '9', '0', '3', 'servico', '0', '1', '1', '1', '1', '1', '1', '1', '(45) 00000 - 0000', 'pink', 'fisioterapeuta', '0' );
INSERT INTO `cards`(`id`,`is_ad`,`facebook`,`tipo`,`beneficios_clt`,`beneficios_diaria`,`beneficios_odonto`,`beneficios_vida`,`beneficios_alimentacao`,`beneficios_saude`,`beneficios_comissao`,`beneficios_vt`,`numero`,`cor`,`cargo`,`block`) VALUES ( '10', '0', '3', 'servico', NULL, NULL, NULL, NULL, '0', NULL, '0', NULL, '(45) 12345 - 1234', 'pink', 'operador de câmera', '0' );
INSERT INTO `cards`(`id`,`is_ad`,`facebook`,`tipo`,`beneficios_clt`,`beneficios_diaria`,`beneficios_odonto`,`beneficios_vida`,`beneficios_alimentacao`,`beneficios_saude`,`beneficios_comissao`,`beneficios_vt`,`numero`,`cor`,`cargo`,`block`) VALUES ( '11', '0', '3', 'servico', NULL, NULL, NULL, NULL, '0', '0', NULL, NULL, '(45) 00000 - 0000', 'red', 'faturamento', '0' );
INSERT INTO `cards`(`id`,`is_ad`,`facebook`,`tipo`,`beneficios_clt`,`beneficios_diaria`,`beneficios_odonto`,`beneficios_vida`,`beneficios_alimentacao`,`beneficios_saude`,`beneficios_comissao`,`beneficios_vt`,`numero`,`cor`,`cargo`,`block`) VALUES ( '12', '0', '3', 'servico', NULL, NULL, NULL, NULL, '0', '0', '0', NULL, '(45) 12345 - 1234', 'red', 'operador de câmera', '0' );
INSERT INTO `cards`(`id`,`is_ad`,`facebook`,`tipo`,`beneficios_clt`,`beneficios_diaria`,`beneficios_odonto`,`beneficios_vida`,`beneficios_alimentacao`,`beneficios_saude`,`beneficios_comissao`,`beneficios_vt`,`numero`,`cor`,`cargo`,`block`) VALUES ( '13', '0', '3', 'servico', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '(45) 00000 - 0000', 'red', 'operador de empilhadeira', '0' );
INSERT INTO `cards`(`id`,`is_ad`,`facebook`,`tipo`,`beneficios_clt`,`beneficios_diaria`,`beneficios_odonto`,`beneficios_vida`,`beneficios_alimentacao`,`beneficios_saude`,`beneficios_comissao`,`beneficios_vt`,`numero`,`cor`,`cargo`,`block`) VALUES ( '14', '0', '3', 'servico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '(45) 00000 - 0000', 'grey', 'administrativo', '0' );
INSERT INTO `cards`(`id`,`is_ad`,`facebook`,`tipo`,`beneficios_clt`,`beneficios_diaria`,`beneficios_odonto`,`beneficios_vida`,`beneficios_alimentacao`,`beneficios_saude`,`beneficios_comissao`,`beneficios_vt`,`numero`,`cor`,`cargo`,`block`) VALUES ( '15', '0', '3', 'servico', '0', '0', '0', '0', '1', '0', '0', '0', '(45) 00000 - 0000', 'deep-purple', 'farmacêutico', '0' );
-- ---------------------------------------------------------


-- Dump data of "usuarios" ---------------------------------
INSERT INTO `usuarios`(`id`,`username`,`password`,`nivel`,`status`) VALUES ( '1', 'wwwjsw', '5669e289ef77fbd710ecf59cf823d0df', 'administrativo', 'ativo' );
-- ---------------------------------------------------------


-- Dump data of "usuarios_facebook" ------------------------
INSERT INTO `usuarios_facebook`(`id_f`,`fb_id`,`fb_name`) VALUES ( '3', '903743969763615', 'Guilherme Henrique' );
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


