CREATE DATABASE upesejemplo;

USE upesejemplo;

CREATE TABLE `users`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50),
	`email` VARCHAR(100),
    `status` INT(1) DEFAULT 1,
    PRIMARY KEY (`id`)
);

INSERT INTO `users` (`name`, `email`) VALUES("Lorenzo", "ld201802@upes.edu.sv");
INSERT INTO `users` (`name`, `email`) VALUES("usuario", "usuario@ejemplo.com");