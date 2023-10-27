CREATE TABLE `users` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`login` VARCHAR(200) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`date_created` DATETIME NULL DEFAULT current_timestamp(),
	`password` VARCHAR(200) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`auth_token` TEXT NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	PRIMARY KEY (`id`) USING BTREE
)