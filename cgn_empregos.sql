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
AUTO_INCREMENT = 43;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "empregos" ---------------------------------
-- CREATE TABLE "empregos" -------------------------------------
CREATE TABLE `empregos` ( 
	`id_cargo` Int( 200 ) AUTO_INCREMENT NOT NULL,
	`nome_cargo` VarChar( 40 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	CONSTRAINT `unique_id_cargo` UNIQUE( `id_cargo` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 18;
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
AUTO_INCREMENT = 33;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- Dump data of "cards" ------------------------------------
INSERT INTO `cards`(`id`,`is_ad`,`facebook`,`tipo`,`beneficios_clt`,`beneficios_diaria`,`beneficios_odonto`,`beneficios_vida`,`beneficios_alimentacao`,`beneficios_saude`,`beneficios_comissao`,`beneficios_vt`,`numero`,`cor`,`cargo`,`block`) VALUES ( '16', '0', '4', 'servico', '1', '1', '1', '1', '0', '1', '0', '1', '(45) 12345 - 1234', 'light-blue', 'motoboy', '0' );
INSERT INTO `cards`(`id`,`is_ad`,`facebook`,`tipo`,`beneficios_clt`,`beneficios_diaria`,`beneficios_odonto`,`beneficios_vida`,`beneficios_alimentacao`,`beneficios_saude`,`beneficios_comissao`,`beneficios_vt`,`numero`,`cor`,`cargo`,`block`) VALUES ( '17', '0', '5', 'servico', '1', '0', '0', '0', '1', '0', '0', '1', '(45) 00000 - 0000', 'orange', 'farmácia', '0' );
INSERT INTO `cards`(`id`,`is_ad`,`facebook`,`tipo`,`beneficios_clt`,`beneficios_diaria`,`beneficios_odonto`,`beneficios_vida`,`beneficios_alimentacao`,`beneficios_saude`,`beneficios_comissao`,`beneficios_vt`,`numero`,`cor`,`cargo`,`block`) VALUES ( '18', '0', '6', 'servico', '0', '1', '0', '0', '0', '0', '1', '0', '(45) 00000 - 0000', 'green', 'freelancer', '0' );
INSERT INTO `cards`(`id`,`is_ad`,`facebook`,`tipo`,`beneficios_clt`,`beneficios_diaria`,`beneficios_odonto`,`beneficios_vida`,`beneficios_alimentacao`,`beneficios_saude`,`beneficios_comissao`,`beneficios_vt`,`numero`,`cor`,`cargo`,`block`) VALUES ( '19', '0', '7', 'servico', '1', '0', '1', '1', '1', '1', '0', '1', '(45) 00000 - 0000', 'grey', 'jurídico', '0' );
INSERT INTO `cards`(`id`,`is_ad`,`facebook`,`tipo`,`beneficios_clt`,`beneficios_diaria`,`beneficios_odonto`,`beneficios_vida`,`beneficios_alimentacao`,`beneficios_saude`,`beneficios_comissao`,`beneficios_vt`,`numero`,`cor`,`cargo`,`block`) VALUES ( '20', '0', '9', 'servico', '1', '0', '0', '1', '0', '1', '0', '0', '(45) 12345 - 7777', 'yellow', 'operador de câmera', '0' );
INSERT INTO `cards`(`id`,`is_ad`,`facebook`,`tipo`,`beneficios_clt`,`beneficios_diaria`,`beneficios_odonto`,`beneficios_vida`,`beneficios_alimentacao`,`beneficios_saude`,`beneficios_comissao`,`beneficios_vt`,`numero`,`cor`,`cargo`,`block`) VALUES ( '21', '0', '11', 'servico', '1', '0', '1', '0', '1', '0', '0', '0', '(45) 99999 - 6666', 'green', 'frentista', '0' );
INSERT INTO `cards`(`id`,`is_ad`,`facebook`,`tipo`,`beneficios_clt`,`beneficios_diaria`,`beneficios_odonto`,`beneficios_vida`,`beneficios_alimentacao`,`beneficios_saude`,`beneficios_comissao`,`beneficios_vt`,`numero`,`cor`,`cargo`,`block`) VALUES ( '22', '0', '13', 'servico', '0', '1', '0', '1', '0', '0', '0', '1', '(45) 12345 - 1234', 'cyan', 'fiscal de loja', '0' );
INSERT INTO `cards`(`id`,`is_ad`,`facebook`,`tipo`,`beneficios_clt`,`beneficios_diaria`,`beneficios_odonto`,`beneficios_vida`,`beneficios_alimentacao`,`beneficios_saude`,`beneficios_comissao`,`beneficios_vt`,`numero`,`cor`,`cargo`,`block`) VALUES ( '23', '0', '14', 'servico', '0', '1', '1', '0', '1', '0', '0', '0', '(45) 88888 - 0000', 'deep-purple', 'administrativo', '0' );
INSERT INTO `cards`(`id`,`is_ad`,`facebook`,`tipo`,`beneficios_clt`,`beneficios_diaria`,`beneficios_odonto`,`beneficios_vida`,`beneficios_alimentacao`,`beneficios_saude`,`beneficios_comissao`,`beneficios_vt`,`numero`,`cor`,`cargo`,`block`) VALUES ( '24', '0', '15', 'servico', '0', '0', '0', '0', '1', '1', '0', '0', '(45) 12345 - 1234', 'amber', 'personal trainner', '0' );
INSERT INTO `cards`(`id`,`is_ad`,`facebook`,`tipo`,`beneficios_clt`,`beneficios_diaria`,`beneficios_odonto`,`beneficios_vida`,`beneficios_alimentacao`,`beneficios_saude`,`beneficios_comissao`,`beneficios_vt`,`numero`,`cor`,`cargo`,`block`) VALUES ( '25', '0', '16', 'servico', '0', '1', '0', '0', '0', '0', '1', '0', '(45) 99999 - 0000', 'blue-grey', 'faturamento', '0' );
INSERT INTO `cards`(`id`,`is_ad`,`facebook`,`tipo`,`beneficios_clt`,`beneficios_diaria`,`beneficios_odonto`,`beneficios_vida`,`beneficios_alimentacao`,`beneficios_saude`,`beneficios_comissao`,`beneficios_vt`,`numero`,`cor`,`cargo`,`block`) VALUES ( '26', '0', '17', 'servico', '0', '1', '0', '0', '0', '0', '0', '0', '45 66666 0000', 'light-blue', 'diarista', '0' );
INSERT INTO `cards`(`id`,`is_ad`,`facebook`,`tipo`,`beneficios_clt`,`beneficios_diaria`,`beneficios_odonto`,`beneficios_vida`,`beneficios_alimentacao`,`beneficios_saude`,`beneficios_comissao`,`beneficios_vt`,`numero`,`cor`,`cargo`,`block`) VALUES ( '27', '1', '18', 'servico', '0', '1', '0', '0', '0', '1', '0', '1', '(45) 00000 - 9999', 'brown', 'gerente de loja', '0' );
INSERT INTO `cards`(`id`,`is_ad`,`facebook`,`tipo`,`beneficios_clt`,`beneficios_diaria`,`beneficios_odonto`,`beneficios_vida`,`beneficios_alimentacao`,`beneficios_saude`,`beneficios_comissao`,`beneficios_vt`,`numero`,`cor`,`cargo`,`block`) VALUES ( '28', '0', '19', 'servico', '0', '1', '1', '0', '1', '0', '0', '0', '(45) 99999 - 4444', 'orange', 'operador de telemarketing', '0' );
INSERT INTO `cards`(`id`,`is_ad`,`facebook`,`tipo`,`beneficios_clt`,`beneficios_diaria`,`beneficios_odonto`,`beneficios_vida`,`beneficios_alimentacao`,`beneficios_saude`,`beneficios_comissao`,`beneficios_vt`,`numero`,`cor`,`cargo`,`block`) VALUES ( '29', '1', '20', 'vaga', '1', '0', '0', '0', '1', '0', '0', '0', '(45) 12345 - 1234', 'teal', 'farmácia', '0' );
INSERT INTO `cards`(`id`,`is_ad`,`facebook`,`tipo`,`beneficios_clt`,`beneficios_diaria`,`beneficios_odonto`,`beneficios_vida`,`beneficios_alimentacao`,`beneficios_saude`,`beneficios_comissao`,`beneficios_vt`,`numero`,`cor`,`cargo`,`block`) VALUES ( '30', '0', '21', 'vaga', '0', '0', '1', '0', '0', '0', '1', '0', '45 00000 0000', 'indigo', 'operador de caixa', '0' );
INSERT INTO `cards`(`id`,`is_ad`,`facebook`,`tipo`,`beneficios_clt`,`beneficios_diaria`,`beneficios_odonto`,`beneficios_vida`,`beneficios_alimentacao`,`beneficios_saude`,`beneficios_comissao`,`beneficios_vt`,`numero`,`cor`,`cargo`,`block`) VALUES ( '31', '1', '22', 'vaga', '1', '1', '0', '0', '1', '0', '1', '0', '(45) 99999 - 0000', 'lime', 'faturamento', '0' );
-- ---------------------------------------------------------


-- Dump data of "empregos" ---------------------------------
-- ---------------------------------------------------------


-- Dump data of "usuarios" ---------------------------------
INSERT INTO `usuarios`(`id`,`username`,`password`,`nivel`,`status`) VALUES ( '1', 'wwwjsw', '5669e289ef77fbd710ecf59cf823d0df', 'administrativo', 'ativo' );
-- ---------------------------------------------------------


-- Dump data of "usuarios_facebook" ------------------------
INSERT INTO `usuarios_facebook`(`id_f`,`fb_id`,`fb_name`) VALUES ( '3', '903743969763615', 'Guilherme Henrique' );
INSERT INTO `usuarios_facebook`(`id_f`,`fb_id`,`fb_name`) VALUES ( '4', '903743969763615', 'Guilherme Henrique' );
INSERT INTO `usuarios_facebook`(`id_f`,`fb_id`,`fb_name`) VALUES ( '5', '903743969763615', 'Guilherme Henrique' );
INSERT INTO `usuarios_facebook`(`id_f`,`fb_id`,`fb_name`) VALUES ( '6', '903743969763615', 'Guilherme Henrique' );
INSERT INTO `usuarios_facebook`(`id_f`,`fb_id`,`fb_name`) VALUES ( '7', '903743969763615', 'Guilherme Henrique' );
INSERT INTO `usuarios_facebook`(`id_f`,`fb_id`,`fb_name`) VALUES ( '8', '903743969763615', 'Guilherme Henrique' );
INSERT INTO `usuarios_facebook`(`id_f`,`fb_id`,`fb_name`) VALUES ( '9', '903743969763615', 'Guilherme Henrique' );
INSERT INTO `usuarios_facebook`(`id_f`,`fb_id`,`fb_name`) VALUES ( '10', '903743969763615', 'Guilherme Henrique' );
INSERT INTO `usuarios_facebook`(`id_f`,`fb_id`,`fb_name`) VALUES ( '11', '903743969763615', 'Guilherme Henrique' );
INSERT INTO `usuarios_facebook`(`id_f`,`fb_id`,`fb_name`) VALUES ( '12', '903743969763615', 'Guilherme Henrique' );
INSERT INTO `usuarios_facebook`(`id_f`,`fb_id`,`fb_name`) VALUES ( '13', '903743969763615', 'Guilherme Henrique' );
INSERT INTO `usuarios_facebook`(`id_f`,`fb_id`,`fb_name`) VALUES ( '14', '903743969763615', 'Guilherme Henrique' );
INSERT INTO `usuarios_facebook`(`id_f`,`fb_id`,`fb_name`) VALUES ( '15', '903743969763615', 'Guilherme Henrique' );
INSERT INTO `usuarios_facebook`(`id_f`,`fb_id`,`fb_name`) VALUES ( '16', '903743969763615', 'Guilherme Henrique' );
INSERT INTO `usuarios_facebook`(`id_f`,`fb_id`,`fb_name`) VALUES ( '17', '903743969763615', 'Guilherme Henrique' );
INSERT INTO `usuarios_facebook`(`id_f`,`fb_id`,`fb_name`) VALUES ( '18', '903743969763615', 'Guilherme Henrique' );
INSERT INTO `usuarios_facebook`(`id_f`,`fb_id`,`fb_name`) VALUES ( '19', '903743969763615', 'Guilherme Henrique' );
INSERT INTO `usuarios_facebook`(`id_f`,`fb_id`,`fb_name`) VALUES ( '20', '903743969763615', 'Guilherme Henrique' );
INSERT INTO `usuarios_facebook`(`id_f`,`fb_id`,`fb_name`) VALUES ( '21', '903743969763615', 'Guilherme Henrique' );
INSERT INTO `usuarios_facebook`(`id_f`,`fb_id`,`fb_name`) VALUES ( '22', '903743969763615', 'Guilherme Henrique' );
INSERT INTO `usuarios_facebook`(`id_f`,`fb_id`,`fb_name`) VALUES ( '23', '903743969763615', 'Guilherme Henrique' );
INSERT INTO `usuarios_facebook`(`id_f`,`fb_id`,`fb_name`) VALUES ( '24', '903743969763615', 'Guilherme Henrique' );
INSERT INTO `usuarios_facebook`(`id_f`,`fb_id`,`fb_name`) VALUES ( '25', '903743969763615', 'Guilherme Henrique' );
INSERT INTO `usuarios_facebook`(`id_f`,`fb_id`,`fb_name`) VALUES ( '26', '903743969763615', 'Guilherme Henrique' );
INSERT INTO `usuarios_facebook`(`id_f`,`fb_id`,`fb_name`) VALUES ( '27', '903743969763615', 'Guilherme Henrique' );
INSERT INTO `usuarios_facebook`(`id_f`,`fb_id`,`fb_name`) VALUES ( '28', '903743969763615', 'Guilherme Henrique' );
INSERT INTO `usuarios_facebook`(`id_f`,`fb_id`,`fb_name`) VALUES ( '29', '903743969763615', 'Guilherme Henrique' );
INSERT INTO `usuarios_facebook`(`id_f`,`fb_id`,`fb_name`) VALUES ( '30', '903743969763615', 'Guilherme Henrique' );
INSERT INTO `usuarios_facebook`(`id_f`,`fb_id`,`fb_name`) VALUES ( '31', '903743969763615', 'Guilherme Henrique' );
INSERT INTO `usuarios_facebook`(`id_f`,`fb_id`,`fb_name`) VALUES ( '32', '903743969763615', 'Guilherme Henrique' );
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


