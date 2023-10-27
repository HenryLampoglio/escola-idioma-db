CREATE TABLE `responsavel` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`nome` VARCHAR(200) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`cpf` VARCHAR(20) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`telefone` VARCHAR(20) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`email` VARCHAR(70) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`endereco` VARCHAR(150) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	PRIMARY KEY (`id`) USING BTREE
)