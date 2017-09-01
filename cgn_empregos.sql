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
AUTO_INCREMENT = 48;
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
AUTO_INCREMENT = 211;
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
AUTO_INCREMENT = 43;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- Dump data of "cards" ------------------------------------
INSERT INTO `cards`(`id`,`is_ad`,`facebook`,`tipo`,`beneficios_clt`,`beneficios_diaria`,`beneficios_odonto`,`beneficios_vida`,`beneficios_alimentacao`,`beneficios_saude`,`beneficios_comissao`,`beneficios_vt`,`numero`,`cor`,`cargo`,`block`) VALUES ( '52', '0', '45', 'servico', '1', '0', '0', '0', '1', '0', '0', '0', '(45) 99999 - 0000', 'blue', 'Auxiliar de escritório', '0' );
INSERT INTO `cards`(`id`,`is_ad`,`facebook`,`tipo`,`beneficios_clt`,`beneficios_diaria`,`beneficios_odonto`,`beneficios_vida`,`beneficios_alimentacao`,`beneficios_saude`,`beneficios_comissao`,`beneficios_vt`,`numero`,`cor`,`cargo`,`block`) VALUES ( '53', '0', '45', 'servico', '0', '1', '1', '0', '1', '1', '1', '1', '(45) 00000 - 0000', 'pink', 'Manicure/Pedicure', '0' );
-- ---------------------------------------------------------


