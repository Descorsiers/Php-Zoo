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

-- Comment the line whose are under if there is a probleme with the import

INSERT INTO `enclos`(`name`, `description`, `created_at`) VALUES ('Enclos des lions',"Il s\'agit de l\'enclos qui contient les lions");

INSERT INTO `enclos`(`name`, `description`, `created_at`) VALUES ('Enclos des tigres',"Il s\'agit de l\'enclos qui contient les lions");

INSERT INTO `animal`(`name`, `description`, `species`,`id_enclos`) VALUES ('Tigrou','Tigre tout foufou','Tigre de Java','2');

INSERT INTO `animal`(`name`, `description`, `species`,`id_enclos`) VALUES ('Tigrette','Tigre toute fofole','Tigre de Java','2');

INSERT INTO `animal`(`name`, `description`, `species`,`id_enclos`) VALUES ('Simba','Le roi lion',"Lion d'afrique",'1');

INSERT INTO `animal`(`name`, `description`, `species`,`id_enclos`) VALUES ('Nala','Lionne du roi lion',"Lion d'afrique",'1');