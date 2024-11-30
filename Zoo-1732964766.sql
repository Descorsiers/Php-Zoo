CREATE TABLE IF NOT EXISTS `Enclos` (
	`id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`name` varchar(255) NOT NULL,
	`description` varchar(255) NOT NULL,
	`created_at` datetime NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `Animal` (
	`id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`name` varchar(255) NOT NULL,
	`description` varchar(255) NOT NULL,
	`species` varchar(255) NOT NULL,
	`created_at` datetime NOT NULL,
	`id_enclos` int NOT NULL,
	PRIMARY KEY (`id`)
);


ALTER TABLE `Animal` ADD CONSTRAINT `Animal_fk5` FOREIGN KEY (`id_enclos`) REFERENCES `Enclos`(`id`);