-- Dump data of "empregos" ---------------------------------
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '27', 'Zelador' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '28', 'Vigilante' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '29', 'Vidraceiro' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '30', 'Veterinário' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '31', 'Vendedor externo' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '32', 'Vendedor de veículos' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '33', 'Vendedor de loja' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '34', 'Vendedor' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '35', 'Usinagem' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '36', 'Téc. em segurança do trabalho' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '37', 'Téc. em Meio Ambiente' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '38', 'Téc. em informática' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '39', 'Téc. em enfermagem' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '40', 'Téc. em eletrônica' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '41', 'Téc. em contabilidade' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '42', 'Téc. em ar condicionado' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '43', 'Tratador de piscina' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '44', 'Tosador' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '45', 'Telemarketing' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '46', 'Telefonista' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '47', 'Supervisor' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '48', 'Soldador' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '49', 'Servente de Pedreiro' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '50', 'Serralheiro' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '51', 'Segurança do trabalho' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '52', 'Segurança' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '53', 'Secretária' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '54', 'Revisor de textos' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '55', 'Representante comercial' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '56', 'Repositor' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '57', 'Recursos humanos' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '58', 'Recepção' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '59', 'Recepcionista' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '60', 'Químico' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '61', 'Publicitário' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '62', 'Psicólogo' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '63', 'Protético' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '64', 'Promotor de vendas' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '65', 'Projetista' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '66', 'Programador' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '67', 'Professor de violão' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '68', 'Professor de teclado/piano' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '69', 'Professor de saxofone' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '70', 'Professor de russo' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '71', 'Professor de mandarin' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '72', 'Professor de italiano' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '73', 'Professor de inglês' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '74', 'Professor de guitarra' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '75', 'Professor de francês' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '76', 'Professor de espanhol' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '77', 'Professor de bateria' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '78', 'Professor de alemão' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '79', 'Professor' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '80', 'Porteiro' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '81', 'Pizzaiolo' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '82', 'Pintor' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '83', 'Personal trainer' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '84', 'Pedreiro' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '85', 'Panfleteiro' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '86', 'Padeiro' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '87', 'Operador de telemarketing' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '88', 'Operador de produção' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '89', 'Operador de máquinas' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '90', 'Operador de empilhadeira' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '91', 'Operador de câmera' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '92', 'Operador de caixa' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '93', 'Operacional' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '94', 'Office boy' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '95', 'Nutricionista' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '96', 'Motorista particular' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '97', 'Motorista hab d' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '98', 'Motorista hab b' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '99', 'Motorista' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '100', 'Motoboy' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '101', 'Montador de móveis' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '102', 'Mestre de Obras' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '103', 'Mecânico' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '104', 'Massagista' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '105', 'Marketing' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '106', 'Marceneiro' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '107', 'Maquiador' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '108', 'Manobrista' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '109', 'Manicure/Pedicure' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '110', 'Logística' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '111', 'Limpeza' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '112', 'Lavador de carros' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '113', 'Jurídico' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '114', 'Jornalista' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '115', 'Jardineiro' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '116', 'Intérprete de Libras' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '117', 'Instrutor de autoescola' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '118', 'Inspetor de qualidade' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '119', 'Inspetor de alunos' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '120', 'Informática ti telecomunicações' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '121', 'Informática' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '122', 'Hotelaria e turismo' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '123', 'Hotelaria' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '124', 'Hospitalar' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '125', 'Home office' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '126', 'Gerente de vendas' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '127', 'Gerente de loja' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '128', 'Gerente comercial' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '129', 'Gerente administrativo' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '130', 'Gerente' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '131', 'Garçom' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '132', 'Gari' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '133', 'Frentista' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '134', 'Freelancer' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '135', 'Fotógrafo' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '136', 'Fonoaudiólogo' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '137', 'Florista' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '138', 'Fisioterapeuta' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '139', 'Fiscal de loja' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '140', 'Financeiro' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '141', 'Faturista' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '142', 'Faturamento' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '143', 'Farmacêutico' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '144', 'Estágio' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '145', 'Estoquista' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '146', 'Estofador/tapeceiro' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '147', 'Esteticista' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '148', 'Entregador' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '149', 'Enfermeiro' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '150', 'Encanador' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '151', 'Empacotador' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '152', 'Eletricista' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '153', 'Doméstica' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '154', 'Digitador' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '155', 'Diarista' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '156', 'Designer gráfico' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '157', 'Depilador' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '159', 'Dentista' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '160', 'Demonstradora' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '161', 'Cuidador de idoso' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '162', 'Cozinheiro' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '163', 'Costureira' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '164', 'Copeira' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '165', 'Coordenador' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '166', 'Contador' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '167', 'Conferente' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '168', 'Confeiteiro' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '169', 'Comprador' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '170', 'Comercial' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '171', 'Cobrança' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '172', 'Cinegrafista' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '173', 'Chaveiro' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '174', 'Carteiro' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '175', 'Caixa' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '176', 'Cabeleireira' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '177', 'Borracheiro' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '178', 'Balconista' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '179', 'Babá' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '180', 'Açougueiro' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '181', 'Auxiliar de vendas' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '182', 'Auxiliar de serviços em geral' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '183', 'Auxiliar de produção' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '184', 'Auxiliar de limpeza' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '185', 'Auxiliar de escritório' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '186', 'Auxiliar de enfermagem' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '187', 'Auxiliar administrativo' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '188', 'Auxiliar' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '189', 'Auxiliar de dentista' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '190', 'Atendente' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '191', 'Assistente administrativo' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '192', 'Arquiteto' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '193', 'Analista fiscal' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '194', 'Ajudante geral' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '195', 'Ajudante de cozinha' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '196', 'Advogado' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '197', 'Administrativo' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '198', 'Encarregado de dep. pessoal' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '199', 'Estagiário de direito' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '200', 'Estagiário de ciências contábeis' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '201', 'Estagiário de administração' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '202', 'Estagiário em farmácia' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '203', 'Estagiário de enfermagem' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '204', 'Estagiário de jornalismo' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '205', 'Estagiário de psicologia' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '206', 'Estagiário de nível médio' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '207', 'Primeiro emprego' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '208', 'Estagiário de fisioterapia' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '209', 'Estagiário em pedagogia' );
INSERT INTO `empregos`(`id_cargo`,`nome_cargo`) VALUES ( '210', 'Estagiário de logística' );
-- ---------------------------------------------------------


-- Dump data of "usuarios" ---------------------------------
INSERT INTO `usuarios`(`id`,`username`,`password`,`nivel`,`status`) VALUES ( '1', 'wwwjsw', '5669e289ef77fbd710ecf59cf823d0df', 'administrativo', 'ativo' );
-- ---------------------------------------------------------


-- Dump data of "usuarios_facebook" ------------------------
INSERT INTO `usuarios_facebook`(`id_f`,`fb_id`,`fb_name`) VALUES ( '45', '903743969763615', 'Guilherme Henrique' );
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


