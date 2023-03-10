
CREATE TABLE `empresa`.`empleado` (
    `id` INT NOT NULL AUTO_INCREMENT , 
    `nombre` VARCHAR(50) NOT NULL , 
    `apellido` VARCHAR NOT NULL , 
    `salario` INT NOT NULL , PRIMARY KEY (`id`)
    ) ENGINE = InnoDB;

INSERT INTO `empleado` (`id`, `nombre`, `apellido`, `salario`) VALUES
(1,'Antonio', 'Luna', 2000),
(2,'Ana', 'Puertas', 2000),
(3,'Juan', 'Sevilla', 2000);
