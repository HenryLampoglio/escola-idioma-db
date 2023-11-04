CREATE TABLE `users` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`login` VARCHAR(200) NULL DEFAULT NULL,
	`date_created` DATETIME NULL DEFAULT current_timestamp(),
	`password` VARCHAR(200) NULL DEFAULT NULL,
	PRIMARY KEY (`id`)
)