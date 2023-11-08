CREATE TABLE `aluno` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`nome` VARCHAR(200) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`idade` INT(11) NULL DEFAULT NULL,
	`telefone` VARCHAR(20) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`classe_id` INT(11) NULL DEFAULT NULL,
	`responsavel_id` INT(11) NULL DEFAULT NULL,
	PRIMARY KEY (`id`),
	INDEX `classe_id_fk` (`classe_id`),
	INDEX `responsavel_id_fk` (`responsavel_id`),
	CONSTRAINT `classe_id_fk` FOREIGN KEY (`classe_id`) REFERENCES `classe` (`id`) ON UPDATE NO ACTION ON DELETE NO ACTION,
	CONSTRAINT `responsavel_id_fk` FOREIGN KEY (`responsavel_id`) REFERENCES `responsavel` (`id`) ON UPDATE NO ACTION ON DELETE NO ACTION
)