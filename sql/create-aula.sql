CREATE TABLE `aula` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`horario` VARCHAR(100) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`sala_id` INT(11) NULL DEFAULT NULL,
	`professor_id` INT(11) NULL DEFAULT NULL,
	`classe_id` INT(11) NULL DEFAULT NULL,
	PRIMARY KEY (`id`),
	INDEX `FK_aula_sala` (`sala_id`),
	INDEX `professor_id` (`professor_id`),
	INDEX `classe_id` (`classe_id`),
	CONSTRAINT `FK_aula_sala` FOREIGN KEY (`sala_id`) REFERENCES `sala` (`id`) ON UPDATE NO ACTION ON DELETE NO ACTION,
	CONSTRAINT `classe_id` FOREIGN KEY (`classe_id`) REFERENCES `classe` (`id`) ON UPDATE NO ACTION ON DELETE NO ACTION,
	CONSTRAINT `professor_id` FOREIGN KEY (`professor_id`) REFERENCES `professor` (`id`) ON UPDATE NO ACTION ON DELETE NO ACTION
)