CREATE TABLE `professor` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`nome` VARCHAR(200) NOT NULL DEFAULT '0' COLLATE 'utf8mb4_general_ci',
	`materia` VARCHAR(200) NOT NULL DEFAULT '0' COLLATE 'utf8mb4_general_ci',
	`telefone` VARCHAR(20) NOT NULL DEFAULT '0' COLLATE 'utf8mb4_general_ci',
	`email` VARCHAR(70) NOT NULL DEFAULT '0' COLLATE 'utf8mb4_general_ci',
	`endereco` VARCHAR(150) NOT NULL DEFAULT '0' COLLATE 'utf8mb4_general_ci',
	PRIMARY KEY (`Coluna 1`) USING BTREE
)