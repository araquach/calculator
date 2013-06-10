CREATE TABLE `person` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`first_name` varchar(256) NOT NULL,
	`last_name` VARCHAR(256) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `staff` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`person_id` INT(11) NOT NULL,
	`staff_role_id` INT(11) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `staff_role` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`description` VARCHAR(256) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `service` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`description` VARCHAR(256) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `service_role_price` (
	`staff_role_id` INT(11) NOT NULL,
	`service_id` INT(11) NOT NULL,
	`price` DECIMAL(4,2),
	PRIMARY KEY (`staff_role_id`,`service_id`) 
) ENGINE=InnoDB;